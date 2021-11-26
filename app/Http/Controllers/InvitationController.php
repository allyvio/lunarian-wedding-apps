<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Wedding;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InvitationController extends Controller
{
    public static function show($wedding_id, $code)
    {
        $invitation = Invitation::where('wedding_id', $wedding_id)->where('code', $code)->first();
        return $invitation;
    }
    public function store(Request $request)
    {
        $weddingId = $request->wedding_id;
        $request->validateWithBag('CreateInvitation', [
            'wedding_id' => ['required', 'exists:weddings,id'],
            'name' => ['required', 'string', 'between:2,30'],
            'email' => ['string', 'email', 'max:100', 'nullable'],
            'phone' => ['string', 'between:9,16', 'nullable'],
            'is_vip' => ['boolean', 'required'],
        ]);
        Invitation::create([
            'wedding_id' => $request->wedding_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_vip' => $request->is_vip
        ]);
    }

    public function rsvp(Wedding $wedding, $code, Request $request)
    {
        $invitation = $this->show($wedding->id, $code);
        $request->validate([
            'rsvp_confirm' => ['required', Rule::in(['ya', 'tidak', 'reset'])]
        ]);
        $status = $request->rsvp_confirm;
        if ($status === 'reset') {
            $invitation->status = null;
            $invitation->rsvp_at = null;
            $invitation->count = 0;
        } else {
            $invitation->status = $status;
            $invitation->count = 1;
            $invitation->rsvp_at = now();
        }
        $invitation->save();
        $wedding->invitation = $invitation;

        $theme = $wedding->theme;
        if ($request->ajax()) {
            $view = view('themes.' . $theme . '.components.rsvp.response', compact('wedding'))->render();
            return response()->json(['html' => $view]);
        }
        // return response()->json(['wedding' => $wedding, 'request' => $request->all()]);
    }

    public function count(Invitation $invitation, Request $request)
    {
        $request->validate([
            'rsvp_count' => ['required', 'integer', 'between:1,5']
        ]);
        $invitation->count = $request->rsvp_count;
        $invitation->save();
        if ($request->ajax()) {
            return response()->json(['count' => $invitation->count]);
        }
        // return $request->all();
    }
}
