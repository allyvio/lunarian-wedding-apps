<section style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h3>Get your invitation code</h3>
                <br>
                <p>Put your 6 digits invitation code below.</p>
                <form id="rsvp-form" action="{{route('invitation.rsvp',[':wedding',':code'])}}">
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
@push('scripts')
<script>
    $('#rsvp-form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this),
            url = form.attr('action'),
            wedding = '{{$wedding->id}}',
            code = form.find('#rsvp-code').val(),
            button = form.find('button[type="submit"]')
        url = url.replace(':wedding', wedding).replace(':code', code)

        $.ajax({
            url: url,
            method: 'post',
            beforeSend: function() {
                button.addClass('btn-progress')
            },
            success: function(res) {
                var redirect = '{{route("wedding.invitation",[":wedding",":code"])}}',
                    slug = '{{$wedding->slug}}',
                redirect = redirect.replace(':wedding', slug).replace(':code', code);
                !res ? iziToast.error({
                    title: 'Invalid',
                    message: 'Invitation not found',
                    position: 'topCenter'
                }) : window.location.href = redirect

            },
            complete: function(a, b, c) {
                button.removeClass('btn-progress')
            }
        })
    })
</script>
@endpush