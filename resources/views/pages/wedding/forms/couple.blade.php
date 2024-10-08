<form id="couple-form" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 text-center">
            <label class="mt-2" for="calon_pria_photo">Calon Pengantin Pria</label>
            <div class="input-preview" style="width: 100%;">
                <label for="calon_pria_photo" id="input-preview-label" class="input-preview-label">Upload disini</label>
                <input class="form-control" type="file" name="calon_pria_photo" id="calon_pria_photo" accept="image/*" style="display: none;" />
            </div>
            <div class="text-left">
                <label class="form-control-label" for="calon_pria">Nama Lengkap</label>
                <input type="text" class="form-control" id="calon_pria" name="calon_pria">
            </div>
             <div class="text-left">
                <label class="form-control-label" for="calon_pria">Nama Panggilan</label>
                <input type="text" class="form-control" id="nama_calon_pria" name="nama_calon_pria">
            </div>
        </div>
        <div class="col-6 text-center">
            <label class="mt-2" for="calon_wanita_photo">Calon Pengantin Wanita</label>
            <div class="input-preview" style="width: 100%;">
                <label for="calon_wanita_photo" id="input-preview-label" class="input-preview-label">Upload disini</label>
                <input class="form-control" type="file" name="calon_wanita_photo" id="calon_wanita_photo" accept="image/*" style="display: none;" />
            </div>
            <div class="text-left">
                <label class="form-control-label" for="calon_wanita">Nama Lengkap</label>
                <input type="text" class="form-control" id="calon_wanita" name="calon_wanita">
            </div>
            <div class="text-left">
                <label class="form-control-label" for="calon_wanita">Nama Panggilan</label>
                <input type="text" class="form-control" id="nama_calon_wanita" name="nama_calon_wanita">
            </div>
        </div>
    </div>
</form>
@push('scripts')
<script>
    function readURL(input) {
        var parent = $(input).parent(),
            preview = parent.find('.input-preview-label')
        preview.removeClass('is-invalid')
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.css('background-image', 'url(' + e.target.result + ')');
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.css('background-image', '');
        }
    }

    $('input[type="file"]').on('change', function(e) {
        readURL(this)
    })
    $('.input-preview-label').on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
    }).on('dragover dragenter', function() {
        $(this).addClass('is-dragover');
    }).on('dragleave dragend drop', function() {
        $(this).removeClass('is-dragover');
    }).on('drop', function(e) {
        var input = $('#' + $(this).prop('for'))
        input.prop('files', e.originalEvent.dataTransfer.files);
        input.trigger('change');
    });
</script>
@endpush