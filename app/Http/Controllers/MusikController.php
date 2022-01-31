<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use\App\Models\Music;
use\App\Models\Wedding;
use\App\Models\weddingmusic;
use Storage;
use File;
use DB;
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
        // dd($musics);
        $music = DB::table('weddingmusic')->where('wedding_id', Auth::user()->wedding->id)->get();
        return view('pages.music.index',compact('music','musics'));
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
        // $new_music->music_tema = "basic";//ganti
        $new_music->music_tema = "premium";
        $music = $request->file('musik');

        if ($music) {
            $music_path1 = $music->store('music','public');
            $new_music->music = $music_path1;
        }
        $new_music->save();
        //dbtable weddingmusic insert
        DB::table('weddingmusic')->insert([
          'wedding_id' => Auth::user()->wedding->id,
          'music_id' => $new_music->id,
          'status' => 0
        ]);
        return back();
    }

    public function deleteMusik($id)
    {
    //   dd($id);
        $music_id = DB::table('weddingmusic')->where('id', $id)->value('music_id');
        $music = Music::findOrFail($music_id);
        // dd($music);
  		Storage::delete('public/'.$music->music);
  		// hapus data
        $music->delete();
        DB::table('weddingmusic')->where('music_id', $id)->delete();
        Alert::success('Berhasil', 'Data Musik Berhasil Di Hapus');
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
        DB::table('weddingmusic')->where('status', 1)->where('wedding_id', Auth::user()->wedding->id)->update([
            'status' => 0
        ]);
        DB::table('weddingmusic')->where('id', $id)->update([
            'status' => 1
        ]);

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

    public function indexAdmin()
    {
      $music = Music::where('music_tema','basic')->get();
      return view('pages.music.indexAdmin', compact('music'));
    }

    public function storeAdmin(Request $request)
    {
      $new_music = new Music;
      $new_music->music_tema = "basic";
      $music = $request->file('musik');

      if ($music) {
          $music_path1 = $music->store('music','public');
          $new_music->music = $music_path1;
      }
      $new_music->save();
      return back();
    }

    public function deleteAdmin($id)
    {
        // dd($id);
        $music = Music::findOrFail($id);
        // dd($music);
  		Storage::delete('public/'.$music->music);
  		// hapus data
        $music->delete();
        Alert::success('Berhasil', 'Data Musik Berhasil Di Hapus');
        return response()->json();
    }
}
