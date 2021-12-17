<div id="event-container">
    @foreach($events as $date =>$event)
    <div class="row">
        <div class="col">
            <h3>{{date('l, d F Y',strtotime($date))}}</h3>
        </div>
        <div class="col-auto">
            <button class="btn btn-outline-default btn-sm" type="button" data-toggle="modal" data-target="#modal-event-date-form" data-event-date="{{$date}}" data-wedding="{{$events->wedding}}">Ubah</button>
            <button class="btn btn-icon btn-outline-danger btn-sm" data-wedding="{{$events->wedding}}" data-date="{{$date}}" data-toggle="delete-event-bydate"><i class="fa fa-trash"></i></button>
        </div>
    </div>
    <div class="row">
        @foreach ($event as $event_detail)
        <div class="col-md-6 mb-2">
            @include('pages.event.components.event-detail')
        </div>
        @endforeach
    </div>
    <hr class="m-0 mb-4">
    @endforeach
</div>
<button class="btn btn-outline-primary btn-sm" type="button" data-wedding="{{$events->wedding}}" data-toggle="modal" data-target="#modal-event-create-form"><i class="fas fa-plus"></i> Tambah Hari</button>

@push('modals')
@include('pages.event.modals.event-date-form')
@include('pages.event.modals.event-create-form')
@include('pages.event.modals.event-form')
@endpush