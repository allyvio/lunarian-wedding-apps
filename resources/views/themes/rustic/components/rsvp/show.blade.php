<div style="background-color: #F2F1EF !important;">
    <div class="container rsvp-container" >
        <div class="row rsvp-overlay row-event" style="opacity: 0.98; background: url(&quot;https://akadinvitation.id/img/brand/bg.jpg&quot;); ">
            
            <div class="content-rsvp mb-5">
                <div class="title-rsvp my-5 animasi-zooin animated">
                    <p>Rsvp</p>
                </div>
                
                <div class="description-rsvp animasi-fadeup animated">
                    <p>
                        Bantu kami mempersiapkan jamuan yang hangat untuk anda semua dengan mengirimkan konfirmasi kehadiran melalui form berikut ini:
                    </p>
                </div>
                
                <div class="form-rsvp mt-1 animasi-fadeup animated">
                    <div class="form-group">
                        <select class="form-control-rsvp form-control" name="konfirmasi" id="konfirmasi">
                            <option value="ya" selected>Iya, Saya akan Datang</option>
                            <option value="tidak">Maaf, Saya Tidak Bisa Datang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control-rsvp form-control" name="tamu" id="tamu">
                            <option value="0" selected>- Jumlah Tamu -</option>
                            <option value="1" selected>1 Tamu</option>
                            <option value="2">2 Tamu</option>
                        </select>
                    </div>
                    
                    <input type="hidden" name="code" id="codeRsvp" value="{{$wedding->invitation->code}}">
                    <input type="hidden" name="wedding" id="weddingRsvp" value="{{$wedding->slug}}">
                    
                    <button type="button" id="rsvp-button" onclick="rsvpConfirm2()" class="btn btn-secondary btn-block mb-2 button-rsvp" style="background-color: #A2A095">
                        <i aria-hidden="true" class="fas fa-address-book"></i>
                        Konfirmasi Hadir
                    </button>
                </div>
                @if ($wedding->invitation->rsvp_at)
                <div class="response-rsvp description-rsvp" style="display: block">
                    <p>
                        Terimakasih atas konfirmasi Anda
                    </p>
                </div>
                @else 
                <div class="response-rsvp description-rsvp" style="display: none">
                    <p>
                        Terimakasih atas konfirmasi Anda
                    </p>
                </div>
                @endif
            </div>
        </div>
        
    </div>
    <!--End container-->
</div>

