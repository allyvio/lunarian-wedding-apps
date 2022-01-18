<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;

class PackageController extends Controller
{
    public function showAll()
    {
        $packages = Package::all();
        if (request()->ajax()) {
            $view = view('pages.package.forms.package', compact('packages'))->render();
            return response()->json(['html' => $view]);
        }
        return $packages;
    }

    public function index()
    {
      $package = Package::get();
      return view('pages.package.indexAdmin', compact('package'));
    }

    public function store(Request $request)
    {
      $new_package = new Package;
      $new_package->name = $request->name;
      $new_package->count_invitation = $request->count_invitation;
      $new_package->price = $request->price;
      $new_package->value = $request->value;
      $new_package->count_galleri = $request->count_galleri;
      $new_package->save();
      Alert::success('Berhasil', 'Data Package Berhasil Di Tambahkan');
      return response()->json('Berhasil');
    }

    public function show($id)
    {
      $package = Package::find($id);
      return response()->json($package);
    }

    public function update(Request $request)
    {
      \Validator::make($request->all(),
      [
        'name' => 'required',
        'count_invitation' => 'required',
        'price' => 'required',
        'value' => 'required',
        'count_galleri' => 'required',
      ]
      )->validate();

      $package = Package::find($request->id);
      $package->name = $request->name;
      $package->count_invitation = $request->count_invitation;
      $package->price = $request->price;
      $package->value = $request->value;
      $package->count_galleri = $request->count_galleri;
      $package->save();
      Alert::success('Berhasil', 'Data Package Berhasil Di Edit');
      return response()->json($package);
    }

    public function delete($id)
    {
        $invitation = Package::findOrFail($id);
        $invitation->delete();
        Alert::success('Berhasil', 'Data Package Berhasil Di Hapus');
        return response()->json();
    }
}
