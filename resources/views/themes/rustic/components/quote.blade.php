@if($wedding->quote)
<section class="just-married container-promise">
    
    <div class="background-img" style="z-index: -1; opacity: 0.98;">
        <img src="{{asset('img/brand/bg.jpg')}}" alt="">
    </div>
    
    
    <div style="bottom: -1px; overflow: hidden; position: absolute; left: 0; width: 100%; line-height: 0;direction: ltr;" data-negative="true">
        <svg style="width: calc(250% + 1.3px); height: 200px; transform: translateX(-50%) rotateY(180deg);     display: block;position: relative; left: 50%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" style="fill: #F2F1EF;" d="M615.2,96.7C240.2,97.8,0,18.9,0,0v100h1000V0C1000,19.2,989.8,96,615.2,96.7z"></path>
        </svg>
    </div>
    <div class="">
        <div class="row text-center">
            <div class="col-12">
                <div class="text-center pt-5" style="box-shadow: 0px 5px 42px 0px rgb(0 0 0 / 22%); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s; border-radius: 30px 30px 30px 30px;">
                    <div class="text-center animasi-zooin animated">
                        <img class="img-fluid img-promise" src="{{asset('storage/media/'.$wedding->hero->first()->filename)}}" alt="">
                    </div>
                    <div class="mt-5">
                        <h2 class="title-promise">The Promise</h2>
                    </div>
                    <div class="ql-editor animasi-zooin animated" style="background: transparent; border: none; margin-top: -50px">
                        {!!$wedding->quote!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endif
