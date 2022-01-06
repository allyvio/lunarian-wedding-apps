@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-12 col-7">
                    <h6 class="h2 d-inline-block mb-0">Cerita</h6>
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
        <div class="row">
            <div class="col-6">
                <h3 class="mb-0">Daftar Cerita</h3>
            </div>
            <div class="col-6 text-right">
                <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon">
                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                    <span class="btn-inner--text">Tambah</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Light table -->
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th>Judul</th>
                    <th>Sub Judul</th>
                    <th>Product</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-user">
                        <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                        <b>John Michael</b>
                    </td>
                    <td>
                        <span class="text-muted">10/09/2018</span>
                    </td>
                    <td>
                        <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                    </td>
                    <td class="table-actions">
                        <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection