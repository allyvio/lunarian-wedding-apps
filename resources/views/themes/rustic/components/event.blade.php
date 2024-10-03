<section id="wedding" class="wedding" style="background-color: #FFFFFF !important">
    <div class="container event-container" >
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="title-with-love mt-5">With Love</p>
            </div>
            <div class="col-sm-12 text-center px-4 py-4">
                <p class="content-with-love">Dengan segala kerendahan hati dan dengan ucapan syukur atas karunia Tuhan, kami menyampaikan kabar bahagia pernikahan kami yang akan dilaksanakan pada:</p>
            </div>
        </div>
        <div class="row border-radius-event row-event" style="opacity: 0.98; background: url(&quot;https://akadinvitation.id/img/brand/bg.jpg&quot;); ">
            {{-- <div class="background-img" style="opacity: 0.98;">
                <img src="{{asset('img/brand/bg.jpg')}}" alt="">
            </div> --}}
            @foreach($wedding->events as $key => $event)
            <div class="col-sm-12 col-md-6 col-xl-6 text-center col-event">
                <section class="content border-radius-event" style="background-color: #1E1E1E; position: relative">
                    <div class="border-radius-event overlay-event" style="background: url('{{asset('storage/media/'.$wedding->hero[$key]->filename)}}'); background-position: center center; background-size: cover; "></div>
                    <div class="content-event">
                        @if ($key == 0)
                        <div class="img-event">
                            <img src="https://akadinvitation.id/img/akad.png" alt="">
                        </div>
                        @else 
                        <div class="img-event">
                            <img src="https://akadinvitation.id/img/resepsi.png" alt="">
                        </div>
                        @endif
                        <div class="title-event animasi-zooin animated">
                            <p class="judul">{{$event->title}}</p>
                            <p class="tanggal"><span>{{\Carbon\Carbon::parse($event->date)->isoFormat('dddd, D MMMM Y')}}<br> {{$event->start_date}} - {{$event->end_date ? $event->end_date : 'selesai'}}</span></p>
                        </div>
                        
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="fas fa-home"></i>			
                        </div>
                        
                        <div class="title-event mt-3 animasi-fadeup animated">
                            <p class="tanggal text-uppercase mb-0">
                                {{$event->description}}
                            </p>
                        </div>
                        
                        <div class="title-event mt-1 animasi-fadeup animated" style="font-size: 12px">
                            <p class="tanggal mb-0">
                                {{$event->location}}
                            </p>
                        </div>
                        
                        @if ($event->maps)
                        <a href="{{$event->maps}}" target="_blank" class="button-lokasi mt-3">
                            <i class="fa fa-map-pin"></i>
                            Lihat Lokasi
                        </a>
                        @endif
                    </div>
                </section>
            </div>
            @endforeach
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</section>
@push('scripts')
<script>
    function resizeGridItem(item) {
        grid = document.getElementsByClassName("grid")[0];
        rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
        rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
        rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
        item.style.gridRowEnd = "span " + rowSpan;
    }
    
    function resizeAllGridItems() {
        allItems = document.getElementsByClassName("event-block");
        for (x = 0; x < allItems.length; x++) {
            resizeGridItem(allItems[x]);
        }
    }
    
    function resizeInstance(instance) {
        item = instance.elements[0];
        resizeGridItem(item);
    }
    
    window.onload = resizeAllGridItems();
    window.addEventListener("resize", resizeAllGridItems);
    
    allItems = document.getElementsByClassName("event-block");
</script>
@endpush
