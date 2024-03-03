<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PestKit - Pest Control Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar-top bg-primary">
        <div class="container">
            <div class="d-flex justify-content-between topbar py-2">
                <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                    <a class="me-4 text-secondary" style="font-size: 20px;">Call us Now: <i
                            class="fas fa-phone-alt me-2 text-dark"></i>1800 123 407407</a>
                    <a class="mail" class="text-secondary" style="font-size: 20px;"><i
                            class="fas fa-envelope me-2 text-dark"></i>sales@urbanjunggle.com</a>
                </div>
                <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                    <div class="search-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <div class="d-flex">
                                    <input type="search" class="form-control border-0 rounded-pill" name="search-input"
                                        value="" placeholder="Search Here" required=""
                                        style="font-size: 20px; margin-top: 20px;" />
                                    <button type="submit" value="Search Now!" class="btn "><i
                                            class="fa fa-search text-dark"
                                            style="font-size: 23px; margin-top: 12px;"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center topbar-icon">
                    <a href="https://www.facebook.com/UrbanJungglePvt.Ltd/" class="me-2" style="font-size: 27px;">
                        <i class="fa-brands fa-facebook">
                        </i>
                    </a>

                    <a href="https://twitter.com/UrbanJunggle" class="me-2" style="font-size: 27px;">
                        <i class="fa-brands fa-twitter">
                        </i>
                    </a>

                    <a href="https://www.linkedin.com/company/urban-junngle" class="me-2" style="font-size: 27px;">
                        <i class="fa-brands fa-linkedin-in">
                        </i>
                    </a>
                    <a href="https://www.instagram.com/urbanjunggle1/" class="me-2" style="font-size: 27px;">
                        <i class="fa-brands fa-instagram">
                        </i>
                    </a>
                    <a href="https://www.youtube.com/channel/UC7O_MaPaou1W9_nJ1Huxe5g?view_as=subscriber" class="me-2"
                        style="font-size: 27px;">
                        <i class="fa-brands fa-youtube">
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <!-- Navbar Start -->
<!-- Navbar Start -->

<?php include "header.php" ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
            <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">projects</li>
                    </ol>
                </nav> -->
        </div>
    </div>
    <!-- Page Header End -->
<?php
        $sql = "SELECT name FROM services";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows in the result
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='col-5 wow fadeInUp' data-wow-delay='.5s' style='width: 985.17em; height: 30em;'>";

        // Display service name
        echo "<h2>" . $row["name"] . "</h2>";

        // Display book now button
        echo "<button class='px-2 py-2 btn btn-outline-success border-2 animated slideInDown' onclick='redirectToPrice(\"" . $row["name"] . "\", 1500)'><b>Book Now!</b></button>";
        echo "</div>";
    }
} else {
    echo "No services found.";
}
?>

    <!-- Services Start -->
    <?php
        $sql = "SELECT name FROM services";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows in the result
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='col-5 wow fadeInUp' data-wow-delay='.5s' style='width: 985.17em; height: 30em;'>";

        // Display service name
        echo "<h2>" . $row["name"] . "</h2>";

        // Display book now button
        echo "<button class='px-2 py-2 btn btn-outline-success border-2 animated slideInDown' onclick='redirectToPrice(\"" . $row["name"] . "\", 1500)'><b>Book Now!</b></button>";

        echo "</div>";
    }
} else {
    echo "No services found.";
}
    ?>
    <!-- Services End -->


    <!-- Testiminial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                    Testimonial</h5>
                <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Exceptional service! Swiftly and effectively resolved our pest issue.
                            Professional team, thorough work, and outstanding results.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Rajesh Kumar</h4>
                            <p class="mb-1">Healthcare professional</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Highly impressed with PestEase's expertise. They not only eliminated pests
                            but also educated us on prevention. A top-notch pest control service!</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Arjun Singh</h4>
                            <p class="mb-1">IT consultant</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Five-star service from Urban Junggle. Their prompt response, attention to
                            detail, and friendly staff made the entire pest control process stress-free. Excellent job!
                        </p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Ananya Rao</h4>
                            <p class="mb-1">School teacher</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Impressive results and exceptional customer service from Urban Junggle.
                            Their commitment to quality and thorough pest management sets them apart. Thank you for a
                            job well done!</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Anita Bansal</h4>
                            <p class="mb-1">business owner</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testiminial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay=".3s">
        <div class="container py-5">
            <div class="row g-4 footer-inner">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">About PestEase.</h4>
                        <p>Nostrud exertation ullamco labor nisi aliquip ex ea commodo consequat duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore.</p>
                        <p class="mb-0"><a class="" href="#">Urban Junggle Pvt Ltd. </a> &copy; 2023 All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Usefull Links</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>About Us</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Contact Us</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Our Services</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Terms & Condition</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Services Link</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Apartment Cleaning</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Office Cleaning</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Car Washing</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Green Cleaning</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Contact Us</h4>
                        <!-- <a href="" class="btn btn-link w-100 text-start ps-0 pb-3 border-bottom rounded-0"><i class="fa fa-map-marker-alt me-3"></i>123 Street, CA, USA</a> -->
                        <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i
                                class="fa fa-phone-alt me-3"></i>1800 123 407407</a>
                        <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i
                                class="fa fa-envelope me-3"></i>sales@urbanjunggle.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <a href="index.html" class="text-primary mb-0 display-6">
                        <img src="logo.png" height="100px" width="60%">
                    </a>
                </div>
                <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                    <a class="btn btn-outline-success rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-success rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-success rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-success rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-md-4 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-success rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function redirectToPrice(service, sprice) {
            window.location.href = 'price.html?service=' + encodeURIComponent(service) + '&sprice=' + encodeURIComponent(sprice);
        }
    </script>
</body>
<script>
    function redirectToPrice(serviceName, price) {
        // Redirect to price.php with service name and price as query parameters
        window.location.href = 'price.php?service=' + encodeURIComponent(serviceName) + '&price=' + encodeURIComponent(price);
    }
</script>

</html>