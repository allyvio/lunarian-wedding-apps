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
      <div class="col-6">
        <h3 class="mb-0">Data Tabel Undangan</h3>
      </div>
      <div class="col-6 text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#invitationModal">
          <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
          <span class="btn-inner--text">Tambah</span>
        </button>
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
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
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
    <table id="invitationTable" class="table align-items-center table-flush table-striped">
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
            <a href="javascript:void(0)" onclick="editInvitation({{$data->id}})" class="btn btn-outline-info" data-toggle="tooltip">
              <i class="fas fa-user-edit"></i>
            </a>
            <a href="javascript:void(0)" onclick="deleteInvitation({{$data->id}})" class="btn btn-outline-danger" data-toggle="tooltip">
              <i class="fas fa-trash"></i>
            </a>
            <a href="https://api.whatsapp.com/send?phone=62{{$data->phone}}&text=Saya%20Harap%20Kamu%20Bisa%20Hadir%20Di%20Pernikahan%20Saya" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Whatsapp">
              <i class="ni ni-chat-round"></i>
            </a>
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
        name: name.val(),
        email: email.val(),
        phone: phone.val(),
        _token: _token.val()
      },
      success: function(response) {
        // $('#invitationTable tbody').prepend(`<tr id="sid`+response.id+`"><td>`+response.name+`</td><td>`+response.email+`</td><td>`+response.phone+`</td><td></td><td>`+response.code+`</td><td class="table-actions">
        // <a href="javascript:void(0)" onclick="editInvitation(`+response.id+`)" class="table-action table-action-delete" data-toggle="tooltip"><i class="fas fa-user-edit"></i></a>
        // <a href="javascript:void(0)" onclick="deleteInvitation(`+response.id+`)" class="table-action table-action-delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a></td></tr>`);
        // $('#invitationModal').modal('toggle');
        // $('#invitationForm')[0].reset();
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
        minlength: 2,
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
    $.get('/invitation/' + id, function(invitation) {
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
        // console.log(response);
        // $('#sid'+response.id +'td:nth-child(1)').text(response.name);
        // $('#sid'+response.id +'td:nth-child(2)').text(response.email);
        // $('#sid'+response.id +'td:nth-child(3)').text(response.phone);
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
        minlength: 2,
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
        $.ajax({
          url: '/invitation/' + id,
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
            // $('#sid'+id).remove();
            location.reload();
          }
        })
      }
    })
  }
</script>
@endpush