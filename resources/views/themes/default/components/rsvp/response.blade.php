@if(!$wedding->invitation->rsvp_at)
<div class="col-md-12 text-center">
    <h3>Will You Attend?</h3>
    We look forward to celebrate with you. <br>
    Please kindly respond.<br>
    <div class="spacer-single"></div>
    <div class=" col-xs-4 col-sm-3 col-xs-offset-2 col-sm-offset-3 text-right">
        <button class="btn btn-block btn-success btn-rsvp-confirm" data-rsvp="ya" data-wedding="{{$wedding->slug}}" data-invitation="{{$wedding->invitation->code}}" onclick="rsvpConfirm(this)">Ya</button>
    </div>
    <div class=" col-xs-4 col-sm-3 text-left">
        <button class="btn btn-block btn-danger btn-rsvp-confirm" data-rsvp="tidak" data-wedding="{{$wedding->slug}}" data-invitation="{{$wedding->invitation->code}}" onclick="rsvpConfirm(this)">Tidak</button>
    </div>
</div>
@else
@if($wedding->invitation->status === 'tidak')
<div class="col-md-12 text-center">
    <h3>Thank you, wish us the best.</h3>
    <p>Your response is : <span class="badge badge-danger"><i class="fa fa-times"> Not Going</i></span></p>
    <button class="btn btn-outline-primary btn-rsvp-confirm" data-rsvp="reset" data-wedding="{{$wedding->slug}}" data-invitation="{{$wedding->invitation->code}}" onclick="rsvpConfirm(this)">Change</button>
    <div class="spacer-single"></div>
</div>
@elseif($wedding->invitation->status === 'ya')
<div class="col-md-12 text-center">
    <h3>Thank you for your response. See you there!</h3>
    <p>Your response is : <span class="badge badge-success"><i class="fa fa-check"> Going</i></span></p>
    <button class="btn btn-outline-primary btn-rsvp-confirm" data-rsvp="reset" data-wedding="{{$wedding->slug}}" data-invitation="{{$wedding->invitation->code}}" onclick="rsvpConfirm(this)">Change</button>
    <div class="spacer-single"></div>
    <h4>How many guest?</h4>
    <div class="col-xs-6 col-md-2 col-xs-offset-3 col-md-offset-5">
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-secondary btn-number" data-type="minus" data-field="quant[1]" {{$wedding->invitation->count <= 1 ? 'disabled' : ''}}>
                    &minus;
                </button>
            </span>
            <input type="text" name="quant[1]" class="form-control input-number" data-invitation="{{$wedding->invitation->id}}" value="{{$wedding->invitation->count}}" min="1" max="5">
            <span class="input-group-btn">
                <button type="button" class="btn btn-secondary btn-number" data-type="plus" data-field="quant[1]" {{$wedding->invitation->count >= 5 ? 'disabled' : ''}}>
                    &plus;
                </button>
            </span>
        </div>
    </div>
</div>
@endif
@endif