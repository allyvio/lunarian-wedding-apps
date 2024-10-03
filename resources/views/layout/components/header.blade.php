<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Buat undangan digitalmu dengan mudah, cepat, dan lebih berkesan dengan fitur yang kami sediakan.">
  <meta name="author" content="Lunarian ID">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{config('app.name')}}</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.min.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('vendor/izitoast/izitoast.min.css')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('vendor/sweetalert2/dist/sweetalert2.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/owlcarousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/owlcarousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/quill/dist/quill.snow.css')}}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">

  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/img/icons/icon.png')}}">

</head>
<style>
  .owl-theme .owl-dots {
    margin-top: 20px !important;
  }

  .owl-theme .owl-dots button {
    outline: none;
  }

  .owl-theme .owl-dots .owl-dot.active span {
    background-color: #6777ef;
  }

  .owl-item.active.center {
    left: 0;
  }

  .owl-item.active.center .item {
    box-shadow: 0 10px 20px 0 rgb(0 0 21 / 20%);
  }

  .owl-item:not(.center) {
    opacity: 0.7;
  }

  .slider .owl-nav [class*=owl-] {
    box-shadow: 0 10px 20px 0 rgb(0 0 21 / 20%);
    position: absolute;
    top: 50%;
    left: 35px;
    transform: translate(-50%, -50%);
    margin: 0;
    background-color: #fff !important;
    outline: none;
    border-radius: 50%;
    color: #fff;
    width: 40px;
    height: 40px;
  }

  .slider .owl-nav [class*=owl-]:hover {
    color: black !important;
  }

  .slider .owl-nav .owl-next {
    right: 0;
    left: initial;
  }

  .slider:hover .owl-nav [class*=owl-] {
    opacity: 1;
  }

  .slider .slider-caption {
    position: absolute;
    bottom: 10px;
    left: 0;
    width: 100%;
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.3);
    color: #fff;
    padding: 10px;
  }

  .slider .slider-caption .slider-title {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 5px;
  }

  .slider .slider-caption .slider-description {
    line-height: 26px;
    opacity: .8;
  }

  .error {
    color: red;
    font-size: 12px;
  }

  .input-preview-label {
    text-align: center;
    width: 200px;
    height: 200px;
    border: 2px dashed #ddd;
    border-radius: 3px;
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    color: lightgrey;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  @media (max-width: 576px) {
    .input-preview-label {
    text-align: center;
    width: 100%;
    height: 150px;
    border: 2px dashed #ddd;
    border-radius: 3px;
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    color: lightgrey;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }
}

  .input-preview-label.loader,.gallery-item.loader {
    pointer-events: none;
    opacity: 0.8;
  }

  .input-preview-label.loader:after,.gallery-item.loader:after {
    content: ' ';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 99;
    z-index: 99;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJsb2FkZXItMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQogd2lkdGg9IjQwcHgiIGhlaWdodD0iNDBweCIgdmlld0JveD0iMCAwIDUwIDUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MCA1MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTQzLjkzNSwyNS4xNDVjMC0xMC4zMTgtOC4zNjQtMTguNjgzLTE4LjY4My0xOC42ODNjLTEwLjMxOCwwLTE4LjY4Myw4LjM2NS0xOC42ODMsMTguNjgzaDQuMDY4YzAtOC4wNzEsNi41NDMtMTQuNjE1LDE0LjYxNS0xNC42MTVjOC4wNzIsMCwxNC42MTUsNi41NDMsMTQuNjE1LDE0LjYxNUg0My45MzV6Ij4NCjxhbmltYXRlVHJhbnNmb3JtIGF0dHJpYnV0ZVR5cGU9InhtbCINCiAgYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIg0KICB0eXBlPSJyb3RhdGUiDQogIGZyb209IjAgMjUgMjUiDQogIHRvPSIzNjAgMjUgMjUiDQogIGR1cj0iMC42cyINCiAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiLz4NCjwvcGF0aD4NCjwvc3ZnPg0K");
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: center;
  }

  .input-preview .remove {
    position: absolute;
    border: 1pt red solid;
    border-radius: 50%;
    color: red;
    top: 30px;
    right: 20%;
    z-index: 100;
    background-color: white;
    height: 30px;
    width: 30px;
    cursor: pointer;
    line-height: 20pt;
    font-weight: bold;
  }

  .input-preview .remove:hover {
    color: white;
    background-color: red;
  }

  .input-preview-label img {
    height: 100%;
    width: 100%;
    margin: 0;
  }

  .input-preview-label,
  .input-preview-label img {
    object-fit: cover;
    object-position: center center;
  }

  .input-preview-label:hover,
  .input-preview-label.is-dragover {
    border-color: #0275d8;
    color: #0275d8;
    cursor: pointer;
    filter: brightness(90%);
  }

  .input-preview-label.is-invalid {
    border-color: red;
  }

  #theme-selection img {
    object-fit: cover;
    height: 150px;
    width: 300px;
    object-position: bottom;
    cursor: pointer;
  }

  .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .gallery-item {
    margin: 10px;
    border-radius: 5px;
    box-sizing: content-box;
    height: 200px;
    width: 200px;
    overflow: hidden;
    display: inline-block;
    color: white;
    position: relative;
  }

  .gallery-item img {
    object-fit: cover;
    height: 100%;
    width: 100%;
    transform: scale(1.0);
    transition: transform 0.4s ease;
  }

  .caption {
    position: absolute;
    bottom: 5px;
    left: 20px;
    opacity: 0.0;
    transition: transform 0.3s ease, opacity 0.3s ease;
  }

  .transparent-box {
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0);
    position: absolute;
    top: 0;
    left: 0;
    transition: background-color 0.3s ease;
  }

  .gallery-item:hover img {
    transform: scale(1.1);
  }

  .gallery-item:hover .transparent-box {
    background-color: rgba(0, 0, 0, 0.5);
  }

  .gallery-item:hover .caption {
    transform: translateY(-20px);
    opacity: 1.0;
  }

  .gallery-item:hover {
    cursor: pointer;
  }

  .caption>p:nth-child(2) {
    font-size: 0.8em;
  }

/* button wa */
.act-btn{
      /* background:green; */
      display: block;
      width: 60px;
      height: 60px;
      line-height: 60px;
      text-align: center;
      color: white;
      font-size: 30px;
      font-weight: bold;
      border-radius: 50%;
      -webkit-border-radius: 50%;
      text-decoration: none;
      transition: ease all 0.3s;
      position: fixed;
      right: 30px;
      bottom:30px;
    }
.act-btn:hover{
  /* background: blue; */
  color: white;
}

html {
  scroll-behavior: smooth;
}

</style>
