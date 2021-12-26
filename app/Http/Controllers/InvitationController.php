<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Wedding;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Validator;
use Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class InvitationController extends Controller
{
    public function index()
    {
        $wedding = Auth::user()->wedding;
        $invitations = $wedding->invitations;
        return view('pages.invitation.index', compact('wedding','invitations'));
    }

    public function addInvitation(Request $request)
    {
        \Validator::make($request->all(),
        [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|between:10,12'
        ]
        )->validate();

        $packet = Wedding::where('user_id', Auth::user()->id)->first()->package_id;
		$limit = Package::findOrFail($packet)->count;
        $count_invitation = Invitation::where('wedding_id', Auth::user()->id)->get();
        if (count($count_invitation) < $limit) {
            $invitation = new Invitation;
            $invitation->code = Str::random(6);
            $invitation->wedding_id = Wedding::where('user_id', Auth::user()->id)->first()->id;
            $invitation->name = $request->name;
            $invitation->email = $request->email;
            $invitation->phone = $request->phone;
            $invitation->save();
            Alert::success('Berhasil', 'Data Undangan Berhasil Di Tambahkan');
            return response()->json('Berhasil');
        }else{
            Alert::error('Gagal', 'Undangan Melebihi Batas');
            return response()->json('Berhasil');
        }
    }

    public function getInvitationById($id)
    {
        $invitation = Invitation::find($id);
        return response()->json($invitation);
    }

    public function updateInvitation(Request $request)
    {
        \Validator::make($request->all(),
        [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|between:10,12'
        ]
        )->validate();

        $invitation = Invitation::find($request->id);
        $invitation->name = $request->name;
        $invitation->email = $request->email;
        $invitation->phone = $request->phone;
        $invitation->save();
        Alert::success('Berhasil', 'Data Undangan Berhasil Di Edit');
        return response()->json($invitation);
    }

    public function deleteInvitation($id)
    {
        $invitation = Invitation::findOrFail($id);
        $invitation->delete();
        Alert::success('Berhasil', 'Data Undangan Berhasil Di Hapus');
        return response()->json();
    }

    public function store(Request $request)
    {   
        $packet = Wedding::where('user_id', Auth::user()->id)->first()->package_id; 
        $limit = Package::findOrFail($packet)->count;
        $count_invitation = Invitation::where('wedding_id', Auth::user()->id)->get();
        $invitation = $request->file('field');
        $row = -1;
        if (($handle = fopen($invitation, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;
            }
        fclose($handle);
        }
        if (count($count_invitation) < $limit) {
            if ($row <= $limit) {
                if (count($count_invitation) == 0) {
                    (new UsersImport)->import($invitation);
                    Alert::success('Berhasil', 'Data Undangan Berhasil Di Tambah');
                    return back();
                } else{
                    Alert::error('Gagal', 'Kosongkan Data Undangan Terlebih Dahulu!');
                    return back();
                }
                
            } else {
                Alert::error('Gagal', 'Undangan Melebihi Batas');
                return back();
            }

        } else {
            Alert::error('Gagal', 'Undangan Melebihi Batas');
            return back();
        }
    }

    public function download()
    {
        try {
            return Storage::disk('local')->download('public/csv/digital_invitation.csv');
            return back();
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Coba Lagi');
            return back();
        }
    }

    public static function show($wedding_id, $code)
    {
        $invitation = Invitation::where('wedding_id', $wedding_id)->where('code', $code)->first();
        return $invitation;
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
    }
}
