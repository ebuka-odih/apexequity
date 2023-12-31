<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Sign up With Easytrade Pro to join thousands of traders currently benefiting from high leveraged full STP/ECN CFD trading with zero conflict of interest through tier one liquidity.">
    <meta name="keywords" content="Online Forex, Forex, ECN/STP Broker, @$/7 Support, THEALERTNATION">
    <meta name="author" content="Easytrade Pro">
    <meta name="viewport" content="">
    <meta name="theme-color" content="#e9e8f0" />
    <!-- Site Properties -->
    <title> Easytrade Pro</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('new/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('new/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('new/css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="new/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="new/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="new/fonts/lato-v16-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="new/fonts/lato-v16-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="new/fonts/montserrat-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.html">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('new/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('new/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script>
        // Detect request animation frame
        var scroll = window.requestAnimationFrame ||
            // IE Fallback
            function(callback){ window.setTimeout(callback, 1000/60)};
        var elementsToShow = document.querySelectorAll('.show-on-scroll');

        function loop() {

            Array.prototype.forEach.call(elementsToShow, function(element){
                if (isElementInViewport(element)) {
                    element.classList.add('is-visible');
                } else {
                    element.classList.remove('is-visible');
                }
            });

            scroll(loop);
        }

        // Call the loop for the first time
        loop();

        // Helper function from: http://stackoverflow.com/a/7557433/274826
        function isElementInViewport(el) {
            // special bonus for those using jQuery
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }
            var rect = el.getBoundingClientRect();
            return (
                (rect.top <= 0
                    && rect.bottom >= 0)
                ||
                (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight))
                ||
                (rect.top >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
            );
        }
    </script>
    <style>
        .body {
            animation: fadeInAnimation ease 10s
            animation-iteration-count: 4;
            animation-fill-mode: forwards;
        }

        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

    </style>
</head>

<body style="background-color:#000;" class="body">
<!-- preloader begin -->
<div class="in-loader" style="background-color:#000;">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- preloader end -->
<header style="background-color:#000; color:#000;">
    <!-- header content begin -->
    <div class="uk-section uk-padding-small in-profit-ticker">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                        <ul class="uk-grid-large uk-slider-items uk-child-width-1-3@s uk-child-width-1-6@m uk-text-center" data-uk-grid>
                            <li>
                                <i class="fas fa-angle-up in-icon-wrap small circle up"></i> XAUUSD <span class="uk-text-success">1478.81</span>
                            </li>
                            <li>
                                <i class="fas fa-angle-down in-icon-wrap small circle down"></i> GBPUSD <span class="uk-text-danger">1.3191</span>
                            </li>
                            <li>
                                <i class="fas fa-angle-down in-icon-wrap small circle down"></i> EURUSD <span class="uk-text-danger">1.1159</span>
                            </li>
                            <li>
                                <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDJPY <span class="uk-text-success">109.59</span>
                            </li>
                            <li>
                                <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDCAD <span class="uk-text-success">1.3172</span>
                            </li>
                            <li>
                                <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDCHF <span class="uk-text-success">0.9776</span>
                            </li>
                            <li>
                                <i class="fas fa-angle-down in-icon-wrap small circle down"></i> AUDUSD <span class="uk-text-danger">0.67064</span>
                            </li>
                            <li>
                                <i class="fas fa-angle-up in-icon-wrap small circle up"></i> GBPJPY <span class="uk-text-success">141.91</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-padding-remove-vertical">
        <!-- module navigation begin -->
        <nav class="uk-navbar-container uk-navbar-transparent" ><!--data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;"-->
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left uk-width-auto">
                    <div class="uk-navbar-item">
                        <!-- module logo begin -->
                        <a class="uk-logo" href="index-2.html">
                            <img class="in-offset-top-10" src="img/in-lazy.svg" data-src="img/in-logo-1.png" alt="logo" width="330" height="36" data-uk-img>
                        </a>
                        <!-- module logo begin -->
                    </div>
                </div>
                <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html" style="color:#fff;">About</a></li>
                        <li><a href="contact.html" style="color:#fff;">Contact</a></li>
                        <li><a href="faq.html" style="color:#fff;">FAQ</a></li>
                    </ul>
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <div>
                            <a href="signin.html" class="uk-button uk-button-text">Login</a>
                            <a href="signup.html" class="uk-button uk-button-text">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- module navigation end -->
    </div>
    <!-- header content end -->
</header>
   @yield('content')
<footer >
    <!-- footer content begin -->
    <div class="uk-section uk-section-primary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top" style="background-color:#010847;">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-flex" data-uk-grid>
                <!--<div>
                    <h4 class="uk-heading-bullet">Overview</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">Stock indices</a></li>
                        <li><a href="#">Commodities</a></li>
                        <li><a href="#">Forex</a></li>
                    </ul>
                </div>-->
                <div>
                    <h4 class="uk-heading-bullet">Company</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="about.html">About</a></li>
                        <!--<li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>-->
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">Legal</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="privacy_policy.html">Privacy &amp; Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="uk-flex-first uk-flex-last@m">
                    <ul class="uk-list uk-link-text">
                        <li><img class="uk-margin-small-bottom" src="img/in-lazy.svg" data-src="img/in-logo-2.png" alt="logo" width="230" height="36" data-uk-img></li>
                        <li><a href="#"><i class="fas fa-envelope uk-margin-small-right"></i>info@easytradepro.live</a></li>
                        <li>Wenlock Road 20-22N1 7GU London Unitied Kingdom.</li>
                        <!--<li><a href="#"><i class="fas fa-map-marker-alt uk-margin-small-right"></i>Jakarta, Indonesia</a></li>-->
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top" data-uk-grid>
                <div class="uk-width-5-6@m uk-margin-bottom">
                    <div class="in-footer-warning in-margin-top-20@s">
                        <h5 class="uk-text-small uk-text-uppercase"><span>Risk Warning</span></h5>
                        <p class="uk-text-small">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary </p>
                    </div>
                </div>
                <div class="uk-width-1-2@m in-copyright-text">
                    <p>© Easytrade Pro 2022. All rights reserved.</p>
                </div>
                <div class="uk-width-1-2@m uk-text-right@m in-footer-socials">
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->
    <!-- module totop begin -->
    <div class="uk-visible@m">
        <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
    </div>
    <!-- module totop begin -->
</footer>
<!-- Javascript -->
<script src="{{ asset('new/js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('new/js/vendors/indonez.min.js') }}"></script>
<script src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" defer></script>
<script src="{{ asset('new/js/config-theme.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>


<!-- Mirrored from easytradepro.live/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Dec 2023 12:47:33 GMT -->
</html>
