@extends('layout.wrapper-dashboard')

@section('dashboard-header')
<div class="header pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 d-inline-block mb-0">Package</h6>
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
      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#PackageModal">
        <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
        <span class="btn-inner--text">Tambah</span>
      </button>
    </div>
  </div>
  <!-- Modal add Package-->
  <div class="modal fade" id="PackageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Package</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="packageForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Nama Package</label>
              <input name="name" type="text" class="form-control" placeholder="Nama Package" id="name">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Jumlah Undangan</label>
              <input name="count_invitation" type="number" class="form-control" placeholder="Jumlah Undangan" id="count_invitation">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Harga Package</label>
              <input name="price" type="number" class="form-control" placeholder="Harga Package" id="price">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Harga Diskon</label>
              <input name="value" type="number" class="form-control" placeholder="Harga Diskon" id="value">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Jumlah Galeri</label>
              <input name="count_galleri" type="number" class="form-control" placeholder="Jumlah Galeri" id="count_galleri">
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
  <!-- Modal Edit Package -->
  <div class="modal fade" id="PackageEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Package</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="PackageEdit" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Nama Package</label>
              <input name="name" type="text" class="form-control" placeholder="Nama Package" id="name-update">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Jumlah Undangan</label>
              <input name="count_invitation" type="number" class="form-control" placeholder="Jumlah Undangan" id="count_invitation-update">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Harga Package</label>
              <input name="price" type="number" class="form-control" placeholder="Harga Package" id="price-update">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Harga Diskon</label>
              <input name="value" type="number" class="form-control" placeholder="Harga Diskon" id="value-update">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Jumlah Galeri</label>
              <input name="count_galleri" type="number" class="form-control" placeholder="Jumlah Galeri" id="count_galleri-update">
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
    <table class="table table-flush text-center" id="datatable-basic">
      <thead class="thead-light">
        <tr>
          <th>Nama Package</th>
          <th>Jumlah Undangan</th>
          <th>Harga Package</th>
          <th>Harga Diskon</th>
          <th>Jumlah Galeri</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($package as $data)
        <tr>
          <td>{{$data->name}}</td>
          <td>{{$data->count_invitation}}</td>
          <td>Rp.{{$data->price}}</td>
          <td>Rp.{{$data->value}}</td>
          <td>{{$data->count_galleri}}</td>
          <td>
            <a href="javascript:void(0)" onclick="editPackage({{$data->id}})" class="btn btn-icon btn-outline-info btn-sm" data-toggle="tooltip" data-original-title="Ubah">
              <i class="fas fa-edit"></i>
            </a>
            <a href="javascript:void(0)" onclick="deletePackage({{$data->id}})" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus">
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
$('#packageForm').submit(function(e) {
  e.preventDefault();
  var name = $("input[name=name]");
  var count_invitation = $("input[name=count_invitation]");
  var price = $("input[name=price]");
  var value = $("input[name=value]");
  var count_galleri = $("input[name=count_galleri]");
  var _token = $("input[name=_token]");

  $.ajax({
    url: "{{route('add-package.store')}}",
    type: "POST",
    data: {
      name: name.val(),
      count_invitation: count_invitation.val(),
      price: price.val(),
      value: value.val(),
      count_galleri: count_galleri.val(),
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
$('#packageForm').validate({
  rules: {
    name: {
      required: true,
      minlength: 2
    },
    count_invitation: {
      required: true
    },
    price: {
      required: true
    },
    value: {
      required: true
    },
    count_galleri: {
      required: true
    },
  },
  messages: {
    name: {
      required: "Nama Package Tidak Boleh Kosong!",
      minlength: "Nama Package Minimal 2 Huruf"
    },
    count_invitation: {
      required: "Jumlah Undangan Tidak Boleh Kosong!"
    },
    price: {
      required: "Harga Package Tidak Boleh Kosong!"
    },
    value: {
      required: "Harga Diskon Package Tidak Boleh Kosong!"
    },
    count_galleri: {
      required: "Jumlah Galeri Tidak Boleh Kosong!"
    },
  }
});
//Edit Invitation
function editPackage(id) {
  var url = '{{route("package.show",":id")}}'
  url = url.replace(':id', id)
  $.get(url, function(paket) {
    $("#id").val(paket.id);
    $("#name-update").val(paket.name);
    $("#count_invitation-update").val(paket.count_invitation);
    $("#price-update").val(paket.price);
    $("#value-update").val(paket.value);
    $("#count_galleri-update").val(paket.count_galleri);
    $("#PackageEditModal").modal("toggle");
  });
}

$("#PackageEdit").submit(function(e) {
  e.preventDefault();
  var id = $("#id").val();
  var name = $("#name-update").val();
  var count_invitation = $("#count_invitation-update").val();
  var price = $("#price-update").val();
  var value = $("#value-update").val();
  var count_galleri = $("#count_galleri-update").val();
  var _token = $("input[name=_token]").val();

  $.ajax({
    url: "{{route('package.update')}}",
    type: 'PUT',
    data: {
      id: id,
      name: name,
      count_invitation: count_invitation,
      price: price,
      value: value,
      count_galleri: count_galleri,
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
$('#PackageEdit').validate({
  rules: {
    name: {
      required: true,
      minlength: 2
    },
    count_invitation: {
      required: true
    },
    price: {
      required: true
    },
    value: {
      required: true
    },
    count_galleri: {
      required: true
    },
  },
  messages: {
    name: {
      required: "Nama Package Tidak Boleh Kosong!",
      minlength: "Nama Package Minimal 2 Huruf"
    },
    count_invitation: {
      required: "Jumlah Undangan Tidak Boleh Kosong!"
    },
    price: {
      required: "Harga Package Tidak Boleh Kosong!"
    },
    value: {
      required: "Harga Diskon Package Tidak Boleh Kosong!"
    },
    count_galleri: {
      required: "Jumlah Galeri Tidak Boleh Kosong!"
    },
  }
});
//Delete Invitation
function deletePackage(id) {
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
      var url = '{{route("package.delete",":id")}}'
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

</script>
@endpush
