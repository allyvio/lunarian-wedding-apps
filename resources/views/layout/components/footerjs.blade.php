@stack('modals')
<!-- Core -->
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{asset('vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
<script src="{{asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
<script src="{{asset('vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script src="{{asset('vendor/izitoast/izitoast.min.js')}}"></script>
<script src="{{asset('vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- validasi -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!-- sweetalert -->
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<!-- Argon JS -->
<script src="{{asset('js/argon.js')}}"></script>
<!-- will be moved -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script type="text/javascript">
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
                    $form.find('#' + k).prop('checked', v);
                else $form.find('#' + k).val(v);
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
                title: $form.find('#title').val(),
                description: $form.find('#description').val(),
                start_date: $form.find('#date').val() + " " + $form.find('#start_date').val(),
                end_date: $form.find('#end_date').val() ? $form.find('#date').val() + " " + $form.find('#end_date').val() : null,
                location: $form.find('#location').val(),
            },
            beforeSend: function() {
                btn_submit.addClass('btn-progress disabled')
                $('.is-invalid').removeClass('is-invalid')
                $('.invalid-feedback').remove()
            },
            complete: function(e) {
                var response = e.responseJSON
                setTimeout(function() {
                    btn_submit.removeClass('btn-progress disabled')
                    if (response.success) {
                        reloadEvents($event_container)
                        $event_modal.modal('hide')
                    } else
                        $.each(response.errors, function(k, v) {
                            $form.find('#' + k).addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
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
                    $form.find('input[name="' + k + '"]').addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
                })
        })
    })

    // EVENT CREATE FORM HANDLER 
    $event_create_modal.on('shown.bs.modal', function(e) {
        var wedding = $(e.relatedTarget).data('wedding')
        $(this).find('form').data('wedding', wedding)
    }).find('form').on('submit', function(e) {
        e.preventDefault()
        var $form = $(this),
            action = $form.attr('action'),
            wedding = $form.data('wedding'),
            btn_submit = $form.find('[type="submit"]')

        $('.is-invalid').removeClass('is-invalid')
        $('.invalid-feedback').remove()
        $.ajax({
            url: action,
            method: 'post',
            data: {
                wedding_id: wedding,
                title: $form.find('#title_create').val(),
                description: $form.find('#description_create').val(),
                start_date: $form.find('#date_create').val() + ' ' + $form.find('#start_date_create').val(),
                end_date: $form.find('#end_date_create').val() ? $form.find('#date_create').val() + ' ' + $form.find('#end_date_create').val() : null,
                location: $form.find('#location_create').val(),
            },
            beforeSend: function() {
                btn_submit.addClass('btn-progress disabled')
                $('.is-invalid').removeClass('is-invalid')
                $('.invalid-feedback').remove()
            },
            complete: function(e) {
                var response = e.responseJSON
                setTimeout(function() {
                    btn_submit.removeClass('btn-progress disabled')
                    if (response.success) {
                        reloadEvents($event_container)
                        $event_create_modal.modal('hide')
                        $form.trigger('reset')
                    } else
                        $.each(response.errors, function(k, v) {
                            $form.find('#' + k + '_create').addClass('is-invalid').after(`<span class="invalid-feedback">` + v + `</span>`)
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
</script>
@stack('scripts')
