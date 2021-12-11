@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-12 col-7">
                    <h6 class="h2 d-inline-block mb-0">Rangkaian Acara</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('dashboard-content')
<div class="container p-0">
    <div class="card">
        <div class="card-body" id="events-container">@include('pages.event.show')</div>
    </div>
</div>
@endsection