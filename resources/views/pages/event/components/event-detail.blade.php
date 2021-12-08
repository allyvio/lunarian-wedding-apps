<div class="card bg-secondary shadow-none" id="event-detail">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col">
                <h4>{{$event_detail->title}} {!! $event_detail->is_main ? '<span class="badge badge-success badge-pill align-top"><i class="fa fa-star"></i> Utama</span>' : ''!!}</h4>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-default btn-sm" type="button" data-toggle="modal" data-target="#modal-event-form" data-event="{{$event_detail->id}}">Ubah</button>
                <button class="btn btn-icon btn-outline-danger btn-sm" data-toggle="delete-event" data-event="{{$event_detail->id}}"><i class="fa fa-trash"></i></button>
            </div>
        </div>
        <div class="">
            <small class="time"><i class="far fa-clock fa-fw mr-2"></i> {{$event_detail->start_date}} - {{$event_detail->end_date ? $event_detail->end_date : 'selesai'}}</small>
        </div>
        <div class="">
            <small class="time"><i class="fa fa-map-marker-alt fa-fw mr-2"></i> {{$event_detail->location ?? 'not set'}}</small>
        </div>
    </div>
</div>