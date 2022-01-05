@if($wedding->quote)
<section id="section-quote" aria-label="section-quote-1" class="text-light" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- <blockquote class="very-big text-light wow fadeIn"> -->
                <div class="quote">
                    {{$wedding->quote}}
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
    var myobj = JSON.parse('{ "hello":"world" }');
    console.log(myobj);
    var delta = '{!!$wedding->quote!!}'
    console.log(JSON.parse(delta));
    // console.log(@php json_decode($wedding->quote)@endphp);
    // var quill = new Quill('.quote').setContents('{{$wedding->quote}}')
    // asd(delta)

    // function asd(inputDelta) {
    //     var tempCont = document.createElement("div");
    //     (new Quill(tempCont)).setContents(inputDelta);
    //     return tempCont.getElementsByClassName("ql-editor")[0].innerHTML;
    // }
</script>
@endpush