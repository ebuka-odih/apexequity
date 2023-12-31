@extends('pages.layout.app')
@section('content')

<main style="background-color:#000;">
    <!-- slideshow content begin -->
    <div class="uk-section uk-padding-remove-vertical" style="background-color:#000;">
        <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
            <ul class="uk-slideshow-items" style="background-color:#000;">
                <li>
                    <style>
                        .cha{
                            background-color:rgb(196, 0, 0);
                        }
                        .cha:hover{
                            background-color:#000;
                        }
                    </style>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-overlay">
                                    <h1 style="color:#fff;">Fully Automated<span class="in-highlight" style="color:#fff;">Forex Trade 100%</span>Trade By Opportunity</h1>
                                    <p class="uk-text-lead uk-visible@m" style="color:#fff;">Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
                                    <div class="in-slideshow-button">
                                        <a href="signin.html" class="uk-button uk-button-primary cha uk-border-rounded">Login Account</a>
                                        <a href="signup.html" class="uk-button uk-button-primary cha uk-border-rounded">Open Account</a>
                                    </div>
                                    <p class="uk-text-small" style="color:#fff;"><span class="uk-text-primary">*</span>Trading in Forex/ CFDs is highly speculative and carries a high level of risk.</p>
                                </div>
                            </div>
                            <div class="uk-position-center">
                                <img class="uk-animation-slide-top-small" src="img/in-slideshow-image-4.png" data-src="img/in-slideshow-image-4.png" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-overlay">
                                    <h1 style="color:#fff;">Extremely Low Risk<span class="in-highlight">High Account</span>Growth Instant Access!</h1>
                                    <p class="uk-text-lead uk-visible@m" style="color:#fff;">Covesting allows you to automatically copy top performing traders and achieve the returns</p>
                                    <div class="in-slideshow-button">
                                        <a href="signin.html" style="hover-color:#000" class="uk-button cha uk-button-primary uk-border-rounded">Login Account</a>
                                        <a href="signup.html" class="uk-button uk-button-primary cha uk-border-rounded">Open Account</a>
                                    </div>
                                    <p class="uk-text-small" style="color:#fff;"><span class="uk-text-primary">*</span>Trading in Forex/ CFDs is highly speculative and carries a high level of risk.</p>
                                </div>
                            </div>
                            <div class="uk-position-center">
                                <img class="uk-animation-slide-top-small" src="img/in-slideshow-image-1.png" data-src="img/in-slideshow-image-1.png" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>

        </div>
    </div>
    <!-- slideshow content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-muted in-padding-large-vertical@s in-profit-9" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0)); margin-top:29px; padding-bottom:10px; padding-top:10px;" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container">
            <div class="uk-grid-divider" data-uk-grid>
                <div class="uk-width-expand@m in-margin-top-20@s">

                    <h2 style="color:#fff; font-size:30px; padding-right:
                        100px; padding-top:30px;">Less <br>Commission</h2>
                    <!--<p style="color:#000">Choose from 6 asset classes and get access to 500+ trading instruments</p>-->
                </div>
                <div class="uk-width-2-3@m" style="padding-right:100px;">
                    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-text-center" data-uk-grid>
                        <div>
                            <i class="fas fa-euro-sign in-icon-wrap circle uk-box-shadow-small" style="background-color:#000;"></i>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#fff; font-size:21px;" >Forex</p>
                        </div>
                        <div>
                            <i class="fab fa-btc in-icon-wrap circle uk-box-shadow-small" style="background-color:#000;"></i>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#fff; font-size:21px;">Crypto</p>
                        </div>
                        <div>
                            <i class="fas fa-chart-area in-icon-wrap circle uk-box-shadow-small" style="background-color:#000;"></i>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#fff; font-size:21px;">Indexes</p>
                        </div>
                        <div>
                            <i class="fas fa-file-contract in-icon-wrap circle uk-box-shadow-small" style="background-color:#000;"></i>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#fff; font-size:21px;">Stocks</p>
                        </div>
                        <div>
                            <i class="fas fa-tint in-icon-wrap circle uk-box-shadow-small" style="background-color:#000;"></i>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#fff; font-size:21px;">Energy</p>
                        </div>
                        <div>
                            <i class="fas fa-cube in-icon-wrap circle uk-box-shadow-small" style="background-color:#000;"></i>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#fff; font-size:21px;">Commodities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <div class="uk-section uk-section-muted uk-padding-large in-wave-3 uk-background-contain uk-background-center" data-uk-parallax="bgy: -200" style="background-color:#000;" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container" >
            <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                <div class="uk-width-1-2@m">
                    <img class="uk-margin-bottom" src="img/in-lazy.gif" data-src="img/in-wave-icon-5.svg" alt="wave-icon" width="64" height="64" data-uk-img>
                    <h1 class="uk-margin-remove" style="color:#fff;">Market <span class="">analysis</span> and<br>trade inspiration</h1>
                    <p style="color:#E9E8E8;">With a thriving network of experts, being a client of TheAlertNation opens doors to many opportunities. Powerful market insight and the top trade setups in the industry. You will have extensive connections to professional traders.</p>
                    <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-margin-medium-top" data-uk-grid>
                        <!--<div>
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <img class="uk-margin-remove-bottom" src="img/in-lazy.gif" data-src="img/in-wave-icon-6.svg" alt="wave-icon" width="52" height="52" data-uk-img>
                                <h5 class="uk-margin-small-top">Strategies &amp; Discussions</h5>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="width">
                                <img class="uk-margin-remove-bottom" src="img/in-lazy.gif" data-src="img/in-wave-icon-7.svg" alt="wave-icon" width="52" height="52" data-uk-img>
                                <h5 class="uk-margin-small-top">Forecasts &amp; Educations</h5>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/z7538iNe2Pw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="uk-position-center">

                        </div>
                        <div id="modal-media-youtube" class="uk-flex-top" data-uk-modal>
                            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                            </div>
                        </div>
                    </div>
                    <p class="uk-text-small uk-text-muted" style="color:#E9E8E8;">Explore the markets at your own pace with short online courses. <span class="uk-label uk-text-small uk-border-pill" style="background-color: rgb(196, 0, 0);">Sign up</span></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const HomepageApp = {
            //----------- 1. uikit slideshow -----------
            theme_slideshow: function() {
                UIkit.slideshow('.in-slideshow', {
                    autoplay: true,
                    autoplayInterval: 7000,
                    pauseOnHover: false,
                    animation: 'fade',
                    minHeight: 480,
                    maxHeight: 700
                });
            },
            //---------- 2. Modal iframe -----------
            theme_iframe: function() {
                const youtube = new iframeVid({
                    selector: '.in-iframe',
                    url: 'https://alertsignalsnation.co.uk/img/WhatsApp Video 2020-11-20 at 6.40.33 AM.mp4',
                    width: 900,
                    height: 506
                });
            },
            //---------- 3. Counter config -----------
            theme_counter: function() {
                const counter = new counterUp({
                    selector: '.count',
                    start: 0,
                    duration: 3200,
                    intvalues: true,
                    interval: 50
                });
                counter.start();
            },
            theme_init: function() {
                HomepageApp.theme_slideshow();
                HomepageApp.theme_iframe();
                HomepageApp.theme_counter();
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            HomepageApp.theme_init();
        });
    </script>
    <style>
        @media (max-width: 960px) {
            .in-wave-3 .in-video-wrapper .plyr {
                width: 93.5%;
                box-shadow: 35px 35px 0 0 #010847;
                border-radius: 7px;
            }

            .in-wave-3 .plyr.plyr--stopped .plyr__controls {
                display: none;
            }

            .in-wave-3 .in-wave-video {
                width: 97%;
            }

            .in-wave-3 .in-wave-video img {
                box-shadow: 15px 15px 0 0 #010847;
            }

            .in-wave-3 .in-wave-video .in-play-button {
                width: 75px;
                height: 75px;
                border-radius: 50px;
                background: rgba(32, 32, 32, 0.9);
                box-shadow: 0 0 0 0 white;
                -webkit-animation: pulse-white 2s infinite;
                animation: pulse-white 2s infinite;
            }

            .in-wave-3 .in-wave-video i {
                font-size: 24px;
                position: absolute;
                top: 25px;
                left: 28px;
            }
        }
    </style>
    <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-5" style="background-color:#000;" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-5-6@m in-margin-top-20@s">
                    <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-text-center" data-uk-grid>
                        <div>
                            <img src="img/in-lazy.svg" data-src="img/in-profit-icon-1.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#E9E8E8;">Wide Range of Trading Instruments</p>
                        </div>
                        <div>
                            <img src="img/in-lazy.svg" data-src="img/in-profit-icon-2.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#E9E8E8;">Unparalleled Trading Conditions</p>
                        </div>
                        <div>
                            <img src="img/in-lazy.svg" data-src="img/in-profit-icon-3.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#E9E8E8;">Globally Licensed &amp; Regulated</p>
                        </div>
                        <div>
                            <img src="img/in-lazy.svg" data-src="img/in-profit-icon-4.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#E9E8E8;">Committed to Forex Education</p>
                        </div>
                        <div class="uk-visible@m">
                            <img src="img/in-lazy.svg" data-src="img/in-profit-icon-5.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                            <p class="uk-text-bold uk-margin-small-top" style="color:#E9E8E8;">Regular Contests &amp; Promotions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top uk-margin-bottom" data-uk-grid>
                <div>
                    <div class="in-pricing-1">
                        <div class="uk-card uk-card-default" style="border: solid rgb(196, 0, 0); border-radius:5%;">
                            <div class="uk-card-header">
                                <div class="uk-card-badge">
                                    <!-- <i class="fas fa-graduation-cap fa-lg in-icon-wrap circle"></i>-->
                                </div>
                                <h3 class="uk-margin-remove-bottom" style="color:#fff;">Learn</h3>
                                <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top" style="color:#fff;">knowledge to get started</p>
                            </div>
                            <div class="uk-card-body">
                                <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                    <li style="color:#E9E8E8;">FREE Demo Account</li>
                                    <li style="color:#E9E8E8;">Step-by step tutorials &amp; articles</li>
                                    <li style="color:#E9E8E8;">Online webinars &amp; local seminars</li>
                                    <li style="color:#E9E8E8;">Your own Account Manager</li>
                                </ul>
                                <a href="signup.html" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Open Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="in-pricing-1">
                        <div class="uk-card uk-card-default" style="border: solid rgb(196, 0, 0); border-radius:5%;">
                            <div class="uk-card-header">
                                <div class="uk-card-badge">
                                    <!--<i class="fas fa-chart-area fa-lg in-icon-wrap circle"></i>-->
                                </div>
                                <h3 class="uk-margin-remove-bottom" style="color:#fff;">Trade</h3>
                                <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">take your first profit</p>
                            </div>
                            <div class="uk-card-body">
                                <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                    <li style="color:#E9E8E8;">Tight spreads</li>
                                    <li style="color:#E9E8E8;">Superfast trade execution</li>
                                    <li style="color:#E9E8E8;">Hi-tech forex trading tools</li>
                                    <li style="color:#E9E8E8;">Ultimate risk protection &amp; security</li>
                                </ul>
                                <a href="signup.html" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Open Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="in-pricing-1 uk-visible@m">
                        <div class="uk-card uk-card-default" style="border: solid rgb(196, 0, 0); border-radius:5%;">
                            <div class="uk-card-header">
                                <div class="uk-card-badge">
                                    <!--<i class="fas fa-chart-pie fa-lg in-icon-wrap circle"></i>-->
                                </div>
                                <h3 class="uk-margin-remove-bottom" style="color:#fff;">Invest</h3>
                                <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">choose the best portfolio</p>
                            </div>
                            <div class="uk-card-body">
                                <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                    <li style="color:#E9E8E8;">No need to be an experienced</li>
                                    <li style="color:#E9E8E8;">Large number of strategies</li>
                                    <li style="color:#E9E8E8;">Profit whenever Managers earn</li>
                                    <li style="color:#E9E8E8;">Full control of your Investment</li>
                                </ul>
                                <a href="#" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" style="background-image: linear-gradient(to right, rgb(196, 0, 0) ,  rgb(0, 0, 0));">Start following</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s uk-background-contain in-profit-2" style="background-color:#000;" data-src="img/in-profit-decor-3.svg" data-aos="zoom-in" data-aos-duration="1500" data-uk-img>
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-1-2@m uk-text-center">
                    <h2 style="color:#fff;">Experience more than Trading.</h2>
                    <p class="uk-text-lead" style="color:#E9E8E8;">The Easytrade Pro firm was founded on the basis of helping Forex traders get the best possible results.</p>
                    <i class="fas fa-chevron-down uk-text-primary"></i>
                </div>
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                        <div>
                            <div class="in-pricing-1" >
                                <div class="uk-card uk-card-default uk-box-shadow-medium" >
                                    <div class="uk-card-media-top">
                                        <img class="uk-width-1-1 uk-align-center" src="img/in-lazy.svg" data-src="img/in-profit-content-1.jpg" data-width data-height alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="in-heading-extra in-card-decor-1">
                                            <h2 class="uk-margin-remove-bottom">Economic</h2>
                                            <p class="uk-text-lead">Analysis</p>
                                        </div>
                                        <p class="uk-margin-small-top">Stay ahead of the markets with world-leading market analysis through daily webinars by industry experts.</p>
                                        <div class="uk-margin-medium-top">
                                            <a class="uk-button uk-button-link uk-text-uppercase uk-text-small" href="#">Read analysis<i class="fas fa-caret-square-right uk-margin-small-left"></i></a>
                                            <span class="uk-label uk-border-pill uk-align-right">Weekly Update</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="in-pricing-1">
                                <div class="uk-card uk-card-default uk-box-shadow-medium">
                                    <div class="uk-card-media-top">
                                        <img class="uk-width-1-1 uk-align-center" src="img/in-lazy.svg" data-src="img/in-profit-content-2.jpg" data-width data-height alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="in-heading-extra in-card-decor-2">
                                            <h2 class="uk-margin-remove-bottom">Technical</h2>
                                            <p class="uk-text-lead">Analysis</p>
                                        </div>
                                        <p class="uk-margin-small-top">Access the financial markets with an account catered to your needs and benefit from good conditions.</p>
                                        <div class="uk-margin-medium-top">
                                            <a class="uk-button uk-button-link uk-text-uppercase uk-text-small" href="#">Read analysis<i class="fas fa-caret-square-right uk-margin-small-left"></i></a>
                                            <span class="uk-label uk-border-pill uk-align-right">Daily Update</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="uk-card uk-card-default uk-card-body in-profit-appcard">
                                <div class="uk-child-width-1-2@m" data-uk-grid>
                                    <div>
                                        <div data-uk-margin>
                                            <a href="#" class="uk-button in-button-app uk-margin-small-right">
                                                <i class="fab fa-google-play fa-2x"></i>
                                                <span class="wrapper">Download from<span>Play Store</span></span>
                                            </a>
                                            <a href="#" class="uk-button in-button-app">
                                                <i class="fab fa-apple fa-2x"></i>
                                                <span class="wrapper">Download from<span>App Store</span></span>
                                            </a>
                                        </div>
                                        <hr>
                                        <p>Trade on <span class="uk-text-bold uk-text-primary">world class platform</span> without a doubt. <br> <span class="uk-text-bold uk-text-primary">MobileApp Coming Soon For all Platform.</span></p>
                                    </div>
                                    <div class="uk-visible@m">
                                        <img src="img/in-lazy.svg" data-src="img/in-profit-mockup-1.png" width="450" height="203" alt="profit-mockup" data-uk-img>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="uk-grid uk-grid-divider uk-grid-match in-profit-tradestatus" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-auto@m">
                                    <div class="uk-flex uk-flex-left uk-flex-center@m">
                                        <div class="uk-grid uk-grid-small uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <i class="fas fa-chart-line fa-2x in-icon-wrap circle primary-color"></i>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h1 class="uk-margin-remove-bottom" style="color:#fff;">324,978,126</h1>
                                                <p class="uk-text-uppercase uk-text-primary uk-text-small uk-margin-remove-top">Trades Opened at Profit</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-width-expand@m uk-flex-middle">
                                    <p class="uk-text-lead" style="color:#E9E8E8;">Trade & Invest in Stocks, Currencies, Indices, and Commodities (CFDs).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-secondary uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-profit-3" data-src="img/in-section-profit-3.png" data-aos="zoom-in" data-aos-duration="1500" data-uk-img>
        <div class="uk-container uk-margin-small-bottom">
            <div class="uk-grid-large" data-uk-grid>
                <div class="uk-width-1-2@m">
                    <h2>We are committed to meeting your CFD and FX trading needs</h2>
                    <p class="uk-text-lead">We help your money grow by putting it to work. Not Just by Words. Our experts ensure not only that your funds are at work, but are putting carefully planned and strategically diversified trading and investment portfolio for risk management. We ensure transparent returns, with favourable management fee.</p>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-small-top" data-uk-grid>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="89">0</span>+
                            </h1>
                            <p>Countries our Clients currently come from and counting.</p>
                        </div>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="90">0</span>%
                            </h1>
                            <p>We provide 80-90% high probability forex trades but we also provide Gold, Crypto, Index, Stock Signals.</p>
                        </div>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="13">0</span>K+
                            </h1>
                            <p>Active Followers and Counting.</p>
                        </div>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="10">0</span>K+
                            </h1>
                            <p>Years of Experience in the Industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-4" data-aos="zoom-in" data-aos-duration="1500" style="background-color:#000;">
        <div class="uk-container uk-margin-small-top uk-margin-medium-bottom">
            <div class="uk-grid uk-flex uk-flex-center " data-uk-grid>
                <div class="uk-width-5-6@m">
                    <div class="uk-grid uk-flex-middle" data-uk-grid>
                        <div class="uk-width-expand@m">
                            <h2 style="color:#fff;">Connect to global capital markets</h2>
                        </div>
                        <div class="uk-width-3-5@m">
                            <p class="uk-text-lead" style="color:#E9E8E8;">Access 40,000+ trading instruments and professional asset management on award-winning platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <!--<div class="uk-child-width-1-2@s uk-child-width-1-5@m in-profit-stockprice" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill" style="background-color:#000;">
                                <span class="uk-float-left">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-ticker-1.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>1,526.05
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill" style="background-color:#000;">
                                <span class="uk-float-left">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-ticker-2.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>205.37
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill" style="background-color:#000;">
                                <span class="uk-float-left">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-ticker-3.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>267.97
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill" style="background-color:#000;">
                                <span class="uk-float-left">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-ticker-4.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right up">
                                    <i class="fas fa-arrow-up"></i>59,230
                                </span>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill" style="background-color:#000;">
                                <span class="uk-float-left">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-ticker-5.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right up">
                                    <i class="fas fa-arrow-up"></i>78.98
                                </span>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="uk-width-5-6@m">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <h4 class="uk-margin-remove-bottom uk-text-primary">Ready to trade?</h4>
                            <p class="uk-margin-remove-top" style="color:#E9E8E8;">Get started with your trading account today.</p>
                        </div>
                        <div class="uk-width-expand@m">
                            <form class="uk-grid-small" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <input class="uk-input uk-border-rounded" type="text" placeholder="Email address...">
                                </div>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <input class="uk-input uk-border-rounded" type="text" placeholder="Phone number...">
                                </div>
                                <div class="uk-width-1-1 uk-width-auto@m">
                                    <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand" style="background-image: linear-gradient(to right, rgb(196, 0, 0) ,  rgb(0, 0, 0));">Open Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <div style="margin-top:70px;" data-aos="zoom-in" data-aos-duration="1500">
        <div>
            <div class="uk-container in-slideshow-feature uk-visible@m">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m">
                        <!--<div class="uk-child-width-1-4" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-drafting-compass in-icon-wrap small circle uk-box-shadow-small"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove" style="color:#E9E8E8;">Enhanced Tools</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-book in-icon-wrap small circle uk-box-shadow-small"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove" style="color:#E9E8E8;">Trading Guides</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-bolt in-icon-wrap small circle uk-box-shadow-small"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove" style="color:#E9E8E8;">Fast execution</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-percentage in-icon-wrap small circle uk-box-shadow-small"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove" style="color:#E9E8E8;">Less Commission</p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slideshow content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-13" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-5-6@m uk-text-center in-margin-top-20@s">
                    <p class="uk-text-lead uk-margin-remove-bottom" style="color:#E9E8E8;">Trade with confidence</p>
                    <h2 class="uk-margin-small-top" style="color:#fff;">Complete package for every traders</h2>
                </div>
            </div>
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-margin-bottom" data-uk-grid>
                <div>
                    <div class="in-pricing-1">
                        <div class="uk-card uk-card-default" style="border: solid rgb(196, 0, 0); border-radius:5%;">
                            <div class="uk-card-header">
                                <h3 class="uk-margin-remove-bottom" style="color:#fff;">STARTER ACCOUNT <span style="background-color:rgb(196, 0, 0); color:#fff; border-radius:30%;"> £500</span></h3>
                                <p class="uk-text-muted uk-margin-remove-top" style="color:#fff;">Benefit from industry-leading entry prices</p>
                            </div>
                            <div class="uk-card-body uk-background-contain uk-background-bottom-right" data-uk-img>
                                <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                    <li style="color:#E9E8E8;">min. possible deposit: £ 500</li>
                                    <li style="color:#E9E8E8;">min. Expected profit: £ 3,500</li>
                                    <li style="color:#E9E8E8;">max. Expected profit: £5,000</li>
                                    <li style="color:#E9E8E8;">Highly-regarded trader education*</li>
                                    <li style="color:#E9E8E8;">Advanced risk management</li>
                                    <li style="color:#E9E8E8;">Tax-free spread betting profits</li>
                                    <li style="color:#E9E8E8;">Low minimum deposit</li>
                                </ul>
                                <a href="signup.html" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Open an account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="in-pricing-1">
                        <div class="uk-card uk-card-default" style="border: solid rgb(196, 0, 0); border-radius:5%;">
                            <div class="uk-card-header">
                                <h3 class="uk-margin-remove-bottom" style="color:#fff;">CLASSIC ACCOUNT  <span style="background-color:rgb(196, 0, 0); color:#fff; border-radius:30%;"> £5,000</span></h3>
                                <p class="uk-text-muted uk-margin-remove-top" style="color:#fff;">Receive even tighter spreads and commissions</p>
                            </div>
                            <div class="uk-card-body uk-background-contain uk-background-bottom-right" data-uk-img>
                                <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                    <li style="color:#E9E8E8;">min. possible deposit: £5,000</li>
                                    <li style="color:#E9E8E8;">min. expected profit: £45,000</li>
                                    <li style="color:#E9E8E8;">max. expected profit: £50,000</li>
                                    <li style="color:#E9E8E8;">Expert news & analysis</li>
                                    <li style="color:#E9E8E8;">Competitive spreads</li>
                                    <li style="color:#E9E8E8;">Advanced trading tools</li>
                                    <li style="color:#E9E8E8;">Tax-free spread betting profits</li>
                                </ul>
                                <a href="signup.html" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Open an account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="in-pricing-1">
                        <div class="uk-card uk-card-default" style="border: solid rgb(196, 0, 0); border-radius:5%;">
                            <div class="uk-card-header">
                                <h3 class="uk-margin-remove-bottom" style="color:#fff;">PLATINUM  <span style="background-color:rgb(196, 0, 0); color:#fff; border-radius:30%;"> £ 10,000</span></h3>
                                <p class="uk-text-muted uk-margin-remove-top" style="color:#fff;">Benefit from industry-leading entry prices</p>
                            </div>
                            <div class="uk-card-body uk-background-contain uk-background-bottom-right" data-uk-img>
                                <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                    <li style="color:#E9E8E8;">min. possible deposit: £10,000</li>
                                    <li style="color:#E9E8E8;">min. expected profit: £99,999</li>
                                    <li style="color:#E9E8E8;">With Full Executive benefits...</li>
                                    <li style="color:#E9E8E8;">Highly-regarded trader education*</li>
                                    <li style="color:#E9E8E8;">Advanced risk management</li>
                                    <li style="color:#E9E8E8;">Tax-free spread betting profits</li>
                                    <li style="color:#E9E8E8;">Low minimum deposit</li>
                                </ul>
                                <a href="signup.html" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Open an account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="in-pricing-1">
                        <div class="uk-card uk-card-default" style="border: solid rgb(196, 0, 0); border-radius:5%;">
                            <div class="uk-card-header">
                                <h3 class="uk-margin-remove-bottom" style="color:#fff;">FOREX SIGNALS  <span style="background-color:rgb(196, 0, 0); color:#fff; border-radius:30%;"> </span></h3>
                                <p class="uk-text-muted uk-margin-remove-top" style="color:#fff;">Receive even tighter spreads and commissions</p>
                            </div>
                            <div class="uk-card-body uk-background-contain uk-background-bottom-right" data-uk-img>
                                <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                    <li style="color:#E9E8E8;">Professional Forex Signals</li>
                                    <li style="color:#E9E8E8;">Up to 10 Signals/day</li>
                                    <li style="color:#E9E8E8;">95% Success Rate</li>
                                    <li style="color:#E9E8E8;">Support 24/7</li>
                                    <li style="color:#E9E8E8;"></li>
                                    <li style="color:#E9E8E8;">Advanced trading tools</li>
                                    <li style="color:#E9E8E8;">Pay using bitcoin only</li>
                                    <li style="color:#E9E8E8;">Use any broker</li>
                                </ul>
                                <a href="sigup.html" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Open an account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-margin-small-right">
                                <i class="fas fa-drafting-compass fa-2x in-icon-wrap small transparent"></i>
                            </div>
                            <div>
                                <p class="uk-text-bold" style="color:#E9E8E8;">Enhanced Tools</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-margin-small-right">
                                <i class="fas fa-book fa-2x in-icon-wrap small transparent"></i>
                            </div>
                            <div>
                                <p class="uk-text-bold" style="color:#E9E8E8;">Trading Guides</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-margin-small-right">
                                <i class="fas fa-bolt fa-2x in-icon-wrap small transparent"></i>
                            </div>
                            <div>
                                <p class="uk-text-bold" style="color:#E9E8E8;">Fast execution</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-margin-small-right">
                                <i class="fas fa-percentage fa-2x in-icon-wrap small transparent"></i>
                            </div>
                            <div>
                                <p class="uk-text-bold" style="color:#E9E8E8;">Less Commission</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-margin-small-right">
                                <i class="fas fa-university fa-2x in-icon-wrap small transparent"></i>
                            </div>
                            <div>
                                <p class="uk-text-bold" style="color:#E9E8E8;">Globally licensed</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-margin-small-right">
                                <i class="fas fa-shield-alt fa-2x in-icon-wrap small transparent"></i>
                            </div>
                            <div>
                                <p class="uk-text-bold" style="color:#E9E8E8;">Fund security‏</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-muted uk-padding-large in-padding-large-vertical@s in-profit-15" style="background-image: linear-gradient(to right, rgb(196, 0, 0) ,  rgb(0, 0, 0)); color:#fff;" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-1-1 uk-width-5-6@m">
                    <p class="uk-text-lead uk-margin-remove-bottom uk-text-center in-offset-top-10" style="color:#fff;">Start trading with Profit Inc.</p>
                    <h2 class="uk-margin-small-top uk-text-center" style="color:#fff;">Fast account opening in 3 simple steps</h2>
                    <div class="uk-grid-large uk-child-width-1-3@m uk-text-center uk-margin-medium-top" data-uk-grid>
                        <div>
                            <span class="in-icon-wrap circle large">1</span>
                            <h4 class="uk-margin-top" style="color:#fff;">Register</h4>
                            <p>Choose an account type and submit your application</p>
                        </div>
                        <div>
                            <span class="in-icon-wrap circle large">2</span>
                            <h4 class="uk-margin-top" style="color:#fff;">Fund</h4>
                            <p>Fund your account using a wide range of funding methods.</p>
                        </div>
                        <div>
                            <span class="in-icon-wrap circle large">3</span>
                            <h4 class="uk-margin-top" style="color:#fff;">Trade</h4>
                            <p>Access 180+ instruments across all asset classes on App</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-16" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container uk-margin-small-bottom">
            <!-- <div class="uk-grid-divider" data-uk-grid>
                 <div class="uk-width-auto@m">
                     <h4 class="uk-margin-remove-bottom uk-margin-right">Funding &amp; withdrawals</h4>
                     <p class="uk-text-muted uk-margin-remove-top">No deposit fee*</p>
                 </div>
                 <div class="uk-width-expand@m">
                     <div class="uk-grid-medium uk-child-width-1-2 uk-child-width-1-5@m uk-text-center in-client-logo-3" data-uk-grid>
                         <div class="uk-tile uk-tile-default">
                             <img src="img/in-lazy.svg" data-src="img/in-profit-payment-1.svg" alt="payment-logo" width="172" height="57" data-uk-img>
                         </div>
                         <div class="uk-tile uk-tile-default">
                             <img src="img/in-lazy.svg" data-src="img/in-profit-payment-2.svg" alt="payment-logo" width="172" height="57" data-uk-img>
                         </div>
                         <div class="uk-tile uk-tile-default">
                             <img src="img/in-lazy.svg" data-src="img/in-profit-payment-3.svg" alt="payment-logo" width="172" height="57" data-uk-img>
                         </div>
                         <div class="uk-tile uk-tile-default">
                             <img src="img/in-lazy.svg" data-src="img/in-profit-payment-4.svg" alt="payment-logo" width="172" height="57" data-uk-img>
                         </div>
                         <div class="uk-tile uk-tile-default uk-visible@m">
                             <img src="img/in-lazy.svg" data-src="img/in-profit-payment-5.svg" alt="payment-logo" width="172" height="57" data-uk-img>
                         </div>
                     </div>
                 </div>
             </div>--->
            <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-3-4@m">
                    <div class="in-create-account uk-text-center uk-margin-top">
                        <span class="uk-label uk-text-small uk-text-uppercase uk-border-rounded uk-margin-small-bottom">Open your account</span>
                        <p class="uk-text-lead uk-margin-remove-top uk-visible@m" style="color:#E9E8E8;">Connect with over 5 millions investors in the world’s leading investment network</p>
                        <form class="uk-grid-small" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-1-4@m">
                                <input class="uk-input uk-border-rounded" type="text" placeholder="Full name">
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@m">
                                <input class="uk-input uk-border-rounded" type="text" placeholder="Email address">
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@m">
                                <input class="uk-input uk-border-rounded" type="text" placeholder="Phone number">
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@m">
                                <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large uk-background-contain in-padding-large-vertical@s in-offset-bottom-80 in-profit-17" data-src="img/in-profit-decor-3.svg" data-aos="zoom-in" data-aos-duration="1500" data-uk-img>
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-5-6@m">
                    <div class="uk-grid uk-child-width-1-2@m uk-flex" data-uk-grid>
                        <div class="in-offset-bottom-30 uk-flex-last uk-flex-first@m">
                            <img src="img/in-lazy.svg" data-src="img/in-profit-mockup-3.png" alt="profit-mockup" width="472" height="348" data-uk-img>
                        </div>
                        <div>
                            <h2 style="color:#fff;">Platform by traders,<br />for traders</h2>
                            <p class="uk-text-lead" style="color:#E9E8E8;">Seize your opportunity, with technology built designed to ensure that your deal goes through.</p>
                            <div class="uk-margin-medium-top">
                                <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4" target="blank" class="uk-button in-button-app">
                                    <i class="fab fa-google-play fa-2x"></i>
                                    <span class="wrapper">Download from<span>Play Store</span></span>
                                </a>
                                <a href="https://apps.apple.com/ng/app/metatrader-4/id496212596" target="blank" class="uk-button in-button-app uk-margin-small-left">
                                    <i class="fab fa-apple fa-2x"></i>
                                    <span class="wrapper">Download from<span>App Store</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-container in-slideshow-feature uk-visible@m" style="margin-top:100px;" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-3-4@m">
                <div class="uk-child-width-1-4" data-uk-grid>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-small-right">
                            <i class="fas fa-drafting-compass in-icon-wrap small circle uk-box-shadow-small"></i>
                        </div>
                        <div>
                            <p class="uk-text-bold uk-margin-remove" style="color:#E9E8E8;">Enhanced Tools</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-small-right">
                            <i class="fas fa-book in-icon-wrap small circle uk-box-shadow-small"></i>
                        </div>
                        <div>
                            <p class="uk-text-bold uk-margin-remove" style="color:#E9E8E8;">Trading Guides</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-small-right">
                            <i class="fas fa-bolt in-icon-wrap small circle uk-box-shadow-small"></i>
                        </div>
                        <div>
                            <p class="uk-text-bold uk-margin-remove" style="color:#E9E8E8;">Fast execution</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-small-right">
                            <i class="fas fa-percentage in-icon-wrap small circle uk-box-shadow-small"></i>
                        </div>
                        <div>
                            <p class="uk-text-bold uk-margin-remove" style="color:#E9E8E8;">Less Commission</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- slideshow content end -->
    <!-- section content begin -->
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-10" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container uk-background-contain uk-background-bottom-right" data-src="img/in-profit-mockup-2.png" data-uk-img>
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-1-1 in-offset-bottom-20">
                    <h2 class="uk-margin-small-bottom" style="color:#fff;">Why choose Easytrade Pro</h2>
                    <p class="uk-text-lead uk-margin-remove-top" style="color:#E9E8E8;">We offer one-click trading experience with 3,000+ world-renowned markets.</p>
                </div>
            </div>
            <div class="uk-grid-large" data-uk-grid>
                <div class="uk-width-1-2@s uk-width-1-3@m">
                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-1.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                    <h4 class="uk-heading-bullet uk-margin-top" style="color:#fff;">Wide range of instruments</h4>
                    <p style="color:#E9E8E8;">A partner invested in your success. Trade with confidence and benefit from the reliability of a trusted broker with a proven record of stability, security and strength.</p>
                </div>
                <div class="uk-width-1-2@s uk-width-1-3@m">
                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-2.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                    <h4 class="uk-heading-bullet uk-margin-top" style="color:#fff;">Unparalleled market conditions</h4>
                    <p style="color:#E9E8E8;">Trade and invest confidently in top performing Cryptocurrencies with our timely Trading signals that ensure your profitability from day one.</p>
                </div>
                <div class="uk-width-1-2@s uk-width-1-3@m">
                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-3.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                    <h4 class="uk-heading-bullet uk-margin-top" style="color:#fff;">Globally licensed &amp; regulated</h4>
                    <p style="color:#E9E8E8;">Goverments issue regulations related to environmental practices, employee practices, advertising practices, and much more. Furthermore, goverment regulations affect how companies structure their businesses, where companies decide to locate, how they classify their employees, and thousand of other things.</p>
                </div>
                <div class="uk-width-1-2@s uk-width-1-3@m">
                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-4.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                    <h4 class="uk-heading-bullet uk-margin-top" style="color:#fff;">Committed to forex education</h4>
                    <p style="color:#E9E8E8;">Our Signals are sent via Telegram which is a Free App to download and takes 30 seconds to setup! once you select your signals package you will get an instant welcome message via Whatsapp with the link to join the group.</p>
                </div>
                <div class="uk-width-1-2@s uk-width-1-3@m">
                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-5.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                    <h4 class="uk-heading-bullet uk-margin-top" style="color:#fff;">Regular contests &amp; promotions</h4>
                    <p style="color:#E9E8E8;">We pride ourselves on giving the very best signals each and everyday. We not only provide high probability forex trades but we also provide Gold, Crypto, Index, Stock Signals.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-secondary uk-padding-large in-padding-large-vertical@s uk-background-contain uk-background-bottom-center in-profit-11" data-src="img/in-section-profit-11.png" data-aos="zoom-in" data-aos-duration="1500" data-uk-img>
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6@m">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-1-2@m">
                            <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill uk-margin-small-bottom">Announcing</span>
                            <h2 class="uk-margin-small-top"><span class="uk-heading-small">$4.95</span> online stocks, currencies &amp; commodities trades</h2>
                            <p>Stock Comissions from €3 on US stocks Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.</p>
                            <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-top">Learn more</a>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-card uk-card-primary uk-border-rounded ">
                                <div class="uk-card-body">
                                    <h3 class="uk-margin-bottom">New to investing? Start here.</h3>
                                    <form class="uk-grid-small" data-uk-grid action="https://easytradepro.live/signup">
                                        <div class="uk-width-1-1">
                                            <input class="uk-input uk-border-rounded" type="text" placeholder="Full name">
                                        </div>
                                        <div class="uk-width-1-1">
                                            <input class="uk-input uk-border-rounded" type="text" placeholder="Email address">
                                        </div>
                                        <div class="uk-width-1-1">
                                            <input class="uk-input uk-border-rounded" type="text" placeholder="Phone number">
                                        </div>
                                        <div class="uk-width-1-1">
                                            <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand uk-margin-small-bottom" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Create Account</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-12" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container">
            <div class="uk-grid-large uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-1-2@m uk-text-center">
                    <!--<div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-medium">
                        <div class="uk-card-body" style="background-color: rgb(0, 0, 0);">-->
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Financial Markets</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                            {
                                "width": 350,
                                "height": 450,
                                "symbolsGroups": [
                                {
                                    "name": "Indices",
                                    "originalName": "Indices",
                                    "symbols": [
                                        {
                                            "name": "FOREXCOM:SPXUSD",
                                            "displayName": "S&P 500"
                                        },
                                        {
                                            "name": "FOREXCOM:NSXUSD",
                                            "displayName": "Nasdaq 100"
                                        },
                                        {
                                            "name": "FOREXCOM:DJI",
                                            "displayName": "Dow 30"
                                        },
                                        {
                                            "name": "INDEX:NKY",
                                            "displayName": "Nikkei 225"
                                        },
                                        {
                                            "name": "INDEX:DEU30",
                                            "displayName": "DAX Index"
                                        },
                                        {
                                            "name": "FOREXCOM:UKXGBP",
                                            "displayName": "FTSE 100"
                                        }
                                    ]
                                },
                                {
                                    "name": "Commodities",
                                    "originalName": "Commodities",
                                    "symbols": [
                                        {
                                            "name": "CME_MINI:ES1!",
                                            "displayName": "S&P 500"
                                        },
                                        {
                                            "name": "CME:6E1!",
                                            "displayName": "Euro"
                                        },
                                        {
                                            "name": "COMEX:GC1!",
                                            "displayName": "Gold"
                                        },
                                        {
                                            "name": "NYMEX:CL1!",
                                            "displayName": "Crude Oil"
                                        },
                                        {
                                            "name": "NYMEX:NG1!",
                                            "displayName": "Natural Gas"
                                        },
                                        {
                                            "name": "CBOT:ZC1!",
                                            "displayName": "Corn"
                                        }
                                    ]
                                },
                                {
                                    "name": "Bonds",
                                    "originalName": "Bonds",
                                    "symbols": [
                                        {
                                            "name": "CME:GE1!",
                                            "displayName": "Eurodollar"
                                        },
                                        {
                                            "name": "CBOT:ZB1!",
                                            "displayName": "T-Bond"
                                        },
                                        {
                                            "name": "CBOT:UB1!",
                                            "displayName": "Ultra T-Bond"
                                        },
                                        {
                                            "name": "EUREX:FGBL1!",
                                            "displayName": "Euro Bund"
                                        },
                                        {
                                            "name": "EUREX:FBTP1!",
                                            "displayName": "Euro BTP"
                                        },
                                        {
                                            "name": "EUREX:FGBM1!",
                                            "displayName": "Euro BOBL"
                                        }
                                    ]
                                },
                                {
                                    "name": "Forex",
                                    "originalName": "Forex",
                                    "symbols": [
                                        {
                                            "name": "FX:EURUSD"
                                        },
                                        {
                                            "name": "FX:GBPUSD"
                                        },
                                        {
                                            "name": "FX:USDJPY"
                                        },
                                        {
                                            "name": "FX:USDCHF"
                                        },
                                        {
                                            "name": "FX:AUDUSD"
                                        },
                                        {
                                            "name": "FX:USDCAD"
                                        }
                                    ]
                                }
                            ],
                                "showSymbolLogo": false,
                                "colorTheme": "dark",
                                "isTransparent": false,
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END
                                                </div>
                                            </div>-->
                    <a class="uk-text-uppercase uk-text-small" href="#">See all instruments</a>
                </div>
                <div class="uk-width-1-2@m">
                    <h2 style="color:#fff;">Live Fx &amp; Spot Metal Quotes</h2>
                    <p style="color:#E9E8E8;">Trade 180 FX spot pairs and 140 forwards across majors, minors, exotics and metals.</p>
                    <ul class="uk-list uk-list-bullet in-list-check uk-margin-bottom">
                        <li style="color:#E9E8E8;">Ultra-competitive pricing</li>
                        <li style="color:#E9E8E8;">Trading flexibility</li>
                        <li style="color:#E9E8E8;">Award-winning platform</li>
                    </ul>
                    <h5 class="uk-heading-bullet ">Trade wherever you are, whenever you want to.</h5>
                    <div data-uk-margin>
                        <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4" target="blank" class="uk-button in-button-app uk-margin-small-right">
                            <i class="fab fa-google-play fa-2x"></i>
                            <span class="wrapper">Download from<span>Play Store</span></span>
                        </a>
                        <a href="https://apps.apple.com/ng/app/metatrader-4/id496212596" target="blank" class="uk-button in-button-app">
                            <i class="fab fa-apple fa-2x"></i>
                            <span class="wrapper">Download from<span>App Store</span></span>
                        </a>
                    </div>
                </div>
                <div class="uk-width-5-6@m in-offset-bottom-40">
                    <div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-top uk-text-center" data-uk-grid>
                        <div>
                            <h2 style="color:#fff;">&lt; 7.12 ms</h2>
                            <p class="uk-text-uppercase uk-text-small uk-text-primary">Average order execution speed</p>
                        </div>
                        <div>
                            <h2 style="color:#fff;">12+</h2>
                            <p class="uk-text-uppercase uk-text-small uk-text-primary">Integrated liquidity providers</p>
                        </div>
                        <div>
                            <h2 style="color:#fff;">&gt; 12,000</h2>
                            <p class="uk-text-uppercase uk-text-small uk-text-primary">Executed orders per second</p>
                        </div>
                        <!--<div>
                            <h2 style="color:#fff;">$545 k</h2>
                            <p class="uk-text-uppercase uk-text-small uk-text-primary">Average trading volume per day</p>
                        </div>-->
                    </div>
                    <div class="uk-text-center uk-margin-medium-top">
                        <a href="signup.html" class="uk-button uk-button-primary uk-border-rounded" style="background-image: linear-gradient(to right, rgb(196, 0, 0) , rgb(0, 0, 0));">Setup your trading account</a>
                        <a href="faq.html" class="uk-button uk-button-default uk-border-rounded uk-margin-small-left">Discover our platform</a>
                        <p style="color:#E9E8E8;">Registration takes only 40 seconds!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-muted uk-padding-large in-padding-large-vertical@s in-profit-6" style="background-image: linear-gradient(to right, rgb(196, 0, 0) ,  rgb(0, 0, 0)); color:#fff;" data-aos="zoom-in" data-aos-duration="1500">
        <div class="uk-container uk-margin-small-bottom">
            <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-1-1 uk-text-center">
                    <h2 style="color:#fff;">Supporting Traders from over 48 Countries</h2>
                </div>
                <div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid>
                    <div style="margin-right:40px;">
                        <div class="uk-flex uk-flex-left uk-flex-middle">
                            <div class="uk-margin-medium-right" style="color:#fff;">
                                <h1 class="uk-heading-small uk-margin-remove-bottom uk-text-primary" style="color:#fff;">$76+</h1>
                            </div>
                            <!--<div>
                                <h3 class="uk-margin-small-bottom" style="color:#fff;">Billion</h3>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">Trading volume per month</p>
                            </div>-->
                        </div>
                    </div>
                    <div>
                        <div class="uk-flex uk-flex-left uk-flex-middle">
                            <div class="uk-margin-medium-right" style="color:#fff;">
                                <h1 class="uk-heading-small uk-margin-remove-bottom uk-text-primary" style="color:#fff;">1.6+</h1>
                            </div>
                            <!--<div>
                                <h3 class="uk-margin-small-bottom" style="color:#fff;">Million</h3>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">Registered trading accounts</p>
                            </div>-->
                        </div>
                    </div>
                    <!--<div class="uk-visible@m">
                        <div class="uk-flex uk-flex-left uk-flex-middle">
                            <div class="uk-margin-medium-right">
                                <h1 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">48+</h1>
                            </div>
                            <div>
                                <h3 class="uk-margin-small-bottom">Million</h3>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">Trade executed per years*</p>
                            </div>
                        </div>
                    </div>-->
                </div>
                <p><span class="uk-text-primary">*</span>Data based on year-to-date Profit Inc activity <span class="uk-text-primary"> (last update end of Q2 2020)</span></p>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s uk-background-contain in-profit-7" data-aos="zoom-in" data-aos-duration="1500" data-src="img/in-profit-decor-3.svg" data-uk-img>
        <div class="uk-container uk-margin-bottom">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-1-2@m uk-text-center">
                    <h2 style="color:#fff;">In-Depth daily market analysis</h2>
                    <p class="uk-text-lead" style="color:#E9E8E8;">Get timely news &amp; analysis from top financial experts</p>
                    <i class="fas fa-chevron-down uk-text-primary"></i>
                </div>
                <!--<div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-top" data-uk-grid>
                        <div>
                            <span class="uk-label uk-border-pill uk-margin-remove-bottom">News</span>
                            <article>
                                <img class="uk-border-rounded uk-width-1-1 in-offset-bottom-20" src="img/in-lazy.svg" data-src="img/in-profit-news-2.jpg" alt="profit-news" width="340" height="170" data-uk-img>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">Inflation and sanctions weaken ruble against the dollar</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">6 hours ago</span>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">HSBC shares jump on further Chinese investment</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">14 hours ago</span>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">Japan fuel demand fall prompts Eneos-PetroChina refinery to close</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">18 hours ago</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="uk-visible@m">
                            <span class="uk-label uk-border-pill uk-margin-remove-bottom">Features</span>
                            <article>
                                <img class="uk-border-rounded uk-width-1-1 in-offset-bottom-20" src="img/in-lazy.svg" data-src="img/in-profit-news-1.jpg" alt="profit-news" width="340" height="170" data-uk-img>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">Ethereum vs Bitcoin: which project has the upper hand in 2020?</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">2 hours ago</span>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">Where to invest now? Best opportunities in today’s highly volatile markets</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">11 hours ago</span>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">Best short-term investments to benefit from the latest market downturn</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">16 hours ago</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <span class="uk-label uk-border-pill uk-margin-remove-bottom">Analysis</span>
                            <article>
                                <img class="uk-border-rounded uk-width-1-1 in-offset-bottom-20" src="img/in-lazy.svg" data-src="img/in-profit-news-3.jpg" alt="profit-news" width="340" height="170" data-uk-img>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">GBP/USD technical analysis: holding above 200-day moving average</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">5 hours ago</span>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">USD/CAD technical analysis: bullish bias above 1.3300 level.</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">10 hours ago</span>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">Gold price technical analysis: bearish bias below $1,860</a>
                                </h5>
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <i class="fas fa-history fa-xs"></i>
                                    </div>
                                    <div>
                                        <!--<span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">15 hours ago</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>-->
                <div class="uk-section" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="uk-container">
                        <div class="uk-grid uk-flex uk-flex-center">
                            <div class="uk-width-3-4@m">
                                <div data-uk-grid>
                                    <div class="uk-width-1-2@s uk-width-2-3@m">
                                        <p class="uk-text-large" style="color:#E9E8E8;">We help our customers engage investors so their companies can grow</p>
                                        <p style="color:#E9E8E8;">Our customers look to us as guides, and we weave our deep legal and technical experience into our software and services.</p>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-expand@m">
                                        <ul class="uk-list uk-list-divider uk-margin-small-top">
                                            <li>
                                                <div class="uk-flex uk-flex-middle">
                                                    <i class="fas fa-paper-plane fa-lg in-icon-wrap circle primary-color uk-margin-right"></i>
                                                    <div>
                                                        <h3 class="uk-margin-remove-bottom">
                                                            <span class="count" data-counter-end="35817">0</span>
                                                        </h3>
                                                        <span class="uk-label uk-text-small uk-border-rounded">Business launch</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="uk-flex uk-flex-middle">
                                                    <i class="fas fa-user-tie fa-lg in-icon-wrap circle primary-color uk-margin-right"></i>
                                                    <div>
                                                        <h3 class="uk-margin-remove-bottom">
                                                            <span class="count" data-counter-end="4400">0</span>
                                                        </h3>
                                                        <span class="uk-label uk-text-small uk-border-rounded">Investor engaged</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-section in-offset-top-20" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="uk-container">
                        <div class="uk-grid-medium uk-child-width-1-2@m in-testimonial-8" data-uk-grid>

                            <!--<div class="tests">
                    <div class="tester">
                        <!--The radio starts

                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">-->
                            <!--The radio ends-->
                            <!--The slide Div starts-->
                            <div>
                                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded" style="border: solid rgb(196, 0, 0); border-radius:5%; background-color:#131313; color:#dbdbdb;">
                                    <img src="wp-admin/uploads/testimony_ae1bdbede368473d77482b064e16e0ed.jpg" width="120" style="border-radius:50%; padding-left:20px;">
                                    <div class="uk-card-header">
                                        <blockquote>
                                            <p style="color:#fff;">Hey 👋🏻 am Alphi from South Africa 🇿🇦 I came across Mrs Raldah and she guide me through all the process of Easytradepro, Since day one when I joined. My life just changed Raldah you have changed my life and even my client lowest withdrawal not Les then R40,000 weekly</p>
                                        </blockquote>
                                    </div>
                                    <div class="uk-card-footer">

                                        <blockquote>
                                            <footer style="color:#fff;">Alphi Anthony<br><cite style="color:#fff;">South Africa </cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded" style="border: solid rgb(196, 0, 0); border-radius:5%; background-color:#131313; color:#dbdbdb;">
                                    <img src="wp-admin/uploads/testimony_29be3e8e619aa7989c3f78415b4b215f.jpg" width="120" style="border-radius:50%; padding-left:20px;">
                                    <div class="uk-card-header">
                                        <blockquote>
                                            <p style="color:#fff;">Hello everyone I'm Charlotte from South Africa 🇿🇦 It is very easy to make investments on this platform. They have different payment methods that are secured and easy to use. I have also earned more from my account upgrade with amazing new features added to it thank you all so much ❤️.</p>
                                        </blockquote>
                                    </div>
                                    <div class="uk-card-footer">

                                        <blockquote>
                                            <footer style="color:#fff;">Charlottebr><cite style="color:#fff;">South Africa</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded" style="border: solid rgb(196, 0, 0); border-radius:5%; background-color:#131313; color:#dbdbdb;">
                                    <img src="wp-admin/uploads/testimony_041a5ae3f6cfc75a9c10583cc0232e73.jpg" width="120" style="border-radius:50%; padding-left:20px;">
                                    <div class="uk-card-header">
                                        <blockquote>
                                            <p style="color:#fff;">Hey my fellow brothers and sisters I'm Codi Mlambo from SA country and am here to give thanks to Mr Mike who referred me to this Easytradepro because I have been loosing for 3 years till I meet him and he gaves me all the guides to me as my father. Now my withdrawal every week is like yearly government workers. And all thank to ever Easytradepro professional traders thanks for the opportunity and empowered </p>
                                        </blockquote>
                                    </div>
                                    <div class="uk-card-footer">

                                        <blockquote>
                                            <footer style="color:#fff;">Codi Mlambo <br><cite style="color:#fff;">South Africa </cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded" style="border: solid rgb(196, 0, 0); border-radius:5%; background-color:#131313; color:#dbdbdb;">
                                    <img src="wp-admin/uploads/testimony_9381b5c720fe40fba64075dc5510f734.jpg" width="120" style="border-radius:50%; padding-left:20px;">
                                    <div class="uk-card-header">
                                        <blockquote>
                                            <p style="color:#fff;">Hi Valeriasigs . I'm just writing to say thank you!! Valeriasigs is in my blood now. I finally found my life! I want to say a big thank you to Valeriasigs , Just got my profit of $7500 in my Bank account. This is indeed a trust worthy platform to invest.</p>
                                        </blockquote>
                                    </div>
                                    <div class="uk-card-footer">

                                        <blockquote>
                                            <footer style="color:#fff;">Christopher Pagao<br><cite style="color:#fff;">United States</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!--The slide Div Ends-->
                            <!--Automate Navigation slide starts
                            <div class="navig-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>
                            </div>-->
                            <!--Automate Navigation slide Ends
                        </div>-->
                            <!--Manual navigation Starts
                            <div class="navig-manual">
                                <label for="radio1" class="manual-btn"></label>
                                <label for="radio2" class="manual-btn"></label>
                                <label for="radio3" class="manual-btn"></label>
                                <label for="radio4" class="manual-btn"></label>
                            </div>-->
                            <style>
                                .tests{
                                    width: 1000px;
                                    height: 700px;
                                    border-radius: 10px;
                                    overflow: hidden;
                                }
                                .tester{
                                    width: 500%;
                                    height: 500px;
                                    /*display: flex;*/
                                }
                                .tester input{
                                    display: none;
                                }
                                .test{
                                    width: 17%;
                                    transition: 2s;
                                    padding: 71px;
                                }
                                /*Css For manual Navigation*/
                                .navig-manual{
                                    position: absolute;
                                    width: 800px;
                                    padding-top: -110px;
                                    display: flex;
                                    justify-content: center;
                                    margin-top: 18px;
                                }
                                .manual-btn{
                                    padding-top:45px;
                                    border: 2px solid rgb(196, 0, 0);
                                    padding: 5px;
                                    border-radius: 10px;
                                    cursor: pointer;
                                    transition: 1s;
                                }
                                .manual-btn:not(:last-child){
                                    margin-right: 40px;
                                }
                                .manual-btn:hover{
                                    background: rgb(196, 0, 0);
                                }
                                #radio1:checked ~ .first{
                                    margin-left: 0;
                                }
                                #radio2:checked ~ .first{
                                    margin-left: -20%;
                                }
                                #radio3:checked ~ .first{
                                    margin-left: -40%;
                                }
                                #radio4:checked ~ .first{
                                    margin-left: -60%;
                                }
                                /*Css for Auto-navigation*/
                                .navig-auto{
                                    position: absolute;
                                    display: flex;
                                    padding-top:-80px;
                                    width: 800px;
                                    justify-content: center;
                                    margin-top: 520px;
                                }
                                .navig-auto div{
                                    border: 2px solid rgb(196, 0, 0);
                                    padding: 5px;
                                    border-radius: 10px;
                                    transition: 1s;
                                }
                                .navig-auto div:not(:last-child){
                                    margin-right: 40px;
                                }
                                #radio1:checked ~ .navig-auto .auto-btn1{
                                    background:rgb(196, 0, 0);
                                }
                                #radio2:checked ~ .navig-auto .auto-btn2{
                                    background:rgb(196, 0, 0);
                                }
                                #radio3:checked ~ .navig-auto .auto-btn3{
                                    background:rgb(196, 0, 0);
                                }
                                #radio4:checked ~ .navig-auto .auto-btn4{
                                    background:rgb(196, 0, 0);
                                }
                            </style>
                            <!--Manual navigation End-->
                            <script type="text/javascript">
                                var counter= 1;
                                setInterval(function(){
                                    document.getElementById('radio' + counter).checked = true;
                                    counter++;
                                    if(counter > 4){
                                        count = 1;
                                    }
                                }, 5000);
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="uk-width-1-1 uk-margin-medium-top">
                <h4 class="uk-text-center uk-heading-bullet">We are in The Press</h4>
                <div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-5@m uk-text-center uk-margin-medium-top in-client-logo-6" data-uk-grid>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove" src="img/in-lazy.svg" data-src="img/in-profit-media-1.svg" alt="client-logo" width="147" height="42" data-uk-img>
                    </div>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove" src="img/in-lazy.svg" data-src="img/in-profit-media-2.svg" alt="client-logo" width="147" height="42" data-uk-img>
                    </div>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove" src="img/in-lazy.svg" data-src="img/in-profit-media-3.svg" alt="client-logo" width="147" height="42" data-uk-img>
                    </div>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove" src="img/in-lazy.svg" data-src="img/in-profit-media-4.svg" alt="client-logo" width="147" height="42" data-uk-img>
                    </div>
                    <div class="uk-tile uk-tile-default uk-visible@m">
                        <img class="uk-margin-remove" src="img/in-lazy.svg" data-src="img/in-profit-media-5.svg" alt="client-logo" width="147" height="42" data-uk-img>
                    </div>
                </div>
            </div>-->
            <!--        </div>-->
            <!--        <script type="text/javascript">-->
            <!--        (function () {-->
            <!--            var options = {-->
            <!--whatsapp: "+44 7451 284263", // WhatsApp number-->
            <!--call_to_action: "Message us", // Call to action-->
            <!--position: "left", // Position may be 'right' or 'left'-->
            <!--            };-->
            <!--            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;-->
            <!--            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';-->
            <!--            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };-->
            <!--            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);-->
            <!--        })();-->
            <!--    </script>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- section content end -->
            <style>
                .float {
                    position: fixed;
                    width: 150px;
                    height: 150px;
                    /*width: 80px;
                    height: 80px;*/
                    bottom: 50px;
                    left: 40px;
                    background-color: #000;
                    border:solid rgb(196, 0, 0);
                    color: #000;
                    border-radius: 70px;
                    text-align: center;
                    font-size: 100px;
                    box-shadow: 2px 2px 3px #999;
                    z-index: 100;
                }

                .my-float {
                    margin-top: 16px;
                }


                /* Add a background color to the active dot/circle */
                .active,
                .dot:hover {
                    background-color: #717171;
                }

            </style>
</main>

@endsection
