<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Lunarian ID">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Coming Soon - {{$wedding->title}}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">

</head>

<body class="bg-white">
    <!-- Main content -->
    <div class="main-content">
        <div class="container text-center py-4">
            <h1 class="display-3 font-weight-normal mb-5">Coming Soon</h1>
            <img src="{{asset('img/icons/glass-hour.svg')}}" height="350" alt="">
            <div class="mb-5"></div>
            <h1 class="display-2 ">{{$wedding->title}}</h1>
        </div>
    </div>
</body>

</html>