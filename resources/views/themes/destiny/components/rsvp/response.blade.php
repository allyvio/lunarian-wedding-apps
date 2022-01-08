@if(!$wedding->invitation->rsvp_at)
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="heavy pb-10">Apakah Anda Akan Hadir??</h3>
            <p class="lead">Kami berharap dapat merayakannya bersama Anda. <br>Mohon tanggapannya.<br></p>
            <div class="spacer-single"></div>
            <div class=" col-xs-4 col-sm-3 col-xs-offset-2 col-sm-offset-3 text-right">
                <button class="btn btn-block btn-success btn-rsvp-confirm" data-rsvp="ya" data-wedding="{{$wedding->slug}}" data-invitation="{{$wedding->invitation->code}}" onclick="rsvpConfirm(this)">Ya</button>
            </div>
            <div class=" col-xs-4 col-sm-3 text-left">
                <button class="btn btn-block btn-danger btn-rsvp-confirm" data-rsvp="tidak" data-wedding="{{$wedding->slug}}" data-invitation="{{$wedding->invitation->code}}" onclick="rsvpConfirm(this)">Tidak</button>
            </div>
        </div>
    </div>
</div>
@else
@if($wedding->invitation->status === 'tidak')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="heavy pb-10">Terima kasih, doakan kami yang terbaik.</h3>
            <p class="lead">Tanggapan Anda adalah : <span class="badge badge-danger"><i class="fa fa-times"> Tidak pergi</i></span></p>
            <div class="pb-20">
                <button class="btn btn-primary btn-rsvp-confirm" data-rsvp="reset" data-wedding="{{$wedding->slug}}" data-invitation="{{$wedding->invitation->code}}" onclick="rsvpConfirm(this)">Change</button>
            </div>
            <div class="spacer-single"></div>
        </div>
    </div>
</div>
@elseif($wedding->invitation->status === 'ya')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="heavy pb-10">Terima kasih atas tanggapan Anda. Sampai jumpa!</h3>
            <p class="lead">Tanggapan Anda adalah : <span class="badge badge-success"><i class="fa fa-check"> Pergi</i></span></p>
            <div class="pb-20">
                <button class="btn btn-primary btn-rsvp-confirm" data-rsvp="reset" data-wedding="{{$wedding->slug}}" data-invitation="{{$wedding->invitation->code}}" onclick="rsvpConfirm(this)">Change</button>
            </div>
            <p class="lead">Berapa banyak orang yang Hadir?</p>
            <div class="col-xs-6 col-md-2 col-xs-offset-3 col-md-offset-5">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="quant[1]" {{$wedding->invitation->count <= 1 ? 'disabled' : ''}}>
                            &minus;
                        </button>
                    </span>
                    <input type="text" name="quant[1]" class="form-control input-number" data-invitation="{{$wedding->invitation->id}}" value="{{$wedding->invitation->count}}" min="1" max="5" style="z-index: 10;">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" {{$wedding->invitation->count >= 5 ? 'disabled' : ''}}>
                            &plus;
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif
