<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Agen X</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
<!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->

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

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif


            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        Festava Live
                    </a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/index#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/index#section_2">About</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/index#section_3">Artists</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/index#section_4">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <section class="ticket-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-10 mx-auto">
                            <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{ route('post-ticket') }}" method="post" role="form">
                                <h2 class="text-center mb-4">Get started</h2>

                                <div class="ticket-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="ticket-form-name" id="name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="ticket-form-email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="tel" class="form-control" name="phone" placeholder="0857-4565-7890" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="date" name="ticket-form-date" id="date" class="form-control" placeholder="Date" required>
                                        </div>
                                    </div>

                                    <h6>Choose Ticket Type</h6>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-check form-control">
                                                <input class="form-check-input" type="radio" name="TicketForm" id="ticket" placeholder="Eary bird">
                                                <input type="number" id="price" placeholder="120" hidden>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Eary bird $120
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-check form-check-radio form-control">
                                                <input class="form-check-input" type="radio" name="TicketForm" id="ticket" placeholder="Standard">
                                                <input type="number" id="price" placeholder="240" hidden>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Standard $240
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="number" name="ticket-form-number" id="number" class="form-control" placeholder="Number of Tickets" required>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Buy Ticket</button>
                                    </div>
                                </div>
                            </form>
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
                                <a href="/#section_1" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/#section_2" class="site-footer-link">About</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/#section_3" class="site-footer-link">Artists</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/#section_3" class="site-footer-link">Pricing</a>
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
        <script src="js/custom.js"></script>

    </body>
</html>