@if($wedding->stories->count() > 0)
<section id="story" class="story pt-120 pb-120">
    <svg class="section-dashed" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="578px" xml:space="preserve">
        <path class="dashed-line" stroke-width="1" d="M30 0 v600 400" />
    </svg>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-100">
                <h1 class="title">Kisah Cinta Kita</h1>
                <p>Kisah cinta kita dan pernikahan</p>
            </div>
        </div>
        <div class="row mb-50">
            <div class="col-md-4 col-md-offset-4 col-md-8 col-md-offset-2 text-center mb-30">
                <h2 class="heavy">Ketika {{$wedding->calon_wanita}} Bertemu {{$wedding->calon_pria}}<br><span>Hari itu mengubah segalanya</span>
                </h2>
            </div>
        </div>
        <?php $count = 1;
        foreach ($wedding->stories as $story) { ?>
            @if ($count % 2 == 0)
            <div class="row story-row mt-50 mb-50">
                <div class="circle-dashed timeline bg">
                    <div class="round-circle bg before">
                        <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                            <circle cx="50%" cy="50%" r="50" />
                        </svg>
                        <i class="icon-heart"></i>
                    </div>
                </div>
                <div class="col-md-7">
                </div>
                <div class="col-md-5">
                    <div class="couple-story">
                        <h2 class="heavy mb-10">{{$story->title}}<br><span>{{$story->subtitle}}</span></h2>
                        <p>{!! nl2br(e($story->content)) !!}</p>
                    </div>
                </div>
            </div>
            @else
            <div class="row story-row mt-50 mb-50">
                <div class="circle-dashed timeline bg">
                    <div class="round-circle bg before">
                        <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                            <circle cx="50%" cy="50%" r="50" />
                        </svg>
                        <i class="icon-heart"></i>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="couple-story text-md-right">
                        <h2 class="heavy mb-10">{{$story->title}}<br><span>{{$story->subtitle}}</span></h2>
                        <p>{!! nl2br(e($story->content)) !!}</p>
                    </div>
                </div>
            </div>
            @endif
        <?php $count++;
        } ?>
        <div class="row mt-100">
            <div class="col-md-4 col-md-offset-4 col-md-8 col-md-offset-2 text-center mt-30">
                <h2 class="heavy">Happy ending kita akan menikah<br><span>Menghitung hari...</span></h2>
            </div>
        </div>
    </div>
</section>
@endif