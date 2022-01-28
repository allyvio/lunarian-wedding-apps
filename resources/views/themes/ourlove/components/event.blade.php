<section id="events" class="our-story section-boxed">
  <div class="container">
    <div class="section-title">
      <h2>Acara Pernikahan</h2>
      <!-- <p class="intro">Beberapa Rangkaian Acara Pernikahan Yang Akan Dilaksanakan.</p> -->
      </div>
      <div class="grid">
        @foreach($wedding->events as $event)
        <div class="event-block">
          <div class="content">
            <div class="event-title">
              <h3>{{$event->title}}</h3>
            </div>
            <div class="event-info">
              <div class="event-date"><i class="fa fa-calendar"></i> {{date('l, d F Y',strtotime($event->date))}}</div>
              <div class="event-time"><i class="fa fa-clock-o"></i> {{$event->start_date}} - {{$event->end_date ?? 'selesai'}}</div>
              @if(filter_var($event->location, FILTER_VALIDATE_URL))
              <div class="mb-3"><i class="fa fa-map-marker"></i> Lokasi Google Maps</div>
              <iframe src="{{$event->location}}" width="100%" height="300" frameborder="0"></iframe>
              @else
              <div class="event-address"><i class="fa fa-map-marker"></i> {{$event->location ?? 'not set'}}</div>
              @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
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
