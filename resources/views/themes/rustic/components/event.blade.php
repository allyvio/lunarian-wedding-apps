<section id="wedding" class="wedding bg-grey pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-100">
                <h1 class="title">Acara pernikahan</h1>
                <p>Upacara utama - Pesta pernikahan</p>
            </div>
        </div>
        <div class="grid">
            @foreach($wedding->events as $event)
            <div class="event-block text-center" >
                <div class="content">
                    <div class="block-event center-block swap" style="padding: 30px;">
                        <div class="circle-dashed relative bg">
                            <div class="round-circle before">
                                <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                                    <circle cx="50%" cy="50%" r="50" />
                                </svg>
                                <i class="icon-glass"></i>
                            </div>
                        </div>
                        <p class="mt-30 mb-30">{{$event->title}}<span>{{date('l, d F Y',strtotime($event->date))}}<br> {{$event->start_date}} - {{$event->end_date ? $event->end_date : 'selesai'}}</span></p>
                        @if(filter_var($event->location, FILTER_VALIDATE_URL))
                        <p class="mb-10">Lokasi Google Maps</p>
                        <iframe src="{{$event->location}}" width="100%" height="300" frameborder="0"></iframe>
                        @else
                        {{$event->location ?? ''}}
                        <p>Alamat <span><em>{{$event->location ?? 'not set'}}</em></span></p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <p class="lead mt-80 size-m"></p>
            </div>
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