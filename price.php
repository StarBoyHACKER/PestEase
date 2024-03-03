<?php 
session_start();

include "./db/conn.php";
// Fetch pricing plans from the database
$query = "SELECT * FROM plan";
$result = mysqli_query($conn, $query);

// Check if query executed successfully
if ($result) {
    // Fetch plans and display them dynamically
    $plans = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "Error: " . mysqli_error($conn);
}
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar-top bg-primary">
            <div class="container">
                <div class="d-flex justify-content-between topbar py-2">
                    <div class="d-flex align-items-center flex-shrink-0 topbar-info" >
                        <a class="me-4 text-secondary" style="font-size: 20px;">Call us Now: <i class="fas fa-phone-alt me-2 text-dark"></i>1800 123 407407</a>
                        <a class="mail"class="text-secondary" style="font-size: 20px;"><i class="fas fa-envelope me-2 text-dark"></i>sales@urbanjunggle.com</a>
                    </div>
                    <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                        <div class="search-form">
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <input type="search" class="form-control border-0 rounded-pill" name="search-input" value="" placeholder="Search Here" required="" style="font-size: 20px; margin-top: 20px;"/>
                                        <button type="submit" value="Search Now!" class="btn "><i class="fa fa-search text-dark" style="font-size: 23px; margin-top: 12px;"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center topbar-icon" >
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
                            <a href="https://www.youtube.com/channel/UC7O_MaPaou1W9_nJ1Huxe5g?view_as=subscriber" class="me-2" style="font-size: 27px;">
                              <i class="fa-brands fa-youtube">
                              </i>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <?php include "header.php" ?>

        <!-- Navbar Start -->
        <!-- Navbar End -->
        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Pricing Plan</h1>
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">Pricing Plan</li>
                    </ol>
                </nav> -->
            </div>
        </div>
        <!-- Page Header End -->


        <!-- pricing Start -->
        <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
            <?php foreach ($plans as $plan) : ?>
    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
        <div class="rounded bg-light border pricing-item" style="border-width: 3px !important;">
            <div class="bg-primary py-3 px-5 text-center rounded-top border-bottom border-dark">
                <h2 class="m-0"><?php echo $plan['name']; ?></h2>
            </div>
            <div class="px-4 py-5 text-center bg-primary pricing-label mb-2">
                <h1 class="mb-0"><?php echo $plan['price']; ?><span class="text-secondary fs-5 fw-normal">/sq.ft</span></h1>
                <p class="mb-0"><?php echo $plan['description']; ?></p>
            </div>
            <div class="p-4 text-center fs-5">
                <!-- Input box for square feet -->
                <div class="input-group mb-3">
                    <input type="number" id="sqFeetInput<?php echo $plan['id']; ?>" class="form-control" placeholder="Square Feet" aria-label="Square Feet" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">sq.ft</span>
                </div>
                <!-- "Get Started" button -->
                <button onclick="redirectToCheckout(<?php echo $plan['id']; ?>)" type="button" class="btn btn-outline-success border rounded-pill px-4 py-3 mt-3"><b>Get Started</b></button>
            </div>
        </div>
    </div>
<?php endforeach; ?>

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
            function redirectToCheckout(planId) {
        // Fetch square feet input value
        var sqFeetInput = document.getElementById('sqFeetInput')?.value;
                console.log("Function called")
        // Redirect to checkout page with plan ID and square feet input value as parameters
        window.location.href = 'checkout.php?plan_id=' + planId + '&sq_feet=' + sqFeetInput;
    }
        </script>
    </body>

</html>