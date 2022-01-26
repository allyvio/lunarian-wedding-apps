@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-12 col-7">
                    <h6 class="h2 d-inline-block mb-0">Cerita</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('dashboard-content')
<div class="card">
    <!-- Card header -->
    <div class="card-header border-0">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-0">Daftar Cerita</h3>
            </div>
            <div class="col-6 text-right">
                <button role="button" data-toggle="modal" data-target="#modal-story-create" class="btn btn-sm btn-brown btn-round btn-icon">
                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                    <span class="btn-inner--text">Tambah</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Light table -->
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th>Judul</th>
                    <th>Sub Judul</th>
                    <th>Konten</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($stories as $story)
                <tr>
                    <td><b class="text-sm">{{$story->title}}</b></td>
                    <td>
                        <span class="text-muted">{{$story->subtitle}}</span>
                    </td>
                    <td style="max-width: 200px;">
                        <div class="text-truncate">{{$story->content}}</div>
                    </td>
                    <td class="table-actions text-right">
                        <button role="button" class="btn btn-icon btn-outline-primary btn-sm" data-toggle="tooltip" title="Ubah Data" data-url="{{route('story.show',$story->id)}}" data-story="{{$story->id}}" onclick="editStory(this)">
                            <span class="btn-inner--icon"><i class="fas fa-pen"></i></span>
                        </button>
                        <button role="button" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="tooltip" title="Hapus Data" data-url="{{route('story.delete',$story->id)}}" onclick="deleteStory(this)">
                            <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('modals')
@include('pages.story.modals.story-create-form')
@include('pages.story.modals.story-form')
@endpush
@push('scripts')
<script type="text/javascript">
    var story_create_modal = $('#modal-story-create'),
        story_form_modal = $('#modal-story-form')
    story_create_modal.find('form').on('submit', function(e) {
        e.preventDefault()
        $('.is-invalid').removeClass('is-invalid')
        $('.invalid-feedback').remove()
        var $form = $(this),
            action = $form.attr('action'),
            btn_submit = $form.find('[type="submit"]'),
            formdata = $form.serialize()
        $.ajax({
            url: action,
            method: 'post',
            data: formdata,
            beforeSend: function() {
                btn_submit.addClass('btn-progress disabled')
                Swal.fire({
                    title: 'Data sedang diproses',
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
            },
            complete: function(e) {
                var response = e.responseJSON
                setTimeout(function() {
                    Swal.close()
                    btn_submit.removeClass('btn-progress disabled')
                    if (response.success) {
                        location.reload();
                    } else
                        $.each(response.errors, function(k, v) {
                            $form.find('#' + k).addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
                        })
                }, 300)
            }
        })

    })

    function deleteStory(elm) {
        var url = $(elm).data('url')
        Swal.fire({
            title: "Apa kamu yakin?",
            text: "Anda tidak akan dapat memulihkan cerita ini!",
            showCancelButton: true,
            icon: "warning",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Data sedang diproses',
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                            }
                        });
                    },
                    success: function() {
                        location.reload();
                    },
                    complete: function() {
                        Swal.close()
                    }
                })
            }
        })
    }

    function editStory(elm) {
        Swal.fire({
            allowOutsideClick: false,
            title: 'Memuat data',
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
            }
        });
        var url = $(elm).data('url'),
            story = $(elm).data('story'),
            $form = story_form_modal.find('form'),
            form_action = $form.attr('action')

        form_action = form_action.replace(':story', story);
        $form.prop('action', form_action);
        $.get(url, function(res) {
            $.each(res, function(k, v) {
                $form.find('#' + k).val(v);
            })
        }).then(f => {
            Swal.close()
            story_form_modal.modal('show')
        })
    }
    story_form_modal.find('form').on('submit', function(e) {
        e.preventDefault()
        $('.is-invalid').removeClass('is-invalid')
        $('.invalid-feedback').remove()
        var $form = $(this),
            action = $form.attr('action'),
            btn_submit = $form.find('[type="submit"]'),
            formdata = $form.serialize()
        $.ajax({
            url: action,
            data: formdata,
            method:'put',
            beforeSend: function() {
                btn_submit.addClass('btn-progress disabled')
                Swal.fire({
                    title: 'Data sedang diproses',
                    allowOutsideClick: false,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
            },
            complete: function(e) {
                var response = e.responseJSON
                setTimeout(function() {
                    Swal.close()
                    btn_submit.removeClass('btn-progress disabled')
                    if (response.success) {
                        location.reload();
                    } else
                        $.each(response.errors, function(k, v) {
                            $form.find('#' + k).addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
                        })
                }, 300)
            }
        })
    })
</script>
@endpush