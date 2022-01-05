<script src="{{asset('assets/themes/destiny/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/themes/destiny/js/jquery.countdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/themes/destiny/js/venobox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/themes/destiny/js/smooth-scroll.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/themes/destiny/js/script.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/izitoast/iziToast.min.js')}}"></script>
<script src="{{asset('assets/themes/main.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
