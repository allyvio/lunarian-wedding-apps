@if($wedding->quote)
@if ($wedding->hero->first() != null)
<section id="section-countdown" aria-label="section-countdown" class="pt60 pb60 text-light" data-stellar-background-ratio=".2" style="background-image: url({{asset('storage/media/'.$wedding->hero->first()->filename)}});">
    @else
    <section id="section-countdown" aria-label="section-countdown" class="pt60 pb60 text-light" data-stellar-background-ratio=".2">
        @endif    
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
