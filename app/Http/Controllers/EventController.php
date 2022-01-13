<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index()
    {
        $wedding = Auth::user()->wedding->id;
        $events = Event::where('wedding_id', $wedding)->get();
        $events = $events->sortBy('datetime')->groupBy(function ($i) {
            return $i->date;
        });
        $events->wedding = $wedding;
        return view('pages.event.index', compact('events'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => ['required', 'string', 'between:4,30'],
            'description' => ['nullable', 'string', 'max:1000'],
            'start_date' => ['required', 'date:d-m-Y H:i'],
            'end_date' => ['nullable', 'date:d-m-Y H:i', 'after:start_date'],
            'location' => ['nullable', 'string', 'max:200'],
        ];
        if (!$request->session()->has('wedding')) {
            $rules += ['wedding_id' => ['required', 'exists:weddings,id']];
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, "errors" => $validator->getMessageBag()]);
        }
        if ($request->session()->has('wedding')) {
            $wedding = session()->get('wedding');
            $event = new Event([
                'title' => $request->title,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'location' => $request->location,
                'is_main' => false,
            ]);
            $id = $wedding->events->max('id');
            $event->id = $id + 1;
            $wedding->events->push($event);
        } else {
            $event = Event::create([
                'wedding_id' => $request->wedding_id,
                'title' => $request->title,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'location' => $request->location,
            ]);
        }
        return response()->json(['success' => true]);
    }

    public static function show($id)
    {
        if (session()->has('wedding'))
            $event = session()->get('wedding')->events->where('id', $id)->first();
        else
            $event = Event::findOrFail($id);
        if (request()->ajax())
            return response()->json($event);
        return response()->json($event);
    }
    public function showAll()
    {
        $wedding =  Auth::user()->wedding->id ?? session()->get('wedding');

        if (session()->has('wedding')) {
            $events = session()->get('wedding')->events;
        } else {
            $events = Event::where('wedding_id', $wedding)->get();
        }
        $events = $events->sortBy('datetime')->groupBy(function ($i) {
            return $i->date;
        });
        $events->wedding = $wedding;
        if (request()->ajax()) {
            $view = view('pages.event.show', compact('events'))->render();
            return response()->json(['html' => $view]);
        }
    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'between:4,30'],
            'description' => ['nullable', 'string', 'max:1000'],
            'start_date' => ['required', 'date:d-m-Y H:i'],
            'end_date' => ['nullable', 'date:d-m-Y H:i', 'after:start_date'],
            'location' => ['nullable', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, "errors" => $validator->getMessageBag()]);
        }

        if (session()->get('wedding')) {
            $event = session()->get('wedding')->events->where('id', $id)->first();
            $event->title = $request->title;
            $event->description = $request->description;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->location = $request->location;
        } else {
            $event = Event::findOrFail($id);
            $event->update([
                'title' => $request->title,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'location' => $request->location,
            ]);
        }
        if ($request->has('is_main')) {
            if (session()->has('wedding')) {
                $events = session()->get('wedding')->events;
                $event = $events->where('id', $id)->first();
                foreach ($events as $e) {
                    $e->is_main = false;
                }
                $event->is_main = true;
            } else {
                $events = Event::where('wedding_id', $event->wedding_id)->update(['is_main' => false]);
                $event->refresh();
                $event->is_main = true;
                $event->save();
            }
        }
        if (request()->ajax())
            return response()->json(['success' => true, "event" => $event]);
    }

    public function updateMainEvent(Request $request, $id)
    {
        return $request->all();
    }

    public function updateDate(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'new_date' => ['required', 'date:d-m-Y'],
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, "errors" => $validator->getMessageBag()]);
        }
        if (session()->has('wedding')) {
            $events = session()->get('wedding')->events->where('date', $request->old_date)->all();
            foreach ($events as $e) {
                $e->start_date = $request->new_date . ' ' . $e->start_date;
                $e->end_date = $e->end_date ? $request->new_date . ' ' . $e->end_date : null;
            }
        } else {
            $events = Event::where('wedding_id', $request->wedding)
                ->where(DB::raw("DATE_FORMAT(start_date,'%d-%m-%Y')"), $request->old_date)
                ->get();
            foreach ($events as $event) {
                $event->update([
                    'start_date' => $request->new_date . ' ' . $event->start_date,
                    'end_date' => $event->end_date ? $request->new_date . ' ' . $event->end_date : null,
                ]);
            }
        }

        return response()->json(['success' => true, "event" => $events, $request->all()]);
    }

    public function destroy($id)
    {

        if (session()->get('wedding'))
            $event = session()->get('wedding')->events->where('id', $id)->first();
        else
            $event = Event::findOrFail($id);
        if ($event->is_main)
            return response()->json(['success' => false, "errors" => 'Acara utama tidak dapat dihapus.', $event]);
        else {
            if (session()->get('wedding')) {
                $events = session()->get('wedding')->events;
                $key = $events->search(function ($value, $key) use ($id) {
                    return $value->id == $id;
                });
                $events->forget($key);
            } else {
                $event->delete();
            }
            return response()->json(['success' => true]);
        }
    }

    public function destroyByDate(Request $request)
    {
        if (session()->has('wedding')) {
            $events = session()->get('wedding')->events->where('is_main', true)->where('date', $request->date)->all();
            if (empty($events)) {
                $keys = session()->get('wedding')->events->where('date', $request->date)->keys();
                foreach ($keys as $key) {
                    session()->get('wedding')->events->forget($key);
                }
                return response()->json(['success' => true, 'events' => $keys]);
            } else
                return response()->json(['success' => false, "errors" => 'Acara utama tidak dapat dihapus.']);
        } else {
            $events = Event::where('wedding_id', $request->wedding)
                ->where('is_main', true)
                ->where(DB::raw("DATE_FORMAT(start_date,'%d-%m-%Y')"), $request->date)
                ->get();
            if ($events->isEmpty()) {
                Event::where(DB::raw("DATE_FORMAT(start_date,'%d-%m-%Y')"), $request->date)->delete();
                return response()->json(['success' => true, 'events' => $events]);
            } else
                return response()->json(['success' => false, "errors" => 'Acara utama tidak dapat dihapus.']);
        }
    }
}
