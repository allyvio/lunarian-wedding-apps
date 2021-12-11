<div class="modal fade" id="modal-event-form" tabindex="-1" role="dialog" aria-labelledby="modal-event-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Acara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="event-form">
                    <label class="custom-toggle custom-toggle-success mr-2 mb-3">
                        <input type="checkbox" id="is_main" name="is_main">
                        <span class="custom-toggle-slider rounded-circle"></span>
                    </label>
                    <label class="form-control-label align-top" for="is_main">Acara Utama</label>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Nama Acara</label>
                                <input name="title" id="title" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label">Mulai</label>
                                        <input type="hidden" id="date">
                                        <input class="form-control" placeholder="Start date" id="start_date" name="start_date" type="time" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label">Berakhir</label>
                                        <input class="form-control" placeholder="End date" id="end_date" name="end_date" type="time">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-label">Lokasi</label>
                        <input name="location" id="location" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-label">Deskripsi</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-white" class="close" data-dismiss="modal" aria-label="Close">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>