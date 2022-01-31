@extends('layout.wrapper-dashboard-alt')

@section('dashboard-alt-content')
<div class="container px-lg-8">
    <div class="card shadow">
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-paket" role="tabpanel" aria-labelledby="paket-tab" data-stage="paket">
                    @include('pages.package.forms.package')
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col">
            <button class="btn btn-icon btn-secondary" id="prev-step">
                <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                <span class="btn-inner--text">Kembali</span>
            </button>
        </div>
        <div class="col text-right">
            <button class="btn btn-icon btn-primary" id="next-step">
                <span class="btn-inner--text">Selanjutnya</span>
                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
            </button>
        </div>
    </div>
</div>
@endsection
