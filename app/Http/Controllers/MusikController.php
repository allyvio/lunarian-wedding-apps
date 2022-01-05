<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use\App\Models\Music;
use\App\Models\Wedding;
use Storage;
use File;
use RealRashid\SweetAlert\Facades\Alert;
class MusikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::get();
        $wedding = Auth::user()->wedding;
        $music = $wedding->music;
        return view('pages.music.index', compact('wedding','music','musics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_music = new Music;
        $new_music->wedding_id = Wedding::where('user_id', Auth::user()->id)->first()->id;
        $new_music->status = 0;
        $music = $request->file('musik');
        
        if ($music) {
            $music_path1 = $music->store('music','public');
            $new_music->music = $music_path1;
        }
        $new_music->save();
        return back();
    }

    public function deleteMusik($id)
    {
        // hapus file
		$music = Music::where('id',$id)->first();
        // dd($music);
		Storage::delete('public/music/'.$music);
 
		// hapus data
		Music::where('id',$id)->delete();
        Alert::success('Berhasil', 'Data Undangan Berhasil Di Hapus');
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $musik = Music::find($id);
        // return response()->json($musik);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        Music::where('status', 1)->where('wedding_id', Auth::user()->id)->update([
            'status' => 0
        ]);
        $musik = Music::findOrFail($id);
        $musik->status = 1;
        $musik->save();
        Alert::success('Berhasil', 'Musik Berhasil Digunakan');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
