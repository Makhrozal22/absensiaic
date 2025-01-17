<!doctype html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Geoabsensi Arrahman</title>
    <meta name="description" content="Arrahman">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/aic.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('assets/img/icon/aic.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

<div class="login-form mt-1">
    <div class="section">
        <img src="{{ asset('assets/img/login/logoabsen.png') }}" alt="image" class="form-image">
    </div>
    <div class="section mt-1">
       
       
    </div>
    <div class="section mt-1 mb-2">
        @php
        $messagewarning = Session::get('warning');
        @endphp
        @if (Session::get('warning'))
        <div class="alert-outline-warning">
            {{$messagewarning}}
        </div>
        @endif
        <form action="/proseslogin" method="POST">
            @csrf
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <p class="text-left"> Username </p>
                    <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK Anda">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>

            <div class="form-group boxed">
            <p class="text-left"> Password </p>
                <div class="input-wrapper">
                
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan Password">
                    <div class="icon-right" style="position: absolute; right:8px; top:10px">
                        <ion-icon name="eye-off-outline" id="show_hide_password"
                            style="font-size: 1.5rem"></ion-icon>
                    </div>
                </div>
            </div>

            <div class="form-links mt-2">
                <div>
                    <a href="page-register.html">Daftar</a>
                </div>
                <div><a href="page-forgot-password.html" class="text-muted">Lupa Password?</a></div>
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-warning btn-block btn-lg">Masuk</button>
            </div>

        </form>
    </div>
</div>


</div>
    <!-- * App Capsule -->

    <script>
        var BASE_URL = "{{ url('/') }}/";
        //alert(BASE_URL);
        document.addEventListener('DOMContentLoaded', init, false);

        function init() {
            if ('serviceWorker' in navigator && navigator.onLine) {
                navigator.serviceWorker.register(BASE_URL + 'service-worker.js')
                    .then((reg) => {
                        console.log('Registrasi service worker Berhasil', reg);
                    }, (err) => {
                        console.error('Registrasi service worker Gagal', err);
                    });
            }
        }
    </script>

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/lib/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap-->
    <script src="{{ asset('assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{ asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset('assets/js/base.js') }}"></script>

    <script>
        $(function() {
            $("#show_hide_password").click(function(e) {
                e.preventDefault();
                if ($("#password").attr("type") == "text") {
                    $("#password").attr("type", "password");
                    $("#show_hide_password").attr("name", "eye-off-outline");
                } else if ($("#password").attr("type") == "password") {
                    $("#password").attr("type", "text");
                    $("#show_hide_password").attr("name", "eye-outline");
                }
            });
        });
    </script>

</body>

</html>
