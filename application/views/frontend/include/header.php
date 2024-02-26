<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>FXCareers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->
    <link href="<?=base_url()?>public/assets/img/favicon.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap Stylesheet -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
    <link href="<?=base_url()?>public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" /> -->
    <link href="<?=base_url()?>public/assets/css/fontawesome/css/all.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/lib/fancybox/fancybox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>public/assets/css/style.css?v=<?= time(); ?>" rel="stylesheet" />
</head>

<body>
    <header class="header">
        <!-- Topbar Start -->
        <div class="container-fluid bg-secondary">
            <div class="row py-2 px-lg-5">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex flex-wrap align-items-center text-white con-d">
                        <a href="tel:18001203180" class="text-white">
                            <small><i class="fa fa-phone-alt fa-rotate-90 mr-2"></i>1800-120-3180</small>
                        </a>
                        <small class="px-2 d-xs-none">|</small>
                        <a href="mailto:info@fxcareers.com" class="text-white">
                            <small><i class="fa fa-envelope mr-2"></i>info@fxcareers.com</small>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-2" href="https://www.facebook.com/Officialfxcareers/" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-2" href="https://twitter.com/i/flow/login?redirect_after_login=%2FFxcareers11" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a class="text-white px-2" href="https://www.linkedin.com/company/fxcareers/" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-2" href="https://www.instagram.com/official_fxcareers/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-2" href="https://www.youtube.com/@officialfxcareers" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light py-0 px-lg-5">
                <a href="<?=base_url()?>" class="navbar-brand">
                    <img src="<?=base_url()?>public/assets/img/logo-light.png" alt="FXCareers Logo" title="FXCareers Logo" class="img-fluid" />
                </a>
                <button class="mobile-menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span class="toggler-icon fa-2x fa-solid fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-lg-3">
                    <div class="navbar-nav mx-auto  py-lg-0">
                        <a href="<?=base_url()?>" class="nav-item nav-link">Home</a>
                        <div class="nav-item dropdown">
                            <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us <i class="fas fa-chevron-down"></i></a>
                            <div class="dropdown-menu drop-after m-0">
                                <a href="<?=base_url()?>about" class="dropdown-item">Company Profile</a>
                                <a href="./gallery.php" class="dropdown-item">Gallery</a>
                                <a href="./team.php" class="dropdown-item">Our Team</a>
                                <a href="./testimonial.php" class="dropdown-item">Testimonials</a>
                            </div>
                        </div>
                        <a href="franchise.php" class="nav-item nav-link">Franchise</a>
                        <div class="nav-item dropdown">
                            <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown">Programs <i class="fas fa-chevron-down"></i></a>
                            <div class="dropdown-menu drop-after  m-0">
                                <a href="./offline-program.php" class="dropdown-item">Offline Programs</a>
                                <a href="./online-program.php" class="dropdown-item">Online Programs</a>
                                <a href="./recorded-videos.php" class="dropdown-item">Recorded Videos</a>
                            </div>
                        </div>
                        <a href="./ebook.php" class="nav-item nav-link">E-Book</a>
                        <a href="./analysis.php" class="nav-item nav-link">Analysis</a>
                        <a href="./blog.php" class="nav-item nav-link">Blog</a>
                        <a href="./contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="https://www.fxcareers.com/admin/auth/login" target="_blank" class="theme-btn  d-none d-lg-block">Join Us <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </nav>
        </div>
        <!-- mobile menu -->
        <!-- <div class="offcanvas offcanvas-end mobile-menu" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="mobile-menu-wrap">
                    <ul class="mobile-menu-list">
                        <li><a href="./" class="menu-link">Home</a></li>
                        <li>
                            <a role="button" class="menu-link moblie-dropdwon">About Us <i class="fas fa-chevron-down"></i></a>
                            <div class="dropdown-mb-menu">
                                <ul>
                                    <li><a href="./about.php">Company</a></li>
                                    <li><a href="./gallery.php">Gallery</a></li>
                                    <li><a href="./team.php">Our Team</li>
                                    <li><a href="./testimonial.php">Testimonials</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="./franchise.php" class="menu-link">Franchise</a></li>
                        <li><a role="button" class="menu-link moblie-dropdwon">Programs <i class="fas fa-chevron-down"></i></a>
                            <div class="dropdown-mb-menu">
                                <ul>
                                    <li><a href="./offline-program.php">Offline Programs</a></li>
                                    <li><a href="./online-program.php">Online Programs</a></li>
                                    <li><a href="./recorded-videos.php">Recorded Videos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="./ebook.php" class="menu-link">E-books</a></li>
                        <li><a href="./analysis.php" class="menu-link">Analysis</a></li>
                        <li><a href="./blog.php" class="menu-link">Blog</a></li>
                        <li><a href="./contact.php" class="menu-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- Navbar End -->
    </header>