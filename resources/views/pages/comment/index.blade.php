@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-12 col-7">
                    <h6 class="h2 d-inline-block mb-0">Komentar</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('dashboard-content')
<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Daftar Komentar</h3>
    </div>
    <div class="card-body pt-0" id="comments-container">
        @foreach($comments as $comment)
        @include('pages.comment.components.item')
        @endforeach
    </div>
</div>
@endsection
@push('scripts')
<script>
    function updateComment(elm) {
        var url = $(elm).data('url'),
            data = $(elm).data('show')
        $.post(url, {
            is_show: data
        }, function(res) {
            $(elm).parents('.media-comment').replaceWith(res.html)
            $('[data-toggle="tooltip"]').tooltip()
        })
    }

    function deleteComment(elm) {
        $.ajax({
            url: $(elm).data('url'),
            method: 'delete',
            success: function(res) {
                if (res)
                    $(elm).parents('.media-comment').remove()
            }
        })
    }
</script>
@endpush