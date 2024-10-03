<div class="pt-50 pb-50" style="background-color: #F2F1EF !important">
    <div class="container rsvp-container" >
        <div class="row rsvp-overlay row-event" style="opacity: 0.98; background: url(&quot;https://akadinvitation.id/img/brand/bg.jpg&quot;); ">
            
            <div class="content-rsvp mb-3">
                <div class="title-rsvp my-5">
                    <p>Beri Hadiah</p>
                </div>
                
                <div class="description-rsvp animasi-zooin animated">
                    <p>
                        Bagi yang ingin memberikan hadiah untuk pernikahan kami, silakan mengirimkannya melalui :
                    </p>
                </div>
                
                
                @if ($wedding->id == 16)
                <div style="background-color: #F2F1EF; padding: 30px; border-radius: 10px; box-shadow: 1px 1px 23px 1px rgb(108 98 98 / 28%);" class="mb-3 animasi-fadeup animated" >
                    <div class="mb-3">
                        <img src="{{asset('img/bni_revisi.png')}}" alt="bni" width="150px"> 
                    </div>
                    <div class="description-rsvp">
                        <p class="mb-0">Silahkan transfer ke rekening</p>
                        <p class="mb-0">a.n Sulton Salafin Putra</p>      
                        <p id="p2">0900884940</p>
                    </div>
                    <button type="button" id="b2" class="btn btn-secondary mt-4 button-rsvp" style="background-color: #A2A095" onclick="copyToClipboard('#p2', '#b2')">
                        <i aria-hidden="true" class="fas fa-copy"></i>
                        Copy No. Rekening
                    </button>             
                </div>
                @endif
                

                <!--<div class="description-rsvp animasi-zooin animated mt-5">-->
                <!--    <p>-->
                <!--        Atau langsung mengirimkan hadiah ke alamat berikut: -->
                <!--    </p>-->
                <!--</div>-->

                <!--<div style="background-color: #F2F1EF; padding: 30px; border-radius: 10px; box-shadow: 1px 1px 23px 1px rgb(108 98 98 / 28%);" class="mb-3 animasi-fadeup animated" >-->
                <!--    <div class="mb-3">-->
                <!--        <img src="{{asset('img/giftbox.jpeg')}}" alt="giftbox" width="150px"> -->
                <!--    </div>-->
                <!--    <div class="description-rsvp">-->
                <!--        <p class="mb-0 text-capitalize">Rt 002 Rw 007 dusun sulakdoro desa lojejer kecamatan wuluhan kabupaten jember - 68162</p>-->
                <!--    </div>            -->
                <!--</div>-->
            </div>
        </div>
        
    </div>
    <!--End container-->
</div>

