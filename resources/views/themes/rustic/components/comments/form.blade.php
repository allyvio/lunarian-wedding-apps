{{-- <section id="gift" class="gift pt-50 pb-50">
    <!--Container-->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-7 text-center">
                <div class="block-registry">
                    <h2 class="h2 mb-50">Berikan Ucapan</h2>
                    <form class="registry-form " id="invitation-comment-form" method="post" action="{{route('comment.post',$wedding->invitation->id)}}">
                        <textarea placeholder="Ucapan" name='message' id="field-message" cols="30" rows="5" class="form-control"></textarea> <br>
                        <button type='submit' id="comment-form-submit" class="btn submit disabled">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div style="background-color: #F2F1EF !important; padding-bottom: 100px">
    <div class="container rsvp-container">
        <div class="row rsvp-overlay row-event" style="opacity: 0.98; background: url(&quot;https://akadinvitation.id/img/brand/bg.jpg&quot;); ">
            
            <div class="content-rsvp" style="padding: 0px 30px 0px 30px;">
                <div class="title-rsvp my-5 animasi-zooin animated">
                    <p style="font-size: 40px; line-height: 1em; letter-spacing: 2px;">Sampaikan Doa & Ucapan</p>
                </div>
                
                <form class="form-rsvp mt-1 registry-form" id="invitation-comment-form" method="post" action="{{route('comment.post',$wedding->invitation->id)}}">
                    <div class="form-group">
                        <textarea placeholder="Doa & Ucapan untuk {{$wedding->nama_calon_pria}} & {{$wedding->nama_calon_wanita}}" name='message' id="field-message" cols="30" rows="5" class="form-control" style="font-size: 14px"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-secondary btn-block mb-2 button-rsvp" style="background-color: #A2A095; border-radius: 30px; border: none">
                        <i aria-hidden="true" class="fas fa-address-book"></i>
                        Kirim Ucapan
                    </button>
                </form>
            </div>
            
            <div id="comments-container">
                @include('themes.rustic.components.comments.item')
            </div>
            
        </div>
        
    </div>
    <!--End container-->
</div>

