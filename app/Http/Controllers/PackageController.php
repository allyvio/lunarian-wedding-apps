<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

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
}
