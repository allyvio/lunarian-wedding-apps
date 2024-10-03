<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>{{$wedding->title}}</title>
    <meta name="description" content="Lunarian Digital Invitation">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,digital invitation,lunarian id">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">
    
    <!-- Css -->
    <link href="{{asset('assets/themes/rustic/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/themes/rustic/css/base.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/themes/rustic/css/main.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/themes/rustic/css/venobox.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/themes/rustic/css/fonts2.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('vendor/izitoast/iziToast.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/quill/dist/quill.snow.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Kristi|Lato:100,300,300i,400,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Staatliches&family=Titan+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .grid {
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            grid-auto-rows: 20px;
        }
        
        @media only screen and (max-width: 479px) {
            .grid{
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }
        
        .judul {
            font-family: 'Lobster', cursive;
            font-size: 50px;
            color: white;
            line-height: 1
        } 
    </style>
</head>
