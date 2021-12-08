<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeddingRequest;
use App\Models\Event;
use App\Models\Invitation;
use App\Models\Wedding;
use App\Rules\Slug;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WeddingController extends Controller
{
    private $themes = ['default'];

    public function index()
    {
        return view('pages.wedding.index');
    }

    public function create()
    {
        // return $step;
        return view('pages.wedding.create');
    }

    public function store(WeddingRequest $request)
    {
        $validated = $request->except(['calon_pria_photo', 'calon_wanita_photo']);
        $couplePhotos = $request->only(['calon_pria_photo', 'calon_wanita_photo']);

        /** Data form wizard tiap stage disimpan dalam SESSION WEDDING */
        // $wedding = $request->session()->forget('wedding');
        if (empty($request->session()->get('wedding'))) {
            $wedding = new Wedding();
            $wedding->fill($validated);
            $request->session()->put('wedding', $wedding);
        } else {
            $wedding = $request->session()->get('wedding');
            $wedding->fill($validated);
            $request->session()->put('wedding', $wedding);
        }

        /**
         * Save wedding setelah stage couple.
         * */
        if ($request->stage == 'couple') {
            $wedding->save();

            /** Update couple photos */
            if (!empty($couplePhotos))
                $this->updateCouplePhoto($request, $wedding);

            /** Create Event pertama kali */
            if ($wedding->events->count() == 0) {
                $date = Carbon::now()->addDays(14);
                $wedding->events()->create([
                    'title' => 'Resepsi',
                    'start_date' => $date,
                    'is_main' => true
                ]);
            }
            $wedding->refresh();
        }
        /** Menghapus SESSION WEDDING setelah stage terakhir */
        if ($request->stage == 'undefined') {
            // return EventController::show(12);
            // $request->session()->forget('wedding');
        }

        // return $request->session()->get('wedding');
        return response()->json([$request->stage => true]);
        // return $request;
    }

    public function show(Wedding $wedding, $code = null)
    {
        $main_event = $wedding->events->where('is_main', true)->first();
        $wedding->main_date = $main_event->datetime;
        $wedding->calon_wanita_photo = $wedding->calon_wanita_photo ?? 'bride-default.svg';
        $wedding->calon_pria_photo = $wedding->calon_pria_photo ?? 'groom-default.svg';
        $theme = $wedding->theme;
        if ($code) {
            // $wedding->load(['invitations' => function ($query) use ($invitation) {
            //     $query->where('code', '=', $invitation);
            // }]);
            $wedding->invitation = InvitationController::show($wedding->id, $code);
            if (!$wedding->invitation)
                return redirect()->route('wedding.page', $wedding)->with('error', 'Invitation not found');
        }
        // dd($wedding->invitation);
        return view('themes.' . $theme . '.index', compact('wedding'));
    }

    public function edit(Wedding $wedding)
    {
        //
    }

    public function update(Request $request, Wedding $wedding)
    {
        //
    }

    public function updateCouplePhoto(Request $request, Wedding $wedding)
    {
        if ($request->hasFile('calon_pria_photo')) {
            if ($wedding->calon_pria_photo)
                Storage::delete('public/couple/' . $wedding->calon_pria_photo);
            $file = $request->file('calon_pria_photo');
            $fullpath = $file->store('public/couple');
            $filename = pathinfo($fullpath)['basename'];
            $wedding->update([
                'calon_pria_photo' => $filename
            ]);
        } else {
            $wedding->update([
                'calon_pria_photo' => null
            ]);
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
        } else {
            $wedding->update([
                'calon_wanita_photo' => null
            ]);
        }
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
