@extends('layout.wrapper-dashboard')
@section('dashboard-header')
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-12 col-md-6">
                    <a href="{{route('admin.wedding.index')}}" class="btn btn-outline-primary btn-sm border-0 align-bottom"><i class="fa fa-arrow-left"></i></a>
                    <h6 class="h2 d-inline-block mb-0">Detail Wedding</h6>
                </div>
                <div class="col-12 col-md-6 text-md-right">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.wedding.index')}}">Data Wedding</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Wedding</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('dashboard-content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-7 mb-3 mb-sm-0">
                <div class="h1 card-title mb-0">{{$wedding->title}}</div>
                <div class="text-muted small mb-3">dimiliki oleh <a href="">{{$wedding->user->name}}</a></div>
                <a class="btn btn-icon btn-outline-primary btn-sm" href="{{route('wedding.page',$wedding->slug)}}" target="_blank">
                    <span class="btn-inner--icon"><i class="ni ni-world"></i></span>
                    <span class="btn-inner--text">{{request()->getHttpHost().'/'.$wedding->slug}}</span>
                </a>
                @switch($wedding->status)
                @case('pending')
                <div class="dropdown">
                    <a href="#" class="text-warning small dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-clock"></i> {{$wedding->status}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('update-status').submit();">
                            <span>Publish</span>
                            <form id="update-status" action="{{ route('admin.wedding.update.status',$wedding->slug) }}" method="POST" class="d-none">
                                @csrf
                                <input type="hidden" name="status" value="publish">
                            </form>
                        </a>
                    </div>
                </div>
                @break
                @case('publish')
                <div class="dropdown">
                    <a href="#" class="text-success small dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-check"></i> {{$wedding->status}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('update-status').submit();">
                            <span>Pending</span>
                            <form id="update-status" action="{{ route('admin.wedding.update.status',$wedding->slug) }}" method="POST" class="d-none">
                                @csrf
                                <input type="hidden" name="status" value="pending">
                            </form>
                        </a>
                    </div>
                </div>
                @break
                @endswitch
            </div>
            <div class="col-12 col-sm-5">
                <div class="card bg-gradient-success shadow">
                    <div class="card-body p-2 px-3">
                        <div class="row">
                            <div class="col">
                                <div class="icon icon-shape bg-gradient-white text-success rounded-circle shadow"><i class="ni ni-box-2"></i></div>
                            </div>
                            <div class="col-auto">
                                <h5 class="card-title text-uppercase text-right text-secondary mb-0">Paket</h5>
                                <span class="h2 font-weight-bold text-white mb-0">{{$wedding->package->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="mb-0">Rangkaian Acara</h3>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach($wedding->events as $event)
            <div class="col-md-6">
                <div class="card bg-secondary shadow-none">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <h4>{{$event->title}} {!! $event->is_main ? '<span class="badge badge-success badge-pill align-top"><i class="fa fa-star"></i> Utama</span>' : ''!!}</h4>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-outline-default btn-sm" type="button" onclick="adminEditEvent(this)" data-event="{{$event->id}}">Ubah</button>
                            </div>
                        </div>
                        <div class="">
                            <div class="mb-2 small"><i class="far fa-clock fa-fw mr-2"></i> {{$event->start_date}} - {{$event->end_date ? $event->end_date : 'selesai'}}</div>
                        </div>
                        <div class="">
                            @if(filter_var($event->location, FILTER_VALIDATE_URL))
                            <div class="mb-3 small"><i class="fa fa-map-marker-alt fa-fw mr-2"></i> Lokasi Google Maps</div>
                            <iframe src="{{$event->location}}" width="100%" height="300" frameborder="0"></iframe>
                            @else
                            <small class="time"><i class="fa fa-map-marker-alt fa-fw mr-2"></i> {!!$event->location ?? 'not set'!!}</small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@push('modals')
<div class="modal fade" id="modal-admin-event-form" tabindex="-1" role="dialog" aria-labelledby="modal-admin-event-form" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Acara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="event-form">
                    <label class="custom-toggle custom-toggle-success mr-2 mb-3">
                        <input type="checkbox" id="is_main" name="is_main">
                        <span class="custom-toggle-slider rounded-circle"></span>
                    </label>
                    <label class="form-control-label align-top" for="is_main">Acara Utama</label>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Nama Acara</label>
                                <input name="title" id="title" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label">Mulai</label>
                                        <input type="hidden" id="date">
                                        <input class="form-control" placeholder="Start date" id="start_date" name="start_date" type="time" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label">Berakhir</label>
                                        <input class="form-control" placeholder="End date" id="end_date" name="end_date" type="time">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-label">Lokasi</label>
                        <input name="location" id="location" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-label">Deskripsi</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-white" class="close" data-dismiss="modal" aria-label="Close">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endpush
@push('scripts')
<script>
    var admin_event_form_modal = $('#modal-admin-event-form')

    function adminEditEvent(elm) {
        Swal.fire({
            allowOutsideClick: false,
            title: 'Memuat data',
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
            }
        });
        var $form = admin_event_form_modal.find('form'),
            form_action = "{{ route('event.update', ':event')}}",
            event = $(elm).data('event'),
            url = "{{ route('event.show', ':event')}}";

        url = url.replace(':event', event);
        form_action = form_action.replace(':event', event);
        $form.prop('action', form_action); // set event id on modal form

        // Populate evennt data
        $.get(url, function(data) {
            $.each(data, function(k, v) {
                if (k == 'is_main')
                    $form.find('#' + k).prop('checked', v);
                else $form.find('#' + k).val(v);
            })
        }).then(f => {
            Swal.close()
            admin_event_form_modal.modal('show')
        })
    }
    $('#modal-admin-event-form').find('form').on('submit', function(e) {
        e.preventDefault();
        var $form = $(this),
            url = $form.attr('action'),
            btn_submit = $form.find('[type="submit"]'),
            start_date = $('#start_date')
        $.ajax({
            url: url,
            method: 'put',
            data: {
                is_main: $('#is_main:checked').val(),
                title: $form.find('#title').val(),
                description: $form.find('#description').val(),
                start_date: $form.find('#date').val() + " " + $form.find('#start_date').val(),
                end_date: $form.find('#end_date').val() ? $form.find('#date').val() + " " + $form.find('#end_date').val() : null,
                location: $form.find('#location').val(),
            },
            beforeSend: function() {
                btn_submit.addClass('btn-progress disabled')
                $('.is-invalid').removeClass('is-invalid')
                $('.invalid-feedback').remove()
            },
            complete: function(e) {
                var response = e.responseJSON
                btn_submit.removeClass('btn-progress disabled')
                if (response.success) {
                    location.reload()
                } else
                    $.each(response.errors, function(k, v) {
                        $form.find('#' + k).addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
                    })
            }
        })
    });
</script>
@endpush