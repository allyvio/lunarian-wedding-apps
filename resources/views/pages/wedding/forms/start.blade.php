<form id="start-form" action="{{route('wedding.store')}}" data-stage="start">
    <div class="form-group">
        <label for="title" class="form-control-label">Judul</label>
        <input name="title" class="form-control" type="text" id="title">
    </div>
    <div class="form-group">
        <label for="description" class="form-control-label">Deskripsi</label>
        <textarea name="description" class="form-control" id="description"></textarea>
    </div>
    <div class="form-group">
        <label for="date" class="form-control-label">Alamat Website</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <h4 class="text-muted m-0">digital-invitation.com/</h4>
                </span>
            </div>
            <input class="form-control" type="text" name="slug">
        </div>
    </div>
</form>