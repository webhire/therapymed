<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Therapy Med - Web App</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="{{ route('main') }}">Therapy Med<span>.</span></a></h1>

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row d-flex align-items-center">
        <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
            <h1>Application under the Development</h1>
            <h2>Soon we will publish our first version of the web application.</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
            <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</section><!-- End Hero -->

<section id="features" class="features section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init aos-animate">Try it Now!</h2>
        </div>

        <div class="row content">
            <div class="col-md-5 aos-init aos-animate" data-aos="fade-right">
                <img src="{{ asset('assets/img/features-1.svg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4 aos-init aos-animate" data-aos="fade-left">
                <h3>Therapy Med - Alpha version is available now</h3>
                <p class="fst-italic">
                    We published our first Alpha version, so everyone can try and test it. But before, be aware of aspects list below:
                </p>
                <ul>
                    <li><i class="bi bi-check-lg" style="color: darkgreen"></i> This is the first Alpha version.</li>
                    <li><i class="bi bi-check-lg" style="color: darkgreen"></i> Application based on Uzbek language.</li>
                    <li><i class="bi bi-x-lg" style="color: red"></i> Bugs are still expected</li>
                </ul>
                <a href="{{ route('app.index') }}" class="button custom-btn btn-7"><span>Try it!</span></a>
            </div>
        </div>

    </div>
</section>



<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span><a href="https://github.com/webhire/therapymed" target="_blank">Therapy Med</a></span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="http://webhire.uz/" target="_blank">WebHire</a>
        </div>
    </div>
</footer><!-- End Footer -->

<!-- Vendor JS Files -->
<script src="{{ 'assets/vendor/aos/aos.js' }}"></script>
<script src="{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
<script src="{{ 'assets/vendor/glightbox/js/glightbox.min.js' }}"></script>
<script src="{{ 'assets/vendor/swiper/swiper-bundle.min.js' }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
