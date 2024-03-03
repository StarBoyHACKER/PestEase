<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PestEase - Pest Control Services by Urban Junggle</title>
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
                  <input type="search" class="form-control border-0 rounded-pill" name="search-input" value=""
                    placeholder="Search Here" required="" style="font-size: 20px; margin-top: 20px;" />
                  <button type="submit" value="Search Now!" class="btn "><i class="fa fa-search text-dark"
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
  <div class="container-fluid ">
    <div class="container">
      <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
        <a href="index.html" class="navbar-brand">
          <img src="logo.png" height="100px" width="80%">
        </a>
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse">
          <span class="fa fa-bars text-dark"></span>
        </button>
        <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
          <div class="navbar-nav ms-auto">
            <a href="index.html" class="nav-item nav-link"><b>Home</b></a>
            <a href="about.html" class="nav-item nav-link"><b>About</b></a>
            <a href="service.html" class="nav-item nav-link"><b>Services</b></a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Checkout Form -->
  <div class="cout-row">
    <div class="col-75">
      <div class="cout-container">
        <form action="/action_page.php">

          <div class="cout-row">
            <div class="col-50"><br>
              <h2>Billing Address</h2>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="head" id="fname" name="firstname" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="head" id="email" name="email" placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card"></i> Address</label>
              <input type="head" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="city"><i class="fa-solid fa-city"></i> City</label>
              <input type="head" id="city" name="city" placeholder="New York">

              <div class="cout-row">
                <div class="col-50">
                  <label for="state"><i class="fa-solid fa-mountain-city"></i> State</label>
                  <input type="head" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                  <label for="zip"><i class="fa-solid fa-location-dot"></i> Zip</label>
                  <input type="head" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>

            <div class="col-50"><br>
              <h2>Payment</h2>
              <label for="fname"><i class="fa-regular fa-credit-card"></i> Accepted Cards</label>
              <div class="icon-container">
                <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
                <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
                <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
                <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
              </div>
              <div>
                <label for="cname"><i class="fa-regular fa-id-card"></i> Name on Card</label>
                <input type="head" id="cname" name="cardname" placeholder="John More Doe">
                <label for="ccnum"><i class="fa-solid fa-credit-card"></i> Credit card number</label>
                <input type="head" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <label for="expmonth"><i class="fa-solid fa-calendar-days"></i> Exp Month</label>
                <input type="head" id="expmonth" name="expmonth" placeholder="September">
              </div>
              <div class="cout-row">
                <div class="col-50">
                  <label for="expyear"> Exp Year</label>
                  <input type="head" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv"> CVV</label>
                  <input type="head" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <div style="display: flex; align-items: center;">
            <input type="checkbox" id="sameadr" checked="checked" name="sameadr">
            <label for="sameadr" style="margin-bottom: 0px; margin-left: 10px; white-space: nowrap;">Shipping address
              same as billing</label>
          </div>
          <input type="submit" value="Continue to checkout"
            class="px-2 py-2 btn btn-outline-success border-2  slideInDown">

        </form>
      </div>
    </div>

    <div class="col-25">
      <div class="cout-container" style="background-color: #fff; padding: 10px 20px 50px 30px;"><br>
        <h4 style="font-size: 35px;">Cart
          <span class="price" style="color:black; font-size: 25px;">
            <i class="fa fa-shopping-cart"></i>
            <b id="cartItemCount">0</b> <!-- Initial value, will be updated dynamically -->
          </span>
        </h4>
        <div id="cartItems">
          <!-- Cart items will be dynamically added here -->
        </div>
        <hr>
        <p style="font-size: 25px;">Total <span id="total" class="price" style="color:black"><b></b></span></p>
      </div>
    </div>
  </div>
  <!-- Checkout form end -->


  <!-- Footer Start -->
  <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay=".3s">
    <div class="container py-5">
      <div class="row g-4 footer-inner">
        <div class="col-lg-3 col-md-6">
          <div class="footer-item">
            <h4 class="text-white fw-bold mb-4">About PestEase.</h4>
            <p>Nostrud exertation ullamco labor nisi aliquip ex ea commodo consequat duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore.</p>
            <p class="mb-0"><a class="" href="#">Urban Junggle Pvt Ltd. </a> &copy; 2023 All Right Reserved.</p>
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
    document.addEventListener("DOMContentLoaded", function () {
      const params = new URLSearchParams(window.location.search);
      const service = params.get('service');
      const sprice = parseFloat(params.get('sprice'));
      const plan = params.get('plan');
      const price = parseFloat(params.get('price'));

      // Update cart items with service, plan, and price
      document.getElementById('cartItems').innerHTML = "<p style='font-size: 25px;'>" + service + ":<span style='float: right;font-size: 25px;'>Rs." + sprice + "</span></p><p style='font-size: 25px;'>" + plan + ":<span style='float: right;font-size: 25px;'> Rs." + price + "/sq.ft</span></p>";

      // Update cart item count
      const cartItemsCount = document.getElementById('cartItems').getElementsByTagName('p').length;
      document.getElementById('cartItemCount').innerText = cartItemsCount.toString();

      // Calculate total price
      const total = sprice + price; // Assuming total price is the sum of sprice and price
      document.getElementById('total').innerHTML = "<p style='font-size: 25px;'>Total: Rs." + total.toFixed(2) + "</p>"; // Display total price
    });
  </script>


</body>

</html>