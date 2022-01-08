<section id="friend" class="friend bg-grey pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-100">
                <h1 class="title">Kami Terikat</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2 text-center">
                <div class="img-round">
                    <div class="img"><img src="{{asset('storage/couple/' . $wedding->calon_wanita_photo)}}" alt=""></div>
                    <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                        <circle cx="50%" cy="50%" r="50" />
                    </svg>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="img-round ">
                    <div class="img"><img src="{{asset('storage/couple/' . $wedding->calon_pria_photo)}}" alt=""></div>
                    <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                        <circle cx="50%" cy="50%" r="50" />
                    </svg>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-2 text-center">
                <h2 class="heavy mt-20">{{$wedding->calon_wanita}}<br><span>Bridesmaid </span></h2>
            </div>
            <div class="col-sm-4 text-center">
                <h2 class="heavy mt-20">{{$wedding->calon_pria}}<br><span>Groomsman </span></h2>
            </div>
        </div>
        <div class="row">
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
                    <h2 class="heavy uppercase mt-20">Sincerely, {{$wedding->calon_wanita}} & {{$wedding->calon_pria}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
