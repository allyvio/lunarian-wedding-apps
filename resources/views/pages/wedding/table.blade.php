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
<div class="card">
    <!-- Card header -->
    <div class="card-header border-0">
        <h3 class="mb-0">Data Wedding</h3>
    </div>
    <!-- Light table -->
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($weddings as $wedding)
                <tr>
                    <th scope="row">
                        <div class="">{{$wedding->user->name}}</div>
                    </th>
                    <td>
                        <a target="_blank" href="{{route('wedding.page',$wedding->slug)}}">{{$wedding->slug}} <i class="fa fa-external-link-alt fa-sm"></i></a>
                    </td>
                    <td>
                        {{$wedding->theme}}
                    </td>
                    <td>
                        {{$wedding->package->name}}
                    </td>
                    <td>
                        @switch($wedding->status)
                        @case('pending')
                        <div class="badge badge-warning badge-pill">{{$wedding->status}}</div>
                        @break
                        @case('publish')
                        <div class="badge badge-success badge-pill">{{$wedding->status}}</div>
                        @break
                        @endswitch
                    </td>
                    <td class="text-right">
                        <a href="{{route('admin.wedding.show',$wedding->slug)}}" class="btn btn-primary btn-sm">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Card footer -->
    <!-- <div class="card-footer py-4">
        <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                        <i class="fas fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="fas fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div> -->
</div>
@endsection