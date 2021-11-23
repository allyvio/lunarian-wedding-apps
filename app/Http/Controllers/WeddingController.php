<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Invitation;
use App\Models\Wedding;
use App\Rules\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WeddingController extends Controller
{
    private $themes = ['default'];

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => ['required', 'string', 'between:4,20', 'alpha_dash', 'unique:weddings,slug', new Slug],
            'title' => ['required', 'string', 'between:4,20'],
            'description' => ['nullable', 'string'],
            'calon_pria' => ['required', 'string', 'between:2,30'],
            'calon_wanita' => ['required', 'string', 'between:2,30'],
            'calon_pria_photo' => ['nullable', 'file', 'image', 'max:5120'],
            'calon_wanita_photo' => ['nullable', 'file', 'image', 'max:5120'],
            // 'theme' => ['required', Rule::in($this->themes)]
        ]);

        $wedding = Wedding::create([
            'slug' => strtolower($request['slug']),
            'title' => $request['title'],
            'description' => $request['description'],
            'calon_pria' => $request['calon_pria'],
            'calon_wanita' => $request['calon_wanita'],
            // 'theme' => $request['theme'],
        ]);

        // $wedding->events()->createMany([
        //     'wedding_id' => $wedding->id,
        //     'title' => 'Akad Nikah',
        //     'description' => $request->event_desc,
        //     'date' => $request->date,
        //     'start' => 
        //     'end' => 
        //     'location' => 
        // ]);
    }

    public function show(Wedding $wedding, $code = null)
    {
        $main_event = $wedding->events->where('is_main', true)->first();
        $wedding->main_date = $main_event->start_date;
        $wedding->calon_wanita_photo = $wedding->calon_wanita_photo ?? 'bride-default.svg';
        $wedding->calon_pria_photo = $wedding->calon_pria_photo ?? 'groom-default.svg';
        $theme = $wedding->theme;
        if ($code) {
            // $wedding->load(['invitations' => function ($query) use ($invitation) {
            //     $query->where('code', '=', $invitation);
            // }]);
            $wedding->invitation = InvitationController::show($wedding->id, $code);
            if (!$wedding->invitation)
                return redirect()->route('wedding.page', $wedding)->with('error', 'Invitation is invalid');
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

    public function updateCouplePhoto($request, Wedding $wedding)
    {
        // $uuid = Str::uuid();
        // if ($request->hasFile('calon_pria_photo')) {
        //     $file = $request->file('calon_pria_photo');
        //     $path = $uuid;
        //     $filename = 'groom.' . $file->getClientOriginalExtension();

        //     if ($file->storeAs('public/couple/' . $path, $filename)) {
        //         $wedding->update([
        //             'calon_pria_photo' => $path . '/' . $filename
        //         ]);
        //     }
        // }
        // if ($request->hasFile('calon_wanita_photo')) {
        //     $file = $request->file('calon_wanita_photo');
        //     $path = $uuid;
        //     $filename = 'bride.' . $file->getClientOriginalExtension();

        //     if ($file->storeAs('public/couple/' . $path, $filename)) {
        //         $wedding->update([
        //             'calon_wanita_photo' => $path . '/' . $filename
        //         ]);
        //     }
        // }
    }

    public function destroy(Wedding $wedding)
    {
        //
    }
}
