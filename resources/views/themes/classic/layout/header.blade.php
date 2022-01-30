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
<<<<<<< HEAD:resources/views/themes/classic/layout/header.blade.php

    <link rel="stylesheet" href="{{asset('assets/themes/classic/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/classic/css/normalize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/classic/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/classic/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/classic/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/classic/css/main.css')}}" type="text/css">
=======
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/normalize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/themes/ourlove/css/main.css')}}" type="text/css">
>>>>>>> 63e81f373016a8456adc8f95996c5afa19486698:resources/views/themes/ourlove/layout/header.blade.php
    <link rel="stylesheet" href="{{asset('vendor/izitoast/iziToast.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/quill/dist/quill.snow.css')}}">
    <style>
        .grid {
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            grid-auto-rows: 20px;
        }

        @media only screen and (max-width: 479px) {
            .grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }
    </style>
</head>
