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
</style>
