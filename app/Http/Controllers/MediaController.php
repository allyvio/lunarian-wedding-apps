<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Package;
use App\Models\Wedding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function store(Request $request)
    {
        $wedding = Wedding::findOrFail($request->wedding_id);
        $media_count = $wedding->medias()->where('type', $request->type)->count() + 1;
        $limit = '';
        switch ($request->type) {
            case 'gallery':
                $limit = $wedding->package->count_galleri;
                break;
        }
        if ($media_count <= $limit) {
            $request->validate([
                'wedding_id' => ['required', 'exists:weddings,id'],
                'type' => ['required', 'in:gallery,hero,quote'],
                'file' => ['required', 'image']
            ]);
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fullpath = $file->store('public/media');
                $filename = pathinfo($fullpath)['basename'];
                $media = Media::create([
                    'wedding_id' => $request->wedding_id,
                    'type' => $request->type,
                    'filename' => $filename
                ]);
            }
            return response()->json(['status' => 'success', 'media' => route('media.destroy', $media->id)]);
        }
        return response('Gallery melebihi batas. Batas maksimum ' . $limit . '.', 400);
    }

    public function destroy(Media $media)
    {
        $filename = $media->filename;
        Storage::delete('public/media/' . $filename);
        $media->delete();
        return $media;
    }
}
