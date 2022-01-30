<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$wedding->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Lunarian Digital Invitation">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,digital invitation,lunarian id">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/normalize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/main.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/izitoast/iziToast.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/quill/dist/quill.snow.css')}}">
    <style>
        .grid {
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            grid-auto-rows: 20px;
        }
    </style>
</head>
