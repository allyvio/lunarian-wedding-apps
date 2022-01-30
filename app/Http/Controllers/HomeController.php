<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Wedding;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('customer')) {
            $wedding = $request->user()->wedding;
            return view('pages.dashboard.customer', compact('wedding'));
        }
        if ($request->user()->hasRole('admin')) {
            $latestWedding = Wedding::where('status','pending')->with('package')->latest()->take(5)->get();
            return view('pages.dashboard.admin',compact('latestWedding'));
        }
    }
}
