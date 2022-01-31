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
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link mb-2 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Umum</a>
            <a class="nav-link mb-2" id="v-pills-hero-tab" data-toggle="pill" href="#v-pills-hero" role="tab" aria-controls="v-pills-hero" aria-selected="false">Hero</a>
            <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pasangan</a>
            <a class="nav-link mb-2" id="v-pills-quote-tab" data-toggle="pill" href="#v-pills-quote" role="tab" aria-controls="v-pills-quote" aria-selected="false">Quote</a>
            <a class="nav-link mb-2" id="v-pills-gallery-tab" data-toggle="pill" href="#v-pills-gallery" role="tab" aria-controls="v-pills-gallery" aria-selected="false">Gallery</a>
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
                                <button type="submit" class="btn btn-brown">Simpan</button>
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
                                <button type="submit" class="btn btn-brown">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-quote" role="tabpanel" aria-labelledby="v-pills-quote-tab">
                        <form method="POST" action="{{route('wedding.update',':wedding')}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="hidden" name="stage" value="quote">
                                <label class="form-control-label">Quote</label>
                                <textarea class="form-control @error('quote') is-invalid @enderror" name="quote" id="quote" style="display: none;">{!!$wedding->quote!!}</textarea>
                                <div id="quill-container">{!!$wedding->quote!!}</div>
                                @error('quote')
                                <span class="invalid-feedback" role="alert">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <button type="button" id="clear-quill-content" class="btn btn-danger">Clear</button>
                                <button type="submit" class="btn btn-brown">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-gallery" role="tabpanel" aria-labelledby="v-pills-gallery-tab">
                        <h4>Gallery</h4>
                        <div class="dropzone dropzone-media" id="dropzone-gallery" data-dropzone-url="{{route('media.store')}}" data-wedding="{{$wedding->id}}" data-media-type="gallery">
                            <div class="fallback">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple>
                                    <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                </div>
                            </div>
                            <div class="gallery mt-4">
                                <div class="dz-preview dz-preview-multiple">
                                    <div class="gallery-item">
                                        <img data-dz-thumbnail>
                                        <div class="transparent-box">
                                            <div class="remove btn btn-icon btn-white text-danger btn-sm px-3 py-2 m-2 float-right" onclick="removeGalleryItem(this)">
                                                <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($wedding->gallery->sortByDesc('created_at') as $gallery)
                                <div class="gallery-item">
                                    <img src="{{asset('storage/media/'.$gallery->filename)}}" alt="">
                                    <div class="transparent-box">
                                        <div class="btn btn-icon btn-white text-danger btn-sm px-3 py-2 m-2 float-right" onclick="removeGalleryItem(this)" data-item-remove="{{route('media.destroy',$gallery->id)}}">
                                            <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                        </div>
                                        <div class="caption">{{$gallery->created_at}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-hero" role="tabpanel" aria-labelledby="v-pills-hero-tab">
                        <h4>Hero</h4>
                        <div class="dropzone dropzone-media" id="dropzone-hero" data-dropzone-url="{{route('media.store')}}" data-wedding="{{$wedding->id}}" data-media-type="hero">
                            <div class="fallback">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple>
                                    <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                </div>
                            </div>
                            <div class="gallery mt-4">
                                @foreach($wedding->hero->sortByDesc('created_at') as $hero)
                                <div class="gallery-item">
                                    <img src="{{asset('storage/media/'.$hero->filename)}}" alt="">
                                    <div class="transparent-box">
                                        <div class="btn btn-icon btn-white text-danger btn-sm px-3 py-2 m-2 float-right" onclick="removeGalleryItem(this)" data-item-remove="{{route('media.destroy',$hero->id)}}">
                                            <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="dz-preview dz-preview-multiple">
                                    <div class="gallery-item">
                                        <img data-dz-thumbnail>
                                        <div class="transparent-box">
                                            <div class="remove btn btn-icon btn-white text-danger btn-sm px-3 py-2 m-2 float-right" onclick="removeGalleryItem(this)">
                                                <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    var toolbarOptions = [
        [{
            'size': ['small', false, 'large', 'huge']
        }], // custom dropdown
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],
        [{
            'script': 'sub'
        }, {
            'script': 'super'
        }], // superscript/subscript
        [{
            'direction': 'rtl'
        }], // text direction

        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],

        [{
            'color': []
        }, {
            'background': []
        }], // dropdown with defaults from theme
        [{
            'align': []
        }],

        ['clean'] // remove formatting button
    ];

    var quill = new Quill('#quill-container', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });
    $('#clear-quill-content').click(function() {
        var element = document.getElementsByClassName('ql-editor');
        element[0].innerHTML = ""
    })
    quill.on('text-change', function(delta, oldDelta, source) {
        if (source == 'user') {
            quill.getText().trim().length === 0 ?
                $('#quote').text('') :
                $('#quote').text($('.ql-editor').html())
        }
    });

    Dropzone.autoDiscover = false;
    var $dropzone = $('.dropzone-media'),
        $preview = $('.dz-preview')

    function init($this) {
        var preview = $this.find($preview),
            options = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: $this.data('dropzone-url'),
                thumbnailWidth: null,
                thumbnailHeight: null,
                previewsContainer: preview.get(0),
                previewTemplate: preview.html(),
                acceptedFiles: 'image/*',
                dictInvalidFileType: "Upload bukti kegiatan dalam format gambar.",
                init: function() {
                    this.on('addedfile', function(file) {
                        preview.prepend($(file.previewElement));
                    });
                    this.on("error", function(file, response) {
                        file.previewElement.classList.add("dz-error");
                        $this.find('.dz-error-message').text(response);
                        this.removeFile(file);
                        Swal.fire('File Ditolak', response, 'error');
                    });
                    this.on("sending", function(file, xhr, formData) {
                        formData.append("type", $this.data('media-type'));
                        formData.append("wedding_id", $this.data('wedding'));
                    });
                    this.on("success", file => {
                        if (file.xhr.response) {
                            let response = JSON.parse(file.xhr.response),
                                previewElm = $(file.previewElement)
                            previewElm.find('.remove').data('item-remove', response.media);
                        }
                    });
                }
            }

        preview.html('');
        $this.dropzone(options)
    }
    $dropzone.each(function() {
        init($(this));
    });
    function removeGalleryItem(elm) {
        var $this = $(elm),
            url = $this.data('item-remove')
        $.ajax({
            method: 'delete',
            url: url,
            beforeSend: function() {
                $this.parents('.gallery-item').addClass('loader')
            },
            success: res => {
                $this.parents('.gallery-item').remove()
            },
            complete: function() {
                $this.parents('.gallery-item').removeClass('loader')
            },
        })
    }
</script>
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
                    $form.find('[name=' + k + ']').addClass('is-invalid').after(`<div class="invalid-feedback">` + v + `</div>`)
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