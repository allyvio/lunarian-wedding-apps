<section class="rsvp pt-90 pb-80" id="rsvp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="h1">Dear {{$wedding->invitation->name}}</h1>
                <h1 class="heavy pt-10 pb-30">We Invite You</h1>
            </div>

            <div class="row" id="rsvp-container">
                @include('themes.rustic.components.rsvp.response')
            </div>
            <div class="spacer-double"></div>
        </div>
    </div>
</section>