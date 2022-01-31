<section class="date pt-150 pb-150 overlay">
    <div class="background-img" style="filter: brightness(80%);">
        <img src="{{asset('storage/media/'.$wedding->hero->first()->filename)}}" alt="">
    </div>
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row">
            <!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
            <h2 class="indent">Wedding date</h2>
            <div class="col-sm-12 text-center">
                <div class="block-content front-p">
                    <h2 class="typo">Catat tanggalnya</h2>
                    <p class="lead mt-80 text-white">{{date('l, d F Y',strtotime($wedding->main_date))}} </p>
                    <span class="countdown text-white"></span>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</section>

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.countdown').countdown('{{$wedding->main_date}}', function(event) {
            $(this).html(event.strftime('%D days %H:%M:%S'));
        });
    });
</script>
@endpush
