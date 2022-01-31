<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Auth::user()->wedding->stories;
        return view('pages.story.index', compact('stories'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'between:3,40'],
            'subtitle' => ['nullable', 'string', 'between:3,25'],
            'content' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, "errors" => $validator->getMessageBag()]);
        }
        $wedding = Auth::user()->wedding->id;
        Story::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'wedding_id' => $wedding
        ]);
        Alert::success('Berhasil', 'Cerita berhasil ditambahkan.');
        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'between:3,40'],
            'subtitle' => ['nullable', 'string', 'between:3,25'],
            'content' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, "errors" => $validator->getMessageBag()]);
        }
        $story = Story::findOrFail($id);
        $story->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content
        ]);
        Alert::success('Berhasil', 'Cerita berhasil diperbarui.');
        return response()->json(['success' => true]);
    }

    public function show($id)
    {
        $story = Story::findOrFail($id);
        return $story;
    }
    public function destroy($id)
    {
        $story = Story::findOrFail($id);
        $story->delete();
        Alert::success('Berhasil', 'Cerita berhasil dihapus.');
        return response()->json($story);
    }
}
