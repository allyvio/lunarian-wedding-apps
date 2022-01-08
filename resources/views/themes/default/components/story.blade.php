@if($wedding->stories->count() > 0)
<section class="mb60" style="background-color: white;">
    <div class="container">
        <div class="text-center mb50">
            <h1>Our Story</h1>
        </div>
        <ul class="timeline">
            <?php $count = 1;
            foreach ($wedding->stories as $story) {
                if ($count % 2 == 0) {
                    echo '<li class="timeline-inverted wow fadeInUp">';
                } else
                    echo '<li class="wow fadeInUp">'; ?>
                <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h3 class="mb0">{{$story->title}}</h3>
                        <h4 class="mt0">{{$story->subtitle}}</h4>
                        <div class="tiny-border"></div>
                    </div>
                    <div class="timeline-body">
                        <p>{{$story->content}}</p>
                    </div>
                </div>
                </li>
            <?php $count++;
            } ?>
        </ul>
    </div>
</section>
@endif