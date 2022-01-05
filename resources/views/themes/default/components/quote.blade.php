@if($wedding->quote)
<section id="section-quote" aria-label="section-quote-1" class="text-light" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- <blockquote class="very-big text-light wow fadeIn"> -->
                <div class="ql-editor" style="background-color: transparent;border: none;">
                    {!!$wedding->quote!!}
                </div>
                <!-- <span>Maya Angelou</span> -->
                <!-- </blockquote> -->
            </div>
        </div>
    </div>
</section>
@endif
@push('scripts')
<script>
    // var myobj = JSON.parse('{ "hello":"world" }');
    // console.log(myobj);
    // var delta = '{!!$wedding->quote!!}'
    // console.log(JSON.parse(delta));
</script>
@endpush