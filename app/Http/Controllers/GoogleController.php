<?php

namespace App\Http\Controllers;
use Auth;
use Socialite;
use Exception;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use App\Models\Music;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
  public function redirect()
  {
    return Socialite::driver('google')->redirect();
  }

  public function callback()
  {

    try {

      $user = Socialite::driver('google')->user();

      $finduser = User::where('google_id', $user->id)->first();

      if($finduser){

        Auth::login($finduser);
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
        $music = Music::where('music_tema', 'basic')->get();
        foreach ($music as $key => $value) {
          if ($key == 0) {
            DB::table('weddingmusic')->insert([
              'wedding_id' => $wedding->id,
              'music_id' => $value->id,
              'status' => 1
            ]);
          } else {
            DB::table('weddingmusic')->insert([
              'wedding_id' => $wedding->id,
              'music_id' => $value->id,
              'status' => 0
            ]);
          }

        }
        // dd($wedding);
        session()->forget('wedding');
        return redirect('/');

      }else{
        $newUser = User::create([
          'name' => $user->name,
          'email' => $user->email,
          'google_id'=> $user->id,
          'password' => bcrypt('rahasia'),
          'role' => 'customer'
        ]);

        Auth::login($newUser);
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
        $music = Music::where('music_tema', 'basic')->get();
        foreach ($music as $key => $value) {
          if ($key == 0) {
            DB::table('weddingmusic')->insert([
              'wedding_id' => $wedding->id,
              'music_id' => $value->id,
              'status' => 1
            ]);
          } else {
            DB::table('weddingmusic')->insert([
              'wedding_id' => $wedding->id,
              'music_id' => $value->id,
              'status' => 0
            ]);
          }

        }
        // dd($wedding);
        session()->forget('wedding');
        return redirect('/');
      }

    } catch (Exception $e) {
      // dd($e);
      Alert::error('Login Gagal!', 'Email sudah terdaftar');
      return redirect()->route('login');
      // dd($e->getMessage());
    }
  }
}
