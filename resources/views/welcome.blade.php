<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Jingga - PT. Jingga Pro Utama</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jingga is the specialist that provides excellent service in
        Exhibition, Trade Show and other events" />
    <meta name="keywords" content="exhibition, medical, expo, service, trade, show" />
    <meta name="author" content="AvPro" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- tobii css -->
    <link href="css/tobii.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="css/style-dark.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="css/colors/yellow.css" rel="stylesheet" id="color-opt">

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <span class="logo-light-mode">
                    <img src="images/logo-dark.png" class="l-dark" height="48" alt="">
                    <img src="images/logo-light.png" class="l-light" height="48" alt="">
                </span>
                <img src="images/logo-light.png" height="34" class="logo-dark-mode" alt="">
            </a>

            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="#" class="sub-menu-item">Home</a></li>
                    <li><a href="#about-us" class="sub-menu-item">About us</a></li>
                    <li><a href="#flow" class="sub-menu-item">The Flow</a></li>
                    <li><a href="#projects" class="sub-menu-item">Our Projects</a></li>
                    <li><a href="#customers" class="sub-menu-item">Our Customers</a></li>
                    <li><a href="#contact-us" class="sub-menu-item">Contact us</a></li>

                </ul><!--end navigation menu-->

                <!--end login button-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="swiper-slider-hero position-relative d-block vh-100" id="home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/slider/3.jpg">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="title-heading text-center">
                                        <h1 class="heading text-primary title-dark mb-4">JINGGA is<br> The SPECIALIST</h1>
                                        <p class="para-desc mx-auto text-white title-dark">We provides excellent SERVICES in
                                            Exhibition, Trade Show and other events</p>

                                        <div class="mt-4 pt-2">
                                            <a href="#about-us" class="btn btn-primary">Read more</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/slider/1.jpg">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="title-heading text-center">
                                        <h1 class="heading text-primary title-dark mb-4">JINGGA </h1>
                                        <p class="para-desc mx-auto text-white title-dark">We Offers Smart Concepts
                                            And Pinpoint Solutions Big & Small</p>

                                        <div class="mt-4 pt-2">
                                            <a href="#contact-us" class="btn btn-primary">Contact us</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/slider/2.jpg">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="title-heading text-center">
                                        <h1 class="heading text-primary title-dark mb-4">Our <br>Main GOAL</h1>
                                        <p class="para-desc mx-auto text-white title-dark"> to
                                            maximize the potential of your BRAND activation</p>

                                        <div class="mt-4 pt-2">
                                            <a href="#contact-us" class="btn btn-primary">Contact us</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!-- end slide-inner -->
                </div> <!-- end swiper-slide -->

                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/slider/4.jpg">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="title-heading text-center">
                                        <h1 class="heading text-white title-dark mb-4">VISION IDEA <br><span class="text-primary"> DESIGN BUILD</span></h1>
                                        <!-- <p class="para-desc mx-auto text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p> -->

                                        <!-- <div class="mt-4 pt-2">
                                                <a href="javascript:void(0)" class="btn btn-primary">Get Started</a>
                                            </div> -->
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-button-next border rounded-circle text-center"></div>
            <div class="swiper-button-prev border rounded-circle text-center"></div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-absolute rounded bg-white shadow">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 my-4">
                                <div class="row">
                                    <div class=" col-12">
                                        <div class="d-flex features justify-content-center align-items-center p-4">
                                            <div class="icon text-center rounded-circle text-primary me-3 ">
                                                <i class="uil uil-crosshair align-middle h4 mb-0"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="title">We are not the First, but we strive for the BEST</h4>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class=" col-12">
                                        <div class="d-flex features p-4 justify-content-center align-items-center">
                                            <div class="icon text-center rounded-circle text-primary me-3">
                                                <i class="uil uil-constructor align-middle h4 mb-0"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="title"> Experiences in designing and building tasteful special and custom booths</h4>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->

                            <div class="col-lg-4 d-none d-lg-block position-relative">
                                <img src="images/slider/expo.png" class="img-fluid mx-auto d-block construction-img" alt="">
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->

                <div class="col-12 mt-4 pt-2 text-center">
                    <p class="text-muted mb-0">Our list of services does not end here. <a href="#contact-us" class="text-primary h6">Click here</a>, and We’ll come up with more solution</p>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

    <section class="section" id="about-us">
        <div class="container mb-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="position-relative">
                        <img src="images/jingga-about.jpg" class="rounded img-fluid mx-auto d-block" alt="">

                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="ms-lg-5 ms-md-4">
                        <div class="section-title">
                            <span class="badge rounded-pill bg-soft-primary">About us</span>
                            <h4 class="title mt-3 mb-4"><span class="text-primary">Jingga</span> <br>Offers Smart Concepts
                                And Pinpoint Solutions Big &
                                Small
                            </h4>
                            <p class="text-muted para-desc mx-auto">JINGGA is THE <span class="text-primary fw-bold">SPECIALIST</span> that provides excellent SERVICES in
                                Exhibition, Trade Show and other events. Our main GOAL is to
                                maximize the potential of your BRAND activation.</p>
                            <p class="text-muted para-desc mx-auto mb-0">As part of strong and experience team in organizing medical
                                conferences for 20 years. JINGGA has deep understanding of the
                                customers – their background, needs and goals Talented and
                                creative designers, high quality materials, skillful production team,
                                insightful, fast response, fruitful communication, quality control,
                                wide variety of properties and accessories, will be your working
                                experiences with us.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-primary">VISION IDEA DESIGN BUILD</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

    <section class="section bg-cta" style="background: url('images/bg02.jpg') center center;" id="flow">
        <div class="bg-overlay-dark"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="section-title text-center mb-5">
                    <span class="alert alert-pills bg-soft-primary">The Flow</span>
                </div>
                <div class="col-md-3 col-12 mt-5 mb-3">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <h1 class=" h1 text-primary">1</h1>
                        </div>

                        <div class="content mt-4">
                            <h5>Understanding your <br> needs & wishes</h5>

                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-3 col-12 mt-5 mb-3">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <h1 class=" h1 text-primary">2</h1>
                        </div>

                        <div class="content mt-4">
                            <h5>Ideas Exchange</h5>

                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-3 col-12 mt-5 mb-3">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <h1 class=" h1 text-primary">3</h1>
                        </div>

                        <div class="content mt-4">
                            <h5>Design & 3D Visualization</h5>

                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-3 col-12 mt-5 mb-3">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <h1 class=" h1 text-primary">4</h1>
                        </div>

                        <div class="content mt-4">
                            <h5>Approval</h5>

                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-3 col-12 mt-5 mb-3">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <h1 class=" h1 text-primary">5</h1>
                        </div>

                        <div class="content mt-4">
                            <h5>Build & Install</h5>

                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-3 col-12 mt-5 mb-3">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <h1 class=" h1 text-primary">6</h1>
                        </div>

                        <div class="content mt-4">
                            <h5>Onsite Management</h5>

                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-3 col-12 mt-5 mb-3">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <h1 class=" h1 text-primary">7</h1>
                        </div>

                        <div class="content mt-4">
                            <h5>Dismantle & Storage</h5>

                        </div>
                    </div>
                </div><!--end col-->
            </div>
        </div><!--end container-->
    </section><!--end section-->

    <!-- Modal 1-->
    <div class="modal fade" id="project2019" tabindex="-1" aria-labelledby="ProjectModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title" id="ProjectModal"><span class="badge rounded-pill bg-soft-primary">2019</span></h5>
                    <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="mt-3 mb-2">Official Contractor</h6>
                    <ul class="text-muted mb-0">
                        <li>ISPE Indonesia Affiliate Conference 2019</li>
                        <li>The 23rd Annual Scientific Meeting of Indonesian Association of Plastic Reconstructive and Aesthetic Surgeon (InaPRAS)</li>
                        <li>The 21st International Meeting on Respinatory Care Indonesia 2019</li>
                        <li>The WFNS Course 2019 in conjunction with The 23rd Annual Scientific Meeting of Indonesian Neurosurgical Socienty (INS)</li>
                        <li>The 4th Scientific Meeting of North American Spine Society, International Society for Minimal Intervention in Spinal Surgery and Indonesian Spine Society (NASSISMISS)</li>
                        <li>The 3rd Live Surgery Workshop International Soci ety of Reconstructive Urology (ISORU), The 2nd International Li ve Surgery Workshop Indonesia Genitourina ry Reconstructive Society (InaCURS) and The 12th Malang Continuing Urology Education (MCUE)</li>
                        <li>Pertemuan Ilmiah Tahunan Perhimpunan Dokter Spesialis Bedah
                            Indonesia Ke-23 (PIT IKABI-23)</li>
                        <li>The 24th ASEAN Federation Cardiology Congress (AFCC) in conjunction with 28th ASMIHA</li>
                        <li>The 15th Asia Pacific Hernia Society (APHS) Conference</li>
                        <li>Kongres Nasional IX Perhimpunan Dokter Spesialis Kedokteran
                            Jiwa Indonesia (PDSKJI)</li>
                        <li>The 11st National Congress & The 18th of Indonesian Physical Medicine and Rehabilitation Association (KONAS XI & PIT XVIII PERDOSRI)</li>
                        <li>The 2nd Jakarta International Neurosurgery Forum (JINEF) in conjunction with Indonesian Society of Neu rological Surgeon Anniversary</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- Modal 2-->
    <div class="modal fade" id="project2020" tabindex="-1" aria-labelledby="ProjectModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title" id="ProjectModal"><span class="badge rounded-pill bg-soft-primary">2020</span></h5>
                    <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="mt-3 mb-2">Official Contractor</h6>
                    <ul class="text-muted mb-0">
                        <li>Perkumpulan Dokter Inte rvensi Nyeri Indonesia 2020 (PERDINI)</li>
                        <li>The 19th Annual Scientific Meeting of Indonesia Physical Medicine and
                            Rehabilitation Association (PIT XIX PERDOSRI)
                        </li>
                        <li>The 19th
                            Rehabilitation Association (PIT XIX PERDOSRI)
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- Modal 3-->
    <div class="modal fade" id="project2021" tabindex="-1" aria-labelledby="ProjectModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title" id="ProjectModal"><span class="badge rounded-pill bg-soft-primary">2021</span></h5>
                    <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="mt-3 mb-2">Official Contractor</h6>
                    <ul class="text-muted mb-0">
                        <li>The 24th Annual Scientific Meeting of Indonesian Association of Plastic
                            Reconstructive and Aesthetic Surgeon (InaPRAS)
                        </li>
                        <li>Pertemuan Ilmiah Tahunan Perhimpunan Spesialis Bedah Saraf
                            Indonesia XXIV (PIT Perspebsi XXIV)
                        </li>
                        <li>44th Annual Scientific Meeting of Indonesian Urological Association(44th ASMIUA)</li>
                        <li>The 5th Scientific Meeting of North American Spine Society, International Society for Minimal Intervention in Spinal Surgery and Indonesian Spine Society (NASSISMISS)</li>
                        <li>The 5th International Society on minimally in vassive Techniques in
                            Neurosurgery (ISMINSS)
                        </li>
                        <li>Pertemuan Ilmiah Tahunan Perhimpunan Dokter Spesialis Kedokteran
                            Jiwa Indonesia 2021 (PIT PDSKJI 2021)
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- Modal 4-->
    <div class="modal fade" id="project2022" tabindex="-1" aria-labelledby="ProjectModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title" id="ProjectModal"><span class="badge rounded-pill bg-soft-primary">2022</span></h5>
                    <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="mt-3 mb-2">Official Contractor</h6>
                    <ul class="text-muted mb-0">
                        <li>Perhimpunan Spesialis Bedah Saraf Indonesia (PERSPEBSI)</li>
                        <li>Malang Continuing Urology Education 2022 (MCUE)</li>
                        <li>Spine20</li>
                        <li>Perhimpunan Dokter Spesialis Bedah Plastik Rekontruksi dan Estetik
                            Indonesia 2022 (PERAPI)</li>
                        <li>Annual Scientific Meeting of Indonesian Urological Association (ASMIUA)</li>
                        <li>Perhimpunan Dokter Spesialis Kedokteran Jiwa Indonesia 2022
                            (PDSKJI)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- Modal 4-->
    <div class="modal fade" id="project2023" tabindex="-1" aria-labelledby="ProjectModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title" id="ProjectModal"><span class="badge rounded-pill bg-soft-primary">2023</span></h5>
                    <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="mt-3 mb-2">Official Contractor</h6>
                    <ul class="text-muted mb-0">
                        <li>Asia Pacific Cervical Spine Society (APCSS)</li>
                        <li>Malang Continuing Urology Education 2023 (MCUE)</li>
                        <li>Perhimpunan Spesialis Bedah Saraf Indonesia (PERSPEBSI)</li>
                        <li>Annual Scientific Meeting of Indonesia Heart Association (ASMIHA)</li>
                        <li>Young Neurosurgeons (YNS)</li>
                        <li>Asian Society of Cardiovascular Imaging (ASCI)</li>
                        <li>Perhimpunan Dokter Spesialis Bedah Plastik Rekontruksi dan Estetik
                            Indonesia 2023 (PERAPI)
                        </li>
                        <li>Annual Scientific Meeting of Indonesian Urological Association 2023 (ASMIUA)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <section class="section bg-light" id="projects">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title mb-4 pb-2 text-center">
                        <span class="alert alert-pills bg-soft-primary">Our Projects</span>
                        <p class="text-muted mx-auto para-desc mt-3 mb-0">Our listing <span class="text-primary fw-bold">Jingga</span> projects </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="container mt-5">
                <div class="row">

                    <div class="col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="row">
                            <div class="col-12 filters-group-wrap">
                                <div class="filters-group">
                                    <ul class="container-filter list-inline mb-0 filter-options">
                                        <li class="list-inline-item categories-name border text-dark rounded active" data-group="all">All</li>
                                        <li class="list-inline-item categories-name border text-dark rounded" data-group="2019">2019</li>
                                        <li class="list-inline-item categories-name border text-dark rounded" data-group="2020">2020</li>
                                        <li class="list-inline-item categories-name border text-dark rounded" data-group="2021">2021</li>
                                        <li class="list-inline-item categories-name border text-dark rounded" data-group="2022">2022</li>
                                        <li class="list-inline-item categories-name border text-dark rounded" data-group="2023">2023</li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div id="grid" class="row">
                            <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2019"]'>
                                <div class="section-title sticky-bar position-sticky">
                                    <span class="badge rounded-pill bg-soft-primary">2019</span>
                                    <h6 class="mt-3 mb-2">Official Contractor</h6>
                                    <ul class="text-muted mb-0">
                                        <li>ISPE Indonesia Affiliate Conference 2019</li>
                                        <li>Pertemuan Ilmiah Tahunan Perhimpunan Dokter Spesialis Bedah
                                            Indonesia Ke-23 (PIT IKABI-23)
                                        </li>
                                        <li>The 21st International Meeting on Respinatory Care Indonesia 2019</li>
                                        <li>The 24th ASEAN Federation Cardiology Congress (AFCC) in conjunction with 28th ASMIHA</li>
                                    </ul>
                                    <div class="mt-4 d-none d-md-block">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2019" class="btn btn-soft-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2020"]'>
                                <div class="section-title sticky-bar position-sticky">
                                    <span class="badge rounded-pill bg-soft-primary">2020</span>
                                    <h6 class="mt-3 mb-2">Official Contractor <br>Virtual Event</h6>
                                    <ul class="text-muted mb-0">
                                        <li>Perkumpulan Dokter Intervensi Nyeri Indonesia 2020 (PERDINI)</li>
                                        <li>the 19th Annual Scientific Meeting of Indonesian Physical Medicine & Rehabilitation Association (PIT XIX PERDOSRI)</li>
                                        <li>Perhimpunan Dokter Spesialis Kedokteran Jiwa Indonesia 2020 (PDSKJI)</li>
                                    </ul>
                                    <div class="mt-4 d-none d-md-block">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2020" class="btn btn-soft-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2021"]'>
                                <div class="section-title sticky-bar position-sticky">
                                    <span class="badge rounded-pill bg-soft-primary">2021</span>
                                    <h6 class="mt-3 mb-2">Official Contractor <br>Virtual Event</h6>
                                    <ul class="text-muted mb-0">
                                        <li>Pertemuan Ilmiah Tahunan Perhimpunan Spesialis Bedah Saraf
                                            Indonesia XXIV (PIT Perspebsi XXIV)
                                        </li>
                                        <li>The 5th International Society on minimally in vassive Techniques in
                                            Neurosurgery (ISMINSS)
                                        </li>
                                        <li>44th Annual Scientific Meeting of Indonesian Urological Association (ASMIUA)</li>
                                    </ul>
                                    <div class="mt-4 d-none d-md-block">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2021" class="btn btn-soft-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2022"]'>
                                <div class="section-title sticky-bar position-sticky">
                                    <span class="badge rounded-pill bg-soft-primary">2022</span>
                                    <h6 class="mt-3 mb-2">Official Contractor</h6>
                                    <ul class="text-muted mb-0">
                                        <li>Malang Continuing Urology Education 2022 (MCUE)
                                        </li>
                                        <li>Spine20
                                        </li>
                                        <li>Perhimpunan Dokter Spesialis Bedah Plastik Rekontruksi dan Estetik
                                            Indonesia 2022 (PERAPI)</li>
                                        <li>Perhimpunan Spesialis Bedah Saraf Indonesia (PERSPEBSI)</li>
                                    </ul>
                                    <div class="mt-4 d-none d-md-block">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2022" class="btn btn-soft-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                                <div class="section-title sticky-bar position-sticky">
                                    <span class="badge rounded-pill bg-soft-primary">2023</span>
                                    <h6 class="mt-3 mb-2">Official Contractor</h6>
                                    <ul class="text-muted mb-0">
                                        <li>Asian Society of Cardiovascular Imaging (ASCI)</li>
                                        <li>Asia Pacific Cervical Spine Society (APCSS)</li>
                                        <li>Annual Scientific Meeting of indonesia Urological Association 2023 (ASMIUA)</li>
                                        <li>Perhimpunan Dokter Spesialis Bedah Plastik Rekontruksi dan Estetik
                                            Indonesia 2023 (PERAPI)
                                        </li>
                                    </ul>
                                    <div class="mt-4 d-none d-md-block">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2023" class="btn btn-soft-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2019"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2019-1.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2019-1.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2019</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2020"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2020-1.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2020-1.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2020</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2019"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2019-2.jpg" alt="2" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2019-2.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2019</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2019"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2019-3.jpg" alt="2" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2019-3.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2019</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2021"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2021.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2021.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2021</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2023-1.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2023-1.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2023</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2022"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2022-1.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2022-1.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2022</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2023-2.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2023-2.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2023</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2022"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2022-2.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2022-2.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2022</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2022"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2022-3.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2022-3.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2022</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2023-4.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2023-4.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2023</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2023-5.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2023-5.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2023</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                                <div class="card border-0 work-container work-classic shadow overflow-hidden">
                                    <div class="card-body work-container work-modern p-0">
                                        <div class="portfolio-box-img position-relative overflow-hidden">
                                            <img class="item-container img-fluid work-image mx-auto" src="images/projects/2023-6.jpg" alt="1" />
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="icons text-center">
                                                <a href="images/projects/2023-6.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                            </div>
                                        </div>
                                        <div class=" p-4">
                                            <h6 class="text-muted tag mb-0">2023</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end container-->
    </section><!--end section-->

    <section class="section" id="customers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title mb-4 pb-2 text-center">
                        <h6 class="alert bg-soft-primary alert-pills">Our Customers</h6>
                        <!-- <h4 class="title mt-3 mb-4">Our Customers</h4> -->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2">
                    <h6 class="text-muted mb-0">Trusted by over 100 Companies</h6>
                </div><!--end col-->

                <div class="col-lg-10 col-md-10 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="rounded shadow bg-white-50 p-4">
                        <div class="row justify-content-center">
                            <div class="tiny-four-item py-3 px-0">
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-16.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-18.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-19.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-20.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-21.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-22.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-23.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-24.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-25.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-26.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-27.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-28.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-29.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-30.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-31.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-32.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-33.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-34.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-35.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-36.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-37.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-38.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-39.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-40.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-41.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-42.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-43.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-44.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-45.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-46.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-47.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-48.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-49.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-50.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-51.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-52.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-53.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-54.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-55.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-56.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-57.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-58.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-59.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-60.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-61.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-62.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-63.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-64.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-65.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-66.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-67.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-68.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-69.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-70.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-71.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-72.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-73.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-74.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-75.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-76.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-77.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-78.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-79.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-80.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                                <div class="tiny-slide">
                                    <a href="javascript:void(0)" class="customers logo">
                                        <img src="images/customer/customer-81.png" class="avatar avatar-medium" alt="">
                                    </a>
                                </div>
                            </div>

                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <section class="section d-flex align-items-center" id="contact-us" style="background: url('images/contact-detail.jpg') center center;">
        <div class="bg-overlay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title mb-4 pb-2 text-center">
                        <h6 class="alert bg-soft-primary alert-pills">Contact us</h6>
                        <!-- <h4 class="title mt-3 mb-4">Our Customers</h4> -->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row align-items-center">
                <div class="col-lg-4 offset-lg-2 col-md-7 ">
                    <div class="title-heading mt-5 pt-4">
                        <a href="#" class="logo-footer">
                            <img src="images/logo-light.png" height="42" alt="">
                        </a>
                        <!-- <h1 class="heading">Let's talk about your portfolio</h1> -->
                        <p class="text-dark mt-3">PT. <span class="text-primary fw-bold">Jingga</span> Pro Utama </p>
                        <p class="text-muted mt-2">Komplek Duta Merlin Blok C/35 <br>
                            Jl. Gajah Mada No. 3-5, Jakarta Pusat,
                            Indonesia</p>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Location</h5>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7279709822214!2d106.81571837464583!3d-6.167171060437931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d7fde70b4d%3A0x6c3988135c69bb6b!2sPT.%20Jingga%20Pro%20Utama!5e0!3m2!1sid!2sid!4v1705053200892!5m2!1sid!2sid" data-type="iframe" class="video-play-icon text-primary lightbox">View on Google map</a>
                            </div>
                        </div>

                    </div>
                </div><!--end col-->
                <div class="col-lg-5 offset-lg-1 col-md-7 ">
                    <div class="title-heading mt-5 pt-4">

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Email</h5>
                                <a href="mailto:info@jingga-id.com" class="text-primary">info@jingga-id.com</a>
                            </div>
                        </div>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <span class="h3">
                                    <i class="uil uil-whatsapp text-dark me-3"></i>
                                </span>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Whatsapp</h5>
                                <a href="https://api.whatsapp.com/send?phone=6285710610609" class="text-primary">+62 857-1061-0609</a> <br>
                                <a href="https://api.whatsapp.com/send?phone=6285186363210" class="text-primary">+62 851-8636-3210</a>
                            </div>
                        </div>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Phone</h5>
                                <a href="tel:+152534-468-854" class="text-primary">+62-21 6346 366 (ext.302)</a>
                            </div>
                        </div>


                        <ul class="list-unstyled social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

    <!-- Footer Start -->
    <!--  <footer class="footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="images/logo-light.png" height="36" alt="">
                        </a>
                        <p class="mt-4">We are not the First, but we strive for the BEST. Experiences in designing and building tasteful special and custom booths</p>
                        <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Company</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-aboutus.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                            <li><a href="page-services.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                            <li><a href="page-team.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                            <li><a href="page-pricing.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                            <li><a href="page-portfolio-modern.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Project</a></li>
                            <li><a href="page-jobs.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                            <li><a href="page-blog-grid.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                            <li><a href="auth-cover-login.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                        </ul>
                    </div>
                   
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Usefull Links</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-terms.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                            <li><a href="page-privacy.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                            <li><a href="documentation.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                            <li><a href="changelog.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                            <li><a href="components.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Components</a></li>
                        </ul>
                    </div>
                   

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Newsletter</h5>
                        <p class="mt-4">Sign up and receive the latest tips via email.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe mb-3">
                                        <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="Your email : " required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer> -->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-end ">
                <div class="col-sm-12">
                    <div class="text-sm-start float-end">
                        <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())
                            </script> Jingga Pro Utama</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->



    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Shuffle and tobii js -->
    <script src="js/shuffle.min.js"></script>
    <script src="js/tobii.min.js"></script>
    <!-- SLIDER -->
    <script src="js/swiper.min.js"></script>
    <script src="js/tiny-slider.js "></script>
    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <!-- Main Js -->
    <script src="js/plugins.init.js"></script><!--Note: All init (custom) js like tiny slider, counter, countdown, lightbox, gallery, swiper slider etc.-->
    <script src="js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>