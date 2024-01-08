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
            overflow: hidden;
            background-color: none;
            padding: 20px 10px;
            padding-left: 30px;
        }

        .header a {
            float: center;
            width: 30px;
            color: #fff;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
            background-color: rgb(196, 0, 0);
            border-color: rgb(196, 0, 0);
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #010847;
            color: #fff;
        }

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

<body style="background-color:#000; color:#fff;">
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <div id="content-page" class="content-page">
        <div class="header" style="margin-top:-80px;">
            <div>
                <h2 style="font-weight: bolder; color: white; font-size: 30px">{{ env('APP_NAME') }}</h2>
{{--                <img src="../img/in-logo-1.png" alt="logo" style="padding-bottom:20px; width:380px;"><!--<div></div>-->--}}
            </div>

        </div>
        <div class="container-fluid">
            <div class="row content-body">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="iq-card-body">
                        <h2 style="font-size:50px; color:#dbdbdb;"><b>Account Setting</b><br><b style="font-size:30px; ">Settings</b></h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="profile" style="width:950px; background-color:#131313; color:#dbdbdb;">
                        <div class="iq-card-body">
                            <div class="column">
                                <div class="iq-waves-effect d-flex">
                                    <a href="profile" onclick="boda('profile')">
                                        <img class="profile-pic" src="{{ asset('images/11.png') }}" alt="profile-pic" style="width:120px; height:180px; padding-bottom:50px">                                        </a> <a href="profile" style="color:#dbdbdb; padding-left:40px;"><b style="font-size:20px;">Nancy John</b><br>
                                        <b style="font-size:15px;">Click to view your profile</b></a>

                                    <a href="verify" style="color:#dbdbdb; padding-left:250px; padding-top:30px; font-size:20px;"><b><span Style="color:red;">Not Verified<i class="las la-exclamation-circle" style="color:red;"></i></span></b><br><b style="font-size:15px;">click here to Verify Account</b></a>                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    * {
                        box-sizing: border-box;
                    }

                    /* Create two equal columns that floats next to each other */
                    .column {
                        float: left;
                        width: 100%;
                        padding: 10px;
                        height: 150px;
                        /* Should be removed. Only for demonstration */
                    }

                    /* Clear floats after the columns */
                    .row:after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
                    @media screen and (max-width: 600px) {
                        .column {
                            width: 100%;
                        }
                    }
                </style>
                <a href="verify" onclick="boda('verify')">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="verify" style="width:950px; background-color:#131313; color:#dbdbdb;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-user-check iq-arrow-left"></i> Verify Account</h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('user.dashboard') }}" onclick="boda('dashboard')">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="dashboard" style="width:950px; background-color:#131313;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <!--<img src="images/home.svg" width="80px">-->
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-home iq-arrow-left"></i> Dashboard</h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="deposit" onclick="boda('deposit')">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="deposit" style="width:950px; background-color:#131313;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <!--<img src="images/send-money.svg" width="80px">-->
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-archive iq-arrow-left"></i> Deposit</h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="withdraw" onclick="boda('withdraw')">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="withdraw" style="width:950px; background-color:#131313;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <!--<img src="images/withdraw (3).svg" width="80px">-->
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-money-bill iq-arrow-left"></i> Withdrawal</h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="upgrade" onclick="boda('upgrade')">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="upgrade" style="width:950px; background-color:#131313;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <!--<img src="images/earnings (1).svg" width="80px">-->
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-sort-amount-up iq-arrow-left"></i> Upgrade Account</b></h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="transactions" onclick="boda('transactions')">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="transactions" style="width:950px; background-color:#131313;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <!--<img src="images/barcode.svg" width="80px">-->
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-file-invoice-dollar iq-arrow-left"></i> My Transactions</h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="referral-history" onclick="boda('referral-history')">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="referral-history" style="width:950px; background-color:#131313;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <!--<img src="images/barcode.svg" width="80px">-->
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-network-wired iq-arrow-left"></i> Referral History</h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="support" onclick="boda('support')">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="support" style="width:950px; background-color:#131313;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <!--<img src="images/support.svg" width="80px">-->
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-headset iq-arrow-left"></i> Contact Support</h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="logout" onclick="boda('logout')">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="logout" style="width:950px; background-color:#131313;">
                            <div class="iq-card-body">
                                <div class="mt-4">
                                    <!--<img src="images/withdraw.svg" width="80px">-->
                                    <h2 style="font-size:40px; color:#dbdbdb; font-family: 'Roboto'!important;"><i class="las la-sign-out-alt iq-arrow-left"></i> Log Out</b></h2>
                                    <!--<p>Frontend time</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
<footer class="iq-footer" style="background-color:#131313; color:#dbdbdb;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright {{ Date('Y') }} <a href="#">{{ env('APP_NAME') }} </a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Appear JavaScript -->
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<!-- Countdown JavaScript -->
<script src="{{ asset('js/countdown.min.js') }}"></script>
<!-- Counterup JavaScript -->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- Wow JavaScript -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- Apexcharts JavaScript -->
<script src="{{ asset('js/apexcharts.js') }}"></script>
<!-- Slick JavaScript -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- Select2 JavaScript -->
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
<!-- lottie JavaScript -->
<script src="{{ asset('js/lottie.js') }}"></script>
<!-- am core JavaScript -->
<script src="{{ asset('js/core.js') }}"></script>
<!-- am charts JavaScript -->
<script src="{{ asset('js/charts.js') }}"></script>
<!-- am animated JavaScript -->
<script src="{{ asset('js/animated.js') }}"></script>
<!-- am kelly JavaScript -->
<script src="{{ asset('js/kelly.js') }}"></script>
<!-- am maps JavaScript -->
<script src="{{ asset('js/maps.js') }}"></script>
<!-- am worldLow JavaScript -->
<script src="{{ asset('js/worldLow.js') }}"></script>
<!-- Raphael-min JavaScript -->
<script src="{{ asset('js/raphael-min.js') }}"></script>
<!-- Morris JavaScript -->
<script src="{{ asset('js/morris.js') }}"></script>
<!-- Morris min JavaScript -->
<script src="{{ asset('js/morris.min.js') }}"></script>
<!-- Flatpicker Js -->
<script src="{{ asset('js/flatpickr.js') }}"></script>
<!-- Style Customizer -->
<script src="{{ asset('js/style-customizer.js') }}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{ asset('js/chart-custom.js') }}"></script>
<!-- Custom JavaScript -->
<script src="{{ asset('js/custom.js') }}"></script>


<script>
    function boda(val) {
        document.querySelector("#" + val).style = 'background-color:#000; width:950px; border: 2px solid red!important;';
    }
</script>

</body>

</html>
