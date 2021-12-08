<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Wedding;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index()
    {
        $wedding = session()->get('wedding')->id ?? 1; //Nanti diganti WHERE AUTH
        $events = Event::where('wedding_id', $wedding)
            ->get()->sortBy('datetime')->groupBy(function ($i) {
                return $i->date;
                // return date('l, d F Y', strtotime($i->date));
            });
        $events->wedding = $wedding;
        // dd($events);
        if (request()->ajax()) {
            $view = view('pages.event.show', compact('events'))->render();
            return response()->json(['html' => $view]);
        }
        return view('pages.event.index', compact('events'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'wedding_id' => ['required', 'exists:weddings,id'],
            'title' => ['required', 'string', 'between:4,30'],
            'description' => ['nullable', 'string', 'max:1000'],
            'start_date' => ['required', 'date:d-m-Y H:i'],
            'end_date' => ['nullable', 'date:d-m-Y H:i', 'after:start_date'],
            'location' => ['nullable', 'string', 'max:200'],
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, "errors" => $validator->getMessageBag()]);
        }
        $event = Event::create([
            'wedding_id' => $request->wedding_id,
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
        ]);
        return response()->json(['success' => true]);
    }

    public static function show(Event $event)
    {
        if (request()->ajax())
            return response()->json($event);
        return response()->json($event);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'between:4,30'],
            'description' => ['nullable', 'string', 'max:1000'],
            'start_date' => ['required', 'date:d-m-Y H:i'],
            'end_date' => ['nullable', 'date:d-m-Y H:i', 'after:start_date'],
            'location' => ['nullable', 'string','max:200'],
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, "errors" => $validator->getMessageBag()]);
        }
        $event->update([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
        ]);
        if ($request->has('is_main')) {
            $events = Event::where('wedding_id', $event->wedding_id)->update(['is_main' => false]);
            $event->refresh();
            $event->is_main = true;
            $event->save();
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
        $validator = Validator::make($request->all(), [
            'new_date' => ['required', 'date:d-m-Y'],
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, "errors" => $validator->getMessageBag()]);
        }
        $events = Event::where('wedding_id', $request->wedding)
            ->where(DB::raw("DATE_FORMAT(start_date,'%d-%m-%Y')"), $request->old_date)
            ->get();
        foreach ($events as $event) {
            $event->update([
                'start_date' => $request->new_date . ' ' . $event->start_date,
                'end_date' => $event->end_date ? $request->new_date . ' ' . $event->end_date : null,
            ]);
        }
        return response()->json(['success' => true, "event" => $request->all()]);
    }

    public function destroy(Event $event)
    {
        if ($event->is_main)
            return response()->json(['success' => false, "errors" => 'Acara utama tidak dapat dihapus.']);
        else {
            if ($event->delete())
                return response()->json(['success' => true, "event" => $event]);
        }
    }

    public function destroyByDate(Request $request)
    {
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
