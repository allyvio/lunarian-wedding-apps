@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-12 col-7">
                    <h6 class="h2 d-inline-block mb-0">Wedding</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('dashboard-content')
<div class="container p-0">
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link mb-2 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            </div>
        </div>
        <div class="col-9">
            <div class="card shadow">
                <div class="card-body">
                    <div class="tab-content" id="wedding-form-tabContent" data-wedding="{{$wedding->slug}}">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <form method="POST" action="{{route('wedding.update',':wedding')}}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="stage" value="start">
                                <div class="form-group">
                                    <label for="title" class="form-control-label">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $wedding->title}}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Deskripsi</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{old('description') ?? $wedding->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="form-control-label">Alamat Website</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <h4 class="text-muted m-0">digital-invitation.com/</h4>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug') ?? $wedding->slug}}">
                                        @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <form method="POST" action="{{route('wedding.update',':wedding')}}">
                                @csrf
                                @method('put')
                                <input type="hidden" name="stage" value="couple">
                                <div class="row mb-4">
                                    <div class="col-12 col-lg-6 text-center">
                                        <label class="mt-2" for="calon_pria_photo">Calon Pengantin Pria</label>
                                        <div class="input-preview" style="height: 250px;">
                                            <label for="calon_pria_photo" id="input-preview-label" class="input-preview-label" @if($wedding->calon_pria_photo) style="background-image: url('{{asset('storage/couple/'.$wedding->calon_pria_photo)}}');" @endif></label>
                                            <input class="form-control" type="file" name="calon_pria_photo" id="calon_pria_photo" accept="image/*" style="display: none;" />
                                        </div>
                                        <div class="text-left">
                                            <label class="form-control-label" for="calon_pria">Nama</label>
                                            <input type="text" class="form-control @error('calon_pria') is-invalid @enderror" id="calon_pria" name="calon_pria" value="{{old('calon_pria') ?? $wedding->calon_pria}}">
                                            @error('calon_pria')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 text-center">
                                        <label class="mt-2" for="calon_wanita_photo">Calon Pengantin Wanita</label>
                                        <div class="input-preview" style="height: 250px;">
                                            <label for="calon_wanita_photo" id="input-preview-label" class="input-preview-label" @if($wedding->calon_wanita_photo) style="background-image: url('{{asset('storage/couple/'.$wedding->calon_wanita_photo)}}');" @endif></label>
                                            <input class="form-control" type="file" name="calon_wanita_photo" id="calon_wanita_photo" accept="image/*" style="display: none;" />
                                        </div>
                                        <div class="text-left">
                                            <label class="form-control-label" for="calon_wanita">Nama</label>
                                            <input type="text" class="form-control @error('calon_wanita') is-invalid @enderror" id="calon_wanita" name="calon_wanita" value="{{old('calon_wanita') ?? $wedding->calon_wanita}}">
                                            @error('calon_wanita')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    var slug = $('#wedding-form-tabContent').data('wedding'),
        photo = $('.input-preview-label').find('img')
    $('form').on('submit', function(e) {
        e.preventDefault();
        $('.is-invalid').removeClass('is-invalid')
        $('.invalid-feedback').remove()
        var $form = $(this),
            action = $form.attr('action'),
            url = action.replace(':wedding', slug),
            btn_submit = $form.find('[type=submit]')
        $.ajax({
            method: 'put',
            url: url,
            data: $form.serialize(),
            beforeSend: function() {
                btn_submit.addClass('btn-progress')
            },
            success: function(res) {
                $.each(res, function(k, v) {
                    $form.find('input[name=' + k + ']').val(v)
                })
                if (res.slug)
                    slug = res.slug
                iziToast.success({
                    displayMode: 'replace',
                    title: 'Success',
                    message: 'Data berhasil diperbarui.',
                    position: 'topRight',
                });
            },
            error: function(res) {
                var errors = res.responseJSON.errors
                $.each(errors, function(k, v) {
                    $form.find('input[name=' + k + ']').addClass('is-invalid').after(`<div class="invalid-feedback">` + v + `</div>`)
                })
            },
            complete: function() {
                btn_submit.removeClass('btn-progress')
            }
        })
    })
    $('.input-preview>input[type="file"]').on('change', function(e) {
        var $this = $(this),
            file = this.files[0],
            fd = new FormData(),
            action = "{{route('wedding.update.photos',':wedding')}}",
            url = action.replace(":wedding", slug),
            img = $this.parent().find('.input-preview-label img')
        url = url.replace(':wedding', '{{$wedding->slug}}')
        if (file) {
            fd.append($this.attr('name'), file)
            $.ajax({
                url: url,
                type: 'post',
                data: fd,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $this.parent().find('.input-preview-label').addClass('loader')
                },
                complete: function() {
                    $this.parent().find('.input-preview-label').removeClass('loader')
                    $this.val('')
                },
                success: function(res) {
                    $this.parent().find('.input-preview-label').removeClass('loader')
                    $this.parent().find('.input-preview-label').css('background-image', 'url(' + res.photo + ')')
                    photoChecker()
                    iziToast.success({
                        displayMode: 'replace',
                        title: 'Success',
                        message: 'Foto berhasil diperbarui.',
                        position: 'topRight',
                    });
                },
                error: function() {
                    iziToast.error({
                        displayMode: 'replace',
                        title: 'Invalid',
                        message: 'Something errors occured.',
                        position: 'topRight',
                    });
                },
            })
        }
    })

    photoChecker()

    function photoChecker() {
        var preview = $('.input-preview').find('.input-preview-label')
        preview.each(function() {
            var photo = $(this).css('background-image')
            if (photo != 'none') {
                $(this).parents('.input-preview').prepend(`<div class="remove" onclick="removePhoto(this);">&#10005;</div>`)
            } else {
                $(this).parents('.input-preview').find(`.remove`).remove()
            }
        });
    }

    function removePhoto(elm) {
        var $this = $(elm),
            preview = $this.parent().find('.input-preview-label'),
            input = $this.parent().find('input[type=file]'),
            img = $this.parent().find('.input-preview-label img')
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal"
        }).then((res) => {
            if (res.value) {
                var action = "{{route('wedding.destroy.photos',':wedding')}}",
                    url = action.replace(":wedding", slug)
                $.ajax({
                    url: url,
                    method: 'delete',
                    data: {
                        column: input.attr('name'),
                    },
                    beforeSend: function() {
                        preview.addClass('loader')
                    },
                    complete: function() {
                        preview.removeClass('loader')
                    },
                    success: function(res) {
                        preview.css('background-image', '');
                        photoChecker()
                    }
                })
            }
        })
    }
</script>
@endpush