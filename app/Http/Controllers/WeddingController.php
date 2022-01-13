<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeddingRequest;
use App\Models\Event;
use App\Models\Wedding;
use App\Models\Music;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WeddingController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:customer')->only(['index']);
    }
    public function index()
    {
        $wedding = Auth::user()->wedding;
        return view('pages.wedding.index', compact('wedding'));
    }

    public function create()
    {
        if (auth()->check() && auth()->user()->wedding)
            return redirect()->route('dashboard');
        return view('pages.wedding.create');
    }

    public function store(WeddingRequest $request)
    {
        $validated = $request->except(['calon_pria_photo', 'calon_wanita_photo']);
        $couplePhotos = $request->only(['calon_pria_photo', 'calon_wanita_photo']);

        /** Data form wizard tiap stage disimpan dalam SESSION WEDDING */
        if (empty($request->session()->get('wedding'))) {
            $wedding = new Wedding();
            $wedding->fill($validated);
            $request->session()->put('wedding', $wedding);
        } else {
            $wedding = $request->session()->get('wedding');
            $wedding->fill($validated);
            $request->session()->put('wedding', $wedding);
        }

        /** Save wedding pada stage couple. */
        if ($request->stage == 'couple') {
            if ($wedding->calon_pria_photo)
                Storage::delete('public/couple/' . $wedding->calon_pria_photo);
            if ($request->hasFile('calon_pria_photo')) {
                $file = $request->file('calon_pria_photo');
                $fullpath = $file->store('public/couple');
                $filename = pathinfo($fullpath)['basename'];
                $wedding->calon_pria_photo = $filename;
            } else {
                $wedding->calon_pria_photo = null;
            }
            if ($wedding->calon_wanita_photo)
                Storage::delete('public/couple/' . $wedding->calon_wanita_photo);
            if ($request->hasFile('calon_wanita_photo')) {
                $file = $request->file('calon_wanita_photo');
                $fullpath = $file->store('public/couple');
                $filename = pathinfo($fullpath)['basename'];
                $wedding->calon_wanita_photo = $filename;
            } else {
                $wedding->calon_wanita_photo = null;
            }
        }
        /** Menghapus SESSION WEDDING setelah stage terakhir */
        if ($request->stage == 'theme') {

            /** Create Event pertama kali */
            if ($wedding->events->count() == 0) {
                $date = Carbon::now()->addDays(14);
                $wedding->events[0] = new Event([
                    'title' => 'Resepsi',
                    'is_main' => true,
                    'start_date' => $date,
                    'end_date' => null,
                    'location' => null,
                    'description' => null,
                ]);
                $wedding->events[0]->id = 0;
            }
            $wedding->refresh();
            $events = $wedding->events->sortBy('datetime')->groupBy(function ($i) {
                return $i->date;
            });
            $events->wedding = $wedding;
            $view = view('pages.event.show', compact('events'))->render();
            return response()->json(['html' => $view]);
        }
        if ($request->stage == 'event') {
            return response()->json(['status' => 'success', 'stage' => $request->stage]);
        }
        if ($request->stage == 'package') {
            return response()->json(['status' => 'success', 'stage' => $request->stage]);
        }
        return $wedding;
    }

    public function storeDB()
    {
        if (!Auth::user()->wedding && session()->has('wedding')) {
            $wedding = session()->get('wedding');
            $wedding->user_id = auth()->user()->id;
            $wedding->save();
            $new_arr = [];
            $prepareEvents = $wedding->events;
            foreach ($prepareEvents as $prep) {
                $new_arr[] = [
                    'title' => $prep->title,
                    'description' => $prep->description,
                    'start_date' => $prep->date . ' ' . $prep->start_date,
                    'end_date' => $prep->end_date ? $prep->date . ' ' . $prep->end_date : null,
                    'location' => $prep->location,
                    'is_main' => $prep->is_main,
                ];
            }
            $wedding->events()->createMany($new_arr);
        }
        session()->forget('wedding');
        return view('pages.landing.index');
    }

    public function showPublic(Wedding $wedding, $code = null)
    {
        $wedding->events = $wedding->events->sortBy('datetime');
        $main_event = $wedding->events->where('is_main', true)->first();
        $wedding->main_date = $main_event->datetime;
        $wedding->calon_wanita_photo = $wedding->calon_wanita_photo ?? 'bride-default.svg';
        $wedding->calon_pria_photo = $wedding->calon_pria_photo ?? 'groom-default.svg';
        $theme = $wedding->theme;
        if ($code) {
            $wedding->invitation = InvitationController::show($wedding->id, $code);
            if (!$wedding->invitation)
                return redirect()->route('wedding.page', $wedding)->with('error', 'Invitation not found');
        }

        return view('themes.' . $theme . '.index', compact('wedding'));
    }
    public function show(Wedding $wedding)
    {
        return view('pages.wedding.show',compact('wedding'));
    }
    public function table()
    {
        $weddings = Wedding::with(['user:id,name', 'package:id,name'])->get();
        return view('pages.wedding.table', compact('weddings'));
    }

    public function edit(Wedding $wedding)
    {
        //
    }

    public function update(WeddingRequest $request, Wedding $wedding)
    {
        $wedding->update($request->validated());
        // $this->updateCouplePhoto($request, $wedding);
        return $request->validated();
    }

    public function updateCouplePhoto(Request $request, Wedding $wedding)
    {
        // return $request->all();
        if ($request->hasFile('calon_pria_photo')) {
            if ($wedding->calon_pria_photo)
                Storage::delete('public/couple/' . $wedding->calon_pria_photo);
            $file = $request->file('calon_pria_photo');
            $fullpath = $file->store('public/couple');
            $filename = pathinfo($fullpath)['basename'];
            $wedding->update([
                'calon_pria_photo' => $filename
            ]);
            return response()->json(['photo' => asset('storage/couple/' . $filename)]);
        }
        if ($request->hasFile('calon_wanita_photo')) {
            if ($wedding->calon_wanita_photo)
                Storage::delete('public/couple/' . $wedding->calon_wanita_photo);
            $file = $request->file('calon_wanita_photo');
            $fullpath = $file->store('public/couple');
            $filename = pathinfo($fullpath)['basename'];
            $wedding->update([
                'calon_wanita_photo' => $filename
            ]);
            return response()->json(['photo' => asset('storage/couple/' . $filename)]);
        }
    }
    public function destroyCouplePhoto(Request $request, Wedding $wedding)
    {
        $filename = $wedding[$request->column];
        Storage::delete('public/couple/' . $filename);
        $wedding->update([
            $request->column => null
        ]);
        return $wedding;
    }
    public function updateTheme(Request $request, Wedding $wedding)
    {
        $request->validate([
            'theme' => ['required', 'in:default,destiny,ourlove']
        ]);
        $wedding->update([
            'theme' => $request->theme
        ]);
    }

    public function destroy(Wedding $wedding)
    {
        //
    }
}
