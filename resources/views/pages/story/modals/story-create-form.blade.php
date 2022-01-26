<div class="modal fade" id="modal-story-create" tabindex="-1" role="dialog" aria-labelledby="modal-story-create" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Cerita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="{{route('story.store')}}">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Judul</label>
                        <input name="title" id="title" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="subtitle" class="form-control-label">Sub Judul</label>
                        <input name="subtitle" id="subtitle" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="content" class="form-control-label">Konten</label>
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-white" class="close" data-dismiss="modal" aria-label="Close">Batal</button>
                        <button type="submit" class="btn btn-brown">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>