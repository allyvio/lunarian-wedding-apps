$(document).on('click', '.btn-number', function (e) {
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
    'change': function (e) {
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
        return rsvpCount(this)
    },
    keydown: function (e) {
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
    focusin: function () {
        $(this).data('oldValue', $(this).val());
    }
}, '.input-number');

function rsvpConfirm(selector) {
    var $this = $(selector),
        url = '/{wedding}/rsvp/{code}/confirm',
        wedding = $this.data('wedding'),
        code = $this.data('invitation'),
        rsvp_container = $('#rsvp-container'),
        data = $this.data('rsvp')
    url = url.replace('{wedding}', wedding).replace('{code}', code)
    $.ajax({
        url: url,
        method: 'post',
        data: {
            rsvp_confirm: data
        },
        beforeSend: function () {
            $this.addClass('btn-progress disabled')
        },
        success: function (response) {
            setTimeout(function () {
                rsvp_container.html(response.html)
            }, 50)
        }
    })
}
function rsvpCount(input) {
    var $this = $(input),
        url = "/invitation/{invitation}/count",
        invitation = $this.data('invitation')
    url = url.replace('{invitation}', invitation)
    $.ajax({
        url: url,
        method: 'post',
        data: {
            rsvp_count: $this.val()
        },
        beforeSend: function () {
            $this.parent().addClass('btn-progress')
        },
        complete: function (a) {
            setTimeout(function () {
                $this.parent().removeClass('btn-progress')
            }, 100)
        }
    })
}
$('#rsvp-form').on('submit', function (e) {
    e.preventDefault();
    var $this = $(this),
        url = $this.attr('action'),
        wedding = $this.data('wedding'),
        code = $this.find('#rsvp-code').val(),
        button = $this.find('button[type="submit"]')
    url = url.replace(':wedding', wedding).replace(':code', code)

    $.ajax({
        url: url,
        method: 'post',
        beforeSend: function () {
            button.addClass('btn-progress')
        },
        success: function (res) {
            var redirect = '/{wedding}/{code}',
                slug = $this.data('wedding-slug'),
                redirect = redirect.replace('{wedding}', slug).replace('{code}', code);
            !res ? iziToast.error({
                displayMode: 'replace',
                title: 'Invalid',
                message: 'Invitation not found',
                position: 'topCenter'
            }) : window.location.href = redirect

        },
        complete: function (a, b, c) {
            button.removeClass('btn-progress')
        }
    })
})