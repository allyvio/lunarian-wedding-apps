@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 d-inline-block mb-0">Musik</h6>
          <!-- <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Musik</li>
            </ol>
          </nav> -->
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
      <button type="button" class="btn btn-outline-brown btn-sm" data-toggle="modal" data-target="#MusikModal">
        <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
        <span class="btn-inner--text">Tambah</span>
      </button>
    </div>
  </div>
  <!-- Modal Tambah Lagu -->
  <div class="modal fade" id="MusikModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Musik</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="musik" action="{{route('add-music.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="custom-file">
              <label for="musik">PILIH FILE</label>
              <input type="file" id="musik" name="musik" class="form-control" required>
              <!-- <label for="field">PILIH FILE</label>
              <input type="file" id="field" name="field" class="form-control" required> -->
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-brown">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Light table -->
  <div class="table-responsive">
    <table class="table table-flush" id="datatable-basic">
      <thead class="thead-light">
        <tr>
          <th style="text-align:center;">Musik</th>
          <th>Status</th>
          <th>music tema</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
         @foreach($music as $data)
        <tr>
          <td style="text-align:center;">
            <audio src="{{asset('storage/'.DB::table('music')->where('id', $data->music_id)->value('music'))}}" controls></audio>
          </td>
          <td>
            @if($data->status == 0)
            <span class="badge badge-lg badge-danger">Tidak</span>
            @else
            <span class="badge badge-lg badge-success">Aktif</span>
            @endif
          </td>
          <td>
            {{DB::table('music')->where('id', $data->music_id)->value('music_tema')}}
          </td>
          <td>
            @if($data->status == 0)
              <a href="{{url('dashboard/music-update', $data->id)}}" type="button" class="btn btn-outline-brown btn-sm">
                <span class="btn-inner--text">Gunakan</span>
              </a>
              @php
              $music_tema = DB::table('music')->where('id', $data->music_id)->value('music_tema');
              @endphp
              @if($music_tema == 'premium')
                <a href="javascript:void(0)" onclick="deleteMusik({{$data->id}})" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus">
                    <i class="fas fa-trash"></i>
                </a>
              @endif
            @endif
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
  //import Musik
  $('#musik').validate({
      rules: {
        musik: {
          required: true,
          extension: "mp3|webm"
        }
      },
      messages:{
        musik:{
          required: "File Tidak Boleh Kosong",
          extension: "Masukkan File mp3 atau webm"
        }
      }
    });
    //Delete musik
  function deleteMusik(id) {
    Swal.fire({
      title: "Apa kamu yakin?",
      text: "Anda tidak akan dapat memulihkan data undangan ini! Ya, hapus!",
      showCancelButton: true,
      icon: "warning",
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Hapus!",
      cancelButtonText: "Batal"
    }).then((result) => {
      if (result.isConfirmed) {
        var url = '{{route("music.delete",":id")}}'
        url = url.replace(':id', id)
        $.ajax({
          url: url,
          type: 'GET',
          beforeSend: function() {
            Swal.fire({
              title: 'Data sedang diproses',
              timerProgressBar: true,
              didOpen: () => {
                Swal.showLoading()
              }
            });
          },
          success: function(response) {
            location.reload();
          }
        })
      }
    })
  }
  </script>
@endpush
