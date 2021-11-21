@if($wedding->comments->count() > 0)
<section data-stellar-background-ratio=".2" class="no-top">
    <div class="container relative">
        <div class="row">
            <div id="testimonial-carousel" class="de_carousel" data-wow-delay=".3s">
                @foreach($wedding->comments as $comment)
                <div class="col-md-6 item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>To a special couple who show that love can be true and forever. May your
                                lives continue
                                to grow in love and happiness together!</p>
                            <div class="de_testi_by">
                                John, Friend
                            </div>
                        </blockquote>
                    </div>
                </div>
                @endforeach
                <div class="col-md-6 item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>To a special couple who show that love can be true and forever. May your
                                lives continue
                                to grow in love and happiness together!</p>
                            <div class="de_testi_by">
                                John, Friend
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6 item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>To a special couple who show that love can be true and forever. May your
                                lives continue
                                to grow in love and happiness together!</p>
                            <div class="de_testi_by">
                                John, Friend
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6 item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>To a special couple who show that love can be true and forever. May your
                                lives continue
                                to grow in love and happiness together!</p>
                            <div class="de_testi_by">
                                John, Friend
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif