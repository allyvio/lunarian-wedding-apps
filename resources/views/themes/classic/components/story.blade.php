@if($wedding->stories->count() > 0)
<section id="story" class="our-story section-boxed section-bg-color">
  <div class="container">
    <div class="section-title mb-5">
      <h2>Cerita kita</h2>
    </div>
    <?php $count = 1;
    foreach ($wedding->stories as $story) { ?>
      @if ($count % 2 == 0)
      <div class="row story-row">
        <div class="col-sm-12 col-md-5 col-md-push-7 story-block text-center">
        </div>
        <div class="col-sm-12 col-md-2 story-block text-center">
          <div class="story-date">
          </div>
        </div>
        <div class="col-sm-12 col-md-5 col-md-pull-7 story-block text-center">
          <h3>{{$story->title}}</h3>
          <h3 class="text-sm">{{$story->subtitle}}</h3>
          <p>{!! nl2br(e($story->content)) !!}</p>
        </div>
        <div class="vertical-line"></div>
      </div>
      @else
      <div class="row story-row">
        <div class="col-sm-12 col-md-5 story-block text-center">
        </div>
        <div class="col-sm-12 col-md-2 story-block text-center">
          <div class="story-date">
          </div>
        </div>
        <div class="col-sm-12 col-md-5 story-block text-center">
          <h3>{{$story->title}}</h3>
          <h3 class="text-sm">{{$story->subtitle}}</h3>
          <p>{!! nl2br(e($story->content)) !!}</p>
        </div>
        <div class="vertical-line"></div>
      </div>
      @endif
      <?php $count++;
    } ?>
  </div>
</section>
@endif
