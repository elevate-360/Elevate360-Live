<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elevate360 - Software Development Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0">Elevate360</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i><?php echo e($contactDetails["city"] . ", " . $contactDetails["state"] . ", " . strtoupper($contactDetails["countryShort"])); ?></small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i><?php echo e($contactDetails["emailAddress"]); ?></small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i><?php echo e("+91 " . substr_replace($contactDetails["contactNumber"], ' ', 5, 0)); ?></small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle me-2" href="<?php echo e($links["Twitter"]["lAddress"]); ?>" target="_blank" rel="noopener"><i class="<?php echo e($links["Twitter"]["lClass"]); ?>"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle me-2" href="<?php echo e($links["Youtube"]["lAddress"]); ?>" target="_blank" rel="noopener"><i class="<?php echo e($links["Youtube"]["lClass"]); ?>"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle me-2" href="<?php echo e($links["Linkedin"]["lAddress"]); ?>" target="_blank" rel="noopener"><i class="<?php echo e($links["Linkedin"]["lClass"]); ?> "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="/" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">Elevate360</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link <?php echo $__env->yieldContent('home'); ?>">Home</a>
                        <a href="/about" class="nav-item nav-link <?php echo $__env->yieldContent('about'); ?>">About</a>
                        <a href="/service" class="nav-item nav-link <?php echo $__env->yieldContent('services'); ?>">Services</a>
                        <a href="/projects" class="nav-item nav-link <?php echo $__env->yieldContent('projects'); ?>">Projects</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="/feature" class="dropdown-item">Features</a>
                                <a href="/team" class="dropdown-item">Our Team</a>
                                <a href="/testimonial" class="dropdown-item">Testimonial</a>
                                <a href="/quote" class="dropdown-item">Quotation</a>
                                <a href="/404" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="/contact" class="nav-item nav-link <?php echo $__env->yieldContent('contact'); ?>">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-3">Get A Quote</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Content Start -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Page Content End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <a style="color: #B0B9AE;" target="_blank" rel="noopener" href="http://www.google.com/maps/search/?api=1&query=21.219394,%2072.772287"><p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo e($contactDetails["city"] . ", " . $contactDetails["state"] . ", " . $contactDetails["country"]); ?></p></a>
                    <a style="color: #B0B9AE;" href="tel:+91<?php echo e($contactDetails["contactNumber"]); ?>"><p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo e("+91 " . substr_replace($contactDetails["contactNumber"], ' ', 5, 0)); ?></p></a>
                    <a style="color: #B0B9AE;" target="_blank" rel="noopener" href="https://mail.google.com/mail/u/0/?fs=1&to=<?php echo e($contactDetails["emailAddress"]); ?>&tf=cm"><p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo e($contactDetails["emailAddress"]); ?></p></a>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href="<?php echo e($links["Twitter"]["lAddress"]); ?>" target="_blank" rel="noopener"><i
                                class="<?php echo e($links["Twitter"]["lClass"]); ?>"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="<?php echo e($links["Facebook"]["lAddress"]); ?>" target="_blank" rel="noopener"><i
                                class="<?php echo e($links["Facebook"]["lClass"]); ?> "></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="<?php echo e($links["Youtube"]["lAddress"]); ?>" target="_blank" rel="noopener"><i
                                class="<?php echo e($links["Youtube"]["lClass"]); ?>"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="<?php echo e($links["Linkedin"]["lAddress"]); ?>" target="_blank" rel="noopener"><i
                                class="<?php echo e($links["Linkedin"]["lClass"]); ?> "></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="/">Elevate360</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="fw-medium text-light" href="https://dj-jay.in" target="_blank">Jay
                        Chauhan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php /**PATH /home/sf-dev/Desktop/Jay/New Projects/Elevate360-Live/resources/views/master.blade.php ENDPATH**/ ?>