<section class="mt-6">
    <div class="container">
        <div class="section-title">
            <h2>Berikan Ucapan</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <form id="invitation-comment-form" method="post" action="{{route('comment.post',$wedding->invitation->id)}}">
                    <div class="form-group">
                        <textarea placeholder="Tulis ucapan" name='message' id="field-message" cols="30" rows="5" class="form-control"></textarea> <br>
                        <i class="form-control-icon fa fa-book"></i>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-sm-12 col-md-12 text-center">
                        <button type='submit' id="comment-form-submit" class="button submit disabled">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>