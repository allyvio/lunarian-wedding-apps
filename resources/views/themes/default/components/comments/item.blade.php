@if($wedding->comments->where('is_show',true)->count() == 0)
<div class="text-center">Belum ada ucapan.</div>
@else
@foreach($wedding->comments->where('is_show',true)->sortByDesc('created_at') as $comment)
<div class="de_testi comment-item">
    <h4 class="mb0"><b>{{$comment->invitation->name}}</b></h4>
    <div style="color: grey;">{!! nl2br(e($comment->message)) !!}</div>
    <div style="font-size: 9pt;color: #aaa;font-family: sans-serif;">{{$comment->created_at->diffForHumans()}}
        @if($wedding->invitation && $comment->invitation_id == $wedding->invitation->id)
        <button class="btn-link" onclick="removeComment(this)" data-remove="{{route('comment.delete',$comment->id)}}" style="color: #d43f3a;">hapus</button>
        @endif
    </div>
</div>
@endforeach
@endif