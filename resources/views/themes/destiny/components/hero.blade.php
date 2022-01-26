 <section class="hero overlay">
     <div class="background-img">
         @if($wedding->has('hero')->count() > 0)
         @foreach($wedding->hero as $hero)
         <img src="{{asset('storage/media/'.$hero->filename)}}" alt="">
         @endforeach
         @endif
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