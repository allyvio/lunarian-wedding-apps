<section id="section-countdown" aria-label="section-countdown" class="pt60 pb60 text-light" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Time left until event</h3>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="spacer-double"></div>
                <div id="main-date-countdown" class="wow fadeIn" data-main-date="{{$wedding->main_date}}"></div>
                <div class="spacer-single"></div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            var cd_container = $('#main-date-countdown'), dt = cd_container.data('main-date');
            cd_container.countdown({
                until: new Date(dt)
            });
        });
    });
</script>
@endpush