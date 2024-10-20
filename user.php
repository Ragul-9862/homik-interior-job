<?php
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "homik"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prevent SQL injection
    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);

    // Hash the password
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (user_name, password) VALUES ('$user','$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Store username in session
        $_SESSION['username'] = $user;

        // Redirect to Amazon India after successful sign-up or login
        header("Location: https://www.amazon.in");
        exit(); // Ensure no further code is executed after redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>Homik - Interior Job Factory</title>
    <link rel="shortcut icon" href="./images/favicon.ico" />
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/lightgallery.css" />
    <link rel="stylesheet" href="css/woocommerce.css" />
    <link rel="stylesheet" href="css/royal-preload.css" />

    <link rel="stylesheet" href="css/style.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="plugins/revolution/revolution/css/settings.css"
    />
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link
      rel="stylesheet"
      type="text/css"
      href="plugins/revolution/revolution/css/navigation.css"
    />
  </head>

  <body>
    <!-- <div id="royal_preloader"></div> -->
      <header id="site-header" class="site-header header-static">
        <!-- Main Header start -->
        <div class="header-topbar style-2 d-none d-lg-block">
          <div class="octf-area-wrap">
            <div class="container">
              <div class="row">
                <div class="col-md-4 align-self-center">
                  <div class="topbar-socials list-social">
                    <ul>
                      <li>
                        <a href="http://twitter.com" target="_self"
                          ><i class="fab fa-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="http://facebook.com" target="_self"
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                      </li>
                      <li>
                        <a href="http://linkedin.com" target="_self"
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                      </li>
                      <li>
                        <a href="http://instagram" target="_self"
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <ul
                    class="topbar-info d-flex mb-0 justify-content-end clearfix"
                  >
                    <li>
                      <i class="ot-flaticon-place"></i>Methupalayam Road,
                      Coimbatore - 641029
                    </li>
                    <li>
                      <a href="mailto:example@gmail.com"
                        ><i class="ot-flaticon-mail"></i>example@gmail.com</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="octf-main-header main-header-slight header-4 is-fixed">
          <div class="octf-area-wrap">
            <div class="container octf-mainbar-container">
              <div class="octf-mainbar">
                <div class="octf-mainbar-row octf-row">
                  <div class="octf-col logo-col">
                    <div id="site-logo" class="site-logo">
                      <a href="index.php">
                        <img
                          src="images/logo/Homik.png"
                          alt="Homik"
                          class="logo-size-small"
                        />
                      </a>
                    </div>
                  </div>
                  <div class="octf-col menu-col">
                    <nav
                      id="site-navigation"
                      class="main-navigation nav-text-dark"
                    >
                      <ul class="menu">
                        <li class="current-menu-item current-menu-ancestor">
                        <a href="index.php">Home</a>
                        </li>
                        <li class="">
                          <a href="#">About</a>
                        </li>
                        <li class="">
                          <a href="#">Products</a>
                        </li>
                        <li class=" ">
                          <a href="">Gallery</a>
                        </li>
                        <li class="">
                          <a href="#">Blog</a>
                        
                        </li>
                        <li><a href="#">Contact</a></li>
                      </ul>
                    </nav>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <a class="login-btn" href="user.php">Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header_mobile">
          <div class="container-fluid">
            <div class="octf-mainbar-row octf-row">
              <div class="octf-col">
                <div class="mlogo_wrapper clearfix">
                  <div class="mobile_logo">
                    <a href="index.php">
                      <img src="images/logo/Homik.png" alt="Homik" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="octf-col justify-content-end">
                <div class="octf-menu-mobile octf-cta-header">
                  <div id="mmenu-toggle" class="mmenu-toggle">
                    <button><i class="ot-flaticon-menu"></i></button>
                  </div>
                  <div class="site-overlay mmenu-overlay"></div>
                  <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                    <div class="mmenu-inner">
                      <a class="mmenu-close" href="#"
                        ><i class="ot-flaticon-right-arrow"></i
                      ></a>
                      <div class="mobile-nav">
                        <ul
                          id="menu-main-menu"
                          class="mobile_mainmenu none-style"
                        >
                          <li class="">
                            <a href="index.php">Home</a>
                          </li>
                          <li class="">
                            <a href="#">About</a>
                         
                          </li>
                          <li class="">
                            <a href="#">Products</a>
                       
                          </li>
                          <li class="">
                            <a href="">Gallery</a>
                          
                          </li>
                          <li class="">
                            <a href="#">Blog</a>
                         
                          </li>
                          <li><a href="#">Contact</a></li>
                          <li>
                         
                    <a class="text-success"  href="user.php">Login</a>
                 
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    <div class="login-wrapper container">
        <!-- Left Banner Section -->
        <div class="login-banner"></div>

        <!-- Login Form Section -->
        <div class="login-form-container">
            <h2 class="login-title">User Login</h2>
            <form class="login-form" method="POST" action="">
                <div class="form-group">
                    <label for="username" class="label-text">Username:</label>
                    <input type="text" id="username" name="username" class="input-field" required>
                </div>

                <div class="form-group">
                    <label for="password" class="label-text">Password:</label>
                    <input type="password" id="password" name="password" class="input-field" required>
                </div>

                <input type="submit" class="btn-submit" value="Login">
            </form>
        </div>
    </div>
</body>
<footer id="site-footer" class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
              <div class="widget-footer">
                <img src="images/logo/Homik.png" class="footer-logo" alt="" />
                <p>
                  We provides a full range of interior design, architectural
                  design.
                </p>
                <div class="footer-social list-social">
                  <ul>
                    <li>
                      <a href="http://facebook.com" target="_self"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="http://twitter.com" target="_self"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="http://linkedin.com" target="_self"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="http://instagram" target="_self"
                        ><i class="fab fa-instagram"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
              <div class="widget-footer">
                <h6>Contact</h6>
                <ul class="footer-list">
                  <li class="footer-list-item">
                    <span class="list-item-icon"
                      ><i class="ot-flaticon-place"></i
                    ></span>
                    <span class="list-item-text"
                      >34/3, 4th floor, Vellakinar Pirivu, Methupalayam Road,
                      Coimbatore - 641029</span
                    >
                  </li>
                  <li class="footer-list-item">
                    <span class="list-item-icon"
                      ><i class="ot-flaticon-mail"></i
                    ></span>
                    <span class="list-item-text">example@gmail.com</span>
                  </li>
                  <li class="footer-list-item">
                    <span class="list-item-icon"
                      ><i class="ot-flaticon-phone-call"></i
                    ></span>
                    <span class="list-item-text">+91 99940 21005</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
              <div class="widget-footer widget-contact">
                <h6>Quick Links</h6>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="">Gallery</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
              <div class="widget-footer widget-contact">
                <h6>Enquiry Us</h6>
                <div>
                  <img
                    class="img-fluid"
                    src="./images/qrcode/qrcode.png"
                    alt=""
                    srcset=""
                    width="200px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- #site-footer -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
              <p>
                Copyright © 2024 Homik - Interior Job Work Factory. All Rights
                Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- #page -->
    <a id="back-to-top" href="#" class="show"
      ><i class="ot-flaticon-left-arrow"></i
    ></a>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/mousewheel.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/easypiechart.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/scripts.js"></script>

    <!-- REVOLUTION JS FILES -->

    <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="js/rev-script-1.js"></script>

</html>
