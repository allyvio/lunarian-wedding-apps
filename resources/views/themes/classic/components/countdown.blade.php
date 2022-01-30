<section id="wedding-day" class="wedding-day section-boxed">
    <div class="container">
        <div class="section-title">
            <h2>{{date('l, d',strtotime($wedding->main_date))}} <span class="main-color">{{date('F',strtotime($wedding->main_date))}} </span> {{date('Y',strtotime($wedding->main_date))}} </h2>
        </div>
        <!-- Counter -->
        <div id="count" class="count">
            <!-- You can edit HTML code of this block in the js/main.js -->
        </div>
    </div>
</section>
@push('scripts')
<script>
    $('#count').countdown('{{$wedding->main_date}}', function(event) {
            $(this).html(event.strftime('' + 
                '<div class="count-block days">%D<span class="count-label">day%!d</span></div>' + 
                '<div class="count-block hours">%H<span class="count-label">%!H:hour,hours;</span></div>' + 
                '<div class="count-block minutes">%M<span class="count-label">%!M:minute,minutes;</span></div>' + 
                '<div class="count-block seconds">%S<span class="count-label">%!S:second,seconds;</span></div>'
            ));
        });
</script>
@endpush