<!DOCTYPE html>
<html lang="en">

<head>
    <title>Naive Bayes - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/animate.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/fonts/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <h2 class="font-weight-bold text-light pt-2 order-lg-last">Naive Bayes</h2>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="<?= base_url('classification') ?>" class="nav-link">Klasifikasi</a></li>
                    <li class="nav-item"><a href="<?= base_url('dataset') ?>" class="nav-link">Dataset</a></li>
                    <li class="nav-item"><a href="<?= base_url('history') ?>" class="nav-link">History</a></li>
                    <li class="nav-item"><a href="<?= base_url('about') ?>" class="nav-link">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(<?= base_url('assets') ?>/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col text-center ftco-animate">
                        <span class="subheading">Selamat Datang !</span>
                        <h1 class="mb-4">Klasifikasi Data Pasien dengan metode Naive Bayes Classifier</h1>
                        <p><a href="<?= base_url('classification') ?>" class="btn btn-primary px-4 py-3 mt-3">Mulai Tes</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-0">You Always Get the Best Guidance</h2>
            </div> -->
            </div>
        </div>
    </section>

    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="wrapper shadow">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <a href="<?= base_url() ?>" class="mt-3 text-center">
                                <h1><i class="fas fa-lg fa-home d-block"></i></h1>
                                <span class="text-uppercase text-dark font-weight-bold">Home</span>
                            </a>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <a href="<?= base_url('classification') ?>" class="mt-3 text-center">
                                <h1><i class="fas fa-lg fa-list-alt d-block"></i></h1>
                                <span class="text-uppercase text-dark font-weight-bold">Klasifikasi</span>
                            </a>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <a href="<?= base_url('dataset') ?>" class="mt-3 text-center">
                                <h1><i class="fas fa-lg fa-table d-block"></i></h1>
                                <span class="text-uppercase text-dark font-weight-bold">Dataset</span>
                            </a>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <a href="<?= base_url('history') ?>" class="mt-3 text-center">
                                <h1><i class="fas fa-lg fa-history d-block"></i></h1>
                                <span class="text-uppercase text-dark font-weight-bold">History</span>
                            </a>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <a href="<?= base_url('about') ?>" class="mt-3 text-center">
                                <h1><i class="fas fa-lg fa-info-circle d-block"></i></h1>
                                <span class="text-uppercase text-dark font-weight-bold">About</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>