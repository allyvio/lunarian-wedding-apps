@if($wedding->quote)
<section id="section-quote" aria-label="section-quote-1" class="footer">
  <div id="footer-image-block" class="footer-image-block" style="background-image: url({{asset('storage/media/'.$wedding->hero->first()->filename)}}); background-attachment: fixed; background-position: 50%;" data-stellar-background-ratio="0.3">
      <div class="footer-mask"></div>
  </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 wow fadeIn">
                <div class="ql-editor" style="background-color: transparent;border: none;color:#fff">
                    {!!$wedding->quote!!}
                </div>
            </div>
        </div>
    </div>
</section>
@endif
