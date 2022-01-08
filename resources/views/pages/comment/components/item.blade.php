<div class="media media-comment">
    <div class="avatar avatar-lg media-comment-avatar rounded-circle bg-gradient-info"><i class="fa fa-comment fa-lg"></i></div>
    <div class="media-body">
        <div class="media-comment-text">
            <h6 class="h4 mt-0">{{$comment->invitation->name}} <span class="text-muted small">&#8226; {{$comment->created_at->format('d M Y H:i:s')}} @if(!$comment->is_show) <i class="fa fa-eye-slash ml-2"></i> @endif</span></h6>
            <p class="text-sm lh-160">{!! nl2br(e($comment->message)) !!}</p>
            <div class="icon-actions">
                @if($comment->is_show)
                <a href="javascript:void(0);" onclick="updateComment(this)" data-show="0" data-url="{{route('comment.update',$comment->id)}}" class="text-muted"><i class="fa fa-eye-slash"></i> Sembunyikan</a>
                @else
                <a href="javascript:void(0);" onclick="updateComment(this)" data-show="1" data-url="{{route('comment.update',$comment->id)}}" class="text-success"><i class="fa fa-share"></i> Tampilkan</a>
                @endif
                <a href="javascript:void(0);" class=" text-danger" onclick="deleteComment(this)" data-url="{{route('comment.delete',$comment->id)}}"><i class="fa fa-trash"></i> Hapus</a>
            </div>
        </div>
    </div>
</div>