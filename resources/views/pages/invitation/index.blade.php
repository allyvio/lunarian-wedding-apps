@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 d-inline-block mb-0">Undangan</h6>
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
      <button type="button" class="btn btn-outline-brown btn-sm" data-toggle="modal" data-target="#invitationModal">
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
              <label for="field">PILIH FILE</label>
              <input type="file" id="field" name="field" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-brown">Import</button>
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
              <button type="submit" class="btn btn-brown">Simpan</button>
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
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-brown">Simpan</button>
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
          <th></th>
          <th>Nama</th>
          {{-- <th class="">Email</th> --}}
          <th>No.Hp</th>
          <th>Kehadiran</th>
          <th class="">Jumlah</th>
          {{-- <th class="">Kode</th> --}}
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($invitations as $data)
        <tr id="sid{{$data->id}}">
           <td class="table-actions">
            @if($data->phone != "")
            @if ($data->slug != null)

            <a target="_blank" href="https://api.whatsapp.com/send?phone={{preg_replace('/^0/', '62', $data->phone)}}&text=%D8%A7%D9%84%D8%B3%D9%8E%D9%91%D9%84%D8%A7%D9%8E%D9%85%D9%8F%20%D8%B9%D9%8E%D9%84%D9%8E%D9%8A%D9%92%D9%83%D9%8F%D9%85%D9%92%20%D9%88%D9%8E%D8%B1%D9%8E%D8%AD%D9%92%D9%85%D9%8E%D8%A9%D9%8F%20%D8%A7%D9%84%D9%84%D9%87%D9%90%20%D9%88%D9%8E%D8%A8%D9%8E%D8%B1%D9%8E%D9%83%D9%8E%D8%A7%D8%AA%D9%8F%D9%87%D9%8F%0A%0AMaha%20suci%20Allah%20yang%20telah%20menjadikan%20segala%20sesuatu%20lebih%20indah%20dan%20sempurna.%0A%0ATanpa%20mengurangi%20rasa%20hormat%2C%20perkenankan%20kami%20mengundang%20Bapak%2FIbu%2FSaudara%2Fi%2C%20teman%20sekaligus%20sahabat%2C%20untuk%20menghadiri%20acara%20pernikahan%20kami%20%3A%0A%0A {{$wedding->nama_calon_wanita}} %20%26%20 {{$wedding->nama_calon_pria}} %0A%0ABerikut%20link%20untuk%20info%20lengkap%20dari%20acara%20kami%20untuk%20mengantarkan%20Bapak%2FIbu%2C%20teman%2C%20serta%20sahabat%20ketujuan%20%3A%0A%20 {{url($wedding->slug, $data->slug)}} %0A%0AMerupakan%20suatu%20kebahagiaan%20bagi%20kami%20apabila%20Bapak%2FIbu%2FSaudara%2Fi%20berkenan%20untuk%20hadir%20dan%20memberikan%20doa%20restu.%0A%0AMohon%20maaf%20perihal%20undangan%20hanya%20di%20bagikan%20melalui%20%20pesan%20ini.%0A%0A%D9%88%D9%8E%D8%A7%D9%84%D8%B3%D9%8E%D9%91%D9%84%D8%A7%D9%8E%D9%85%D9%8F%20%D8%B9%D9%8E%D9%84%D9%8E%D9%8A%D9%92%D9%83%D9%8F%D9%85%D9%92%20%D9%88%D9%8E%D8%B1%D9%8E%D8%AD%D9%92%D9%85%D9%8E%D8%A9%D9%8F%20%D8%A7%D9%84%D9%84%D9%87%D9%90%20%D9%88%D9%8E%D8%A8%D9%8E%D8%B1%D9%8E%D9%83%D9%8E%D8%A7%D8%AA%D9%8F%D9%87%D9%8F%0A%0AJangan%20lupa%20di%20pin%20tanggal%20nya%20yaa%F0%9F%98%8A%0A%0AKami%20yang%20berbahagia%0A {{$wedding->nama_calon_wanita}} %20%26%20 {{$wedding->nama_calon_pria}}" class="btn btn-icon btn-outline-success btn-sm" data-toggle="tooltip" data-original-title="Whatsapp">
              <i class="fab fa-whatsapp"></i>
            </a>
            @else 
            <a target="_blank" href="https://api.whatsapp.com/send?phone={{preg_replace('/^0/', '62', $data->phone)}}&text={{$data->name}}%20yang%20terhormat%2C%0AAnda%20diundang%20ke%20pernikahan%20kami!%0AMohon%20respon%20RSVP%20Anda%20dan%20tinggalkan%20komentar%20Anda%20di%20{{url($wedding->slug, $data->code)}}" class="btn btn-icon btn-outline-success btn-sm" data-toggle="tooltip" data-original-title="Whatsapp">
              <i class="fab fa-whatsapp"></i>
            </a>

           
            @endif
            
            @endif
          </td>
          <td class="table-user">{{$data->name}}</td>
          {{-- <td class="">{{$data->email}}</td> --}}
          <td>{{$data->phone}}</td>
          <td>{{$data->status}}</td>
          <td class="">{{$data->count}} orang</td>
          {{-- <td class="">{{$data->code}}</td> --}}
          <td>
            <a href="javascript:void(0)" onclick="editInvitation({{$data->id}})" class="btn btn-icon btn-outline-info btn-sm " data-toggle="tooltip" data-original-title="Ubah">
              <i class="fas fa-user-edit"></i>
            </a>
            <a href="javascript:void(0)" onclick="deleteInvitation({{$data->id}})" class="btn btn-icon btn-outline-danger btn-sm " data-toggle="tooltip" data-original-title="Hapus">
              <i class="fas fa-trash"></i>
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
        email: true
      },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 16
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
        maxlength: "No.Hp Maximal 16 Angka!"
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
        email: true
      },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 16
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
        maxlength: "No.Hp Maximal 16 Angka!"
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
