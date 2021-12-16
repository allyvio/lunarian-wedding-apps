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
<div class="container-fluid">
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
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row mb-3">
                                <div class="col-3">Judul</div>
                                <div class="col-auto"> : </div>
                                <div class="col">{{$wedding->title}}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3">Slug</div>
                                <div class="col-auto"> : </div>
                                <div class="col">{{$wedding->slug}}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3">Deskripsi</div>
                                <div class="col-auto"> : </div>
                                <div class="col">{{$wedding->description}}</div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            @include('pages.wedding.forms.couple')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection