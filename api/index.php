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
<style>
  /* Carousel Container Styling */
.banner-carousel {
    width: 100%;
    background-color: #f5f5f5;
}

.carousel-slide {
    position: relative;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.carousel-slide h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 15px;
    animation: fadeInUp 1s ease-in-out;
}

.carousel-slide p {
    font-size: 1.2rem;
    color: #666;
    animation: fadeInUp 1.5s ease-in-out;
}

/* Custom Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Owl Carousel Custom Controls */
.owl-nav {
    position: absolute;
    top: 90%;
    left: 5%;
    width: 100%;
    display: flex;
    transform: translateY(-50%);
}

.owl-nav .owl-prev,
.owl-nav .owl-next {
    background-color: #000;
    color: white;
    padding: 0px 12px;
    margin:3px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.owl-nav .owl-prev:hover,
.owl-nav .owl-next:hover {
    background-color: #6FBF44;
}

/* .owl-dots {
    text-align: center;
    margin-top: 20px;
} */

/* .owl-dot {
    display: inline-block;
    width: 12px;
    height: 12px;
    margin: 5px;
    background-color: #ddd;
    border-radius: 50%;
    transition: background-color 0.3s;
}

.owl-dot.active {
    background-color: #007bff;
} */

</style>
  <body>
    
    <!-- <div id="royal_preloader"></div> -->
    <div id="page" class="site">
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
                          <!-- <ul class="sub-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li>
                              <a href="our-services.html">Our Services</a>
                            </li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="single-team.html">Single Team</a></li>
                            <li><a href="our-process.html">Our Process</a></li>
                            <li><a href="our-studio.html">Our Stufio</a></li>
                            <li class="menu-item-has-children">
                              <a href="shop.html">Shop</a>
                              <ul class="sub-menu">
                                <li>
                                  <a href="single-product.html"
                                    >Single Product</a
                                  >
                                </li>
                                <li>
                                  <a href="checkout-page.html">Checkout Page</a>
                                </li>
                                <li><a href="cart-page.html">Cart Page</a></li>
                              </ul>
                            </li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="faq.html">FAQS</a></li>
                            <li><a href="cooming-soon.html">Coming Soon</a></li>
                            <li><a href="404-error.html">404 Error</a></li>
                          </ul> -->
                        </li>
                        <li class="">
                          <a href="#">Products</a>
                          <!-- <ul class="sub-menu">
                            <li>
                              <a href="servcies-detail-1.html"
                                >Design & Planning</a
                              >
                            </li>
                            <li>
                              <a href="servcies-detail-2.html"
                                >Exterior Design</a
                              >
                            </li>
                            <li>
                              <a href="servcies-detail-3.html"
                                >Custom Solutions</a
                              >
                            </li>
                            <li>
                              <a href="servcies-detail-4.html"
                                >Furniture & Decor</a
                              >
                            </li>
                            <li>
                              <a href="servcies-detail-5.html"
                                >Creating Concept</a
                              >
                            </li>
                            <li>
                              <a href="servcies-detail-6.html"
                                >Author’s Control</a
                              >
                            </li>
                          </ul> -->
                        </li>
                        <li class=" ">
                          <a href="gallery.php">Gallery</a>
                          <!-- <ul class="mega-sub-menu">
                            <li class="row">
                              <ul class="col">
                                <li class="menu-title">Portfolio Types</li>
                                <li>
                                  <a href="portfolio-masonry.html"
                                    >Portfolio Grid Masonry</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-no-gap.html"
                                    >Portfolio Grid No Gap</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-under.html"
                                    >Portfolio Info Under Image</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-metro.html"
                                    >Portfolio Metro</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-metro-no-gap.html"
                                    >Portfolio Metro No Space</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-gallery.html"
                                    >Portfolio Gallery</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-slider.html"
                                    >Portfolio Slider</a
                                  >
                                </li>
                              </ul>
                              <ul class="col">
                                <li class="menu-title">Portfolio Layout</li>
                                <li>
                                  <a href="portfolio-two-column.html"
                                    >Two Columns</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-three-column.html"
                                    >Three Columns</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-three-column-wide.html"
                                    >Three Columns Wide</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-four-column-wide.html"
                                    >Four Columns Wide</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-five-column-wide.html"
                                    >Five Columns Wide</a
                                  >
                                </li>
                              </ul>
                              <ul class="col">
                                <li class="menu-title">Single Types</li>
                                <li>
                                  <a href="portfolio-standar.html">Standard</a>
                                </li>
                                <li>
                                  <a href="portfolio-detail-slider.html"
                                    >Slider Images</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-left.html">Left Images</a>
                                </li>
                                <li>
                                  <a href="portfolio-right.html"
                                    >Right Images</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-small.html"
                                    >Small Images</a
                                  >
                                </li>
                                <li>
                                  <a href="portfolio-big.html">Big Images</a>
                                </li>
                              </ul>
                              <ul class="col">
                                <li class="menu-title">Hover Types</li>
                                <li>
                                  <a href="image-scale.html">Image Scale</a>
                                </li>
                                <li>
                                  <a href="show-overlay-info.html"
                                    >Show Overlay Info</a
                                  >
                                </li>
                                <li>
                                  <a href="hidden-overlay-info.html"
                                    >Hidden Overlay Info</a
                                  >
                                </li>
                                <li>
                                  <a href="background-solid.html"
                                    >Background Solid</a
                                  >
                                </li>
                                <li><a href="hidden-1.html">Hidden 1</a></li>
                                <li><a href="hidden-2.html">Hidden 2</a></li>
                              </ul>
                            </li>
                          </ul> -->
                        </li>
                        <li class="">
                          <a href="#">Blog</a>
                          <!-- <ul class="sub-menu">
                            <li><a href="blog.html">Blog Listing</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="post.html">Blog Single</a></li>
                          </ul> -->
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
                            <!-- <ul class="sub-menu">
                              <li><a href="index.php">Main Home</a></li>
                              <li><a href="index-dark.html">Main Dark</a></li>
                              <li>
                                <a href="index-2.html">Interior Design</a>
                              </li>
                              <li>
                                <a href="index-2-light.html"
                                  >Interior Design Light</a
                                >
                              </li>
                              <li><a href="index-3.html">Studio Home</a></li>
                              <li>
                                <a href="index-3-dark.html">Studio Home Dark</a>
                              </li>
                              <li class="current-menu-item">
                                <a href="index-4.html">Architecture Agency</a>
                              </li>
                              <li>
                                <a href="index-4-dark.html"
                                  >Architecture Agency Dark</a
                                >
                              </li>
                              <li><a href="index-5.html">Design Company</a></li>
                              <li>
                                <a href="index-5-dark.html"
                                  >Design Company Dark</a
                                >
                              </li>
                              <li><a href="index-6.html">Home Video</a></li>
                              <li>
                                <a href="index-6-dark.html">Home Video Dark</a>
                              </li>
                              <li>
                                <a href="home-full-screen.html"
                                  >Home Full Screen</a
                                >
                              </li>
                              <li><a href="one-page.html">Home One Page</a></li>
                              <li>
                                <a href="one-page-dark.html"
                                  >Home One Page Dark</a
                                >
                              </li>
                              <li>
                                <a href="index-sidenav.html"
                                  >Home with Side Menu</a
                                >
                              </li>
                              <li>
                                <a href="index-sidenav-light.html"
                                  >Home with Side Menu Light</a
                                >
                              </li>
                            </ul> -->
                          </li>
                          <li class="">
                            <a href="#">About</a>
                            <!-- <ul class="sub-menu">
                              <li><a href="about-us.html">About Us</a></li>
                              <li>
                                <a href="our-services.html">Our Services</a>
                              </li>
                              <li><a href="our-team.html">Our Team</a></li>
                              <li>
                                <a href="single-team.html">Single Team</a>
                              </li>
                              <li>
                                <a href="our-process.html">Our Process</a>
                              </li>
                              <li><a href="our-studio.html">Our Studio</a></li>
                              <li class="menu-item-has-children">
                                <a href="shop.html">Shop</a>
                                <ul class="sub-menu">
                                  <li>
                                    <a href="single-product.html"
                                      >Single Product</a
                                    >
                                  </li>
                                  <li>
                                    <a href="checkout-page.html"
                                      >Checkout Page</a
                                    >
                                  </li>
                                  <li>
                                    <a href="cart-page.html">Cart Page</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="typography.html">Typography</a></li>
                              <li><a href="elements.html">Elements</a></li>
                              <li><a href="faq.html">FAQS</a></li>
                              <li>
                                <a href="cooming-soon.html">Coming Soon</a>
                              </li>
                              <li><a href="404-error.html">404 Error</a></li>
                            </ul> -->
                          </li>
                          <li class="">
                            <a href="#">Products</a>
                            <!-- <ul class="sub-menu">
                              <li>
                                <a href="servcies-detail-1.html"
                                  >Design & Planning</a
                                >
                              </li>
                              <li>
                                <a href="servcies-detail-2.html"
                                  >Exterior Design</a
                                >
                              </li>
                              <li>
                                <a href="servcies-detail-3.html"
                                  >Custom Solutions</a
                                >
                              </li>
                              <li>
                                <a href="servcies-detail-4.html"
                                  >Furniture & Decor</a
                                >
                              </li>
                              <li>
                                <a href="servcies-detail-5.html"
                                  >Creating Concept</a
                                >
                              </li>
                              <li>
                                <a href="servcies-detail-6.html"
                                  >Author’s Control</a
                                >
                              </li>
                            </ul> -->
                          </li>
                          <li class="">
                            <a href="">Gallery</a>
                            <!-- <ul class="sub-menu">
                              <li class="menu-item-has-children">
                                <a href="#">Portfolio Types</a>
                                <ul class="sub-menu">
                                  <li>
                                    <a href="portfolio-masonry.html"
                                      >Portfolio Grid Masonry</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-no-gap.html"
                                      >Portfolio Grid No Gap</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-under.html"
                                      >Portfolio Info Under Image</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-metro.html"
                                      >Portfolio Metro</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-metro-no-gap.html"
                                      >Portfolio Metro No Space</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-gallery.html"
                                      >Portfolio Gallery</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-slider.html"
                                      >Portfolio Slider</a
                                    >
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children">
                                <a href="#">Portfolio Layout</a>
                                <ul class="sub-menu">
                                  <li>
                                    <a href="portfolio-two-column.html"
                                      >Two Columns</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-three-column.html"
                                      >Three Columns</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-three-column-wide.html"
                                      >Three Columns Wide</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-four-column-wide.html"
                                      >Four Columns Wide</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-five-column-wide.html"
                                      >Five Columns Wide</a
                                    >
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children">
                                <a href="#">Portfolio Hover Types</a>
                                <ul class="sub-menu">
                                  <li>
                                    <a href="portfolio-standar.html">Standar</a>
                                  </li>
                                  <li>
                                    <a href="portfolio-detail-slider.html"
                                      >Slider Images</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-left.html">Left Image</a>
                                  </li>
                                  <li>
                                    <a href="portfolio-right.html"
                                      >Right Image</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-small.html"
                                      >Small Image</a
                                    >
                                  </li>
                                  <li>
                                    <a href="portfolio-big.html">Big Image</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children">
                                <a href="image-scale.html">Image-scale</a>
                                <ul class="sub-menu">
                                  <li>
                                    <a href="image-scale.html">Image Scale</a>
                                  </li>
                                  <li>
                                    <a href="show-overlay-info.html"
                                      >Show Overlay Info</a
                                    >
                                  </li>
                                  <li>
                                    <a href="hidden-overlay-info.html"
                                      >Hidden Overlay Info</a
                                    >
                                  </li>
                                  <li>
                                    <a href="background-solid.html"
                                      >Background Solid</a
                                    >
                                  </li>
                                  <li><a href="hidden-1.html">Hidden 1</a></li>
                                  <li><a href="hidden-2.html">Hidden 2</a></li>
                                </ul>
                              </li>
                            </ul> -->
                          </li>
                          <li class="">
                            <a href="#">Blog</a>
                            <!-- <ul class="sub-menu">
                              <li><a href="blog.html">Blog Listing</a></li>
                              <li><a href="blog-grid.html">Blog Grid</a></li>
                              <li><a href="post.html">Blog Single</a></li>
                            </ul> -->
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

      <div id="content" class="site-content">
      <div class="banner-carousel owl-carousel">
  <!-- Slide 1 -->
  <div class="carousel-slide banner-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-7 col-lg-12">
          <h2>
            We provide efficient B2B interior solutions <br />
            tailored to your needs.
          </h2>
          <div class="banner-desc-4">
            <p>We will help you build a dream.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 2 -->
  <div class="carousel-slide banner-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-7 col-lg-12">
          <h2>Transform your space with innovative designs.</h2>
          <div class="banner-desc-4">
            <p>Creating spaces that inspire and elevate.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-slide banner-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-7 col-lg-12">
          <h2>Seamless integration of functionality and style.</h2>
          <div class="banner-desc-4">
            <p>Your satisfaction is our mission.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- WhatsApp & Call Buttons -->
<div class="floating-icons">
  <a href="https://wa.me/919999999999" target="_blank" class="whatsapp-icon" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
  <a href="tel:+919999999999" class="call-icon" aria-label="Call Us">
    <i class="fas fa-phone-alt"></i>
  </a>
</div>



        <section>
          <div class="space-10"></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12 col-md-12 mb-5 mb-lg-0">
                <div class="benefits-desc-classic">
                  <div class="ot-heading">
                    <h2 class="main-heading text-center">
                      “Doing things right and doing the right things”
                    </h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 text-center">
                <h6 class="title-s2">About Studio</h6>
                <p>
                  Homik has strong corporate governance and complete
                  accountability, driven by a systematic process at every level.
                  We are a fully-fledged organization with a deep and
                  experienced senior management team specializing in business
                  strategy, product design, production, and execution.
                </p>
                <p class="pb-0">
                  Our team consists of marketing professionals, architects,
                  designers, site engineers, and a customer support division. We
                  are known for timely delivery, impeccable finishes, excellent
                  team coordination, and exceptional client service.
                </p>
              </div>

              <div class="timeline">
                <!-- Step 1 -->
                <div class="timeline-step">
                  <div class="left">1. Explore our Factory</div>
                  <div class="right">2. Meet our team</div>
                </div>

                <!-- Step 2 -->
                <div class="timeline-step">
                  <div class="left">3. Interactive Proposal</div>
                  <div class="right">4. Accept or reject the proposal</div>
                </div>

                <!-- Step 3 -->
                <div class="timeline-step">
                  <div class="left">5. Login</div>
                  <div class="right">6. Finalize</div>
                </div>

                <!-- Step 4 -->
                <div class="timeline-step">
                  <div class="left">7. Just a click away</div>
                  <div class="right">8. Repeat the process</div>
                </div>
              </div>
            </div>
          </div>
          <div class="ot-button text-center mt-3">
            <a href="#" class="octf-btn octf-btn-dark border-hover-dark"
              >Read More</a
            >
          </div>
          <div class="space-10"></div>
        </section>

    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
/>


        <section class="skill-4 p-md-0 pb-0">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-center theratio-align-center">
                <div class="">
                  <span>OUR PRODUCTION PROCESS </span>
                  <h2 class="main-heading">
                    “Simplified Solution. Efficiently Delivered”
                  </h2>
                  <p>
                    We simplified your modular interior furniture process to
                    make the potential of any material shine, with the help of
                    state-of-the-art machinery from India, Germany, and Italy.
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div
                class="col-xl-6 col-lg-12 col-md-12 p-lg-0 align-self-center"
              >
                <div class="skill-img-4 text-center">
                  <div class="space-40"></div>
                  <img src="./images/production/Production-1.png" alt="" />
                </div>
              </div>
              <div
                class="col-xl-6 col-lg-12 col-md-12 p-lg-0 align-self-center"
              >
                <div class="skill-img-4 text-center">
                  <div class="space-40"></div>
                  <img src="./images/production/Production-2.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="testi-4 p-md-0">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-12 px-xl-0">
                <div class="testi-img-3 text-center">
                  <img
                    class="img-fluid"
                    src="./images/testimonial/testimonial.png"
                    alt=""
                  />
                  <div class="space-40 d-block d-md-none"></div>
                </div>
              </div>
              <div
                class="col-xl-6 col-lg-12 px-xl-0 mb-5 mb-xl-0 align-self-center"
              >
                <div class="testi-slide-block-4">
                  <div class="">
                    <span>testimonials</span>
                    <h2 class="main-heading">What People Say</h2>
                  </div>
                  <div class="space-20"></div>
                  <div class="space-5"></div>
                  <div class="ot-testimonials v-light">
                    <div
                      class="testimonials-slide-2 s2 ot-testimonials-slider-s2 owl-theme owl-carousel"
                    >
                      <div class="testi-item">
                        <div class="ttext">
                          “Working with Homik was a seamless experience. Their
                          strong corporate governance and transparent processes
                          made every phase of our project stress-free. The team
                          kept us updated throughout and ensured complete
                          accountability at every level. We truly appreciate
                          their professionalism and would recommend them without
                          hesitation.”
                        </div>
                        <div class="t-head flex-middle">
                          <div class="tinfo">
                            <h5>Kristina Lee</h5>
                            <span>Client of Company</span>
                          </div>
                        </div>
                      </div>
                      <div class="testi-item">
                        <div class="ttext">
                          “Homik's design expertise and meticulous execution
                          made all the difference in our project. Their site
                          engineers, designers, and architects worked in perfect
                          harmony, ensuring the vision we had was fully
                          realized. Plus, their timely delivery and flawless
                          finishes exceeded our expectations. It’s rare to find
                          such efficient and well-coordinated teams.”
                        </div>
                        <div class="t-head flex-middle">
                          <div class="tinfo">
                            <h5>Pablo Gusterio</h5>
                            <span>Client of Company</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

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
  </body>

  <script>
    $(document).ready(function () {
  $(".banner-carousel").owlCarousel({
    items: 1,                 // Show one item at a time
    loop: true,               // Infinite looping
    margin: 10,               // Margin between items
    nav: true,                // Show navigation arrows
    dots: false,               // Show dots for pagination
    autoplay: true,           // Enable autoplay
    autoplayTimeout: 3000,    // 3 seconds per slide
    autoplayHoverPause: true, // Pause on hover
    animateOut: 'fadeOut',    // Animation when slide changes
    animateIn: 'fadeIn',      // Animation when slide enters
    navText: ["<", ">"]       // Custom arrow text
  });
});

  </script>
</html>
