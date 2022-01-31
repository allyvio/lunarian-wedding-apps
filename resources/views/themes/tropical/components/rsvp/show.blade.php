<section style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="s2 id-color"><span>Dear {{$wedding->invitation->name}}</span></h2>
                <h2 class="deco id-color"><span>We Invite You</span></h2>
            </div>

            <div class="spacer-double"></div>

            <div class="row" id="rsvp-container">
                @include('themes.tropical.components.rsvp.response')
            </div>
            <div class="spacer-double"></div>
        </div>
    </div>
</section>