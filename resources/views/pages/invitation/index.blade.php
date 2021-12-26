@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 d-inline-block mb-0">Undangan</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Undangan</li>
            </ol>
          </nav>
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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#invitationModal">
          <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
          <span class="btn-inner--text">Tambah</span>
        </button>
        <button type="button" class="btn btn-outline-default btn-sm"data-toggle="modal" data-target="#ImportModal">
          <span class="btn-inner--icon"><i class="fas fa-file-import"></i></span>
          <span class="btn-inner--text">Import</span>
        </button>
        <a href="{{route('download.file')}}"class="btn btn-default" data-toggle="tooltip" data-original-title="Unduh File CSV"><i class="fas fa-print"></i></a>
    </div>
  </div>
  <!-- Modal Import -->
  <div class="modal fade" id="ImportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Undangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="invitationImport" action="{{route('import.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="custom-file">
              <!-- <input type="file" class="custom-file-input" id="customFileLang" lang="en">
              <label class="custom-file-label" for="customFileLang">Masukkan File Excel</label> -->
              <label for="field">PILIH FILE</label>
              <input type="file" id="field" name="field" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Import</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal add Invitation-->
  <div class="modal fade" id="invitationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Undangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="invitationForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Nama</label>
              <input name="name" type="text" class="form-control" placeholder="Nama" id="name">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Email</label>
              <input name="email" type="email" class="form-control" placeholder="Example@gmail.com" id="email">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Phone</label>
              <input name="phone" type="number" class="form-control" placeholder="08xxxxxxx" id="phone">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Edit Invitation -->
  <div class="modal fade" id="invitationEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Undangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="invitationEditForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Nama</label>
              <input name="name" type="text" class="form-control" placeholder="Nama" id="name-update">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Email</label>
              <input name="email" type="email" class="form-control" placeholder="Example@gmail.com" id="email-update">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Phone</label>
              <input name="phone" type="number" class="form-control" placeholder="08xxxxxxxxxx" id="phone-update">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Light table -->
  <div class="table-responsive">
    <table class="table table-flush" id="datatable-basic">
      <thead class="thead-light">
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>No.Hp</th>
          <th>Kehadiran</th>
          <th>Kode Undangan</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($invitations as $data)
        <tr id="sid{{$data->id}}">
          <td class="table-user">{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->status}}</td>
          <td>{{$data->code}}</td>
          <td class="table-actions">
            <a href="javascript:void(0)" onclick="editInvitation({{$data->id}})" class="btn btn-icon btn-outline-info btn-sm" data-toggle="tooltip" data-original-title="Ubah">
              <i class="fas fa-user-edit"></i>
            </a>
            <a href="javascript:void(0)" onclick="deleteInvitation({{$data->id}})" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus">
              <i class="fas fa-trash"></i>
            </a>
            @if($data->phone != "")
            <a target="_blank" href="https://api.whatsapp.com/send?phone={{preg_replace('/^0/', '62', $data->phone)}}&text={{$data->name}}%20yang%20terhormat%2C%0AAnda%20diundang%20ke%20pernikahan%20kami!%0AMohon%20respon%20RSVP%20Anda%20dan%20tinggalkan%20komentar%20Anda%20di%20http://127.0.0.1:8000/{{$wedding->slug}}%0Akode%20invitations%20%3A%20{{$data->code}}" class="btn btn-icon btn-outline-success btn-sm" data-toggle="tooltip" data-original-title="Whatsapp">
              <i class="ni ni-chat-round"></i>
            </a>
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
  //Tambah Invitation
  $('#invitationForm').submit(function(e) {
    e.preventDefault();
    var name = $("input[name=name]");
    var email = $("input[name=email]");
    var phone = $("input[name=phone]");
    var _token = $("input[name=_token]");

    $.ajax({
      url: "{{route('invitation.add')}}",
      type: "POST",
      data: {
        wedding_id:'{{Auth::user()->wedding->id}}',
        name: name.val(),
        email: email.val(),
        phone: phone.val(),
        _token: _token.val()
      },
      success: function(response) {
         Swal.fire({
          title: 'Data sedang diproses',
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
          }
        });
        location.reload();
      }
    });
  })
  $('#invitationForm').validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        email: true,
        required: true
      },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 12
      }
    },
    messages: {
      name: {
        required: "Nama Tidak Boleh Kosong!",
        minlength: "Nama Minimal 2 Huruf"
      },
      email: {
        required: "E-mail Tidak Boleh Kosong!",
        email: "Masukkan E-mail Dengan Benar"
      },
      phone: {
        required: "No.Hp Tidak Boleh Kosong!",
        minlength: "No.Hp Minimal 10 Angka!",
        maxlength: "No.Hp Maximal 12 Angka!"
      }
    }
  });
  //Edit Invitation
  function editInvitation(id) {
    var url = '{{route("invitation.getbyid",":id")}}'
    url = url.replace(':id', id)
    $.get(url, function(invitation) {
      $("#id").val(invitation.id);
      $("#name-update").val(invitation.name);
      $("#email-update").val(invitation.email);
      $("#phone-update").val(invitation.phone);
      $("#invitationEditModal").modal("toggle");
    });
  }

  $("#invitationEditForm").submit(function(e) {
    e.preventDefault();
    var id = $("#id").val();
    var name = $("#name-update").val();
    var email = $("#email-update").val();
    var phone = $("#phone-update").val();
    var _token = $("input[name=_token]").val();

    $.ajax({
      url: "{{route('invitation.update')}}",
      type: 'PUT',
      data: {
        id: id,
        name: name,
        email: email,
        phone: phone,
        _token: _token
      },
      success: function(response) {
         Swal.fire({
          title: 'Data sedang diproses',
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
          }
        });
        location.reload();
      }
    });

  })
  $('#invitationEditForm').validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        email: true,
        required: true
      },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 12
      }
    },
    messages: {
      name: {
        required: "Nama Tidak Boleh Kosong!",
        minlength: "Nama Minimal 2 Huruf"
      },
      email: {
        required: "E-mail Tidak Boleh Kosong!",
        email: "Masukkan E-mail Dengan Benar"
      },
      phone: {
        required: "No.Hp Tidak Boleh Kosong!",
        minlength: "No.Hp Minimal 10 Angka!",
        maxlength: "No.Hp Maximal 12 Angka!"
      }
    }
  });
  //Delete Invitation
  function deleteInvitation(id) {
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
        var url = '{{route("invitation.delete",":id")}}'
        url = url.replace(':id', id)
        $.ajax({
          url: url,
          type: 'DELETE',
          data: {
            _token: $("input[name=_token]").val()
          },
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
//import Invitation
$('#invitationImport').validate({
    rules: {
      field: {
        required: true,
        extension: "csv"
      }
    },
    messages:{
      field:{
        required: "File Tidak Boleh Kosong",
        extension: "Masukkan File CSV"
      }
    }
  });
</script>
@endpush
