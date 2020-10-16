<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/menuStyle.css">
    <link rel="stylesheet" href="@yield('css')">
    <script src="js/menu.js"></script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Statuax | @yield('title')</title>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Statuax</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="statuette">Statuette</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service">Services</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <header>
    @yield('header')
  </header>
  
  <!-- Page Content -->
  <main class="py-5">
    <div class="container">
      @yield('content')
    </div>
  </main>
  <!--Main Layout-->
  <footer class="kilimanjaro_area">
    <!-- Top Footer Area Start -->
    <div class="foo_top_header_one section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>About Us</h5>
                        <p>It includes rich features & contents. It's designed & developed based on One Page/ Multi-page Layout,blog themes,world press themes and blogspot. You can use any layout from any demo anywhere.</p>
                        <p>webblogoverflow is completely creative, clean & 100% responsive website. Put your business into next level with Webublogoverflow.</p>
                    </div>
                    <div class="kilimanjaro_part m-top-15">
                        <h5>Social Links</h5>
                        <ul class="kilimanjaro_social_links">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pinterest</a></li>
                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>Tags Widget</h5>
                        <ul class=" kilimanjaro_widget">
                            <li><a href="#">Classy</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">One Page</a></li>
                            <li><a href="#">Multipurpose</a></li>
                            <li><a href="#">Minimal</a></li>
                            <li><a href="#">Classic</a></li>
                            <li><a href="#">Medical</a></li>
                        </ul>
                    </div>

                    <div class="kilimanjaro_part m-top-15">
                        <h5>Important Links</h5>
                        <ul class="kilimanjaro_links">
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms & Conditions</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About Licences</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Help & Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Careers</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Community & Forum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>Latest News</h5>
                        <div class="kilimanjaro_blog_area">
                            <div class="kilimanjaro_thumb">
            <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">

                            </div>
                            <a href="#">Your Blog Title Goes Here</a>
                            <p class="kilimanjaro_date">21 Jan 2018</p>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                        <div class="kilimanjaro_blog_area">
                            <div class="kilimanjaro_thumb">
            <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                            </div>
                            <a href="#">Your Blog Title Goes Here</a>
                            <p class="kilimanjaro_date">21 Jan 2018</p>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                        <div class="kilimanjaro_blog_area">
                            <div class="kilimanjaro_thumb">
            <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                            </div>
                            <a href="#">Your Blog Title Goes Here</a>
                            <p class="kilimanjaro_date">21 Jan 2018</p>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>Quick Contact</h5>
                        <div class="kilimanjaro_single_contact_info">
                            <h5>Phone:</h5>
                            <p>+255 789 54 50 40 <br> +2255 766 90 94 00</p>
                        </div>
                        <div class="kilimanjaro_single_contact_info">
                            <h5>Email:</h5>
                            <p>support@webblogoverflow.com <br> luckmoshy@gmail.com</p>
                        </div>
                    </div>
                    <div class="kilimanjaro_part">
                        <h5>Latest Works</h5>
                        <div class="kilimanjaro_works">
                            <a class="kilimanjaro_works_img" href="img/gallery/1.jpg"><img src="img/gallery/1.jpg" alt=""></a>
                            <a class="kilimanjaro_works_img" href="img/gallery/4.jpg"><img src="img/gallery/4.jpg" alt=""></a>
                            <a class="kilimanjaro_works_img" href="img/gallery/5.jpg"><img src="img/gallery/5.jpg" alt=""></a>
                            <a class="kilimanjaro_works_img" href="img/gallery/7.jpg"><img src="img/gallery/7.jpg" alt=""></a>
                            <a class="kilimanjaro_works_img" href="img/gallery/10.jpg"><img src="img/gallery/10.jpg" alt=""></a>
                            <a class="kilimanjaro_works_img" href="img/gallery/11.jpg"><img src="img/gallery/11.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area Start -->
    <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© All Rights Reserved by <a href="#">Webublogoverflow.blogspot -(with all love)<i class="fa fa-love"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>

</html>