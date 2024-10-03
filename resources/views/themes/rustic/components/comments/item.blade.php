@if($wedding->comments->where('is_show',true)->count() == 0)
<div class="description-rsvp">
    <p>Belum ada Ucapan.</p>
</div>
@else
<div class="comment-list">
    @foreach($wedding->comments->where('is_show',true)->sortByDesc('created_at') as $comment)
    <div class="comment-item ">
        <div>
            <img src="{{asset('img/digiart-2.png')}}" alt="">
        </div>
        <div class="message tri-right left-in">
            <a class="name">{{strtok($comment->invitation->name, " ")}}</a>
            <span class="icon">
                <i class="fas fa-check-circle" style="font-size: 1em"></i>
            </span>
            @if($wedding->invitation && $comment->invitation_id == $wedding->invitation->id)
            <a class="remove" onclick="removeComment(this)" data-remove="{{route('comment.delete',$comment->id)}}">
                <i class="fas fa-trash" style="font-size: 1em"></i>
            </a>
            @endif
            <div class="pesan" style="color: grey;">{!! nl2br(e($comment->message)) !!}</div>
        </div>
    </div>
    @endforeach
</div>
@endif