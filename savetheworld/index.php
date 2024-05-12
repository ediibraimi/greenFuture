<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GreenFuture</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Style the form container */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Style the form headings */
        form h3 {
            font-size: 18px;
            text-align: center;

        }

        /* Style the form inputs */
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="option"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style the form button */
        button[name="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #4caf50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        /* Style the form button on hover */
        button[name="submit"]:hover {
            background-color: #45a049;
        }

        /* Optional: Responsive design for smaller screens */
        @media (max-width: 600px) {
            form {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <?php include_once('header.php'); ?>

            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-6 pt-5 text-center text-lg-start">
                            <h1 class="display-4 text-white mb-4 animated slideInLeft">Donate</h1>
                            <p class="text-white animated slideInLeft">Donate so we can make the world a better place.</p>
                            <h1 class="text-white mb-4 animated slideInLeft">

                            </h1>
                            <button class="btn btn-secondary py-sm-3 px-sm-5 me-3 animated slideInLeft" data-toggle="modal" data-target="#myModal">Donate!</button>
                        </div>
                        <div class="modal fade vertical-middle" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Donate</h4>
                                        <i class="fa-solid fa-close" type="button" class="close" data-dismiss="modal"></i>
                                    </div>
                                    <div class="modal-body">
                                        <form action="DonatorLogic.php" method="POST">

                                            <input type="text" placeholder="Name" name="DonatorName" required />
                                            <input type="email" placeholder="Email" name="DonatorEmail" required />
                                            <input type="number" placeholder="Credit Card" name="DonatorCreditCard" required />
                                            <input type="number" placeholder="Phone Number" name="DonatorPhoneNum" required />
                                            <input type="number" placeholder="Price" name="DonatorPrice" required />
                                            <select name="DonatorOption" id="DonatorOption" required>
                                                <option value="">Choose</option>
                                                <option value="Nature">Nature</option>
                                                <option value="Ocean">Ocean</option>
                                                <option value="Polution">Polution</option>
                                            </select>



                                            <button name="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="tree1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mt-3">Edi Ibraimi is a  passionant activist of nature right. He fights against people who damage the nature.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Edi Ibraimi</h6>
                                <small>Activist</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mt-3">Albin Salihi is a activist of ocean protection and the thing that stay in the water.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/team-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Albin Salihi</h6>
                                <small>Activist</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mt-3">Gerti Rexhepi is a activist for global warming. He protects the nature so much.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Gerti Rexhepi</h6>
                                <small>Activist</small>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Team Members</h1>
                    <p class="mb-1">
                        We are a group of activists  who care about protecting the nature. We are three activists from North Macedonia in Tetovo</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-1.jpg" alt="">
                                <h5 class="fw-bold mb-1">Albin Salihi</h5>
                                <small>Activist</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-2.jpg" alt="">
                                <h5 class="fw-bold mb-1">Edi Ibraimi</h5>
                                <small>Activist</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-3.jpg" alt="">
                                <h5 class="fw-bold mb-1">Gerti Rexhepi</h5>
                                <small>Activist</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row gy-5 gx-4 pt-5">
                <div class="col-12">
                    <h5 class="fw-bold text-white mb-4">Subscribe Our Newsletter</h5>
                    <div class="position-relative" style="max-width: 400px;">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="row gy-5 g-4">
                        <div class="col-md-6">
                            <h5 class="fw-bold text-white mb-4">About Us</h5>
                            <a class="btn btn-link" href="">About Us</a>
                            <a class="btn btn-link" href="">Contact Us</a>
                            <a class="btn btn-link" href="">Privacy Policy</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Support</a>
                        </div>
                        <div class="col-md-6">
                            <h5 class="fw-bold text-white mb-4">Our Services</h5>
                            <a class="btn btn-link" href="">Domain Register</a>
                            <a class="btn btn-link" href="">Shared Hosting</a>
                            <a class="btn btn-link" href="">VPS Hosting</a>
                            <a class="btn btn-link" href="">Dedicated Hosting</a>
                            <a class="btn btn-link" href="">Reseller Hosting</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-bold text-white mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-lg-n5">
                    <div class="bg-light rounded" style="padding: 30px;">
                        <input type="text" class="form-control border-0 py-2 mb-2" placeholder="Name">
                        <input type="email" class="form-control border-0 py-2 mb-2" placeholder="Email">
                        <textarea class="form-control border-0 mb-2" rows="2" placeholder="Message"></textarea>
                        <button class="btn btn-primary w-100 py-2">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-lg-5">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>