

<!DOCTYPE html>
<html lang="en-uk" dir="ltr">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="investment, Forex, Trading, Bitcoin, Cryptocurrency, Global investment, Live Trade, Trading class, indics">
    <meta name="author" content="Easytrade Pro">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131" />
    <!-- Site Properties -->
    <title>Sign In | {{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="/img/Signals-Alert-3.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="img/Signals-Alert-3.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <script src="{{ asset('plugins/sweetalerts/promise-polyfill.js') }}"></script>
    <link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
</head>
<body style="background-color:#000; color:#fff;">
<!-- preloader begin -->
<div class="in-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- preloader end -->
<main>
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid" data-uk-height-viewport="expand: true">
                <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url(img/h.jpg);">
                </div>
                <div class="uk-width-expand@m uk-flex uk-flex-middle">
                    <div class="uk-grid uk-flex-center">
                        <div class="uk-width-3-5@m">
                            <div class="in-padding-horizontal@s" id="users">
                                <!-- module logo begin -->
                                <a class="uk-logo" href="{{ route('index') }}">
                                    <h2 style="font-weight: bolder; color: white">{{ env('APP_NAME') }}</h2>
{{--                                    <img class="uk-margin-small-right in-offset-top-10" src="img/in-lazy.gif" data-src="img/in-logo-1.png" alt="wave" style="padding-top: 40px;" width="354" height="29" data-uk-img>--}}
                                </a>
                                <!-- module logo begin -->
                                <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account</p>
                                <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an account?
                                    <a href="{{ route('register') }}" style="color: rgb(196, 0, 0);"><b>Register here</b></a></p>
                                <!-- login form begin -->
                                <form class="uk-grid uk-form" id="loginForm" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    @if ($errors->any())
                                        <div style="color: #ff7d7d; margin-bottom: 5px;" class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="username" name="email" type="text" style="background-color:#000;" placeholder="Email" required>
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" style="background-color:#000;" id="password" name="password" type="password" placeholder="Password" required>
                                    </div>
                                    <div class="uk-margin-small uk-width-auto uk-text-small">
                                        <label><input class="uk-checkbox uk-border-rounded" type="checkbox"> Remember me</label>
                                    </div>
                                    <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-right"><a class="uk-link-reset" href="#">Forgot password?</a></label>
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1">
                                        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit"  style="background-color: rgb(196, 0, 0);">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
<!-- Javascript -->
<script src="{{ asset('plugins/jquery-3.1.1.min.js') }}"></script>
<script src="plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

<script src="{{ asset('js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('js/vendors/indonez.min.js') }}"></script>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script>


{{--<script src="{{ asset('vuejs/vue.js') }}"></script>--}}
{{--<script src="{{ asset('vuejs/axios.js') }}"></script>--}}
<script>
    // Site Under Maintenance
    /*swal({
        html: '<span style="font-size:25px!important;">Users please note:<br><b>Site is under maintenance.</b><br><br>We\'ll be back soon.</span>',
        type: 'info',
        showConfirmButton: false,
        allowOutsideClick: false,
        allowEscapeKey: false,
    });*/

    // BASE URL and API Inclusion
    const BASE_URL = 'https://easytradepro.live/';
    const API = `${BASE_URL}api/users.php`;
</script>
<!--<script src="vuejs/users.js"></script>-->

</body>
</html>
