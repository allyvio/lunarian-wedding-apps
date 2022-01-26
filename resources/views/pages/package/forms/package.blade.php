<div class="stage-title my-4">
  <h5 class="h1 mb-0" style="text-align:center;">Pilih Paket</h5>
  <p class="mb-0" style="text-align:center;">Kami menawarkan paket dengan harga spesial</p>
</div>

<form id="package-form" data-stage="package">
  <div class="row row-example">
    @foreach(\App\Models\Package::all() as $package)
    @if($package->id == 1)
    <div class="card-header bg-transparent">
        <span class="badge badge-pill badge-warning">Diskon 30%</span>
    </div>
    <label for="package-{{$package->id}}" class="col-md-12">
      <span style="cursor:pointer;">
        <div class="card-header">
          <div class="custom-control custom-radio">
            <input name="package_id" class="custom-control-input" id="package-{{$package->id}}" value="{{$package->id}}" type="radio" {{$package->id == 1 ? 'checked' :'' }}>
            <label class="custom-control-label" for="package-{{$package->id}}"><h3 class="mb-0">Paket {{ucfirst($package->name)}}</h3></label>
          </div>
        </div>
        <div class="card-body">
          <div class="row no-gutters">
            <div class="col-6 col-md-12">
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Foto Sebanyak {{$package->count_galleri}} Gambar" style="margin-bottom:10px;"><i class="fas fa-image mr-2"></i>Galeri</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Kutipan" style="margin-bottom:10px;"><i class="fas fa-book mr-2"></i>Kutipan</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Alamat Acara Pernikahan" style="margin-bottom:10px;"><i class="fas fa-map-marker-alt"></i> Navigasi</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Memasukkan Data Diri Pengantin dan Detail Info Acara Pernikahan" style="margin-bottom:10px;"><i class="fas fa-user mr-2"></i>Informasi</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Jam Hitung Mundur Acara Yang Akan Dilaksanakan" style="margin-bottom:10px;"><i class="fas fa-clock mr-2"></i>Jam</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Edukasi Protokol Kesehatan" style="margin-bottom:10px;"><i class="fas fa-head-side-mask mr-2"></i>Protokol</button>
            </div>
          </div>
          <hr>
          <div class="col-md-12">
            <p class="description" style="float:left"> <s>{!!$package->value ? 'Rp.'. number_format($package->value,0,",",".") : 'GRATIS'!!}</s> </p>
            <p class="description text-success font-weight-bold" style="float:right;">{!!$package->price ? 'Rp.'. number_format($package->price,0,",",".") : 'GRATIS'!!}</p>
          </div>
        </div>
      </span>
    </label>
    @elseif($package->id == 2)
     <div class="card-header bg-transparent">
        <span class="badge badge-pill badge-warning">Diskon 45%</span>
    </div>
    <label for="package-{{$package->id}}" class="col-md-12">
      <span style="cursor:pointer;">
        <div class="card-header">
          <div class="custom-control custom-radio">
            <input name="package_id" class="custom-control-input" id="package-{{$package->id}}" value="{{$package->id}}" type="radio">
            <label class="custom-control-label" for="package-{{$package->id}}"><h3 class="mb-0">Paket {{ucfirst($package->name)}}</h3></label>
          </div>
        </div>
        <div class="card-body">
          <div class="row no-gutters">
            <div class="col-6 col-md-12">
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Foto Sebanyak {{$package->count_galleri}} Gambar" style="margin-bottom:10px;"><i class="fas fa-image mr-2"></i>Galeri</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Cerita Cinta Perjalanan Menuju Ke Pernikahan" style="margin-bottom:10px;"><i class="fas fa-heart mr-2"></i>Cerita</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Musik" style="margin-bottom:10px;"><i class="fas fa-music mr-2"></i>Musik</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Tamu Undangan Sebanyak {{$package->count_invitation}} orang Dan share undangan melalui WhatsApp" style="margin-bottom:10px;"><i class="fas fa-user mr-2"></i>Undangan</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Kutipan" style="margin-bottom:10px;"><i class="fas fa-book mr-2"></i>Kutipan</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Alamat Acara Pernikahan" style="margin-bottom:10px;"><i class="fas fa-map-marker-alt"></i> Navigasi</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Memasukkan Data Diri Pengantin dan Detail Info Acara Pernikahan" style="margin-bottom:10px;"><i class="fas fa-user mr-2"></i>Informasi</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Jam Hitung Mundur Acara Yang Akan Dilaksanakan" style="margin-bottom:10px;"><i class="fas fa-clock mr-2"></i>Jam</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Edukasi Protokol Kesehatan" style="margin-bottom:10px;"><i class="fas fa-head-side-mask mr-2"></i>Protokol</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Kolom Tanggapan Kehadiran Tamu" style="margin-bottom:10px;"><i class="fas fa-users mr-2"></i>RSVP</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Kolom Komentar Ucapan" style="margin-bottom:10px;"><i class="fas fa-columns mr-2"></i>Kolom Ucapan</button>
            </div>
          </div>
          <hr>
          <div class="col-md-12">
            <p class="description" style="float:left"> <s>{!!$package->value ? 'Rp.'. number_format($package->value,0,",",".") : 'GRATIS'!!}</s> </p>
            <p class="description text-success font-weight-bold" style="float:right;">{!!$package->price ? 'Rp.'. number_format($package->price,0,",",".") : 'GRATIS'!!}</p>
          </div>
        </div>
      </span>
    </label>
    @elseif($package->id == 3)
     <div class="card-header bg-transparent">
        <span class="badge badge-pill badge-warning">Diskon 50%</span>
    </div>
    <label for="package-{{$package->id}}" class="col-md-12">
      <span style="cursor:pointer;">
        <div class="card-header">
          <div class="custom-control custom-radio">
            <input name="package_id" class="custom-control-input" id="package-{{$package->id}}" value="{{$package->id}}" type="radio">
            <label class="custom-control-label" for="package-{{$package->id}}"><h3 class="mb-0">Paket {{ucfirst($package->name)}}</h3></label>
          </div>
        </div>
        <div class="card-body">
          <div class="row no-gutters">
            <div class="col-6 col-md-12">
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Foto Sebanyak {{$package->count_galleri}} Gambar" style="margin-bottom:10px;"><i class="fas fa-image mr-2"></i>Galeri</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Cerita Cinta Perjalanan Menuju Ke Pernikahan" style="margin-bottom:10px;"><i class="fas fa-heart mr-2"></i>Cerita</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Musik" style="margin-bottom:10px;"><i class="fas fa-music mr-2"></i>Musik</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Tamu Undangan Sebanyak {{$package->count_invitation}} orang Dan share undangan melalui WhatsApp" style="margin-bottom:10px;"><i class="fas fa-user mr-2"></i>Undangan</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Kutipan" style="margin-bottom:10px;"><i class="fas fa-book mr-2"></i>Kutipan</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Menambah Alamat Acara Pernikahan" style="margin-bottom:10px;"><i class="fas fa-map-marker-alt"></i> Navigasi</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Dapat Memasukkan Data Diri Pengantin dan Detail Info Acara Pernikahan" style="margin-bottom:10px;"><i class="fas fa-user mr-2"></i>Informasi</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Jam Hitung Mundur Acara Yang Akan Dilaksanakan" style="margin-bottom:10px;"><i class="fas fa-clock mr-2"></i>Jam</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Edukasi Protokol Kesehatan" style="margin-bottom:10px;"><i class="fas fa-head-side-mask mr-2"></i>Protokol</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Kolom Tanggapan Kehadiran Tamu" style="margin-bottom:10px;"><i class="fas fa-users mr-2"></i>RSVP</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Kolom Komentar Ucapan" style="margin-bottom:10px;"><i class="fas fa-columns mr-2"></i>Kolom Ucapan</button>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Terdapat Link Live Streaming" style="margin-bottom:10px;"><i class="fas fa-eye mr-2"></i>Link Live</button>
            </div>
          </div>
          <hr>
          <div class="col-md-12">
            <p class="description" style="float:left"> <s>{!!$package->value ? 'Rp.'. number_format($package->value,0,",",".") : 'GRATIS'!!}</s> </p>
            <p class="description text-success font-weight-bold" style="float:right;">{!!$package->price ? 'Rp.'. number_format($package->price,0,",",".") : 'GRATIS'!!}</p>
          </div>
        </div>
      </span>
    </label>
    @endif
    @endforeach
  </div>
</form>
