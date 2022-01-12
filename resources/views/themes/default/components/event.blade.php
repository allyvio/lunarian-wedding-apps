<section id="section-event">
    <div class="container">
        <?php $c = 1;
        foreach ($wedding->events as $event) { ?>
            @if ($c % 2 == 0)
            <div class="row">
                <div class="col-md-5 pt40 pb40 text-right wow fadeIn" data-wow-delay=".5s">
                    <h3>{{$event->title}}</h3>
                    {{date('l, d F Y',strtotime($event->date))}}<br> {{$event->start_date}} - {{$event->end_date ? $event->end_date : 'selesai'}}<br>
                    @if(filter_var($event->location, FILTER_VALIDATE_URL))
                    Lokasi Google Maps
                    <iframe src="{{$event->location}}" width="100%" height="300" frameborder="0"></iframe>
                    @else
                    {{$event->location ?? ''}}
                    @endif
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <img src="{{asset('assets/themes/default/images/misc/4.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInRight">
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/themes/default/images/misc/3.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInLeft">
                </div>
                <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                    <h3>{{$event->title}}</h3>
                    {{date('l, d F Y',strtotime($event->date))}}<br> {{$event->start_date}} - {{$event->end_date ? $event->end_date : 'selesai'}}<br>
                    @if(filter_var($event->location, FILTER_VALIDATE_URL))
                    Lokasi Google Maps
                    <iframe src="{{$event->location}}" width="100%" height="300" frameborder="0"></iframe>
                    @else
                    {{$event->location ?? ''}}
                    @endif
                </div>
            </div>
            @endif
            <div class="spacer-double"></div>
        <?php $c++;
        } ?>
    </div>
</section>