@if($wedding->package->count_invitation > 0)
<section style="background-color: white;">
    <div class="container">
        <div class="row text-center">
            <h2 class="s2">Masukkan Kode Undangan</h2>
            <div class="col-md-4 col-md-offset-4">
                <h4>Masukkan 6 digit kode undangan Anda di bawah ini</h4>
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
@endif