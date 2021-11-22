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

    public function codeChecker($wedding_id, $code)
    {
        return Invitation::where(['code', $code])->where(['wedding_id', $wedding_id])->first();
        // Rule::unique('invitations', 'code')->where(function ($query) use ($weddingId) {
        //     return $query->where('wedding_id', $weddingId);
        // });
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
        } else {
            $invitation->status = $status;
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
}
