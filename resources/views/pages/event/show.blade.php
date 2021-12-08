@foreach($events as $date =>$event)
<div id="event-container">
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
</div>
@endforeach
<button class="btn btn-outline-primary btn-sm" type="button" data-wedding="{{$events->wedding}}" data-toggle="modal" data-target="#modal-event-create-form"><i class="fas fa-plus"></i> Tambah Hari</button>

@push('modals')
@include('pages.event.modals.event-date-form')
@include('pages.event.modals.event-create-form')
@include('pages.event.modals.event-form')
@endpush

@push('scripts')
<!--<script type="text/javascript">
    var $event_modal = $('#modal-event-form'),
        $event_date_modal = $('#modal-event-date-form'),
        $event_create_modal = $('#modal-event-create-form'),
        $event_container = $('#events-container'),
        $input_date = $('#event-date')
    $input_date.datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
    })

    $(document).on('click', '[data-toggle="delete-event"]', function() { //DELETE EVENT BY ID
        var event = $(this).data('event'),
            url = "{{ route('event.destroy', ':event')}}"
        url = url.replace(':event', event)
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonClass: 'btn btn-secondary'
        }).then((res) => {
            if (res.value) {
                $.ajax({
                    url: url,
                    method: 'delete',
                    complete: function(a) {
                        var response = a.responseJSON
                        if (response.success) {
                            reloadEvents($event_container)
                        } else {
                            iziToast.error({
                                displayMode: 'replace',
                                title: 'Invalid',
                                message: response.errors,
                                position: 'topRight',
                            });
                        }
                    }
                })
            }
        })
    }).on('click', '[data-toggle="delete-event-bydate"]', function() { //DELETE EVENT BY DATE
        var wedding = $(this).data('wedding'),
            date = $(this).data('date'),
            url = "{{ route('event.destroy.bydate') }}"
        url = url.replace(':event', event)
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonClass: 'btn btn-secondary'
        }).then((res) => {
            if (res.value) {
                $.ajax({
                    url: url,
                    method: 'delete',
                    data: {
                        date: date,
                        wedding: wedding
                    },
                    complete: function(a) {
                        var response = a.responseJSON
                        console.log(response);
                        if (response.success) {
                            reloadEvents($event_container)
                        } else {
                            iziToast.error({
                                displayMode: 'replace',
                                title: 'Invalid',
                                message: response.errors,
                                position: 'topRight',
                            });
                        }
                    }
                })
            }
        })
    }).on('hide.bs.modal', '.modal', function() {
        $('.is-invalid').removeClass('is-invalid')
        $('.invalid-feedback').remove()
    });

    // EVENT UPDATE & SHOW HANDLER 
    $event_modal.on('show.bs.modal', function(e) {
        var $this = $(this),
            $form = $this.find('form'),
            form_action = "{{ route('event.update', ':event')}}",
            event = $(e.relatedTarget).data('event'),
            url = "{{ route('event.show', ':event')}}";

        url = url.replace(':event', event);
        form_action = form_action.replace(':event', event);
        $form.prop('action', form_action); // set event id on modal form

        // Populate evennt data
        $.get(url, function(data) {
            $.each(data, function(k, v) {
                if (k == 'is_main')
                    $('#' + k).prop('checked', v);
                else $('#' + k).val(v);
            })
        });
    }).find('form').on('submit', function(e) {
        e.preventDefault();
        var $form = $(this),
            url = $form.attr('action'),
            btn_submit = $form.find('[type="submit"]'),
            start_date = $('#start_date')
        $.ajax({
            url: url,
            method: 'put',
            // data: $form.serialize(),
            data: {
                is_main: $('#is_main:checked').val(),
                title: $('#title').val(),
                description: $('#description').val(),
                start_date: $('#date').val() + " " + $('#start_date').val(),
                end_date: $('#end_date').val() ? $('#date').val() + " " + $('#end_date').val() : null,
                location: $('#location').val(),
            },
            beforeSend: function() {
                btn_submit.addClass('btn-progress disabled')
                $('.is-invalid').removeClass('is-invalid')
                $('.invalid-feedback').remove()
            },
            complete: function(e) {
                var response = e.responseJSON
                console.log(response);
                setTimeout(function() {
                    btn_submit.removeClass('btn-progress disabled')
                    if (response.success) {
                        reloadEvents($event_container)
                        $event_modal.modal('hide')
                    } else
                        $.each(response.errors, function(k, v) {
                            $('#' + k).addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
                        })
                }, 300)
            }
        })
    })

    // EVENT DATE UPDATE FORM HANDLER 
    $event_date_modal.on('shown.bs.modal', function(e) {
        var date = $(e.relatedTarget).data('event-date'),
            wedding = $(e.relatedTarget).data('wedding')
        $input_date.data('wedding', wedding).data('old-date', date).val(date).datepicker('update')
    }).find('form').on('submit', function(e) {
        e.preventDefault()
        var $form = $(this),
            old_date = $input_date.data('old-date'),
            btn_submit = $form.find('[type="submit"]'),
            wedding = $input_date.data('wedding');
        $('.is-invalid').removeClass('is-invalid')
        $('.invalid-feedback').remove()
        btn_submit.addClass('btn-progress disabled')
        $.post("{{ route('event.date.update') }}", {
            new_date: $input_date.val(),
            old_date: old_date,
            wedding: wedding
        }, function(response) {
            btn_submit.removeClass('btn-progress disabled')
            if (response.success) {
                reloadEvents($event_container)
                $event_date_modal.modal('hide')
            } else
                $.each(response.errors, function(k, v) {
                    $('input[name="' + k + '"]').addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
                })
        })
    })

    // EVENT CREATE FORM HANDLER 
    $event_create_modal.on('shown.bs.modal', function(e) {
        var wedding = $(e.relatedTarget).data('wedding')
        $(this).find('form').data('wedding', wedding)
    }).find('form').on('submit', function(e) {
        e.preventDefault()
        var $this = $(this),
            action = $this.attr('action'),
            wedding = $this.data('wedding'),
            btn_submit = $this.find('[type="submit"]')

        $('.is-invalid').removeClass('is-invalid')
        $('.invalid-feedback').remove()
        $.ajax({
            url: action,
            method: 'post',
            data: {
                wedding_id: wedding,
                title: $('#title_create').val(),
                description: $('#description_create').val(),
                start_date: $('#date_create').val() + ' ' + $('#start_date_create').val(),
                end_date: $('#end_date_create').val() ? $('#date_create').val() + ' ' + $('#end_date_create').val() : null,
                location: $('#location_create').val(),
            },
            beforeSend: function() {
                btn_submit.addClass('btn-progress disabled')
                $('.is-invalid').removeClass('is-invalid')
                $('.invalid-feedback').remove()
            },
            complete: function(e) {
                var response = e.responseJSON
                console.log(response);
                setTimeout(function() {
                    btn_submit.removeClass('btn-progress disabled')
                    if (response.success) {
                        reloadEvents($event_container)
                        $event_create_modal.modal('hide')
                        $this.trigger('reset')
                    } else
                        $.each(response.errors, function(k, v) {
                            $('#' + k + '_create').addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
                        })
                }, 300)
            }
        })

    })

    function reloadEvents(container) {
        $.get("{{route('event.index')}}", function(data) {
            container.html(data.html)
        });
    }
</script> -->
@endpush