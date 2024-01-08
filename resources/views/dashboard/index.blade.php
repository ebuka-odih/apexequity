

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
    <title>Dashboard - {{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="../img/Signals-Alert-3.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="../img/Signals-Alert-3.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
{{--    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">--}}
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

    <script src="../plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="../plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />
    <style>
        /*------ Google Font Style ------ */
        body {font-family:'Roboto'!important;}
    </style>

</head>
</select>
<div id="google_translate_element2"></div>
<script type="text/javascript">
    function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<body>
<body style="background-color:#000;">
<!-- loader Start -->
<div id="loading" style="background-color:#000;">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <div id="content-page" class="content-page">
        <div class="iq-top-navbar header" style="margin-top:40px; background-color:transparent; width:1000px; heigth:400px;">
            <div class="iq-navbar-custom" style="width:1000px;">
                <nav class="navbar navbar-expand-lg navbar-light p-0" style="width:1000px;">
                    <div class="" style="margin-top:-80px; margin-right:-150px; width:1000px; background-color:#131313; color:#dbdbdb;">
                        <div>
                            <a href="{{ route('user.menu') }}" style="margin-left:0px;"><img src="{{ asset('images/menu (3).png') }}" alt="menu" width="100px"></a>
                            <h2 style="font-weight: bolder; color: white; font-size: 30px">{{ env('APP_NAME') }}</h2>
{{--                            <img src="{{ asset('images/in-logo-1.png') }}" alt="logo" style="padding-bottom:20px; width:190px; margin-top:20px; margin-left:50px;">--}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row content-body">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="height:400px; margin-top:60px; background-color:#131313; color:#dbdbdb;">
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="column" style="background-color:none; border-bottom: Solid red; border-top:Solid blue; border-left:Solid blue; border-right:Solid blue; border-radius:20px; height:180px!important;">
                                    <div class="iq-waves-effect d-flex">
                                        <a href="profile">
                                            <img class="profile-pic" src="{{ asset('images/11.png') }}" alt="profile-pic" style="width:120px; height:180px; padding-bottom:50px">                                            </a>
                                        <table>
                                            <thead>
                                            <tr>
                                                <th scope="col" style="padding-left:40px; padding-bottom:250px;">
                                                    <b style="color:#dbdbdb; padding-bottom:250px;">
                                                        Username:<br>
                                                        Registration Date:<br>
{{--                                                        Last Access:<br>--}}
                                                        Verification Status:<br>
                                                        Account Status:<br>
                                                        Referral Code:
                                                    </b>
                                                </th>
                                                <th scope="col" style="padding-left:40px; padding-bottom:250px;">
                                                    <b style="color:#dbdbdb; padding-bottom:250px;">
                                                        {{ $user->username }}<br>
                                                       {{ date('M-d-Y', strtotime($user->created_at)) }}<br>
{{--                                                        Jan-04-2024 02:58:31 PM<br>--}}
                                                        <span style="color:red;">Not Verified<i class="las la-exclamation-circle" style="color:red;"></i></span><br>
                                                        Basic<br>
                                                        ocddXL [ <a class="text-danger" href="referral-history" style="text-decoration:underline;" target="_blank">View Page</a> ]
                                                    </b>
                                                </th>
                                            </tr>
                                            </thead>
                                        </table>

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
                            <div class="mt-4" style="padding-top:50px">
                                <img src="{{ asset('images/icons8-pound-24.png') }}" width="60px">
                                <h2 style="font-size:30px; color:#dbdbdb; font-family: 'Roboto'!important;">Total Balance: <span style="font-size:30px; float:right; color:rgb(196, 0, 0);">${{ $user->balance }}</span></h2>
                                <p style="color: rgb(196, 0, 0); float:right;"> non-spendable</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                        <div class="iq-card-body">
                            <div class="mt-4">
                                <img src="{{ asset('images/icons8-investment-50.png') }}" width="80px">
                                <h2 style="font-size:30px; color:#dbdbdb; font-family:'Roboto'!important;">Active Deposit:<br> <span style="font-size:20px; float:left; color:rgb(196, 0, 0);">د.إ0.00</span></h2>
                                <!--<p>Frontend time</p>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                        <div class="iq-card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mt-4">
                                    <img src="{{ asset('images/icons8-earnings-64.png') }}" width="80px">
                                    <h2 style="font-size:30px; font-family:'Roboto'!important; color:#dbdbdb;">Profit:<br> <span style="font-size:20px; color:rgb(196, 0, 0); float:left;">${{ $user->profit }}</span></h2>
                                </div>

                                <div class="text-left">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                        <div class="iq-card-body">
                            <div class="mt-4">
                                <img src="{{ asset('images/icons8-deposit-64.png') }}" width="80px">
                                <h2 style="font-size:30px; font-family:'Roboto'!important; color:#dbdbdb;">Total Deposit:<br> <span style="font-size:20px; color:rgb(196, 0, 0); float:left;">د.إ0.00</span></h2>
                                <!--<p>Frontend time</p>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                        <div class="iq-card-body">
                            <div class="mt-4">
                                <img src="{{ asset('images/icons8-withdraw-58.png') }}" width="80px">
                                <h2 style="font-size:30px; font-family:'Roboto'!important; color:#dbdbdb;">Total Withdrawal:<br> <span style="font-size:20px; float:left; color:rgb(196, 0, 0);">د.إ0.00</span></h2>
                                <!--<p>Frontend time</p>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 row m-0 p-0 iq-duration-block">
                    <div class="col-sm-6 col-md-2 col-lg-2">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                            <div class="iq-card-body">
                                <div>
                                    <img src="{{ asset('images/withdraw (2).svg') }}" width="80px">
                                </div>
                                <div class="mt-4">
                                    <h2 style="font-size:15px; font-family:'Roboto'!important; color:#dbdbdb;">Last Deposit:</h2>
                                    <p><span style="color:rgb(196, 0, 0);">د.إ0.00</span></p>
                                </div>
                                <div id="ethernet-chart-01"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-2">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                            <div class="iq-card-body">
                                <div>
                                    <img src="{{ asset('images/withdraw (1).svg') }}" width="80px">
                                </div>
                                <div class="mt-4">
                                    <h2 style="font-size:15px; font-family:'Roboto'!important; color:#dbdbdb;">Last Withdrawal:</h2>
                                    <p><span style="color:rgb(196, 0, 0);">د.إ0.00</span></p>
                                </div>
                                <div id="ethernet-chart-02"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-2">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                            <div class="iq-card-body">
                                <div>
                                    <img src="{{ asset('images/donation.svg') }}" width="80px">
                                </div>
                                <div class="mt-4">
                                    <h2 style="font-size:15px; font-family:'Roboto'!important; color:#dbdbdb;">Pending Withdraw:</h2>
                                    <p><span style="color:rgb(196, 0, 0);">د.إ0.00</span></p>
                                </div>
                                <div id="ethernet-chart-03"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                            <div class="iq-card-body">
                                <h4 class="text-uppercase mb-0" style="color:#dbdbdb; font-family:'Roboto'!important; color:#dbdbdb;">Trading Session(Now Active)</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="font-size-80" style="color:#dbdbdb;">0/<small>0</small></div>
                                    <div class="text-left">
                                        <p class="m-0 text-uppercase font-size-12">1 Hours Ago</p>
                                        <div class="mb-1 text-black">1500<span class="text-danger"><i class="ri-arrow-down-s-fill"></i>3.25%</span></div>
                                        <p class="m-0 text-uppercase font-size-12">1 Day Ago</p>
                                        <div class="mb-1 text-black">1890<span class="text-success"><i class="ri-arrow-down-s-fill"></i>1.00%</span></div>
                                        <p class="m-0 text-uppercase font-size-12">1 Week Ago</p>
                                        <div class="text-black">1260<span class="text-danger"><i class="ri-arrow-down-s-fill"></i>9.87%</span></div>
                                    </div>
                                </div>
                                <div id="wave-chart-7"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title" style="font-family:'Roboto'!important; color:#dbdbdb;">Load Time - Last 24 hours</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div id="analytics-platform"></div>
                                <div class="tradingview-widget-copyright"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                <script type="text/javascript">
                                    new TradingView.widget({
                                        "container_id": "analytics-platform",
                                        "width": 920,
                                        "height": 610,
                                        "symbol": "NASDAQ:AAPL",
                                        "interval": "D",
                                        "timezone": "exchange",
                                        "theme": "dark",
                                        "style": "0",
                                        "toolbar_bg": "#f1f3f6",
                                        "withdateranges": true,
                                        "allow_symbol_change": true,
                                        "save_image": false,
                                        "details": true,
                                        "hotlist": true,
                                        "calendar": true,
                                        "locale": "en"
                                    });
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <!--       <div class="trading-iframe" id="trading" style="min-height:600px !important; height:600px">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_eeb1c"
                                         style="min-height:600px !important; height:600px; width:100%"></div>

                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.widget({
                                            "autosize": true,
                                            "symbol": "OANDA:EURUSD",
                                            "interval": "1",
                                            "timezone": "Etc/UTC",
                                            "theme": "Dark",
                                            "style": "1",
                                            "locale": "en",
                                            "toolbar_bg": "#f1f3f6",
                                            "enable_publishing": false,
                                            "withdateranges": true,
                                            "hide_side_toolbar": false,
                                            "allow_symbol_change": true,
                                            "studies": [
                                                "BB@tv-basicstudies",
                                                "MASimple@tv-basicstudies",
                                                "RSI@tv-basicstudies"
                                            ],
                                            "container_id": "tradingview_eeb1c"
                                        });
                                    </script>
                                </div>


                            </div>
                            <div class="clearfix" style="display: none;"></div>

                            <div style="width:250px; position:absolute; top:0; right:0px;" class="righttab">
                                <div style="width:200px; !important; margin:0 auto; color:#FFFFFF">
                                    <div class="line"></div>
                                    <div class="rightcontent left">
                                        <label>
                                            <!-- react-text: 95 -->Option type:
                                            <!-- /react-text --><span title="Select option type" class="ask">?</span>
                                        </label>
                                        <div class="category ui option-select selection dropdown" tabindex="0">
                                            <input type="hidden" value=""><i class="dropdown icon" tabindex="0">
                                                <div class="menu" tabindex="-1"></div>
                                            </i>
                                            <div class="default text">Turbo</div>
                                            <div class="menu" tabindex="-1"><a href="#" class="item">Turbo</a><a href="#"
                                                                                                                 class="item">Intraday</a><a href="#" class="item">Long term</a></div>
                                        </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title" style="font-family:'Roboto'!important; color:#dbdbdb;">Daily Crypto Prices</h4>
                                            </div>
                                        </div>
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container bodyi">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <div class="tradingview-widget-copyright"></div>
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                                {
                                                    "width": 900,
                                                    "height": 490,
                                                    "defaultColumn": "overview",
                                                    "screener_type": "crypto_mkt",
                                                    "displayCurrency": "USD",
                                                    "colorTheme": "light",
                                                    "locale": "en"
                                                }
                                            </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background-color:#131313; color:#dbdbdb;">
                                        <div class="iq-card-header d-flex justify-content-between border-none">
                                            <div class="iq-header-title">
                                                <h5 class="card-title" style="font-family:'Roboto'!important; color:#dbdbdb;">Ongoing Active Investment Worldwide</h5>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <div id="world-map" style="height: 250px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-lg-4">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-header d-flex justify-content-between">
                                       <div class="iq-header-title">
                                          <h4 class="card-title">Latest Browser Check</h4>
                                       </div>
                                    </div>

                                 </div>
                              </div>-->
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
                                Copyright 2020 <a href="#">easytradepro </a> All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Optional JavaScript -->
                <script src="{{ asset('plugins/jquery-3.1.1.min.js') }}"></script>
                <script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js') }}"></script>
                <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <!--<script src="js/jquery.min.js"></script>
                <script src="js/popper.min.js"></script>-->
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


                <!--<script src="user_notifications.js"></script>-->
                <script>
                    function boda(val) {
                        document.querySelector("#" + val).style = 'background-color:#000; width:950px; border: 2px solid red!important;';
                    }
                </script>
</body>
</html>
