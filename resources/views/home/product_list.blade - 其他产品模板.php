<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>新闻资讯</title>
<link rel="shortcut icon" href="/home/images/favicon.ico">
<link rel="stylesheet" href="/home/css/master.css">
<link rel="stylesheet" href="/home/css/responsive.css">
</head>
<body>

<!--=== Loader Start ======-->
<div id="loader-overlay">
  <div class="loader-wrapper">
    <div class="scoda-pulse"></div>
  </div>
</div>
<!--=== Loader End ======-->

<!--=== Wrapper Start ======-->
<div class="wrapper">

  <!--=== Header Start ======-->
  @include('home.header')
  <!--=== Header End ======-->
  
  <!--=== page-title-section start ===-->
  <section class="title-hero-bg portfolio-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="page-title text-center">
        <h1>第五代后箱盖</h1>
        <h4 class="text-uppercase mt-30 white-color">专业皮卡改装</h4>
      </div>
    </div>
  </section>
  <!--=== page-title-section end ===-->
  
  <!--=== Portfolio Start ======-->
  <section class="pt-100 pt-100">
    <div class="container">
      <div class="row">
        <div class="portfolio-container text-center">
          <ul id="portfolio-filter" class="list-inline filter-transparent">
            <li class="active" data-group="all">All</li>
            <li data-group="design">Design</li>
            <li data-group="web">Web</li>
            <li data-group="branding">Branding</li>
            <li data-group="print">Print</li>
          </ul>
          <ul id="portfolio-grid" class="three-column hover-two">

            <li class="portfolio-item gutter-space" data-groups='["all", "print", "branding"]'>
              <div class="portfolio">
                <div class="dark-overlay"></div>
                <img src="" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">ddddddd</h3>
                    <a href="single-portfolio.html" class="links">查看详情</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="/home/images/portfolio/grid/1.jpg"><i class="icofont icofont-search-1"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="icofont icofont-link-alt"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>

            <li class="portfolio-item gutter-space" data-groups='["all", "print", "branding"]'>
              <div class="portfolio">
                <div class="dark-overlay"></div>
                <img src="/home/images/portfolio/grid/2.jpg" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">Magazine</h3>
                    <a href="single-portfolio.html" class="links">Branding</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="/home/images/portfolio/grid/2.jpg"><i class="icofont icofont-search-1"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="icofont icofont-link-alt"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
            
          </ul>
        </div>
      </div>
      <div class="row mt-100">
        <p class="text-center"><a class="btn btn-color btn-circle">Start a Project</a></p>
      </div>
    </div>
  </section>
  <!--=== Portfolio End ======-->
  
  <!--=== Clients Start ======-->
  <section class="pt-50 pb-50 white-bg">
    <div class="container">
      <div class="row">
        <div id="client-slider" class="owl-carousel">
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/1.png" alt="01"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/2.png" alt="02"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/3.png" alt="03"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/4.png" alt="04"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/5.png" alt="05"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/6.png" alt="06"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/7.png" alt="07"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/8.png" alt="08"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/9.png" alt="09"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="/home/images/clients/10.png" alt="10"/> </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Clients End ======-->
  
  <!--=== Footer Start ======-->
  <footer class="footer" id="footer-fixed">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="widget widget-text">
              <div class="logo logo-footer"><a href="index.html"> <img class="logo logo-display" src="/home/images/logo-footer.png" alt=""></a> </div>
              <p>We are a fully in-house digital agency focusing on branding, marketing, web design and development with clients ranging from start-ups, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius quam ut magna ultricies pellentesque.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="widget widget-links">
              <h5 class="widget-title">Work With Us</h5>
              <ul>
                <li><a href="#">Themeforest</a></li>
                <li><a href="#">Audio Jungle</a></li>
                <li><a href="#">Code Canyon</a></li>
                <li><a href="#">Video Hive</a></li>
                <li><a href="#">Envato Market</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="widget widget-links">
              <h5 class="widget-title">Useful Links</h5>
              <ul>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="contact-simple.html">Contact Us</a></li>
                <li><a href="service-simple.html">Our Services</a></li>
                <li><a href="term-condition.html">Terms &amp; Conditions</a></li>
                <li><a href="career.html">Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="widget widget-text widget-links">
              <h5 class="widget-title">Contact Us</h5>
              <ul>
                <li> <i class="icofont icofont-google-map"></i> <a href="#">Park Lane Llandrindod Wells, LD7 9QW</a> </li>
                <li> <i class="icofont icofont-iphone"></i> <a href="#">+44 1632 960290</a> </li>
                <li> <i class="icofont icofont-mail"></i> <a href="#">helloscoda@gmail.com</a> </li>
                <li> <i class="icofont icofont-globe"></i> <a href="#">www.envato.com</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <ul class="social-media">
              <li><a href="#" class="icofont icofont-linkedin"></a></li>
              <li><a href="#" class="icofont icofont-facebook"></a></li>
              <li><a href="#" class="icofont icofont-twitter"></a></li>
              <li><a href="#" class="icofont icofont-pinterest"></a></li>
              <li><a href="#" class="icofont icofont-instagram"></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="copy-right text-right">Copyright &copy; 2021.Company name All rights reserved.<a target="_blank" href="https://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=== Footer End ======-->
  
  <!--=== GO TO TOP  ===-->
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
  <!--=== GO TO TOP End ===-->
  
</div>
<!--=== Wrapper End ======-->

<!--=== Javascript Plugins ======-->
<script src="/home/js/jquery.min.js"></script>
<script src="/home/js/validator.js"></script>
<script src="/home/js/plugins.js"></script>
<script src="/home/js/master.js"></script>
<script src="/home/js/bootsnav.js"></script>
<!--=== Javascript Plugins End ======-->

</body>
</html>