<!doctype html>
<html lang="en-uk">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="investment, Forex, Trading, Bitcoin, Cryptocurrency, Global investment, Live Trade, Trading class, indics">
    <meta name="author" content="Paul HubWeb & Tech">
    <meta name="theme-color" content="#000" />
    <!-- Site Properties -->
    <title>Menu - {{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="../img/Signals-Alert-3.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="../img/Signals-Alert-3.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: none;
            background-color: none;
            padding: 20px 10px;
            padding-left: 5px;
            position: fixed;
        }

        /*.header a {
float: center;
width:30px;
color: #fff;
text-align: center;
padding: 12px;
text-decoration: none;
font-size: 18px;
line-height: 25px;
border-radius: 4px;
background-color:rgb(196, 0, 0);
border-color: rgb(196, 0, 0);
}*/

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        /*.header a:hover {
background-color:  #010847;
color: #fff;
}*/

        /*.header a.active {
background-color: dodgerblue;
color: white;
}*/

        .header-center {
            float: left;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }
    </style>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />
    <style>
        /*------ Google Font Style ------ */
        body {
            font-family: 'Roboto' !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css" integrity="sha512-dC0G5HMA6hLr/E1TM623RN6qK+sL8sz5vB+Uc68J7cBon68bMfKcvbkg6OqlfGHo1nMmcCxO5AinnRTDhWbWsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
</head>

<body class="sidebar-main-active right-column-fixed" style="background-color:#000; color:#dbdbdb;">
<!-- loader Start -->
<!--<div id="loading">
    <div id="loading-center">
    </div>
</div>
 loader END -->
<!-- Wrapper Start -->
<div class="wrapper">

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="iq-top-navbar header" style="margin-top:40px; background-color:transparent; width:1000px; heigth:400px;">
            <div class="iq-navbar-custom" style="width:1500px;">
                <nav class="navbar navbar-expand-lg navbar-light p-0" style="width:1000px;">
                    <div class="" style="margin-top:-80px; margin-right:-200px; background-color:#131313; color:#dbdbdb; width:1500px;">
                        <div>
                            <a href="{{ route('user.menu') }}" >
                                <img  src="{{ asset('images/menu (3).png') }}" alt="menu" width="50px" style="margin-top:15px; background-color: white">
{{--                                <img style="background-color: white" src="{{ asset('img/menu.svg') }}" alt="menu" width="100px">--}}
                            </a>
                            <h2 style="font-weight: bolder; color: white; font-size: 30px">{{ env('APP_NAME') }}</h2>
{{--                             <img src="{{ asset('images/in-logo-1.png') }}" alt="logo" style="padding-bottom:20px; width:190px; margin-top:20px; margin-left:50px;">--}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
