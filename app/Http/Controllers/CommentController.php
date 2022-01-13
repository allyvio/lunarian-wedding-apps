<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Auth::user()->wedding->comments()->with('invitation')->get()->sortByDesc('created_at');
        return view('pages.comment.index',compact('comments'));
    }

    public function store(Request $request, Invitation $invitation)
    {
        $request->validate([
            'message' => ['required', 'string', 'max:200']
        ]);
        $comment = Comments::create([
            'message' => $request->message,
            'invitation_id' => $invitation->id
        ]);
        $wedding = $invitation->wedding;
        $wedding->invitation = $invitation;
        $theme = $wedding->theme;
        if ($request->ajax()) {
            $view = view('themes.' . $theme . '.components.comments.item', compact('wedding'))->render();
            return response()->json(['html' => $view]);
        }
        return $invitation;
    }
    public function update(Request $request, Comments $comment)
    {
        $comment->is_show = $request->is_show;
        $comment->save();
        if ($request->ajax()) {
            $view = view('pages.comment.components.item', compact('comment'))->render();
            return response()->json(['html' => $view]);
        }
        return $comment;
    }
    public function destroy(Comments $comment)
    {
        return $comment->delete();
    }
}
