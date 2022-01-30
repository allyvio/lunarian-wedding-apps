@if($wedding->quote)
<section id="section-quote" aria-label="section-quote-1" class="text-light" data-stellar-background-ratio=".2">
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
