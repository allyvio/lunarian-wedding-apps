<div class="modal  fade" id="modal-invoice-detail" tabindex="-1" role="dialog" aria-labelledby="modal-admin-event-form" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-8">
                        <h2 class="text-brown">Pembayaran</h2>
                        <div class="mt-3 border p-2 py-2 rounded">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-2">
                                        <img src="{{asset('img/icons/mandiri_revisi.png')}}" alt="">
                                    </div>
                                    <h4 class="ml-2">
                                        <span class="text-muted">1430019272549</span> <br>
                                        <span class="font-weight-normal">Arizha Izzul Ilmi Nisa</span>
                                    </h4>
                                </div>
                                <div class="col-4">
                                    <div class="mb-2">
                                        <img src="{{asset('img/icons/ovo.webp')}}" alt="">
                                    </div>
                                    <h4 class="ml-2">
                                        <span class="text-muted">085157256687</span> <br>
                                        <span class="font-weight-normal">Moch Sihap Baharuddin</span>
                                    </h4>
                                </div>
                                <div class="col-4">
                                    <div class="mb-2">
                                        <img src="{{asset('img/icons/dana.webp')}}" alt="">
                                    </div>
                                    <h4 class="ml-2">
                                        <span class="text-muted">89508081359598007</span> <br>
                                        <span class="font-weight-normal">Arizha Izzul Ilmi Nisa</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-2 text-center">
                            <p>
                                Silahkan melakukan transfer ke merchant diatas, jika sudah melakukan tranfer harap konfirmasi ke admin 
                            </p>
                            <a href="https://api.whatsapp.com/send?phone=6281359598007" class="btn btn-brown " target="_blank">Konfirmasi Sekarang</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                <h2 class="text-brown"><b>AKAD.IN</b></h2>
                            </div>
                            <div class="col-auto">
                                <h3 class="text-muted text-right mb-0">Slug Website <br><span class="text-dark">{{$wedding->slug}}</span></h3>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h4>KEPADA</h4>
                            <h5>{{Auth::user()->name}}
                                <span class="text-muted">({{$wedding->title}})</span> <br>
                                <span class="font-weight-normal">{{Auth::user()->email}}</span>
                            </h5>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <h4 class=" text-muted">Produk</h4>
                            </div>
                            <div class="col-auto">
                                <h4 class=" text-muted">Harga</h4>
                            </div>
                        </div>
                        <div class="border-top border-bottom">
                            <div class="row my-2">
                                <div class="col">
                                    <div class="small">Paket {{$wedding->package->name}}</div>
                                </div>
                                <div class="col-auto">
                                    <div class="small">Rp. {{$wedding->package->price}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <h3 class="mb-0">Total</h3>
                            </div>
                            <div class="col-auto">
                                <h3 class="mb-0 text-primary">Rp. {{$wedding->package->price}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>