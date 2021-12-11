<section id="wedding" class="wedding bg-grey pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-100">
                <h1 class="title">Acara pernikahan</h1>
                <p>Upacara utama - Pesta pernikahan</p>
            </div>
        </div>
        <div style="display: flex;justify-content: center;flex-flow: wrap row;list-style: none;">
            @foreach($wedding->events as $event)
            <div class="text-center" style="padding: 0 20px;margin-bottom:30px;width: 500px;">
                <div class="block-event center-block swap" style="height: 400px;">
                    <div class="circle-dashed relative bg">
                        <div class="round-circle before">
                            <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                                <circle cx="50%" cy="50%" r="50" />
                            </svg>
                            <i class="icon-glass"></i>
                        </div>
                    </div>
                    <p class="mt-30 mb-30">{{$event->title}}<span>{{date('l, d F Y',strtotime($event->date))}}<br> {{$event->start_date}} - {{$event->end_date ? $event->end_date : 'selesai'}}</span></p>
                    <p>Alamat <span><em>{{$event->location ?? 'not set'}}</em></span></p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <p class="lead mt-80 size-m">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                    excepturi sint occae.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore. </p>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</section>