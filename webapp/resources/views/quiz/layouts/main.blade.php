<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/quiz/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/quiz/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/issue/style.css') }}">
    <title>Therapy Med - Quiz</title>

</head>

<body>

<header>
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="{{ route('app.index') }}">Therapy Med<span>.</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('main') }}">Asosiy</a></li>
                <li><a class="nav-link scrollto" href="https://t.me/erkinov_wiz" target="_blank">Aloqa</a></li>
                <li><a class="nav-link scrollto" href="https://github.com/webhire/therapymed" target="_blank">GitHub</a></li>
                <li><a class="getstarted scrollto" href="{{ route('app.index') }}">Jins tanlash</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer" style="position: fixed; bottom: 0; width: 100%">
    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Therapy Med</span></strong> {{ now()->year }}. All Rights Reserved. Licensed under MIT.
        </div>
        <div class="credits">
            Created by <a href="https://github.com/webhire">WebHire</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/quiz/js/main.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/issue/main.js') }}"></script>

</body>

</html>

