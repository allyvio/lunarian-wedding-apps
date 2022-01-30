 <section class="hero overlay">
     <div class="background-img">
         @if($wedding->has('hero')->count() > 0)
         @foreach($wedding->hero as $hero)
         <img src="{{asset('storage/media/'.$hero->filename)}}" alt="">
         @endforeach
         @endif
     </div>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img class="d-block w-100" src="{{asset('assets\themes\ourlove\img\hero-3.jpeg')}}" alt="First slide">
           <div class="carousel-caption d-none d-md-block">
             <div class="hs-section-title">
               <!-- <h1>Kita Akan Menikah</h1>
               <div class="text-center">
                   <h2 class="s2" style="font-style: italic; color:white;">{{$wedding->description ?? ''}}</h2>
               </div> -->
             </div>
           </div>
         </div>
         <div class="carousel-item">
           <img class="d-block w-100" src="{{asset('assets\themes\ourlove\img\hero-3.jpeg')}}" alt="First slide">
           <div class="carousel-caption d-none d-md-block">
             <div class="hs-section-title">
               <!-- <h1>Kita Akan Menikah</h1>
               <div class="text-center">
                   <h2 class="s2" style="font-style: italic; color:white;">{{$wedding->description ?? ''}}</h2>
               </div> -->
             </div>
           </div>
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>

     <!--Inner hero-->
     <div class="inner-hero">
         <!--Container-->
         <div class="container hero-content">
             <!--Row-->
             <div class="row">
                 <div class="col-sm-12 text-center">
                     <h1 class="large mb-20" style="font-family:italic;"> {{$wedding->calon_pria}} <br> &amp; <br> {{$wedding->calon_wanita}}</h1>
                     <div class="block-date-hero">
                         <div class="circle-dashed bg-n">
                             <div class="round-circle">
                                 <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                                     <circle cx="50%" cy="50%" r="50" />
                                 </svg>
                                 <i class="icon-heart"></i>
                             </div>
                         </div>
                         <ul>
                             <li>Catat Tanggalnya</li>
                             <li>{{date('d F Y',strtotime($wedding->main_date))}}</li>
                         </ul>
                     </div>
                 </div>
             </div>
             <!--End row-->
         </div>
         <!--End container-->
     </div>
     <!--End inner hero-->
 </section>