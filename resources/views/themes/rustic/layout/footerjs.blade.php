<script src="{{asset('assets/themes/rustic/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/themes/rustic/js/jquery.countdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/themes/rustic/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/themes/rustic/js/venobox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/themes/rustic/js/smooth-scroll.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/themes/rustic/js/script.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/izitoast/iziToast.min.js')}}"></script>
<script src="{{asset('vendor/quill/dist/quill.min.js')}}"></script>
<script src="{{asset('assets/themes/main.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
