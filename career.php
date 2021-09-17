<?php 
require('db.php');
$query  = "SELECT * from requirements";
$result = mysqli_query($db,$query);
     
$data=[];
while($response=mysqli_fetch_assoc($result)){
    $data[]=$response;
    
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <title>aLishia / Contact Us</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="icon" type="image/png" href="images/fav.png" />

    <!-- Google fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700"
      rel="stylesheet"
    />

    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="css/settings.css" />

    <!-- Fancy Box -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />

    <!-- Fonts Icons-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/copious-icon.css" />

    <!-- Navbar Css -->
    <link rel="stylesheet" type="text/css" href="css/bootsnav.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/color.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <style>
      .about_us_2 .about_box {
        background: white;
        /* text-align: center; */
        box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;

        margin-bottom: 15px;
      }
    </style>
  </head>

  <body>
    <!-- Loader Start -->
    <div class="loader">
      <div class="sk-rotating-plane"></div>
    </div>
    <!-- Header Top Start -->
    <header id="header-top_3">
      <div class="container">
        <div class="row">
          <div class="header_set">
            <div class="col-md-10 col-sm-10 col-xs-12 text-right">
              <div class="get-tuch text-left">
                <i class="icon-telephone114"></i>
                <ul>
                  <li>
                    <h4>+91 99538 91003</h4>
                  </li>
                  <li>
                    <p class="p_14">careers@alishia.co.in</p>
                  </li>
                </ul>
              </div>
              <div class="get-tuch text-left">
                <i class="icon-alarmclock"></i>
                <ul>
                  <li>
                    <h4>8:00 - 7:00 PM</h4>
                  </li>
                  <li>
                    <p class="p_14">Monday to Saturday</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 text-right">
              <div class="header-top-links">
                <div class="social-icons text-right">
                  <ul>
                    <li>
                      <a
                        href="https://www.facebook.com/ALishia-Talent-Management-107450727437819/"
                        ><i aria-hidden="true" class="fa fa-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i aria-hidden="true" class="fa fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://www.linkedin.com/in/alishia-talent-management-03589819a"
                        ><i class="fa fa-linkedin" aria-hidden="true"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Header Top End -->

      <!-- Navbar Start -->
      <nav
        class="
          navbar navbar-default navbar-fixed navbar-transparent navbar-sticky
          dark
          bootsnav
        "
      >
        <div class="container">
          <div class="" id="search">
            <button type="button" class="close">×</button>
            <form>
              <input type="search" value="" placeholder="Search on Site..." />
              <span class="searc_button"><i class="icon-icons185"></i></span>
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
              <img
                src="images/logo_white.png"
                class="logo logo-display"
                alt=""
              />
              <img src="images/logo.png" class="logo logo-scrolled" alt="" />
            </a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse nav_bor_bot" id="navbar-menu">
            <ul
              class="nav navbar-nav navbar-right"
              data-in="fadeInDown"
              data-out="fadeOutUp"
            >
              <li class="cool-link_3">
                <a href="home_2.html">Home</a>
                <ul class="dropdown-menu">
                  <li><a href="home_1.html">Home Style 1</a></li>
                  <li><a href="home_2.html">Home Style 2</a></li>
                  <li><a href="home_3.html">Home Style 3</a></li>
                </ul>
              </li>
              <li class="cool-link_3"><a href="about_us.html">About Us</a></li>
              <li class="dropdown" class="cool-link">
                <a href="services.html">Services</a>
                <ul class="dropdown-menu">
                  <li><a href="services.html#es">Executive Search</a></li>
                  <li><a href="services.html#ha">HR Advisory</a></li>
                  <li><a href="services.html#as">Automation Services</a></li>
                  <li><a href="">Interview Saarthi</a></li>
                </ul>
              </li>

              <li class="dropdown cool-link_3">
                <a href="our_team.html">Executive Team</a>
              </li>

              <li class="dropdown cool-link_3">
                <a href="career.php">Career</a>
              </li>
              <li class="cool-link_3">
                <a href="contact.php">Contact Us</a>
              </li>
              <!-- <li class="search">
                <a href="#search"><i class="icon-icons185"></i></a>
              </li> -->
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
      </nav>
    </header>
    <!-- Navbar End -->

    <!-- Page Banner Start -->
    <section id="page_banner" class="border_b">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Banner End -->

    <!-- Contact Us Start -->

    <!-- Map Start -->
    <!-- <div id="contact_us_page">
      <div class="contact">
        <div id="map"></div>
      </div>
    </div> -->
    <!-- Map End -->

    <!-- About us Start -->
    <section id="about_us" class="p-t-50 bg_gray about_us_2">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-6 col-xs-12">
            <?php foreach ($data as$value) {
            # code...
           ?>
            <div class="col-md-12 about_box">
              <div class="heading">
                <div class="heading_border bg_red"></div>

                <h3>
                  <span
                    ><svg
                      width="24"
                      height="24"
                      xmlns="http://www.w3.org/2000/svg"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                    >
                      <path
                        d="M13.403 24h-13.403v-22h3c1.231 0 2.181-1.084 3-2h8c.821.916 1.772 2 3 2h3v9.15c-.485-.098-.987-.15-1.5-.15l-.5.016v-7.016h-4l-2 2h-3.897l-2.103-2h-4v18h9.866c.397.751.919 1.427 1.537 2zm5.097-11c3.035 0 5.5 2.464 5.5 5.5s-2.465 5.5-5.5 5.5c-3.036 0-5.5-2.464-5.5-5.5s2.464-5.5 5.5-5.5zm0 2c1.931 0 3.5 1.568 3.5 3.5s-1.569 3.5-3.5 3.5c-1.932 0-3.5-1.568-3.5-3.5s1.568-3.5 3.5-3.5zm2.5 4h-3v-3h1v2h2v1zm-15.151-4.052l-1.049-.984-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.385zm6.151 1.052h-2v-1h2v1zm2-2h-4v-1h4v1zm-8.151-4.025l-1.049-.983-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.384zm8.151 1.025h-4v-1h4v1zm0-2h-4v-1h4v1zm-5-6c0 .552.449 1 1 1 .553 0 1-.448 1-1s-.447-1-1-1c-.551 0-1 .448-1 1z"
                      ></path>
                    </svg>
                  </span>
                  Urgent <span class="color_red">Requirement</span>
                </h3>
              </div>

              <h4 style="font-size: 18px" class="p-t-20">
                Position: <span class="color_red"><?= $value['position']; ?></span>
              </h4>
              <h4 class="p-t-10">
                Product: <span><?= $value['product']; ?></span>
              </h4>
              <h4 class="p-t-10">
                Location:
                <span>
                  <?= $value['location']; ?>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M12 0c-4.198 0-8 3.403-8 7.602 0 6.243 6.377 6.903 8 16.398 1.623-9.495 8-10.155 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.342-3 3-3 3 1.343 3 3-1.343 3-3 3z"
                    />
                  </svg>
                </span>
              </h4>
              <h4 class="p-t-10">
                Industry: <span class="color_red"><?= $value['industry']; ?></span>
              </h4>

              <p class="p_17 p-t-10">
               <?= $value['des']; ?>
              </p>

              <div class="collapse" id="<?= $value['id']; ?>">
                <p class="p_17 p-t-10 p-t-10">
                  <?= $value['des']; ?>
                </p>
                
              </div>
              <a
                style="font-size: 15px; font-weight: 500"
                href="#<?= $value['id']; ?>"
                data-toggle="collapse"
                class="color_red"
                >Read More</a
              >
            </div>
            <?php } ?>
            <!-- <div class="col-md-12 about_box">
              <div class="heading">
                <div class="heading_border bg_red"></div>

                <h3>
                  <span
                    ><svg
                      width="24"
                      height="24"
                      xmlns="http://www.w3.org/2000/svg"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                    >
                      <path
                        d="M13.403 24h-13.403v-22h3c1.231 0 2.181-1.084 3-2h8c.821.916 1.772 2 3 2h3v9.15c-.485-.098-.987-.15-1.5-.15l-.5.016v-7.016h-4l-2 2h-3.897l-2.103-2h-4v18h9.866c.397.751.919 1.427 1.537 2zm5.097-11c3.035 0 5.5 2.464 5.5 5.5s-2.465 5.5-5.5 5.5c-3.036 0-5.5-2.464-5.5-5.5s2.464-5.5 5.5-5.5zm0 2c1.931 0 3.5 1.568 3.5 3.5s-1.569 3.5-3.5 3.5c-1.932 0-3.5-1.568-3.5-3.5s1.568-3.5 3.5-3.5zm2.5 4h-3v-3h1v2h2v1zm-15.151-4.052l-1.049-.984-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.385zm6.151 1.052h-2v-1h2v1zm2-2h-4v-1h4v1zm-8.151-4.025l-1.049-.983-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.384zm8.151 1.025h-4v-1h4v1zm0-2h-4v-1h4v1zm-5-6c0 .552.449 1 1 1 .553 0 1-.448 1-1s-.447-1-1-1c-.551 0-1 .448-1 1z"
                      />
                    </svg>
                  </span>
                  Urgent <span class="color_red">Requirement</span>
                </h3>
              </div>

              <h4 style="font-size: 18px" class="p-t-20">
                Position: <span class="color_red">National Sales Head</span>
              </h4>
              <h4 class="p-t-10">
                Product: <span>Education Loan (Domestic & International)</span>
              </h4>
              <h4 class="p-t-10">
                Location:
                <span>
                  Mumbai
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M12 0c-4.198 0-8 3.403-8 7.602 0 6.243 6.377 6.903 8 16.398 1.623-9.495 8-10.155 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.342-3 3-3 3 1.343 3 3-1.343 3-3 3z"
                    />
                  </svg>
                </span>
              </h4>
              <h4 class="p-t-10">
                Industry: <span class="color_red">Banking/ NBFC</span>
              </h4>

              <p class="p_17 p-t-10">
                A large banking & financial services organization is looking for
                National Sales Head to lead the function. Drive business ...
              </p>

              <div class="collapse" id="demo2">
                <p class="p_17 p-t-10 p-t-10">
                  - Relationship management with institutes, third party service
                  providers, Generating business from different channels like
                  DSA, Bank Branches and Digital
                </p>
                <p class="p_17 p-t-10">
                  - Drive cross-sell of products like insurance, cards etc..
                </p>
                <p class="p_17 p-t-10">
                  Maintain team productivity through trainings and performance
                  improvement
                </p>
                <p class="p_17 p-t-10">Train partners on product & policy</p>
                <p class="p_17 p-t-10">
                  Business trend analysis and exploring new avenues to generate
                  more business
                </p>
                <p class="p_17 p-t-10">Driving contests and R&R</p>
                <p class="p_17 p-t-10">
                  An ideal candidate should have retail asset (Loans) experience
                  of at least 15-20 years in a banking/ Financial services
                  industry. years out of which 5-7 years in a lead role.
                </p>

                <p class="p_17 p-t-15">
                  Profiles/ references may pls be sent to
                  <span class="color_red">Vijay.mehra@alishia.co.in</span>
                  Or WhatsApp: +91 99538 91003
                </p>
              </div>
              <a
                style="font-size: 15px; font-weight: 500"
                href="#demo2"
                data-toggle="collapse"
                class="color_red"
                >Read More</a
              >
            </div>

            <div class="col-md-12 about_box">
              <div class="heading">
                <div class="heading_border bg_red"></div>

                <h3>
                  <span
                    ><svg
                      width="24"
                      height="24"
                      xmlns="http://www.w3.org/2000/svg"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                    >
                      <path
                        d="M13.403 24h-13.403v-22h3c1.231 0 2.181-1.084 3-2h8c.821.916 1.772 2 3 2h3v9.15c-.485-.098-.987-.15-1.5-.15l-.5.016v-7.016h-4l-2 2h-3.897l-2.103-2h-4v18h9.866c.397.751.919 1.427 1.537 2zm5.097-11c3.035 0 5.5 2.464 5.5 5.5s-2.465 5.5-5.5 5.5c-3.036 0-5.5-2.464-5.5-5.5s2.464-5.5 5.5-5.5zm0 2c1.931 0 3.5 1.568 3.5 3.5s-1.569 3.5-3.5 3.5c-1.932 0-3.5-1.568-3.5-3.5s1.568-3.5 3.5-3.5zm2.5 4h-3v-3h1v2h2v1zm-15.151-4.052l-1.049-.984-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.385zm6.151 1.052h-2v-1h2v1zm2-2h-4v-1h4v1zm-8.151-4.025l-1.049-.983-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.384zm8.151 1.025h-4v-1h4v1zm0-2h-4v-1h4v1zm-5-6c0 .552.449 1 1 1 .553 0 1-.448 1-1s-.447-1-1-1c-.551 0-1 .448-1 1z"
                      />
                    </svg>
                  </span>
                  Urgent <span class="color_red">Requirement</span>
                </h3>
              </div>

              <h4 style="font-size: 18px" class="p-t-20">
                Position: <span class="color_red">National Sales Head</span>
              </h4>
              <h4 class="p-t-10">
                Product: <span>Education Loan (Domestic & International)</span>
              </h4>
              <h4 class="p-t-10">
                Location:
                <span>
                  Mumbai
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M12 0c-4.198 0-8 3.403-8 7.602 0 6.243 6.377 6.903 8 16.398 1.623-9.495 8-10.155 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.342-3 3-3 3 1.343 3 3-1.343 3-3 3z"
                    />
                  </svg>
                </span>
              </h4>
              <h4 class="p-t-10">
                Industry: <span class="color_red">Banking/ NBFC</span>
              </h4>

              <p class="p_17 p-t-10">
                A large banking & financial services organization is looking for
                National Sales Head to lead the function. Drive business ...
              </p>

              <div class="collapse" id="demo3">
                <p class="p_17 p-t-10 p-t-10">
                  - Relationship management with institutes, third party service
                  providers, Generating business from different channels like
                  DSA, Bank Branches and Digital
                </p>
                <p class="p_17 p-t-10">
                  - Drive cross-sell of products like insurance, cards etc..
                </p>
                <p class="p_17 p-t-10">
                  Maintain team productivity through trainings and performance
                  improvement
                </p>
                <p class="p_17 p-t-10">Train partners on product & policy</p>
                <p class="p_17 p-t-10">
                  Business trend analysis and exploring new avenues to generate
                  more business
                </p>
                <p class="p_17 p-t-10">Driving contests and R&R</p>
                <p class="p_17 p-t-10">
                  An ideal candidate should have retail asset (Loans) experience
                  of at least 15-20 years in a banking/ Financial services
                  industry. years out of which 5-7 years in a lead role.
                </p>

                <p class="p_17 p-t-15">
                  Profiles/ references may pls be sent to
                  <span class="color_red">Vijay.mehra@alishia.co.in</span>
                  Or WhatsApp: +91 99538 91003
                </p>
              </div>
              <a
                style="font-size: 15px; font-weight: 500"
                href="#demo3"
                data-toggle="collapse"
                class="color_red"
                >Read More</a
              >
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- About us Start -->

    <!-- Footer Start -->
    <footer id="footer" class="bg_blue p-t-100">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer_box_1">
              <img
                src="images/logo_white.png"
                alt="image"
                class="img-responsive"
              />
              <p class="p-t-30 p-b-30 footer_p">
                aLishia is a company registered as a private limited company
                registered under the Companies Act 2013.
              </p>
              <div class="social-icons_1">
                <ul>
                  <li>
                    <a
                      href="https://www.facebook.com/ALishia-Talent-Management-107450727437819/"
                      ><i aria-hidden="true" class="fa fa-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i aria-hidden="true" class="fa fa-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.linkedin.com/in/alishia-talent-management-03589819a"
                      ><i class="fa fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer_box_1">
              <h3>Quick Links</h3>
              <ul class="footer_link_1">
                <li><a href="#">Home</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="#">Services</a></li>
                <!-- <li><a href="#">Projects</a></li> -->
              </ul>

              <ul class="footer_link_1 pull-right">
                <li><a href="our_team.html">Team</a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li><a href="contact.php">Contact us</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer_box_1">
              <h3>Latest Posts</h3>
              <div class="latest_footer">
                <h4><a href="#">Secure strong revenue growth</a></h4>
                <p>14 Feb 2016</p>
              </div>
              <div class="latest_footer">
                <h4><a href="#">Weekly meeting in companies Think Room</a></h4>
                <p>14 Feb 2016</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer_box_1">
              <h3>Get in Touch</h3>
              <div class="footer_1_contact">
                <div class="adres_box">
                  <p><i class="icon-telephone114"></i></p>
                  <p>+91 99538 91003</p>
                </div>
                <div class="adres_box">
                  <p><i class="icon-icons142"></i></p>
                  <p>careers@alishia.co.in</p>
                </div>
                <div class="adres_box">
                  <p><i class="icon-alarmclock"></i></p>
                  <p>Mon to Fri - 08:00 to 16:30</p>
                </div>
                <div class="adres_box">
                  <p><i class="icon-icons74"></i></p>
                  <p>
                    H 101, Imperia Esfera, Sector 37 C, Gurgaon, Haryana india
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_botom m-t-80 p-t-20 p-b-20">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <p>Copyrights © 2021 aLishia. All rights reserved.</p>
            </div>
            <div class="col-md-5 text-right">
              <p>
                Made with <i class="icon-heart3"></i> by
                <a href="#">Netrut</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
    <!--Required JS -->
    <script src="js/jquery.2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- SMOOTH SCROLL -->
    <script type="text/javascript" src="js/scroll-desktop.js"></script>
    <script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

    <script src="js/themepunch/jquery.themepunch.revolution.min.js"></script>
    <script src="js/themepunch/jquery.themepunch.tools.min.js"></script>
    <script src="js/themepunch/revolution.extension.layeranimation.min.js"></script>
    <script src="js/themepunch/revolution.extension.navigation.min.js"></script>
    <script src="js/themepunch/revolution.extension.parallax.min.js"></script>
    <script src="js/themepunch/revolution.extension.slideanims.min.js"></script>
    <script src="js/themepunch/revolution.extension.video.min.js"></script>
    <script src="js/tab_slider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/viedobox/video.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/bootstrap-number-input.js"></script>
    <script src="js/renge_selectbox-0.2.min.js"></script>
    <script src="js/range-Slider.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&amp;libraries=places"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/zelect.js"></script>
    <!-- Progress  -->
    <script src="js/progressbar.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/copious_custom.js"></script>
  </body>
</html>