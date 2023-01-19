<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Agen X</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
    </head>
    
    <body>

        <main>
            <header class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 d-flex flex-wrap">
                            <p class="d-flex me-4 mb-0">
                                    <i class="bi-person custom-icon me-2"></i>
                                <strong class="text-dark">Welcome to Music Festival 2023</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </header>


            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        Festava Live
                    </a>

                    <a href="{{ route('ticket') }}" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>
                    
                    <a href="{{ route('login') }}" class="btn custom-btn d-lg-none ms-auto me-4">Admin</a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Artist</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Price</a>
                            </li>
                        </ul>

                        <a href="{{ route('ticket') }}" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>

                        <a href="{{ route('login') }}" class="btn custom-btn d-lg-block d-none">Admin</a>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section" id="section_1">
                <div class="section-overlay"></div>

                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row">

                        <div class="col-12 mt-auto mb-5 text-center">
                            <small>Festava Live</small>

                            <h1 class="text-white mb-5">Night Live 2023</h1>
                        </div>

                        <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                            <div class="date-wrap">
                                <h5 class="text-white">
                                    <i class="custom-icon bi-clock me-2"></i>
                                    30<sup>th</sup>, January 2023
                                </h5>
                            </div>

                            <div class="location-wrap mx-auto py-3 py-lg-0">
                                <h5 class="text-white">
                                    <i class="custom-icon bi-geo-alt me-2"></i>
                                    GBK, Jakarta Pusat
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="video/pexels-2022395.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                            <div class="services-info">
                                <h2 class="text-white mb-4">About Festava 2023</h2>

                                <p class="text-white">This is template provided by TemplateMo website. This layout is built on Bootstrap v5.2.2 CSS library.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="about-text-wrap">
                                <img src="images/pexels-alexander-suhorucov-6457579.jpg" class="about-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="artists-section section-padding" id="section_3">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Artist</h1>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/joecalih-UmTZqmMvQcw-unsplash.jpg" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Madona
                                    </p>

                                    <p>
                                        <strong>Birthdate:</strong>
                                        August 16, 1958
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Pop, R&amp;B
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Youtube Channel:</strong>
                                        <a href="#">Madona Official</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/abstral-official-bdlMO9z5yco-unsplash.jpg" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Rihana
                                    </p>

                                    <p>
                                        <strong>Birthdate:</strong>
                                        Feb 20, 1988
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Country
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Youtube Channel:</strong>
                                        <a href="#">Rihana Official</a>
                                    </p>
                                </div>
                            </div>

                            <div class="artists-thumb">
                                <img src="images/artists/soundtrap-rAT6FJ6wltE-unsplash.jpg" class="artists-image img-fluid">

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Bruno Bros
                                    </p>

                                    <p>
                                        <strong>Birthdate:</strong>
                                        October 8, 1985
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Pop
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Youtube Channel:</strong>
                                        <a href="#">Bruno Official</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="pricing-section section-padding section-bg" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-center mb-4">Plans, you' love</h2>
                        </div>
                        
                        <div class="col-lg-6 col-12">
                            <div class="pricing-thumb">
                                <div class="d-flex">
                                    <div>
                                        <h3><small>Early Bird</small> $120</h3>

                                        <p>Including good things:</p>
                                    </div>

                                    <p class="pricing-tag ms-auto">Save up to <span>50%</span></h2>
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item">platform for potential customers</li>

                                    <li class="pricing-list-item">digital experience</li>

                                    <li class="pricing-list-item">high-quality sound</li>

                                    <li class="pricing-list-item">standard content</li>
                                </ul>

                                <a class="link-fx-1 color-contrast-higher mt-4" href="ticket">
                                    <span>Buy Ticket</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                            <div class="pricing-thumb">
                                <div class="d-flex">
                                    <div>
                                        <h3><small>Standard</small> $240</h3>

                                        <p>What makes a premium festava?</p>
                                    </div>
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item">platform for potential customers</li>

                                    <li class="pricing-list-item">digital experience</li>

                                    <li class="pricing-list-item">high-quality sound</li>

                                    <li class="pricing-list-item">premium content</li>
                                    
                                    <li class="pricing-list-item">live chat support</li>
                                </ul>

                                <a class="link-fx-1 color-contrast-higher mt-4" href="ticket">
                                    <span>Buy Ticket</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            
        </main>


        <footer class="site-footer">
            <div class="site-footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-lg-0">Festava Live</h2>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <h5 class="site-footer-title mb-3">Links</h5>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#section_1" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_2" class="site-footer-link">About</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_3" class="site-footer-link">Artist</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_4" class="site-footer-link">Pricing</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </footer>

<!--

T e m p l a t e M o

-->

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>