@extends('layout.wrapper-dashboard')
@section('dashboard-header')
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 d-inline-block mb-0">Beranda</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                </div>
            </div>
            @if(Auth::user()->wedding->status === 'pending')
            <div class="alert alert-danger bg-gradient-red show mb-4" role="alert">
                <div class="row">
                    <div class="col-auto pr-0"><span class="alert-icon m-0"><i class="fa fa-exclamation-circle"></i></span></div>
                    <div class="col">
                        <h3 class="text-white">Notifikasi</h3>
                        <span class="alert-text">Saat ini status weddingmu sedang <span class="text-uppercase font-weight-bold">{{$wedding->status}}</span>.
                            <br> Lihat detail tagihanmu <a href="#modal-invoice-detail" data-toggle="modal" class="text-white text-underline">disini</a>, apabila sudah menyelesaikan transaksi <a href="https://api.whatsapp.com/send?phone=6281359598007" target="_blank" class="text-white text-underline"> hubungi kontak layanan</a>.</span>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
@section('dashboard-content')
<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header" style="background: linear-gradient(rgba(148, 104, 99, 0.2),rgba(148, 104, 99, 0.8)), url({{asset('img/theme/wedding-thumbnail.jpg')}});">
                <!-- <img class="card-img" src="{{asset('img/theme/wedding-thumbnail.jpg')}}" alt="Card image"> -->
                <h4 class="text-white mb-0">{{$wedding->title}}</h4>
                <span class="display-4 text-neutral">{{strtok($wedding->calon_wanita," ")}} </span>
                <span class="display-4 text-neutral"> & </span>
                <span class="display-4 text-neutral">{{strtok($wedding->calon_pria," ")}}</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Acara Utama</h5>
                        <div class="h2 font-weight-bold">{{$wedding->events->where('is_main', true)->first()->title}}</div>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-default text-white rounded-circle shadow">
                            <i class="ni ni-calendar-grid-58"></i>
                        </div>
                    </div>
                </div>
                <hr class="mt-2 mb-3">
                <p class="mt-2 mb-1 h4">
                    <span class="font-weight-normal">{{date('d F Y H:i',strtotime($wedding->events->where('is_main', true)->first()->datetime))}}</span>
                </p>
                <div class="countdown h1"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Butuh Bantuan?</h4>
            </div>
            <ul class="list-group list-group-flush">
                <a href="" class="list-group-item text-sm px-4 text-brown"><i class="fa fa-life-ring mr-2"></i> Kontak Layanan</a>
                <a href="" class="list-group-item text-sm px-4 text-brown"><i class="fa fa-book mr-2"></i> Panduan Pengguna</a>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="mb-0">Rangkaian Acara</h4>
            </div>
            <div class="card-body pt-0">
                <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                    @foreach($wedding->events->sortBy('datetime')->groupBy(function ($i) {return $i->date;}) as $date =>$events)
                    <div class="timeline-block my-2">
                        <span class="timeline-step bg-gradient-default text-white">
                            <i class="ni ni-bell-55"></i>
                        </span>
                        <div class="timeline-content">
                            <h4 class="text-muted font-weight-bold">{{date('d F Y',strtotime($date))}}</h4>
                            @foreach($events as $event)
                            <div class="bg-secondary rounded p-3 mt-2">
                                <h5 class="mb-0">{{$event->title}}</h5>
                                <div class="text-sm font-weight-normal mt-1 mb-0">
                                    <i class="far fa-clock mr-2"></i>{{$event->start_date}} - {{$event->end_date ? $event->end_date : 'selesai'}}
                                </div>
                                <div class="text-sm font-weight-normal mb-0">
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <i class="ni ni-square-pin mr-2"></i>
                                        </div>
                                        <div class="col pl-0">
                                            @if(filter_var($event->location, FILTER_VALIDATE_URL))
                                            Lokasi Google Maps <br>
                                            <iframe class="mt-2" src="{{$event->location}}" width="100%" height="100" frameborder="0"></iframe>
                                            @else
                                            {{$event->location ?? 'not set'}}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('pages.invoice.modals.invoice-detail')
@endpush
@push('scripts')
<script src="{{asset('assets/themes/rustic/js/jquery.countdown.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.countdown').countdown("{{$wedding->events->where('is_main', true)->first()->datetime}}", function(event) {
            $(this).html(event.strftime('%D %H %M %S'));
            $(this).html(event.strftime(`<div class="row">
                        <div class="col">%D <div class="h4 m-0">Hari</div></div>
                        <div class="col">%H <div class="h4 m-0">Jam</div></div>
                        <div class="col">%M <div class="h4 m-0">Menit</div></div>
                        <div class="col">%S <div class="h4 m-0">Detik</div></div>
                    </div>`));
        });
    });
</script>
@endpush