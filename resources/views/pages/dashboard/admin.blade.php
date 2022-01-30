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
        </div>
    </div>
</div>
@endsection
@section('dashboard-content')
<div class="card-deck flex-column flex-xl-row">
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <!-- Title -->
                    <h5 class="h3 mb-0">Wedding Terbaru</h5>
                    <!-- Surtitle -->
                    <h6 class="surtitle">Status Pending</h6>
                </div>
                <div class="col-4 text-right">
                    <a href="{{route('admin.wedding.index')}}" class="btn btn-sm btn-neutral">Lihat semua</a>
                </div>
            </div>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
                @if($latestWedding->count() == 0)
                <div class="text-center my-3">
                    <img src="{{asset('img/icons/paid.png')}}" alt="" style="width: 50%;">
                    <h4 class="mt-3">Semua Wedding sudah di publish</h4>
                </div>
                @else
                @foreach($latestWedding as $wedding)
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="mb-0 text-primary"><a href="{{route('admin.wedding.show',$wedding->slug)}}">{{$wedding->title}}</a></h4>
                            <small>{{$wedding->created_at->format('d M Y')}}</small>
                        </div>
                        <div class="col text-right">
                            <h5>Paket {{$wedding->package->name}}</h5>
                        </div>
                    </div>
                </li>
                @endforeach
                @endif
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="h3 mb-0">Statistik Paket</h5>
        </div>
        <div class="card-body">
            <div class="chart">
                <canvas id="chart-package-container" class="chart-canvas"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var $chart_package_container = $('#chart-package-container')
    if ($chart_package_container.length)
        (function() {
            const weddings_count = [],
                package_label = []
            $.get("{{route('admin.package.statistic')}}").done(function(f) {
                if (f.length == 0)
                    $chart_package_container.parent().html('<h4>belum ada paket yang digunakan</h4>')
                $.each(f, function(k, v) {
                    weddings_count.push(v.weddings_count)
                    package_label.push(v.name)
                })
                new Chart($chart_package_container, {
                    type: "pie",
                    data: {
                        labels: package_label,
                        datasets: [{
                            data: weddings_count,
                            backgroundColor: [
                                Charts.colors.theme["danger"],
                                Charts.colors.theme["warning"],
                                Charts.colors.theme["success"],
                            ],
                            label: "Dataset 1",
                        }, ],
                    },
                    options: {
                        responsive: true,
                        legend: {
                            position: "top",
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true,
                        },
                    },
                });
            })
            return weddings_count
        })()
</script>
@endpush