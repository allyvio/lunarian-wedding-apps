<?php

namespace App\Http\Controllers;
use Auth;
use Socialite;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
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
        session()->forget('wedding');
        return redirect('/');
      }

    } catch (Exception $e) {

      Alert::error('Login Gagal!', 'Email sudah terdaftar');
      return redirect()->route('login');
      // dd($e->getMessage());
    }
  }
}
