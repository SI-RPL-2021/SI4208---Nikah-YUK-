<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>
    <section style="height:100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            .modal-header-4-2.modal {
                top: 2rem;
            }
            
            .header-4-2 .navbar,
            .hero-header-4-2 {
                padding: 3rem 2rem;
            }
            
            .header-4-2 .navbar-light .navbar-nav .nav-link {
                font-size: 18px;
                color: #1d1e3c;
                font-weight: 300;
                line-height: 1.5rem;
            }
            
            .header-4-2 .navbar-light .navbar-nav .nav-link:hover {
                font-size: 18px;
                color: #1d1e3c;
                font-weight: 600;
                line-height: 1.5rem;
            }
            
            .header-4-2 .navbar-light .navbar-nav .active>.nav-link,
            .header-4-2 .navbar-light .navbar-nav .nav-link.active,
            .header-4-2 .navbar-light .navbar-nav .nav-link.show,
            .header-4-2 .navbar-light .navbar-nav .show>.nav-link {
                font-weight: 600;
            }
            
            .header-4-2 .navbar-light .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }
            
            .header-4-2 .navbar-light .navbar-toggler {
                border: none;
            }
            
            .modal-content-header-4-2 .modal-header,
            .modal-content-header-4-2 .modal-footer {
                border: none;
            }
            
            .btn:focus,
            .btn:active {
                outline: none !important;
            }
            
            .btn-fill-header-4-2 {
                background-color: #27C499;
                border-radius: 12px;
                color: #ffffff;
                font-weight: 600;
                padding: 12px 32px 12px 32px;
                font-size: 18px;
            }
            
            .btn-fill-header-4-2:hover {
                color: #ffffff;
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            
            .btn-no-fill-header-4-2 {
                color: #1D1E3C;
                font-weight: 300;
                line-height: 1.75rem;
                padding: 12px 32px 12px 32px;
                font-size: 18px;
            }
            
            .modal-header-4-2 .modal-dialog .modal-content {
                border-radius: 8px;
                background-color: #FFFFFF;
                border: none;
            }
            
            .responsive-header-4-2 li a {
                padding: 1rem 1rem;
            }
            
            .text-caption-header-4-2 {
                margin-bottom: 2rem;
                line-height: 1.625;
                font-size: 0.875rem;
                line-height: 1.25rem;
                font-weight: 600;
                color: #27C499;
            }
            
            .left-column-header-4-2 {
                margin-bottom: 0.75rem;
                width: 100%;
            }
            
            .right-column-header-4-2 {
                width: 100%;
            }
            
            .title-text-big-header-4-2 {
                font-weight: 600;
                margin-bottom: 2rem;
                font-size: 2.25rem;
                line-height: 2.5rem;
                color: #272E35;
            }
            
            .title-text-small-header-4-2 {
                font-weight: 600;
                margin-bottom: 2rem;
                font-size: 2.25rem;
                line-height: 2.5rem;
                color: #272E35;
                padding-left: 0;
                padding-right: 0;
            }
            
            .div-button-header-4-2 {
                margin-left: 0;
                margin-right: 0;
            }
            
            .btn-try-header-4-2 {
                font-weight: 600;
                color: #FFFFFF;
                padding: 1rem 1.5rem 1rem 1.5rem;
                font-size: 1rem;
                line-height: 1.5rem;
                border-radius: 0.75rem;
                background-color: #27C499;
                margin-bottom: 1rem;
                margin-right: 0;
            }
            
            .btn-try-header-4-2:hover {
                color: #FFFFFF;
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            
            .btn-outline-header-4-2 {
                font-weight: 400;
                border: 1px solid #555B61;
                color: #555B61;
                padding: 1rem 1.5rem 1rem 1.5rem;
                font-size: 1rem;
                line-height: 1.5rem;
                border-radius: 0.75rem;
                background-color: transparent;
                margin-bottom: 1rem;
            }
            
            .btn-outline-header-4-2:hover {
                border: 1px solid #27C499;
                color: #27C499;
            }
            
            .btn-outline-header-4-2:hover div path {
                fill: #27C499;
            }
            
            @media (min-width: 576px) {
                .modal-header-4-2 .modal-dialog {
                    max-width: 95%;
                    border-radius: 12px;
                }
                .header-4-2 .navbar {
                    padding: 3rem 2rem;
                }
                .hero-header-4-2 {
                    padding: 3rem 2rem 5rem 2rem;
                }
                .title-text-big-header-4-2 {
                    font-size: 3rem;
                    line-height: 1.2;
                }
                .title-text-small-header-4-2 {
                    font-size: 3rem;
                    line-height: 1.2;
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                }
                .div-button-header-4-2 {
                    margin-left: 0;
                    margin-right: 0.75rem;
                }
                .btn-try-header-4-2 {
                    margin-bottom: 0;
                    margin-right: 0.75rem;
                }
                .btn-outline-header-4-2 {
                    margin-bottom: 0;
                }
            }
            
            @media (min-width: 768px) {
                .header-4-2 .navbar {
                    padding: 3rem 4rem;
                }
                .hero-header-4-2 {
                    padding: 3rem 4rem 5rem 4rem;
                }
                .left-column-header-4-2 {
                    margin-bottom: 3rem;
                }
                .title-text-small-header-4-2 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                }
                .div-button-header-4-2 {
                    margin-left: 0;
                    margin-right: 0.5rem;
                }
                .btn-try-header-4-2 {
                    margin-right: 0.5rem;
                }
            }
            
            @media (min-width: 992px) {
                .header-4-2 .navbar-expand-lg .navbar-nav .nav-link {
                    padding-right: 1.25rem;
                    padding-left: 1.25rem;
                }
                .header-4-2 .navbar {
                    padding: 0rem 6rem;
                }
                .hero-header-4-2 {
                    padding: 3rem 6rem 5rem 6rem;
                }
                .left-column-header-4-2 {
                    width: 50%;
                    margin-bottom: 0;
                }
                .right-column-header-4-2 {
                    width: 50%;
                }
                .title-text-big-header-4-2 {
                    font-size: 3.75rem;
                    line-height: 1.2;
                }
                .title-text-small-header-4-2 {
                    font-size: 3.75rem;
                    line-height: 1.2;
                }
                .div-button-header-4-2 {
                    margin-left: 0;
                    margin-right: 2rem;
                }
                .btn-try-header-4-2 {
                    margin-right: 2rem;
                }
            }
            
            .row .c {
                height: 50px;
            }
        </style>

        <!-- Start Code -->
        <div class="header-4-2" style="font-family: 'Poppins', sans-serif;">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#">
                    <img style="margin-right:0.75rem" src="img/logo1.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-header-4-2">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-header-4-2 modal fade" id="targetModal-header-4-2" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel-header-4-2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-header-4-2">
                            <div class="modal-header" style="padding:	2rem; padding-bottom: 0;">
                                <a class="modal-title" id="targetModalLabel-header-4-2">
                                    <img style="margin-top:0.5rem" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="">
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                                <ul class="navbar-nav responsive-header-4-2 me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tutorial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Loker</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Consultation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Testimoni</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Services</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer" style="padding:	2rem; padding-top: 0.75rem">
                                <button class="btn btn-default btn-no-fill-header-4-2">Log In</button>
                                <button class="btn btn-fill-header-4-2">Try Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo-header-4-2">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/">Tutorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/">Loker</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/">Consultation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/">Services</a>
                        </li>
                    </ul>
                    <a href="{{route ('login')}}"><button class="btn btn-default btn-no-fill-header-4-2">Log
                            In</button></a>
                    <button class="btn btn-fill-header-4-2">Sign Up</button>
                </div>
            </nav>


            <br><br><br>

            <!-- Carousel -->
            <style>
                /* GLOBAL STYLES
    -------------------------------------------------- */
                /* Padding below the footer and lighter body text */
                
                body {
                    padding-top: 3rem;
                    padding-bottom: 3rem;
                    color: #5a5a5a;
                }
                /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */
                /* Carousel base class */
                
                .carousel {
                    margin-bottom: 4rem;
                }
                /* Since positioning the image, we need to help out the caption */
                
                .carousel-caption {
                    bottom: 5rem;
                    z-index: 10;
                }
                /* Declare heights because of positioning of img element */
                
                .carousel-item {
                    height: 32rem;
                }
                
                .carousel-item>img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    min-width: 100%;
                    height: 32rem;
                }
                /* MARKETING CONTENT
    -------------------------------------------------- */
                /* Center align the text within the three columns below the carousel */
                
                .marketing .col-lg-4 {
                    margin-bottom: 1.5rem;
                    text-align: center;
                }
                
                .marketing h2 {
                    font-weight: 400;
                }
                /* rtl:begin:ignore */
                
                .marketing .col-lg-4 p {
                    margin-right: .75rem;
                    margin-left: .75rem;
                }
                /* rtl:end:ignore */
                /* Featurettes
    ------------------------- */
                
                .featurette-divider {
                    margin: 5rem 0;
                    /* Space out the Bootstrap <hr> more */
                }
                /* Thin out the marketing headings */
                
                .featurette-heading {
                    font-weight: 300;
                    line-height: 1;
                    /* rtl:remove */
                    letter-spacing: -.05rem;
                }
                /* RESPONSIVE CSS
    -------------------------------------------------- */
                
                @media (min-width: 40em) {
                    /* Bump up size of carousel content */
                    .carousel-caption p {
                        margin-bottom: 1.25rem;
                        font-size: 1.25rem;
                        line-height: 1.4;
                    }
                    .featurette-heading {
                        font-size: 50px;
                    }
                }
                
                @media (min-width: 62em) {
                    .featurette-heading {
                        margin-top: 7rem;
                    }
                }
            </style>

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                            <img src="img/wedding1.jpg" alt="">
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                            <img src="img/wedding3.jpg" alt="">
                        </svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                            <img src="img/wedding4.jpg" alt="">
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>

       

        <!-- Start Heading -->
        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <br><br>
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                dy=".3em">140x140</text>
                        </svg>

                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                dy=".3em">140x140</text>
                        </svg>

                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
                    </p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                dy=".3em">140x140</text>
                        </svg>

                    <h2>Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- End Heading -->

        <!-- Promo -->
        <br><br><br><br><br>
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="row">
            <div class="col-12" text>
                <h3 align="center">Promo</h3>
            </div>
        </div>

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

        <div class="album py-5 ">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <!-- Testimoni -->
        <br><br>
        <div>
            <div class="row">
                <div class="col-12" text>
                    <h3 align="center">Testimoni</h3>
                </div>
            </div>

            <!-- START THE FEATURETTES -->
            <div class="container marketing">
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow
                                    your
                                    mind.</span></h2>
                        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                    </div>
                    <div class="col-md-5">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                                    dy=".3em">500x500</text>
                            </svg>

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                                    yourself.</span></h2>
                        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                                    dy=".3em">500x500</text>
                            </svg>

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                    </div>
                    <div class="col-md-5">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                                    dy=".3em">500x500</text>
                            </svg>

                    </div>
                </div>

                <hr class="featurette-divider">
            </div>

            <!-- /END THE FEATURETTES -->
        </div>

        <!-- Keunggulan website -->
        <div class="keunggulan website">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
                .btn:focus,
                .btn:active {
                    outline: none !important;
                }
                
                .title-text-content-2-2 {
                    padding-top: 5rem;
                    margin-bottom: 3rem;
                }
                
                .text-title-content-2-2 {
                    color: #121212;
                    margin-bottom: 0.625rem;
                    font-size: 2.25rem;
                    line-height: 2.5rem;
                    font-weight: 600;
                }
                
                .text-caption-content-2-2 {
                    color: #121212;
                    font-weight: 300;
                }
                
                .column-content-2-2 {
                    padding-left: 2.25rem;
                    padding-right: 2.25rem;
                    padding-top: 2rem;
                    padding-bottom: 2rem;
                }
                
                .icon-content-2-2 {
                    margin-bottom: 1.5rem;
                }
                
                .icon-content-2-2-title {
                    font-size: 1.5rem;
                    line-height: 2rem;
                    margin-bottom: 0.625rem;
                    color: #121212;
                }
                
                .icon-content-2-2-caption {
                    font-size: 1rem;
                    line-height: 1.625;
                    letter-spacing: 0.025em;
                    color: #565656;
                }
                
                .card-block-content-2-2 {
                    padding: 1rem 1rem 5rem 1rem;
                }
                
                .card-content-2-2 {
                    padding: 1.75rem;
                    background-color: #EEF6F4;
                    border-radius: 0.75rem;
                    border: 1px solid #27C499;
                }
                
                .card-content-2-2-title {
                    font-size: 1.5rem;
                    line-height: 2rem;
                    margin-bottom: 0.625rem;
                    color: #000000;
                    font-weight: 600;
                }
                
                .card-content-2-2-caption {
                    font-size: 1rem;
                    line-height: 1.5rem;
                    color: #565656;
                    letter-spacing: 0.025em;
                    font-weight: 300;
                    margin-bottom: 0;
                }
                
                .btn-card-content-2-2 {
                    font-size: 1rem;
                    line-height: 1.5rem;
                    font-weight: 700;
                    color: #ffffff;
                    background-color: #27C499;
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    width: 100%;
                    border-radius: 0.75rem;
                    margin-bottom: 1.25rem;
                }
                
                .btn-card-content-2-2:hover {
                    color: #ffffff;
                    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }
                
                .btn-outline-content-2-2 {
                    font-size: 1rem;
                    line-height: 1.5rem;
                    color: #979797;
                    border: 1px solid #979797;
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    width: 100%;
                    border-radius: 0.75rem;
                }
                
                .btn-outline-content-2-2:hover {
                    border: 1px solid #27C499;
                    color: #27C499;
                }
                
                .card-text-content-2-2 {
                    padding-top: 1.5rem;
                    padding-bottom: 1.5rem;
                }
                
                .grid-padding-content-2-2 {
                    padding: 0rem 1rem 3rem 1rem;
                }
                
                @media (min-width: 576px) {
                    .grid-padding-content-2-2 {
                        padding: 0rem 2rem 3rem 2rem;
                    }
                    .card-block-content-2-2 {
                        padding: 3rem 2rem 5rem 2rem;
                    }
                }
                
                @media (min-width: 768px) {
                    .grid-padding-content-2-2 {
                        padding: 0rem 4rem 3rem 4rem;
                    }
                    .card-block-content-2-2 {
                        padding: 3rem 4rem 5rem 4rem;
                    }
                }
                
                @media (min-width: 992px) {
                    .grid-padding-content-2-2 {
                        padding: 1rem 6rem 3rem 6rem;
                    }
                    .card-block-content-2-2 {
                        padding: 3rem 6rem 5rem 6rem;
                    }
                    .column-content-2-2 {
                        padding-left: 2.25rem;
                        padding-right: 2.25rem;
                        padding-top: 0;
                        padding-bottom: 0;
                    }
                }
                
                @media (min-width: 1200px) {
                    .grid-padding-content-2-2 {
                        padding: 1rem 10rem 3rem 10rem;
                    }
                    .card-block-content-2-2 {
                        padding: 3rem 6rem 5rem 6rem;
                    }
                    .card-btn-space-content-2-2 {
                        margin-top: 15px;
                        margin-bottom: 15px;
                    }
                    .btn-card-content-2-2 {
                        width: 95%;
                        float: right;
                    }
                    .btn-outline-content-2-2 {
                        width: 95%;
                        float: right;
                    }
                }
                
                @media (max-width: 980px) {
                    .card-btn-space-content-2-2 {
                        width: 100%;
                    }
                }
            </style>
            <div style="font-family: 'Poppins', sans-serif;">

                <div class="text-center title-text-content-2-2">
                    <h1 class="text-title-content-2-2">3 Keys Benefit</h1>
                    <p class="text-caption-content-2-2" style="  margin-left: 3rem; margin-right: 3rem;">You can easily manage your wedding with us</p>
                </div>

                <div class="grid-padding-content-2-2 text-center">
                    <div class="row">
                        <div class="col-lg-4 column-content-2-2">
                            <div class="icon-content-2-2">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png" alt="">
                            </div>
                            <h3 class="icon-content-2-2-title">Easy to Operate</h3>
                            <p class="icon-content-2-2-caption">Interface from this website<br> can make you easy to <br> operate
                            </p>
                        </div>
                        <div class="col-lg-4 column-content-2-2">
                            <div class="icon-content-2-2">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png" alt="">
                            </div>
                            <h3 class="icon-content-2-2-title">Get report</h3>
                            <p class="icon-content-2-2-caption">This can help you to get<br> report from your transaction</p>
                        </div>
                        <div class="col-lg-4 column-content-2-2">
                            <div class="icon-content-2-2">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png" alt="">
                            </div>
                            <h3 class="icon-content-2-2-title">Consultation</h3>
                            <p class="icon-content-2-2-caption">This can help you to understand<br> for make wedding party</p>
                        </div>
                    </div>
                </div>

                <div class="card-block-content-2-2">
                    <div class="card-content-2-2">
                        <div class="d-flex flex-lg-row flex-column align-items-center">
                            <div class="me-lg-3">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png" alt="">
                            </div>
                            <div class="flex-grow-1 text-lg-start text-center card-text-content-2-2">
                                <h3 class="card-content-2-2-title">Fast Business Management in 30 minutes</h3>
                                <p class="d-none d-lg-block card-content-2-2-caption">Our tools for business analysis helps an organization understand<br> market or business development.</p>
                                <p class="d-block d-lg-none card-content-2-2-caption">Our tools for business analysis helps an organization understand market or business development.</p>
                            </div>
                            <div class="card-btn-space-content-2-2">
                                <button class="btn btn-card-content-2-2">Buy Now</button>
                                <button class="btn btn-outline-content-2-2">Demo Version</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Akhir keunggulan web -->

        <!-- Price -->
        <div class="price">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
                .btn:focus,
                .btn:active {
                    outline: none !important;
                }
                
                .main-content-3-7 {
                    padding: 5rem 2rem 7rem 2rem;
                }
                
                .title-text-content-3-7 {
                    font-size: 1.875rem;
                    line-height: 2.25rem;
                    letter-spacing: 0.05em;
                    font-weight: 800;
                    margin-bottom: 0.75rem;
                    color: #2E3A53;
                }
                
                .caption-text-content-3-7 {
                    font-size: 1rem;
                    line-height: 1.5rem;
                    letter-spacing: 0.025em;
                    color: #8E8FAD;
                    margin-bottom: 0;
                }
                
                .card-content-3-7 {
                    transition: 0.4s;
                    top: 0px;
                    left: 0px;
                    position: relative;
                    padding: 1rem 0 1rem 0;
                }
                
                .card-content-3-7:hover {
                    top: -3px;
                    left: -3px;
                    position: relative;
                    transition: 0.4s;
                }
                
                .card-outline-content-3-7 {
                    border: 1px solid #E5EBF9;
                    padding: 2rem 2.75rem 2rem 2.75rem;
                    background-color: #FFFFFF;
                    border-radius: 1rem;
                }
                
                .price-title-content-3-7 {
                    color: #141C2E;
                    font-size: 1.25rem;
                    line-height: 1.75rem;
                    letter-spacing: 0.025em;
                    font-weight: 500;
                    margin-bottom: 0.75rem;
                }
                
                .price-value-content-3-7 {
                    font-size: 2.25rem;
                    line-height: 2.5rem;
                    letter-spacing: 0.025em;
                    margin-bottom: 0.75rem;
                    font-weight: 500;
                    color: #2E3A53;
                }
                
                .price-duration-content-3-7 {
                    font-weight: 400;
                    font-size: 1rem;
                    line-height: 1.5rem;
                    margin: 0.625rem;
                    color: #9E9E9E;
                }
                
                .price-caption-content-3-7 {
                    font-weight: 400;
                    font-size: 1rem;
                    line-height: 1.5rem;
                    letter-spacing: 0.025em;
                    margin-bottom: 2.5rem;
                    color: #C3C3C8;
                }
                
                .price-list-content-3-7 .check-3-7 {
                    color: #2E3A53;
                    letter-spacing: 0.025em;
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                    margin-bottom: 1.75rem;
                }
                
                .price-list-content-3-7 .no-check-3-7 {
                    color: #E1E1E1;
                    letter-spacing: 0.025em;
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                    margin-bottom: 1.75rem;
                }
                
                .span-icon-3-7 {
                    width: 1rem;
                    height: 1rem;
                    margin-right: 0.75rem;
                }
                
                .btn-outline-content-3-7 {
                    border: 1px solid #2EC49C;
                    color: #2EC49C;
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    font-weight: 500;
                    letter-spacing: 0.025em;
                    border-radius: 0.5rem;
                }
                
                .btn-outline-content-3-7:hover {
                    background-color: #2EC49C;
                    color: #FFFFFF;
                }
                
                .btn-fill-content-3-7 {
                    background-image: linear-gradient(rgba(91, 203, 173, 1), rgba(39, 194, 153, 1));
                    color: #FFFFFF;
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    font-weight: 500;
                    letter-spacing: 0.025em;
                    border-radius: 0.5rem;
                }
                
                .btn-fill-content-3-7:hover {
                    color: #FFFFFF;
                    background-image: linear-gradient(#29B18D, #29B18D);
                }
                
                @media (min-width: 576px) {
                    .title-text-content-3-7 {
                        font-size: 2.25rem;
                        line-height: 2.5rem;
                    }
                    .card-content-3-7 {
                        padding: 1rem 1rem 1rem 1rem;
                    }
                }
                
                @media (min-width: 768px) {
                    .main-content-3-7 {
                        padding-left: 3.5rem;
                        padding-right: 3.5rem;
                    }
                }
                
                @media (min-width: 992px) {
                    .main-content-3-7 {
                        padding-left: 3.5rem;
                        padding-right: 3.5rem;
                    }
                    .caption-text-content-3-7 {
                        width: 66.666667%;
                    }
                    .card-content-3-7 {
                        width: 33.333333%;
                    }
                }
                
                @media (min-width: 1200px) {
                    .main-content-3-7 {
                        padding-left: 9rem;
                        padding-right: 9rem;
                    }
                }
            </style>
            <div class="main-content-3-7 overflow-hidden" style="font-family: 'Poppins', sans-serif;">
                <div class="container mx-auto">
                    <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem;">
                        <h2 class="title-text-content-3-7">Wedding Package</h2>
                        <p class="caption-text-content-3-7 mx-auto">Choose one of pricing that suitable for your wedding party
                        </p>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="mx-auto card-content-3-7">
                            <div class="card-outline-content-3-7 d-flex flex-column position-relative overflow-hidden h-100">
                                <h2 class="price-title-content-3-7">Startup</h2>
                                <h2 class="price-value-content-3-7 d-flex align-items-center">
                                    <span>$29</span>
                                    <span class="price-duration-content-3-7">/Month</span>
                                </h2>
                                <p class="price-caption-content-3-7">Suitable for those of you<br> who are beginners</p>
                                <div class="price-list-content-3-7">
                                    <p class="d-flex align-items-center check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                    alt="">
                                            </span>Chat Support
                                    </p>
                                    <p class="d-flex align-items-center check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                    alt="">
                                            </span>Optimize Projects
                                    </p>
                                    <p class="d-flex align-items-center no-check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                                                    alt="">
                                            </span>300+ Unique Project
                                    </p>
                                    <p class="d-flex align-items-center no-check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                                                    alt="">
                                            </span>Own Analytics Platform
                                    </p>
                                    <p class="d-flex align-items-center no-check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                                                    alt="">
                                            </span>Unlimited User
                                    </p>
                                </div>
                                <button class="btn btn-outline-content-3-7 d-flex justify-content-center align-items-center w-100">Choose
                                        Plan</button>
                            </div>
                        </div>
                        <div class="mx-auto card-content-3-7">
                            <div class="card-outline-content-3-7 d-flex flex-column position-relative overflow-hidden h-100">
                                <h2 class="price-title-content-3-7">Steady</h2>
                                <h2 class="price-value-content-3-7 d-flex align-items-center">
                                    <span>$49</span>
                                    <span class="price-duration-content-3-7">/Month</span>
                                </h2>
                                <p class="price-caption-content-3-7">Suitable for those of you<br> who want to grow</p>
                                <div class="price-list-content-3-7">
                                    <p class="d-flex align-items-center check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                    alt="">
                                            </span>Chat Support
                                    </p>
                                    <p class="d-flex align-items-center check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                    alt="">
                                            </span>Optimize Projects
                                    </p>
                                    <p class="d-flex align-items-center check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                    alt="">
                                            </span>300+ Unique Project
                                    </p>
                                    <p class="d-flex align-items-center no-check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                                                    alt="">
                                            </span>Own Analytics Platform
                                    </p>
                                    <p class="d-flex align-items-center no-check-3-7">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                                                    alt="">
                                            </span>Unlimited User
                                    </p>
                                </div>
                                <button class="btn btn-outline-content-3-7 d-flex justify-content-center align-items-center w-100">Choose
                                        Plan</button>
                            </div>
                        </div>
                        <div class="mx-auto card-content-3-7">
                            <div class="card-outline-content-3-7 d-flex flex-column position-relative overflow-hidden h-100" style="        background-color: #2E3A53;
            ">
                                <h2 class="price-title-content-3-7" style="color: #FFFFFF;">Enterprise</h2>
                                <h2 class="price-value-content-3-7 d-flex align-items-center" style="color: #FFFFFF;">
                                    <span>$99</span>
                                    <span class="price-duration-content-3-7" style="color: #8997B5;">/Month</span>
                                </h2>
                                <p class="price-caption-content-3-7" style="color: #7987A6;">Suitable to make your
                                    <br> company grow rapidly</p>
                                <div class="price-list-content-3-7">
                                    <p class="d-flex align-items-center check-3-7" style="color: #FFFFFF;">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                    alt="">
                                            </span>Chat Support
                                    </p>
                                    <p class="d-flex align-items-center check-3-7" style="color: #FFFFFF;">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                    alt="">
                                            </span>Optimize Projects
                                    </p>
                                    <p class="d-flex align-items-center check-3-7" style="color: #FFFFFF;">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                    alt="">
                                            </span>300+ Unique Project
                                    </p>
                                    <p class="d-flex align-items-center check-3-7" style="color: #FFFFFF;">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                    alt="">
                                            </span>Own Analytics Platform
                                    </p>
                                    <p class="d-flex align-items-center check-3-7" style="color: #FFFFFF;">
                                        <span class="span-icon-3-7 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid"
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                    alt="">
                                            </span>Unlimited User
                                    </p>
                                </div>
                                <button class="btn btn-fill-content-3-7 d-flex justify-content-center align-items-center w-100">Choose
                                        Plan</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer  -->
        <div class="footer">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
                .list-space-footer-2-2 {
                    margin-bottom: 1.25rem;
                }
                
                .list-space-footer-2-2-title {
                    margin-bottom: 1.5rem;
                }
                
                .footer-text-title-footer-2-2 {
                    font-size: 1.5rem;
                    font-weight: 600;
                    color: #000000;
                }
                
                .list-menu-footer-2-2 {
                    color: #c7c7c7;
                    text-decoration: none !important;
                    cursor: pointer;
                }
                
                .list-menu-footer-2-2:hover {
                    color: #555252;
                }
                
                hr.hr-footer-2-2 {
                    margin: 0;
                    border: 0;
                    border-top: 1px solid rgba(0, 0, 0, 0.1);
                }
                
                .border-color-footer-2-2 {
                    color: #c7c7c7;
                }
                
                .footer-link-footer-2-2 {
                    margin-right: 1.25rem;
                    color: #c7c7c7;
                }
                
                .footer-link-footer-2-2:hover {
                    color: #555252;
                    cursor: pointer;
                }
                
                .social-media-c-footer-2-2:hover circle,
                .social-media-p-footer-2-2:hover path {
                    fill: #555252;
                    cursor: pointer;
                }
                
                .footer-info-space-footer-2-2 {
                    padding-top: 3rem;
                }
                
                .social-media-left-footer-2-2 {
                    margin-right: 1.25rem;
                }
                
                .social-media-center-1-footer-2-2 {
                    margin-right: 1.25rem;
                }
                
                .social-media-center-2-footer-2-2 {
                    margin-right: 1.25rem;
                }
                
                .list-footer-footer-2-2 {
                    padding: 5rem 1rem 6rem 1rem;
                }
                
                .info-footer-footer-2-2 {
                    padding-left: 1rem;
                    padding-right: 1rem;
                    padding-bottom: 3rem;
                }
                
                @media (max-width: 980px) {
                    .footer-responsive-space-footer-2-2 {
                        margin-bottom: 1.25rem;
                        margin-top: 1.25rem;
                    }
                }
                
                @media (min-width: 576px) {
                    .list-footer-footer-2-2 {
                        padding: 5rem 2rem 6rem 2rem;
                    }
                    .info-footer-footer-2-2 {
                        padding-left: 2rem;
                        padding-right: 2rem;
                        padding-bottom: 3rem;
                    }
                }
                
                @media (min-width: 768px) {
                    .list-footer-footer-2-2 {
                        padding: 5rem 4rem 6rem 4rem;
                    }
                    .info-footer-footer-2-2 {
                        padding-left: 4rem;
                        padding-right: 4rem;
                        padding-bottom: 3rem;
                    }
                }
                
                @media (min-width: 992px) {
                    .list-footer-footer-2-2 {
                        padding: 5rem 6rem 6rem 6rem;
                    }
                    .info-footer-footer-2-2 {
                        padding-left: 6rem;
                        padding-right: 6rem;
                        padding-bottom: 3rem;
                    }
                }
            </style>
            <br><br><br><br>
            <div style="font-family: 'Poppins', sans-serif;">
                <div class="list-footer-footer-2-2 bg-light">
                    <div class="row">
                    <div class="col-lg-3 col-md-6">
                            <div class="">
                                <div class="list-space-footer-2-2">
                                    <img src="img/logo1.png" alt="">
                                </div>
                                <!-- <nav style="list-style-type:none;">
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Home</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">FAQ</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Tutorial</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Blog</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Loker</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Consultation</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Testimoni</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Services</a>
                                    </li>
                                </nav> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="">
                                <div class="list-space-footer-2-2">
                                    <!-- <img src="img/logo1.png" alt=""> -->
                                </div>
                                <nav style="list-style-type:none;">
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Home</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">FAQ</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Tutorial</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Blog</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Loker</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Consultation</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Testimoni</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Services</a>
                                    </li>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h2 class="footer-text-title-footer-2-2 list-space-footer-2-2-title">Product</h2>
                            <nav style="list-style-type:none;">
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Venue</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Cathering</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Wardrobe</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Photographer Tool</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Music</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Wedding Car</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">PhotoBooth</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Honeymoon</a>
                                </li>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="border-color-footer-2-2 info-footer-footer-2-2 bg-light">
                    <div class="">
                        <hr class="hr-footer-2-2">
                    </div>
                    <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space-footer-2-2">
                        <div class="d-flex title-font font-medium align-items-center" style="cursor: pointer;">
                            <svg class="social-media-c-footer-2-2 social-media-left-footer-2-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            <svg class="social-media-c-footer-2-2 social-media-center-1-footer-2-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            <svg class="social-media-p-footer-2-2 social-media-center-2-footer-2-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                                        fill="#C7C7C7" />
                                    <path
                                        d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                                        fill="#C7C7C7" />
                                    <path
                                        d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z"
                                        fill="#C7C7C7" />
                                </svg>
                            <svg class="social-media-c-footer-2-2 social-media-right" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727V20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147V21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194V15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133V9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533V9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733V14.5733Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                        </div>
                        <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center footer-responsive-space-footer-2-2">
                            <a class="footer-link-footer-2-2" style="text-decoration: none;">Terms of Service</a>
                            <span style="margin-right:1.25rem">|</span>
                            <a class="footer-link-footer-2-2" style="text-decoration: none;">Privacy Policy</a>
                            <span style="margin-right:1.25rem">|</span>
                            <a class="footer-link-footer-2-2" style="text-decoration: none;">Licenses</a>
                        </nav>
                        <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                            <p style="margin: 0">Copyright © 2021 Analystic Max</p>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>