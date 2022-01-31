<section id="gift" class="gift pt-50 pb-50">
    <!--Container-->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-7 text-center">
                <div class="block-registry">
                    <h2 class="h2 mb-50">Berikan Ucapan</h2>
                    <form class="registry-form " id="invitation-comment-form" method="post" action="{{route('comment.post',$wedding->invitation->id)}}">
                        <textarea placeholder="Ucapan" name='message' id="field-message" cols="30" rows="5" class="form-control"></textarea> <br>
                        <button type='submit' id="comment-form-submit" class="btn submit disabled">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>