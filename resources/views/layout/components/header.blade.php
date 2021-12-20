<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{config('app.name')}}</title>
  <!-- Favicon -->
  <link rel="icon" href="favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/izitoast/izitoast.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/sweetalert2/dist/sweetalert2.min.css')}}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">

</head>
<style>
  .error {
    color: red;
    font-size: 12px;
  }
  .input-preview-label {
    text-align: center;
    line-height: 200px;
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
</style>