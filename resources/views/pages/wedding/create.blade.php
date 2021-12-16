@extends('layout.wrapper-dashboard-alt')

@section('dashboard-alt-content')
<style>

</style>
<div class="container px-lg-8">
    <div class="nav-wrapper wizard pt-0">
        <div class="wizard-inner" style="position: relative;">
            <div class="progress wizard-progress" style="position: absolute;width: 100%;margin: 0 auto;top: 50%;z-index: -1;">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <ul class="nav nav-pills d-flex justify-content-between nav-pills-circle" id="tabs_2" role="tablist">
                <li class="nav-item text-center m-0">
                    <a title="Start" class="nav-link rounded-circle active" id="start-tab" data-progress="0" data-toggle="tab" href="#tabs-start" role="tab" aria-controls="tabs-start" aria-selected="true">
                        <span class="nav-link-icon d-block"><i class="fa fa-pen"></i></span>
                    </a>
                </li>
                <li class="nav-item text-center m-0">
                    <a title="Pasangan" class="nav-link rounded-circle disabled" id="couple-tab" data-progress="33" data-toggle="tab" href="#tabs-couple" role="tab" aria-controls="tabs-couple" aria-selected="false">
                        <span class="nav-link-icon d-block"><i class="fa fa-heart"></i></span>
                    </a>
                </li>
                <li class="nav-item text-center m-0">
                    <a title="Tema" class="nav-link rounded-circle disabled" id="theme-tab" data-progress="66" data-toggle="tab" href="#tabs-theme" role="tab" aria-controls="tabs-theme" aria-selected="false">
                        <span class="nav-link-icon d-block"><i class="fas fa-clone"></i></span>
                    </a>
                </li>
                <li class="nav-item text-center m-0">
                    <a title="Acara" class="nav-link rounded-circle disabled" id="event-tab" data-progress="99" data-toggle="tab" href="#tabs-event" role="tab" aria-controls="tabs-event" aria-selected="false">
                        <span class="nav-link-icon d-block"><i class="fa fa-calendar"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-start" role="tabpanel" aria-labelledby="start-tab" data-stage="start">
                    @include('pages.wedding.forms.start')
                </div>
                <div class="tab-pane fade" id="tabs-couple" role="tabpanel" aria-labelledby="couple-tab" data-stage="couple">
                    @include('pages.wedding.forms.couple')
                </div>
                <div class="tab-pane fade" id="tabs-theme" role="tabpanel" aria-labelledby="theme-tab" data-stage="theme">
                    <form id="theme-form" action="{{route('wedding.store')}}" data-stage="theme">
                        <div id="theme-selection">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="theme-default">
                                        <img alt="thumbnail" src="{{asset('assets/themes/default/thumbnail.png')}}" class="img-thumbnail rounded mb-2">
                                    </label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="theme-default" name="theme" class="custom-control-input" value="default" checked>
                                        <label class="custom-control-label" for="theme-default">Tema Default</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="theme-destiny">
                                        <img alt="thumbnail" src="{{asset('assets/themes/destiny/thumbnail.png')}}" class="img-thumbnail rounded mb-2">
                                    </label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="theme-destiny" name="theme" class="custom-control-input" value="destiny">
                                        <label class="custom-control-label" for="theme-destiny">Tema Destiny</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="theme-ourlove">
                                        <img alt="thumbnail" src="{{asset('assets/themes/ourlove/thumbnail.png')}}" class="img-thumbnail rounded mb-2">
                                    </label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="theme-ourlove" name="theme" class="custom-control-input" value="ourlove">
                                        <label class="custom-control-label" for="theme-ourlove">Tema Ourlove</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="tabs-event" role="tabpanel" aria-labelledby="event-tab" data-stage="event">
                    <div id="events-container"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col">
            <button class="btn btn-icon btn-secondary" id="prev-step">
                <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                <span class="btn-inner--text">Kembali</span>
            </button>
        </div>
        <div class="col text-right">
            <button class="btn btn-icon btn-primary" id="next-step">
                <span class="btn-inner--text">Selanjutnya</span>
                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
            </button>
        </div>
    </div>
</div>
@endsection

@push('modals')
@include('pages.event.modals.event-date-form')
@include('pages.event.modals.event-create-form')
@include('pages.event.modals.event-form')
@endpush

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.nav-pills > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            var $target = $(e.target),
                $prevTarget = $(e.relatedTarget),
                $progress_bar = $('.progress-bar');
            $prevTarget.addClass('disabled')
            $('a[data-progress]').filter(function() {
                return $(this).data('progress') < $target.data('progress')
            }).addClass('bg-primary text-white');
            $('a[data-progress]').filter(function() {
                return $(this).data('progress') > $target.data('progress')
            }).removeClass('bg-primary text-white');
            $progress_bar.css('width', $target.data('progress') + '%')
            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $("#next-step").click(function(e) {
            var $active = $('.wizard .nav-pills li .active');
            nextTab($active);

        });
        $("#prev-step").click(function(e) {
            var $active = $('.wizard .nav-pills li .active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        var tabpanel = $('#' + $(elem).attr('aria-controls')),
            form = tabpanel.find('form')

        if (tabpanel.next().data('stage') == 'event')
            $.get("{{route('event.index')}}", function(data) {
                $('#events-container').html(data.html)
            });
        if (tabpanel.data('stage') == 'event') {
            $('#next-step').addClass('btn-progress disabled')
            $.post("{{route('wedding.store')}}", {
                stage: 'event',
            }, function(res) {
                window.location.href = "{{route('dashboard')}}";
            }).always(function(er) {
                $('#next-step').removeClass('btn-progress disabled')
            })
        } else {
            response = formChecker(form)
            setTimeout(function() {
                response.done(f => {
                    $(elem).parent().next().find('a[data-toggle="tab"]').removeClass('disabled').tab('show');
                }).fail(function(a, b, c) {
                    if (a.status === 422) {
                        $.each(a.responseJSON.errors, function(k, v) {
                            if (k == 'calon_pria_photo' || k == 'calon_wanita_photo')
                                $('input[name="' + k + '"]').addClass('is-invalid').prev().addClass('is-invalid').parent().append('<div class="invalid-feedback show">' + v + '</div>');
                            else
                                $('input[name="' + k + '"]').addClass('is-invalid').after('<div class="invalid-feedback">' + v + '</div>');
                        });

                    }
                }).always(a => {
                    if (a.html)
                        $('#events-container').html(a.html)
                    $('#next-step').removeClass('btn-progress disabled')
                })
            }, 200)
        }
    }

    function prevTab(elem) {
        $(elem).parent().prev().find('a[data-toggle="tab"]').removeClass('disabled').click();
    }

    function formChecker(form) {
        $('.is-invalid').removeClass('is-invalid')
        $('.invalid-feedback').remove()
        var $form = $(form),
            url = $form.attr('action'),
            fd = new FormData($form[0])
        fd.append('stage', $form.parent().data('stage'))
        var ajax = $.ajax({
            url: "{{route('wedding.store')}}",
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function() {
                $('#next-step').addClass('btn-progress disabled')
            }
        })
        return ajax;
    }
</script>
@endpush
