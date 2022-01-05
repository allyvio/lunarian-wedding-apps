<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Wedding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'wedding_id' => ['required', 'exists:weddings,id'],
            'media_type' => ['required', 'in:gallery,hero,quote'],
            'file' => ['required', 'image']
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fullpath = $file->store('public/media');
            $filename = pathinfo($fullpath)['basename'];
            $media = Media::create([
                'wedding_id' => $request->wedding_id,
                'media_type' => $request->media_type,
                'filename' => $filename
            ]);
        }
        return response()->json(['status' => 'success', 'media' => route('media.destroy', $media->id)]);
    }

    public function destroy(Media $media)
    {
        $filename = $media->filename;
        Storage::delete('public/' . $media->media_type . '/' . $filename);
        $media->delete();
        return $media;
    }
}
