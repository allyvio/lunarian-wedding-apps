<div class="modal fade" id="modal-event-create-form" tabindex="-1" role="dialog" aria-labelledby="modal-event-create-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Acara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="event-create-form" action="{{route('event.store')}}">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Nama Acara</label>
                        <input name="title" id="title_create" class="form-control" type="text" required>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Tanggal</label>
                                <input name="date" id="date_create" class="form-control datepicker" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label">Mulai</label>
                                        <input class="form-control" placeholder="Start date" id="start_date_create" name="start_date" type="time" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label">Berakhir</label>
                                        <input class="form-control" placeholder="End date" id="end_date_create" name="end_date" type="time">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-label">Lokasi</label>
                        <input name="location" id="location_create" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-label">Deskripsi</label>
                        <textarea class="form-control" name="description" id="description_create" cols="30" rows="5"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-white" class="close" data-dismiss="modal" aria-label="Close">Tutup</button>
                        <button type="submit" class="btn btn-brown">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>