@if($wedding->package->count_invitation > 0)
<section class=" pt-90">
    <div class="container pb-80">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2 class="h2">Masukkan Kode Undangan</h2>
                <br>
                <p class="lead mb-15">Masukkan 6 digit kode undangan Anda di bawah ini</p>
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