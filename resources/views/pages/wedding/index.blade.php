@extends('layout.wrapper-dashboard-alt')

@section('dashboard-alt-content')
<style>

</style>
<div class="container px-lg-8">
    <div class="nav-wrapper pt-0">
        <ul class="nav nav-pills d-flex justify-content-between nav-pills-circle" id="tabs_2" role="tablist">
            <li class="nav-item text-center">
                <a class="nav-link rounded-circle mb-2 active" id="start-tab" data-toggle="tab" href="#tabs-1" role="tab" aria-controls="tabs-1" aria-selected="true">
                    <span class="nav-link-icon d-block"><i class="fa fa-pen"></i></span>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link rounded-circle mb-2" id="couple-tab" data-toggle="tab" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="fa fa-heart"></i></span>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link rounded-circle mb-2" id="event-tab" data-toggle="tab" href="#tabs-3" role="tab" aria-controls="tabs-3" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="fa fa-calendar"></i></span>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link rounded-circle mb-2" id="theme-tab" data-toggle="tab" href="#tabs-4" role="tab" aria-controls="tabs-4" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="fas fa-clone"></i></span>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link rounded-circle mb-2" id="publish-tab" data-toggle="tab" href="#tabs-5" role="tab" aria-controls="tabs-5" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="fas fa-share"></i></span>
                </a>
            </li>
        </ul>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-1" role="tabpanel" aria-labelledby="start-tab">
                    @include('pages.wedding.forms.start')
                </div>
                <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="couple-tab">
                    @include('pages.wedding.forms.couple')
                </div>
                <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="event-tab">
                    @include('pages.event.show')
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col">
            <button class="btn btn-icon btn-primary">
                <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                <span class="btn-inner--text">Kembali</span>
            </button>
        </div>
        <div class="col text-right">
            <button class="btn btn-icon btn-primary">
                <span class="btn-inner--text">Selanjutnya</span>
                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
            </button>
        </div>
    </div>
</div>
@endsection