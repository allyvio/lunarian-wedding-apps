<section aria-label="section" class="" style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="id-color"><span>Comments</span></h3>
            </div>
        </div>
        <form id="invitation-comment-form" method="post" action="{{route('comment.post',$wedding->invitation->id)}}">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="field-set">
                    <textarea name='message' id='field-message' class="form-control" placeholder="Tulis pesan" style="resize: vertical;padding: 15px;"></textarea>
                </div>
                <div class="spacer-single"></div>
                <button type='submit' id="comment-form-submit" class="btn btn-custom disabled">Kirim</button>
            </div>
        </form>
    </div>
</section>