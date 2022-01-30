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
        <table class="table align-items-center table-flush" id="datatable-wedding">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tgl Dibuat</th>
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
                    <td>
                        {{$wedding->created_at->format('d M Y H:i')}}
                    </td>
                    <td class="text-right">
                        <a href="{{route('admin.wedding.show',$wedding->slug)}}" class="btn btn-primary btn-sm">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script>
    var options = {
        keys: !0,
        order:[4,'desc'],
        select: {
            style: "multi",
        },
        language: {
            paginate: {
                previous: "<i class='fas fa-angle-left'>",
                next: "<i class='fas fa-angle-right'>",
            },
        },
    };

    // Init the datatable

    var table = $('#datatable-wedding')
        .on("init.dt", function() {
            $("div.dataTables_length select").removeClass(
                "custom-select custom-select-sm"
            );
        })
        .DataTable(options);
</script>
@endpush