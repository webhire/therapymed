<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/issue/style.css') }}" rel="stylesheet">

</head>

<body>

<header id="header">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="{{ route('app.index') }}">Therapy Med<span>.</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('main') }}">Asosiy</a></li>
                <li><a class="nav-link scrollto" href="https://t.me/erkinov_wiz" target="_blank">Aloqa</a></li>
                <li><a class="nav-link scrollto" href="https://github.com/webhire/therapymed" target="_blank">GitHub</a>
                </li>
                <li><a class="getstarted scrollto" href="{{ route('app.index') }}">Jins tanlash</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@yield('content')


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/issue/main.js') }}"></script>

</body>

</html>

