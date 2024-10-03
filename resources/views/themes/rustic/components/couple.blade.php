<section id="friend" class="friend pt-120 pb-120" style="background-color: #F2F1EF !important">
    <div style="bottom: -1px; overflow: hidden; position: absolute; left: 0; width: 100%; line-height: 0;direction: ltr;" data-negative="true">
        <svg style="width: calc(257% + 1.3px); height: 100px; display: block;position: relative;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" style="fill: #FFFFFF;" d="M615.2,96.7C240.2,97.8,0,18.9,0,0v100h1000V0C1000,19.2,989.8,96,615.2,96.7z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-100 animasi-zooin animated">
                {{-- <h1 class="title">Kami Terikat</h1> --}}
                <p class="title-couple">Sang Mempelai</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12 text-center">
                <div class="img-round mb-5 animasi-zooin animated">
                    <div class="img" ><img style="max-width: none !important; object-position: 50% 20%" src="{{asset('storage/couple/' . $wedding->calon_pria_photo)}}" alt=""></div>
                </div>
                
                <div class="animasi-fadeup animated">
                    <p class="name-couple">{{$wedding->calon_pria}}</p>
                    <p class="ortu mb-0">Putra dari</p>
                    <p class="ortu">{{$wedding->ortu_calon_pria}}</p>
                    <a href="https://www.instagram.com/{{$wedding->ig_calon_pria}}" target="_blank" style="text-decoration: none !important" class="ortu"><i aria-hidden="true" class="fab fa-instagram"></i> {{$wedding->ig_calon_pria}}</a>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12 d-sm-block d-md-none d-xl-none text-center my-5">
                <p class="name-couple">&</p>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12 text-center">
                <div class="img-round mb-5 animasi-zooin animated">
                    <div class="img"><img style="max-width: none !important; object-position: 50% 20%" src="{{asset('storage/couple/' . $wedding->calon_wanita_photo)}}" alt=""></div>
                </div>
                
                <div class="animasi-fadeup animated">
                    <p class="name-couple">{{$wedding->calon_wanita}}</p>
                    <p class="ortu mb-0">Putri dari</p>
                    <p class="ortu">{{$wedding->ortu_calon_wanita}}</p>
                    <a href="https://www.instagram.com/{{$wedding->ig_calon_wanita}}" target="_blank" style="text-decoration: none !important" class="ortu"><i aria-hidden="true" class="fab fa-instagram"></i> {{$wedding->ig_calon_wanita}}</a>
                </div>
            </div>
            
        </div>
        {{-- <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center mt-50">
                <div class="circle-dashed bg green relative">
                    <div class="round-circle  green before">
                        <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                            <circle cx="50%" cy="50%" r="50" />
                        </svg>
                        <i class="icon-quote"></i>
                    </div>
                </div>
                <div class="block-quote">
                    <!-- <blockquote class="mt-20">Friendship... is not something you learn in school. But if you
                        haven't learned the meaning
                        of friendship, you really haven't learned anything.
                    </blockquote> -->
                    <h2 class="heavy uppercase mt-20">{{$wedding->description ?? ''}}</h2>
                </div>
            </div>
        </div> --}}
    </div>
</section>
