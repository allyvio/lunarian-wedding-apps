<div class="stage-title my-4">
  <h5 class="h1 mb-0" style="text-align:center;">Pilih Paket</h5>
  <p class="mb-0" style="text-align:center;">Kami menawarkan paket dengan harga spesial</p>
</div>
<form id="package-form" data-stage="package">
  <div class="row row-example">
    @foreach(\App\Models\Package::all() as $package)
    <div class="col col-md-1">
      <span>
        <div class="custom-control custom-radio">
          <input name="package_id" class="custom-control-input" id="package-{{$package->id}}" value="{{$package->id}}" type="radio" {{$package->id == 1 ? 'checked' :'' }}>
          <label class="custom-control-label" for="package-{{$package->id}}"></label>
        </div>
      </span>
    </div>
    <label for="package-{{$package->id}}" class="col-md-11">
      <span style="cursor:pointer;">
        <div class="card-header">
          <h3 class="mb-0">Paket {{ucfirst($package->name)}}</h3>
        </div>
        <div class="card-body">
          <div class="row no-gutters">
            <div class="col-6 col-md-8">
              <p class="description"><i class="fas fa-user mr-2"></i> {{$package->count}} Undangan</p>
              <p class="description"><i class="ni ni-email-83 mr-2"></i>10 E-mail</p>
            </div>
            <div class="col-6 col-md-4">
              <p class="description" style="text-align:right"> <s>Rp.{{$package->value}}</s> </p>
              <p class="description text-success font-weight-bold" style="text-align:right;">{!!$package->price ? 'Rp.'. number_format($package->price,2,",",".") : 'GRATIS'!!}</p>
            </div>
          </div>
        </div>
      </span>
    </label>
    @endforeach
  </div>
</form>