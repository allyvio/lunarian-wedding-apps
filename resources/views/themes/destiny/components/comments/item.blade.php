@foreach($wedding->comments->where('is_show',true)->sortByDesc('created_at') as $comment)
<div class="comment-item mb-3">
    <h2 class="heavy normal mb-5"><b>{{$comment->invitation->name}}</b></h2>
    <div class="mb-1" style="color: grey;">{!! nl2br(e($comment->message)) !!}</div>
    <div style="font-size: 9pt;color: #aaa;font-family: sans-serif;">{{$comment->created_at->diffForHumans()}}
        @if($wedding->invitation && $comment->invitation_id == $wedding->invitation->id)
        <button class="btn-link" onclick="removeComment(this)" data-remove="{{route('comment.delete',$comment->id)}}" style="color: #d43f3a;">hapus</button>
        @endif
    </div>
</div>
@endforeach