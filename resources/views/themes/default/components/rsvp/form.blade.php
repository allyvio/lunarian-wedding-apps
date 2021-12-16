<section style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h3>Get your invitation code</h3>
                <br>
                <p>Put your 6 digits invitation code below.</p>
                <form id="rsvp-form" action="{{route('invitation.rsvp',[':wedding',':code'])}}" data-wedding="{{$wedding->id}}" data-wedding-slug="{{$wedding->slug}}">
                    <div class="input-group">
                        <input type="text" name="rsvp-code" id="rsvp-code" class="form-control" maxlength="6" placeholder="Invitation Code" required>
                        <div class="input-group-btn">
                            <button type="submit" id="rsvp-code" class="btn btn-primary">RSVP</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>