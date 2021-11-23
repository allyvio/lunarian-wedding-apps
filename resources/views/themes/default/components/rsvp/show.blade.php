<section style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="s2 id-color"><span>Dear {{$wedding->invitation->name}}</span></h2>
                <h2 class="deco id-color"><span>We Invite You</span></h2>
            </div>

            <div class="spacer-double"></div>

            <div class="row" id="rsvp-container">
                @include('themes.default.components.rsvp.response')
            </div>
            <div class="spacer-double"></div>
        </div>
    </div>
</section>

@push('scripts')
<script type="text/javascript">
    $(document).on('click', '.btn-number', function(e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });

    $(document).on({
        'change': function(e) {
            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            return rsvpCount($(this))
        },
        keydown: function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        },
        focusin: function() {
            $(this).data('oldValue', $(this).val());
        }
    }, '.input-number');

    function rsvpConfirm(selector) {
        var $this = $(selector),
            url = '{{route("rsvp.confirm",[":wedding",":code"])}}',
            wedding = '{{$wedding->slug}}',
            code = '{{$wedding->invitation->code}}',
            rsvp_container = $('#rsvp-container'),
            data = $this.data('rsvp')
        url = url.replace(':wedding', wedding).replace(':code', code)
        $.ajax({
            url: url,
            method: 'post',
            data: {
                rsvp_confirm: data
            },
            beforeSend: function() {
                $this.addClass('btn-progress disabled')
            },
            success: function(response) {
                setTimeout(function() {
                    rsvp_container.html(response.html)
                }, 500)
            }
        })
    }

    function rsvpCount(input) {
        var url = "{{route('rsvp.count',':invitation')}}"
        url = url.replace(':invitation', '{{$wedding->invitation->id}}')
        $.ajax({
            url: url,
            method: 'post',
            data: {
                rsvp_count: input.val()
            },
            beforeSend: function() {
                input.parent().addClass('btn-progress')
            },
            complete: function(a) {
                setTimeout(function() {
                    input.parent().removeClass('btn-progress')
                }, 500)
            }
        })
    }
</script>
@endpush