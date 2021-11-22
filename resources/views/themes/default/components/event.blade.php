<section id="section-event">
    <div class="container">
        @foreach($wedding->events as $event)
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets/themes/default/images/misc/3.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInLeft">
            </div>
            <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                <h3>{{$event->title}}</h3>
                {{$event->start_date->format('l, d F Y')}}<br> {{$event->start_date->format('H:i')}} - {{$event->end_date ? $event->end_date->format('H:i') : 'selesai'}}<br>
                @if($event->location)
                {{$event->location}} <br>
                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn btn-custom mt30 popup-gmaps">View on map</a>
                @endif
            </div>
        </div>
        <div class="spacer-double"></div>
        @endforeach

        <!-- <div class="row">
            <div class="col-md-5 pt40 pb40 text-right wow fadeIn" data-wow-delay=".5s">
                <h3>Wedding Reception</h3>
                Saturday, 27 November 2021<br> 14:00 PM - 16:00 PM<br> 100 Mainstreet Center, Sydney<br>
                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn btn-custom mt30 popup-gmaps">View on map</a>
            </div>

            <div class="col-md-6 col-md-offset-1">
                <img src="{{asset('assets/themes/default/images/misc/4.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInRight">
            </div>
        </div> -->
    </div>
</section>