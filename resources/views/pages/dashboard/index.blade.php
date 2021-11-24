@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="py-4">
                <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
            </div>
        </div>
    </div>
</div>
@endsection
@section('dashboard-content')
<div class="row">
    @include('argon.dashboard.componens.overview')
    @include('argon.dashboard.componens.performance')
</div>
@endsection