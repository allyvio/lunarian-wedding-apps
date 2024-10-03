<!DOCTYPE html>
<html lang="en">
@include('themes.rustic.layout.header')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caudex&family=Dancing+Script:wght@600&family=Fjalla+One&family=Herr+Von+Muellerhoff&family=Parisienne&family=Tangerine:wght@700&family=Vujahday+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha512-TyUaMbYrKFZfQfp+9nQGOEt+vGu4nKzLk0KaV3nFifL3K8n7lzb8DayTzLOK0pNyzxGJzGRSw78e8xqJhURJ3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
/>
<style>
    
    .animasi-zooin {
        transform: translateY(150px);
        opacity: 0;
        transition: 1s all ease;
    }
    
    .animasi-zooin.active{
        transform: translateY(0);
        opacity: 1;
    }
    
    .animasi-fadeup {
        transform: translateY(150px);
        opacity: 0;
        transition: 1s all ease;
    }
    
    .animasi-fadeup.active{
        transform: translateY(0);
        opacity: 1;
    }
    
    
    .modal.fade{
        opacity:1;
    }
    .modal .fade .modal-dialog {
        transition: transform 2s ease-out;
        -webkit-transform: translate(0);
        -moz-transform: translate(0);
        transform: translate(0);
    }
    
    .animated{
        animation-duration: 2s !important;
    }
    
    .namaUndangan{
        color: #FFFFFF;
        font-family: 'Fjalla One', sans-serif;
        font-size: 20px;
        font-weight: 200;
        letter-spacing: 3.5px;
    }
    
    .invited{
        color: #FFFFFF;
        font-family: 'Fjalla One', sans-serif;
        font-size: 10px;
        font-weight: 200;
        letter-spacing: 2.5px;
    }
    
    .dear{
        color: #FFFFFF;
        font-family: 'Fjalla One', sans-serif;
        font-size: 12px;
        font-weight: 200;
        letter-spacing: 3.5px;
    }
    
    
    .topContent {
        margin-top: 100px
    }
    
    .button-undangan {
        border: none;
        color: white;
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 5px 10px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 30px;
        font-family: "catamaran";
        padding: 10px 15px 10px 18px;
    }
    
    .button-undangan {
        background-color: #FFFFFF;
        color: black;
        border: 2px solid #FFFFFF;
    }
    
    .button-undangan:hover {
        background-color: #000000;
        color: white;
        border: 5px solid #000000;
    }
    
    
    .form-control-rsvp {
        color: #6E6552 !important;
        font-family: "Caudex", Sans-serif;
        font-size: 12px;
        font-weight: bold;
        font-style: normal;
        line-height: 2em;
        letter-spacing: 1px;
        text-shadow: 0px 0px 0px #6e6552;
    }
    
    
    .owl-carousel .owl-stage {
        height: 100vh;
    }
    
    .owl-carousel .owl-item {
        height: 100%;
        overflow: hidden;
    }
    
    .owl-carousel .owl-item .item {
        height: 100%;
    }
    
    .heroBanner {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
    }
    
    .heroBanner {
        animation: 50s ease 0s normal none infinite running zoomEffect;
        -webkit-animation: 50s ease 0s normal none infinite running zoomEffect;
        -o-animation: 50s ease 0s normal none infinite running zoomEffect;
        -moz--o-animation: 50s ease 0s normal none infinite running zoomEffect;
    }
    
    @keyframes zoomEffect {
        from {
            transform: scale(1, 1);
        }
        to {
            transform: scale(2, 2);
        }
    }
    
    @media only screen and (max-width: 600px) {
        .namaPasangan{
            color: #FFFFFF;
            font-family: 'Tangerine', cursive;
            font-size: 50px;
            font-weight: 400;
            line-height: 95%;
            text-transform: capitalize;
        }
        
        .wedding_of {
            color: #FFFFFF;
            font-family: 'Fjalla One', sans-serif;
            font-size: 12px;
            font-weight: 200;
            letter-spacing: 3.5px;
        }
        
        .imageModal {
            width: 100%; 
            height: 100vh;
            max-height: inherit !important;
            object-fit: cover;
            position: absolute;
            background-position: center center;
            background-repeat: no-repeat;
        }
        
        .countdown-item {
            margin-right: calc( 7px/2 );
            background-color: #FFFFFF00;
            border-style: double;
            border-width: 2px 2px 2px 2px;
            border-color: #FFFFFF;
            border-radius: 15px 15px 15px 15px;
            padding: 10px 15px 10px 15px;
        }
        
        .countdown-wrapper {
            max-width: 100%;
            justify-content: center;
            margin-right: auto;
            margin-left: auto;
        }
        
        .countdown-label {
            color: #FFFFFF;
            font-family: 'Fjalla One', sans-serif;
            font-size: 12px;
            font-style: normal;
            line-height: 1.7em;
            text-align: center
        }
        
        .countdown-digits {
            color: #FFFFFF;
            font-family: 'Fjalla One', sans-serif;
            font-size: 20px;
            font-weight: 700;
            line-height: 1em;
            letter-spacing: 1px;
        }
        
        .img-promise {
            width: 243px;
            max-width: 1000px;
            height: 334px;
            border-radius: 20px 20px 20px 20px;
            object-fit: cover;
            opacity: 1;
            box-shadow: 6px 11px 22px -8pxrgba(0, 0, 0, 0.23);
        }
        
        .container-promise {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 90px 20px 120px 20px;
        }
        
        .ql-editor .ql-align-center > strong {
            color: #6E6552 !important;
            font-family: "Caudex", Sans-serif;
            font-size: 12px;
            font-weight: bold;
            font-style: italic;
            line-height: 2em;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .title-promise {
            color: #6E6552;
            font-family: "Herr Von Muellerhoff", Sans-serif;
            font-size: 40px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
        }
        
        .title-couple {
            color: #6E6552;
            font-family: 'Parisienne', cursive;
            font-size: 40px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
        }
        
        .name-couple {
            color: #6E6552;
            font-family: 'Tangerine', cursive;
            font-size: 30px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
            letter-spacing: 1.8px;
            text-transform: capitalize;
        }
        
        .ortu {
            color: #6E6552 !important;
            font-family: "Caudex", Sans-serif;
            font-size: 12px;
            font-weight: bold;
            font-style: normal;
            line-height: 1.5em;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .title-with-love {
            color: #6E6552;
            font-family: 'Parisienne', cursive;
            font-size: 35px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
        }
        
        .content-with-love {
            color: #6E6552 !important;
            font-family: "Caudex", Sans-serif;
            font-size: 12px;
            font-weight: bold;
            font-style: normal;
            line-height: 1.5em;
            letter-spacing: 0.8px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .event-container {
            max-width: 930px !important;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 30px 0px 30px;
        }
        
        .row-event {
            padding: 10px 0px 10px 0px;
        }
        
        .col-event:first-child {
            margin-bottom: 20px;
        }
        
        .border-radius-event {
            border-radius: 15px 15px 15px 15px;
            min-height: 419px;
        }
        
        .content-event {
            margin-bottom: 0px;
            padding: 35px 10px 20px 10px;
            position: absolute;
            width: 100%;
        }
        
        .title-event {
            color: white !important;
        }
        
        .title-event .judul {
            color: #FFFFFF;
            font-family: 'Parisienne', cursive;
            font-size: 30px;
            font-weight: 500;
            text-transform: none;
            line-height: 0.4em;
            letter-spacing: 2.1px;
            margin-bottom: 30px;
        }
        
        .title-event .tanggal {
            color: #FFFFFF;
            font-family: "Caudex", Sans-serif;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5em;
            letter-spacing: 0.8px;
        }
        
        .overlay-event {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            opacity: 0.35;
        }
        
        .img-event img {
            width: 45px;
            max-width: 1000px;
        }
        
        .img-event {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            margin-bottom: 20px
        }
        
        .elementor-icon {
            color: #FFFFFF;
            border-color: #FFFFFF;
            font-size: 15px;
        }
        
        .button-lokasi {
            fill: #050505;
            color: #050505;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            font-family: "catamaran";
            padding: 10px 20px 8px 20px;
            letter-spacing: 0.8px;
            text-shadow: 1px 0px 1px rgba(0,0,0,0.3);
            background-color: #F2F1EF;
        }
        
        
        .button-lokasi:hover {
            fill: #F2F1EF;
            color: #F2F1EF;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            font-family: "catamaran";
            padding: 10px 20px 8px 20px;
            letter-spacing: 0.8px;
            text-shadow: 1px 0px 1px rgba(0,0,0,0.3);
            background-color: #050505;
        }
        
        .button-live {
            fill: #F2F1EF;
            color: #F2F1EF;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            font-family: "catamaran";
            padding: 10px 20px 8px 20px;
            letter-spacing: 0.8px;
            text-shadow: 1px 0px 1px rgba(0,0,0,0.3);
            background-color: #6e6552;
        }
        
        
        .overlay-countdown {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            background-image: url("{{asset('img/img_countdown.jpeg')}}");  
            background-position: center center; 
            background-size: cover; 
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .countdown-container {
            margin: 0px 0px 0px 0px;
            padding: 20px 0px 0px 0px;
        }
        
        .countdown1-container {
            margin: 0px 0px 0px 0px;
            padding: 20px 0px 0px 0px;
        }
        
        .countdown1-item {
            margin-right: calc( 7px/2 );
            background-color: #FFFFFF;
            border-style: double;
            border-width: 2px 2px 2px 2px;
            border-color: #FFFFFF;
            border-radius: 15px 15px 15px 15px;
            padding: 10px 10px 10px 10px;
        }
        
        .countdown1-wrapper {
            max-width: 100%;
            justify-content: center;
            margin-right: auto;
            margin-left: auto;
        }
        
        .countdown1-label {
            color: #000000;
            font-family: 'Fjalla One', sans-serif;
            font-size: 10px;
            font-style: italic;
            line-height: 1.7em;
            text-align: center;
            display: block;
            
        }
        
        .countdown1-digits {
            color: #000000;
            font-family: 'Fjalla One', sans-serif;
            font-size: 19px;
            font-weight: 700;
            line-height: 1.4em;
            letter-spacing: 1.4px;
            display: block;
        }
        
        .love-story {
            color: #49403A;
            font-family: "Caudex", Sans-serif;
            font-weight: bold;
            font-style: italic;
            text-shadow: 0px 0px 0px #6e6552;
            font-size: 12px;
            line-height: 1.5em;
            letter-spacing: 1.5px;
        }
        
        .rsvp-container {
            max-width: 930px !important;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 30px 0px 30px;
        }
        
        .rsvp-overlay {
            border-radius: 15px 15px 15px 15px;
            border-style: solid;
            border-color: #E4E4E4;
            box-shadow: 1px 1px 23px 1px rgb(108 98 98 / 28%);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }
        
        .content-rsvp {
            margin-bottom: 0px;
            padding: 35px 10px 20px 10px;
            position: relative;
            text-align: center
        }
        
        .title-rsvp {
            text-align: center;
            color: #000000;
            font-family: 'Parisienne', cursive;
            font-size: 40px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
        }
        
        .description-rsvp {
            text-align: center;
            color: #6E6552;
            font-family: "Caudex", Sans-serif;
            font-size: 14px;
            font-weight: bold;
            font-style: normal;
            line-height: 1.5em;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .button-rsvp {
            text-align: center;
            color: #FFFFFF;
            font-family: "Caudex", Sans-serif;
            font-size: 14px;
            font-weight: bold;
            font-style: normal;
            line-height: 1.5em;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .title-rsvp .tanggal {
            color: #FFFFFF;
            font-family: "Caudex", Sans-serif;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5em;
            letter-spacing: 0.8px;
        }
        
        .overlay-album {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .comment-list {
            text-align: left;
            font-size: 14px !important;
            width: 100%;
            padding: 0px 0px 0px 0;
            max-height: 260px;
            overflow: auto;
            margin-top: 30px;
            margin-bottom: 50px 
        }
        
        .comment-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
            padding: 0px 30px 0px 30px;
        }
        
        .comment-item img {
            border: 2px solid #fff;
            border-radius: 50%;
            box-shadow: 0 1px 2px rgb(0 0 0 / 20%);
            height: 40px;
            right: 10px;
            overflow: hidden;
            top: 0;
            width: 40px;
        }
        
        .comment-item .message {
            flex: 1;
            display: block;
            background-color: #fcfcfc;
            border-radius: 8px;
            box-shadow: 0 1px 1px rgb(0 0 0 / 15%);
            margin-left: 15px;
            min-height: 60px;
            position: relative;
            padding: 8px;
            position: relative;
            margin-bottom: 10px;
        }
        
        .tri-right.border.left-in:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -40px;
            right: auto;
            top: 8px;
            bottom: auto;
            border: 15px solid;
            border-color: #666 #666 transparent transparent;
        }
        .tri-right.left-in:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -15px;
            right: auto;
            top: 8px;
            bottom: auto;
            border: 10px solid;
            border-color: #fcfcfc #fcfcfc transparent transparent;
        }
        
        .comment-item .message .name {
            font-size: 14px;
            letter-spacing: 1px;
            color: #AE9917;
            font-family: "Caudex", Sans-serif;
            font-weight: 500;
        }
        
        .comment-item .message .icon {
            color: #C3A8A8;
            font-family: "Caudex", Sans-serif;
            color: #fff;
            margin-left: 4px;
            border-radius: 3px;
            background: #c18c14;
            font-size: .7em;
            padding-bottom: 3px !important;
            padding-right: 5px !important;
            padding-left: 5px !important;
            padding-top: 2px !important;
        }
        
        .comment-item .message .remove {
            color: #C3A8A8;
            font-family: "Caudex", Sans-serif;
            color: #fff;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: 2ch;
            border-radius: 3px;
            background: #525050;
            font-size: .7em;
            padding-bottom: 3px !important;
            padding-right: 5px !important;
            padding-left: 5px !important;
            padding-top: 2px !important;
            text-align: right;
            right: 0px;
            position: absolute;
        }
        
        .comment-item .message .pesan {
            font-size: 12px;
            letter-spacing: -0.3px;
            color: #000000;
            font-family: "Caudex", Sans-serif;
            font-weight: 500;
        }
        
        .overlay-end {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            opacity: 0.35;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .container-end {
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .content-end {
            margin-bottom: 0px;
            padding: 300px 0px 0px 0px;
            position: absolute;
            width: 100%;
        }
        
        .title-end .judul {
            color: #FFFFFF;
            font-family: 'Parisienne', cursive;
            font-size: 30px;
            font-weight: 700;
            text-transform: none;
            line-height: 0.4em;
            letter-spacing: 2.1px;
            margin-bottom: 30px;
        }
        
        .footers {
            background-color: #F2F1EF;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 50px 0px 20px 0px;
            font-size: 16px;
            letter-spacing: -0.3px;
            color: #000000;
            font-family: "Caudex", Sans-serif;
            font-weight: 500;
        }
        
        .nameBrand {
            color: #000000;
            font-family: "Caudex", Sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 1.2em;
            letter-spacing: 1.4px;
        }
        
        .footers .icons {
            color: #ffffff;
            font-size: 15px !important;
            border-radius: 50%;
            background: #000000;
            padding: 0.5em 0.7em 0.5em 0.7em;
            
        }
        
        
        
    }
    
    @media only screen and (min-width: 768px) {
        
        .namaPasangan{
            color: #FFFFFF;
            font-family: 'Tangerine', cursive;
            font-size: 50px;
            font-weight: 400;
            line-height: 95%;
            text-transform: capitalize;
        }
        
        .wedding_of {
            color: #FFFFFF;
            font-family: 'Fjalla One', sans-serif;
            font-size: 12px;
            font-weight: 200;
            letter-spacing: 3.5px;
        }
        
        .imageModal {
            width: 100%; 
            height: 100vh;
            max-height: inherit !important;
            object-fit: cover;
            position: absolute;
            background-position: center center;
            background-repeat: no-repeat;
        }
        
        .countdown-item {
            margin-right: calc( 7px/2 );
            background-color: #FFFFFF00;
            border-style: double;
            border-width: 2px 2px 2px 2px;
            border-color: #FFFFFF;
            border-radius: 15px 15px 15px 15px;
            padding: 10px 15px 10px 15px;
        }
        
        .countdown-wrapper {
            max-width: 100%;
            justify-content: center;
            margin-right: auto;
            margin-left: auto;
        }
        
        .countdown-label {
            color: #FFFFFF;
            font-family: 'Fjalla One', sans-serif;
            font-size: 12px;
            font-style: normal;
            line-height: 1.7em;
            text-align: center
        }
        
        .countdown-digits {
            color: #FFFFFF;
            font-family: 'Fjalla One', sans-serif;
            font-size: 20px;
            font-weight: 700;
            line-height: 1em;
            letter-spacing: 1px;
        }
        
        .img-promise {
            width: 243px;
            max-width: 1000px;
            height: 334px;
            border-radius: 20px 20px 20px 20px;
            object-fit: cover;
            opacity: 1;
            box-shadow: 6px 11px 22px -8pxrgba(0, 0, 0, 0.23);
        }
        
        .container-promise {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 90px 20px 120px 20px;
        }
        
        .ql-editor .ql-align-center > strong {
            color: #6E6552 !important;
            font-family: "Caudex", Sans-serif;
            font-size: 12px;
            font-weight: bold;
            font-style: italic;
            line-height: 2em;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .title-promise {
            color: #6E6552;
            font-family: "Herr Von Muellerhoff", Sans-serif;
            font-size: 40px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
        }
        
        .title-couple {
            color: #6E6552;
            font-family: 'Parisienne', cursive;
            font-size: 40px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
        }
        
        .name-couple {
            color: #6E6552;
            font-family: 'Parisienne', cursive;
            font-size: 30px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
            letter-spacing: 1.8px;
            text-transform: capitalize;
        }
        
        .ortu {
            color: #6E6552 !important;
            font-family: "Caudex", Sans-serif;
            font-size: 12px;
            font-weight: bold;
            font-style: normal;
            line-height: 1.5em;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .title-with-love {
            color: #6E6552;
            font-family: 'Parisienne', cursive;
            font-size: 35px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
        }
        
        .content-with-love {
            color: #6E6552 !important;
            font-family: "Caudex", Sans-serif;
            font-size: 12px;
            font-weight: bold;
            font-style: normal;
            line-height: 1.5em;
            letter-spacing: 0.8px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .event-container {
            max-width: 930px !important;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 30px 0px 30px;
        }
        
        .row-event {
            padding: 10px 0px 10px 0px;
        }
        
        .col-event:first-child {
            margin-bottom: 20px;
        }
        
        .border-radius-event {
            border-radius: 15px 15px 15px 15px;
            min-height: 419px;
        }
        
        .content-event {
            margin-bottom: 0px;
            padding: 35px 10px 20px 10px;
            position: absolute;
            width: 100%;
        }
        
        .title-event {
            color: white !important;
        }
        
        .title-event .judul {
            color: #FFFFFF;
            font-family: 'Parisienne', cursive;
            font-size: 30px;
            font-weight: 500;
            text-transform: none;
            line-height: 0.4em;
            letter-spacing: 2.1px;
            margin-bottom: 30px;
        }
        
        .title-event .tanggal {
            color: #FFFFFF;
            font-family: "Caudex", Sans-serif;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5em;
            letter-spacing: 0.8px;
        }
        
        .overlay-event {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            opacity: 0.35;
        }
        
        .img-event img {
            width: 45px;
            max-width: 1000px;
        }
        
        .img-event {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            margin-bottom: 20px
        }
        
        .elementor-icon {
            color: #FFFFFF;
            border-color: #FFFFFF;
            font-size: 15px;
        }
        
        .button-lokasi {
            fill: #050505;
            color: #050505;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            font-family: "catamaran";
            padding: 10px 20px 8px 20px;
            letter-spacing: 0.8px;
            text-shadow: 1px 0px 1px rgba(0,0,0,0.3);
            background-color: #F2F1EF;
        }
        
        
        .button-lokasi:hover {
            fill: #F2F1EF;
            color: #F2F1EF;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            font-family: "catamaran";
            padding: 10px 20px 8px 20px;
            letter-spacing: 0.8px;
            text-shadow: 1px 0px 1px rgba(0,0,0,0.3);
            background-color: #050505;
        }
        
        .overlay-countdown {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            background-image: url("{{asset('img/img_countdown.jpeg')}}");  
            background-position: center center; 
            background-size: cover; 
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .countdown-container {
            margin: 0px 0px 0px 0px;
            padding: 20px 0px 0px 0px;
        }
        
        .countdown1-container {
            margin: 0px 0px 0px 0px;
            padding: 20px 0px 0px 0px;
        }
        
        .countdown1-item {
            margin-right: calc( 7px/2 );
            background-color: #FFFFFF;
            border-style: double;
            border-width: 2px 2px 2px 2px;
            border-color: #FFFFFF;
            border-radius: 15px 15px 15px 15px;
            padding: 10px 10px 10px 10px;
        }
        
        .countdown1-wrapper {
            max-width: 100%;
            justify-content: center;
            margin-right: auto;
            margin-left: auto;
        }
        
        .countdown1-label {
            color: #000000;
            font-family: 'Fjalla One', sans-serif;
            font-size: 10px;
            font-style: italic;
            line-height: 1.7em;
            text-align: center;
            display: block;
            
        }
        
        .countdown1-digits {
            color: #000000;
            font-family: 'Fjalla One', sans-serif;
            font-size: 19px;
            font-weight: 700;
            line-height: 1.4em;
            letter-spacing: 1.4px;
            display: block;
        }
        
        .love-story {
            color: #49403A;
            font-family: "Caudex", Sans-serif;
            font-weight: bold;
            font-style: italic;
            text-shadow: 0px 0px 0px #6e6552;
            font-size: 12px;
            line-height: 1.5em;
            letter-spacing: 1.5px;
        }
        
        .rsvp-container {
            max-width: 930px !important;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 30px 0px 30px;
        }
        
        .rsvp-overlay {
            border-radius: 15px 15px 15px 15px;
            border-style: solid;
            border-color: #E4E4E4;
            box-shadow: 1px 1px 23px 1px rgb(108 98 98 / 28%);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }
        
        .content-rsvp {
            margin-bottom: 0px;
            padding: 35px 10px 20px 10px;
            position: relative;
            text-align: center
        }
        
        .title-rsvp {
            text-align: center;
            color: #000000;
            font-family: 'Parisienne', cursive;
            font-size: 50px;
            font-weight: 400;
            font-style: normal;
            text-shadow: 1px 0px 1px #726b47;
        }
        
        .description-rsvp {
            text-align: center;
            color: #6E6552;
            font-family: "Caudex", Sans-serif;
            font-size: 14px;
            font-weight: bold;
            font-style: normal;
            line-height: 1.5em;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .button-rsvp {
            text-align: center;
            color: #FFFFFF;
            font-family: "Caudex", Sans-serif;
            font-size: 14px;
            font-weight: bold;
            font-style: normal;
            line-height: 1.5em;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px #6e6552;
        }
        
        .title-rsvp .tanggal {
            color: #FFFFFF;
            font-family: "Caudex", Sans-serif;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5em;
            letter-spacing: 0.8px;
        }
        
        .overlay-album {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .comment-list {
            text-align: left;
            font-size: 14px !important;
            width: 100%;
            padding: 0px 0px 0px 0;
            max-height: 260px;
            overflow: auto;
            margin-top: 30px;
            margin-bottom: 50px 
        }
        
        .comment-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
            padding: 0px 30px 0px 30px;
        }
        
        .comment-item img {
            border: 2px solid #fff;
            border-radius: 50%;
            box-shadow: 0 1px 2px rgb(0 0 0 / 20%);
            height: 40px;
            right: 10px;
            overflow: hidden;
            top: 0;
            width: 40px;
        }
        
        .comment-item .message {
            flex: 1;
            display: block;
            background-color: #fcfcfc;
            border-radius: 8px;
            box-shadow: 0 1px 1px rgb(0 0 0 / 15%);
            margin-left: 15px;
            min-height: 60px;
            position: relative;
            padding: 8px;
            position: relative;
            margin-bottom: 10px;
        }
        
        .tri-right.border.left-in:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -40px;
            right: auto;
            top: 8px;
            bottom: auto;
            border: 15px solid;
            border-color: #666 #666 transparent transparent;
        }
        .tri-right.left-in:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -15px;
            right: auto;
            top: 8px;
            bottom: auto;
            border: 10px solid;
            border-color: #fcfcfc #fcfcfc transparent transparent;
        }
        
        .comment-item .message .name {
            font-size: 14px;
            letter-spacing: 1px;
            color: #AE9917;
            font-family: "Caudex", Sans-serif;
            font-weight: 500;
        }
        
        .comment-item .message .icon {
            color: #C3A8A8;
            font-family: "Caudex", Sans-serif;
            color: #fff;
            margin-left: 4px;
            border-radius: 3px;
            background: #c18c14;
            font-size: .7em;
            padding-bottom: 3px !important;
            padding-right: 5px !important;
            padding-left: 5px !important;
            padding-top: 2px !important;
        }
        
        .comment-item .message .remove {
            color: #C3A8A8;
            font-family: "Caudex", Sans-serif;
            color: #fff;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: 2ch;
            border-radius: 3px;
            background: #525050;
            font-size: .7em;
            padding-bottom: 3px !important;
            padding-right: 5px !important;
            padding-left: 5px !important;
            padding-top: 2px !important;
            text-align: right;
            right: 0px;
            position: absolute;
        }
        
        .comment-item .message .pesan {
            font-size: 12px;
            letter-spacing: -0.3px;
            color: #000000;
            font-family: "Caudex", Sans-serif;
            font-weight: 500;
        }
        
        .overlay-end {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            opacity: 0.35;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .container-end {
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .content-end {
            margin-bottom: 0px;
            padding: 300px 0px 0px 0px;
            position: absolute;
            width: 100%;
        }
        
        .title-end .judul {
            color: #FFFFFF;
            font-family: 'Parisienne', cursive;
            font-size: 30px;
            font-weight: 700;
            text-transform: none;
            line-height: 0.4em;
            letter-spacing: 2.1px;
            margin-bottom: 30px;
        }
        
        .footers {
            background-color: #F2F1EF;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 50px 0px 20px 0px;
            font-size: 16px;
            letter-spacing: -0.3px;
            color: #000000;
            font-family: "Caudex", Sans-serif;
            font-weight: 500;
        }
        
        .nameBrand {
            color: #000000;
            font-family: "Caudex", Sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 1.2em;
            letter-spacing: 1.4px;
        }
        
        .footers .icons {
            color: #ffffff;
            font-size: 15px !important;
            border-radius: 50%;
            background: #000000;
            padding: 0.5em 0.7em 0.5em 0.7em;
            
        }
        
    }
    
    
    .container-audio {
        position: fixed !important;
        z-index: 99;
        width: 100%;
        left: 15px;
        bottom: 40px;
        margin-top: 0px;
        margin-bottom: 0px;
        padding: 50px 0px 60px 0px;
        width: 30px;
        height: 30px;
    }
    
    
    .elementor-icon-2 {
        font-size: 15px;
        border-radius: 50%;
        padding: 0.5em;
        background-color: #000000;
        color: #fff;
        fill: #fff;
    }
    
    .elementor-icon-2 i {
        width: 1em;
        height: 1em;
        position: relative;
        display: block;
    }
    
    
    .elementor-icon-2 svg {
        width: 1em;
        height: 1em;
        position: relative;
        display: block;
    }
    
    .tooltip {
        position: relative;
        display: inline-block;
    }
    
    .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }
    
    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
    
    
</style>
<body id="body">
    @foreach($music as $data)
    @if($data->status == 1)
    
    <div class="container-audio" id="container-audio">
        
        <audio id="song" loop>
            <source src="{{asset('storage/'.DB::table('music')->where('id', $data->music_id)->value('music'))}}" type="audio/mp3">
            </audio>
            
            <div class="elementor-icon-2-wrapper" id="unmute-sound" style="">
                <div class="elementor-icon-2">
                    <i aria-hidden="true" class="far fa-stop-circle"></i>				
                </div>
            </div>
            <div class="elementor-icon-2-wrapper" id="mute-sound">
                <div class="elementor-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="250" height="250" viewBox="0 0 250 250" fill="none"><rect width="250" height="250" fill="url(#pattern0)"></rect><defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image0_1430_8" transform="scale(0.004)"></use></pattern><image id="image0_1430_8" width="250" height="250" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAD6CAMAAAC/MqoPAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAFuUExURUxpcf///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////xzZqvcAAAB5dFJOUwD3KOt06b/xDgiTZMvFaNku3edGia1A5TBIqXDHtxyXIE4+45W5Zs1MIlASpyZK7wxUFhBYJO2vUh6FszLXNtvBg0TP82LJbBRCGL3hap2xOoerKjSbCnaPemD1Wo3VeLuhtRqlOFyjLNF+XpFyfIvTw1aZPJ9u34GEapzjAAAACXBIWXMAAAdiAAAHYgE4epnbAAAEZWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSfvu78nIGlkPSdXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQnPz4KPHg6eG1wbWV0YSB4bWxuczp4PSdhZG9iZTpuczptZXRhLyc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczpBdHRyaWI9J2h0dHA6Ly9ucy5hdHRyaWJ1dGlvbi5jb20vYWRzLzEuMC8nPgogIDxBdHRyaWI6QWRzPgogICA8cmRmOlNlcT4KICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0nUmVzb3VyY2UnPgogICAgIDxBdHRyaWI6Q3JlYXRlZD4yMDIxLTExLTE4PC9BdHRyaWI6Q3JlYXRlZD4KICAgICA8QXR0cmliOkV4dElkPjZlMDU4NjdhLTNiNTUtNDExOC04MjcxLTQ0MDEyM2E0MjRhYzwvQXR0cmliOkV4dElkPgogICAgIDxBdHRyaWI6RmJJZD41MjUyNjU5MTQxNzk1ODA8L0F0dHJpYjpGYklkPgogICAgIDxBdHRyaWI6VG91Y2hUeXBlPjI8L0F0dHJpYjpUb3VjaFR5cGU+CiAgICA8L3JkZjpsaT4KICAgPC9yZGY6U2VxPgogIDwvQXR0cmliOkFkcz4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6ZGM9J2h0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvJz4KICA8ZGM6dGl0bGU+CiAgIDxyZGY6QWx0PgogICAgPHJkZjpsaSB4bWw6bGFuZz0neC1kZWZhdWx0Jz5DZXJpdGEgU2FoPC9yZGY6bGk+CiAgIDwvcmRmOkFsdD4KICA8L2RjOnRpdGxlPgogPC9yZGY6RGVzY3JpcHRpb24+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczpwZGY9J2h0dHA6Ly9ucy5hZG9iZS5jb20vcGRmLzEuMy8nPgogIDxwZGY6QXV0aG9yPk15IFJpbmE8L3BkZjpBdXRob3I+CiA8L3JkZjpEZXNjcmlwdGlvbj4KCiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0nJwogIHhtbG5zOnhtcD0naHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyc+CiAgPHhtcDpDcmVhdG9yVG9vbD5DYW52YTwveG1wOkNyZWF0b3JUb29sPgogPC9yZGY6RGVzY3JpcHRpb24+CjwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9J3InPz4HItewAAANS0lEQVR4Ae1d+V/UyBLPAMMgyKXgyLmAKJcHuCByeCDsQ5T1WvF6iut+xHV1n7of9fny3z9mhhzdVZ3uynQylfkM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"></image></defs></svg>				
                </div>
            </div>
        </div>
        
        
        @endif
        @endforeach
        <!-- Preloader -->
        <div class="loader">
            <!-- Preloader inner -->
            <div class="loader-inner">
                <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="2" />
                </svg>
            </div>
            <!-- End preloader inner -->
        </div>
        
        <div class="wrapper">
            
            <div id="main">
                @include('themes.rustic.components.hero')
                @include('themes.rustic.components.quote')
                
                @include('themes.rustic.components.couple')
                @if($wedding->package_id != 1)
                @include('themes.rustic.components.story')
                @endif
                @include('themes.rustic.components.event')
                @include('themes.rustic.components.countdown')
                @include('themes.rustic.components.live')
                @include('themes.rustic.components.rsvp.show')
                @if ($wedding->id == 16)
                @include('themes.rustic.components.hadiah', ['wedding' => $wedding])
                @endif
                @include('themes.rustic.components.album')
                @include('themes.rustic.components.comments.form')
                @include('themes.rustic.components.end')
                
                
                
                <div class="footers">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p class=" heavy normal mb-0 ">Created by</p>
                                <img src="{{asset('img/brand/akadin.png')}}" alt="" width="150px">
                                <p class="nameBrand">AKAD.IN X LUNARIAN</p>
                                <a class="icons" href="https://www.instagram.com/akad.invitation/">
                                    <i aria-hidden="true" class="fab fa-instagram"></i>
                                </a>
                                <p class="uppercase heavy normal mt-3">&copy; Copyright {{date('Y')}} - {{config('app.name')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="exampleModal" class="modal fade px-0" style="">
                <div class="modal-dialog modal-fullscreen" style="width: 100% !important">
                    <div class="modal-content">
                        <div style="height: 100%;">
                            <div class="background-img" style="filter: brightness(50%);">
                                <img src="{{asset('storage/media/'.$wedding->hero->first()->filename)}}" alt="">
                            </div>
                            <div class="row mb-5 text-center">
                                <div class="col-12 text-center topContent">
                                    <div class="dear">
                                        DEAR : 
                                    </div>
                                    <div class="namaUndangan text-uppercase">
                                        {{$wedding->invitation->name}}
                                    </div>
                                    <div class="invited mt-5">
                                        YOU ARE INVITED TO OUR WEDDING
                                    </div>
                                    <div class="namaPasangan text-capitalize my-3">
                                        {{$wedding->nama_calon_pria}} <br> & <br> {{$wedding->nama_calon_wanita}}
                                    </div>
                                    <div class="countdown-container text-center mb-3">
                                        <div class="countdown-wrapper row">
                                            <div class="countdown-item col-2">
                                                <p class="countdown-digits mb-0 count-days"></p>
                                                <p class="countdown-label mb-0">Days</p>
                                            </div>
                                            <div class="countdown-item col-2">
                                                <p class="countdown-digits mb-0 count-hours"></p>
                                                <p class="countdown-label mb-0">Hours</p>
                                            </div>
                                            <div class="countdown-item col-2">
                                                <p class="countdown-digits mb-0 count-minutes"></p>
                                                <p class="countdown-label mb-0">Minutes</p>
                                            </div>
                                            <div class="countdown-item col-2">
                                                <p class="countdown-digits mb-0 count-seconds"></p>
                                                <p class="countdown-label mb-0">Seconds</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button-undangan mt-5" type="button" data-bs-dismiss="modal">
                                        <i class="fa fa-envelope-open"></i>
                                        Buka Undangan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!--Friends section-->
            
            <!--End footer section -->
        </div>
        <!-- End wrapper-->
        @include('themes.rustic.layout.footerjs')
        @stack('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('.count-days').countdown('{{$wedding->main_date}}', function(event) {
                    $(this).html(event.strftime('%D'));
                });
                $('.count-hours').countdown('{{$wedding->main_date}}', function(event) {
                    $(this).html(event.strftime('%H'));
                });
                $('.count-minutes').countdown('{{$wedding->main_date}}', function(event) {
                    $(this).html(event.strftime('%M'));
                });
                $('.count-seconds').countdown('{{$wedding->main_date}}', function(event) {
                    $(this).html(event.strftime('%S'));
                });
            });
        </script>
        
        <script>
            if ('{{session()->has("error")}}') {
                var message = '{{session()->get("error")}}';
                iziToast.error({
                    displayMode: 'replace',
                    title: 'Invalid',
                    message: message,
                    position: 'topCenter',
                });
            }
            
            
            function testAnim(x) {
                $('#exampleModal .modal-dialog').attr('class', 'modal-dialog ' + x + ' modal-fullscreen animated');
            };
            
            function heroShow(x) {
                $('.hero').attr('class', 'hero overlay ' + x + ' animated');
            }
            
            window.addEventListener('load', (event) => {
                testAnim('fadeInUp');
                $('#exampleModal').modal('show');
                
                if (navigator.userAgent.match(/(iPod|iPhone|iPad)/) == null) {
                    $('#main').hide();
                }else {
                    $('.animasi-zooin').css('opacity', '1')
                    $('.animasi-zooin').css('transform', 'translateY(0)')
                    $('.animasi-fadeup').css('opacity', '1')
                    $('.animasi-fadeup').css('transform', 'translateY(0)')
                }
                $('#unmute-sound').hide();
                $('#mute-sound').hide();
                
                
                $('#image-modal').css({'min-height': (($(window).height() + 20))+'px'});
                
            });
            
            $('#exampleModal').on('hide.bs.modal', function (e) {
                testAnim('fadeOutUp');
                heroShow('slideInUp');
                
                if (navigator.userAgent.match(/(iPod|iPhone|iPad)/) == null) {
                    $('#main').show();
                }
                
                var elem = document.documentElement;
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                } else if (elem.webkitRequestFullscreen) { /* Safari */
                    elem.webkitRequestFullscreen();
                } else if (elem.msRequestFullscreen) { /* IE11 */
                    elem.msRequestFullscreen();
                }
                
                $('#song')[0].play();
                $('#unmute-sound').hide();
                $('#mute-sound').show();
            })
            
            function animateScroll() {
                var zoomin = document.querySelectorAll(".animasi-zooin");
                var fadeup = document.querySelectorAll(".animasi-fadeup");
                
                for (var i = 0; i < zoomin.length; i++) {
                    var windowHeight = window.innerHeight;
                    var elementTop = zoomin[i].getBoundingClientRect().top;
                    var elementVisible = 150;
                    
                    
                    if (elementTop < windowHeight - elementVisible) {
                        zoomin[i].classList.add("active");
                        zoomin[i].classList.add("zoomIn");
                    }
                    
                }
                
                for (var i = 0; i < fadeup.length; i++) {
                    var windowHeight = window.innerHeight;
                    var elementTop = fadeup[i].getBoundingClientRect().top;
                    var elementBottom = fadeup[i].getBoundingClientRect().bottom;
                    var elementVisible = 150;
                    
                    if (elementTop < windowHeight - elementVisible) {
                        fadeup[i].classList.add("active");
                        fadeup[i].classList.add("fadeInUp");
                    }
                }
                
            }
            
            if (navigator.userAgent.match(/(iPod|iPhone|iPad)/) == null) {
                window.addEventListener("scroll", animateScroll);
            }
            
            $(".carousel-self").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                touchDrag: false,
                mouseDrag: false,
                autoplay: true,
                responsiveClass: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });
            
            $(".carousel-self").on("changed.owl.carousel", function () {
                $(".heroBanner").css("animation", "none");
                window.requestAnimationFrame(function () {
                    $(".heroBanner").css("animation", "");
                });
            });
            
            $('#mute-sound').on('click', function (){
                $('#song')[0].pause();
                $('#unmute-sound').show();
                $('#mute-sound').hide();
                
            })
            
            $('#unmute-sound').on('click', function (){
                $('#song')[0].play();
                $('#unmute-sound').hide();
                $('#mute-sound').show();
                
            })
            
        </script>
        
        <script>
            function rsvpConfirm2() {
                var tamu = $('#tamu').val();
                var konfirmasi = $('#konfirmasi').val();
                var code = $('#codeRsvp').val();
                var wedding = $('#weddingRsvp').val();
                url = '/{wedding}/rsvp/{code}/confirm',
                url = url.replace('{wedding}', wedding).replace('{code}', code)
                $.ajax({
                    url: url,
                    method: 'post',
                    data: {
                        rsvp_confirm: konfirmasi,
                        count: tamu
                        
                    },
                    beforeSend: function () {
                        $('#rsvp-button').addClass('btn-progress disabled')
                    },
                    success: function (response) {
                        $('#rsvp-button').removeClass('btn-progress disabled')
                        $('.response-rsvp').show()
                    }
                })
            }
        </script>
        
        <script>
            function copyToClipboard(element, btn) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text()).select();
                document.execCommand("copy");
                $temp.remove();

                $(btn).html('Berhasil disalin');

                setInterval(() => {
                    $(btn).html('<i aria-hidden="true" class="fas fa-copy"></i> Copy No. Rekening');
                }, 1000);
            }
            
        </script>
        
        
    </body>
    
    </html>
    