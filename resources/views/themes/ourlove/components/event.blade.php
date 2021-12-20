<section id="events" class="our-story section-boxed">
    <div class="container">
        <div class="section-title">
            <h2>Acara Pernikahan</h2>
            <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id tellus pretium
                quam sodales luctus. Nunc nec lacus ac arcu iaculis accumsan dictum a nulla. Nullam
                malesuada pellentesque turpis, eu elementum risus sagittis in. Nunc sit amet arcu justo.</p>
        </div>
        <div style="display: flex;justify-content: center;flex-flow: wrap row;list-style: none;">
            @foreach($wedding->events as $event)
            <div class="event-block" style="padding: 0 20px;margin-bottom:30px;width: 450px;">
                <div class="event-title">
                    <h3>{{$event->title}}</h3>
                </div>
                <div class="event-info">
                    <div class="event-date"><i class="fa fa-calendar"></i> {{date('l, d F Y',strtotime($event->date))}}</div>
                    <div class="event-time"><i class="fa fa-clock-o"></i> {{$event->start_date}} - {{$event->end_date ?? 'selesai'}}</div>
                    <div class="event-address"><i class="fa fa-map-marker"></i> {{$event->location ?? 'not set'}}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>