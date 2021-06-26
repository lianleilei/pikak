<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{$data['page']->title}}</title>
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
  <section class="title-hero-bg blog-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="page-title text-center">
        <h1>{{$data['page']->title}}</h1>
      </div>
    </div>
  </section>
  <!--=== page-title-section end ===-->

  <!--=== Blogs Start ======-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <div class="post-info">
              <h3><a href="#">{{$data['page']->title}}</a></h3>
            </div>
          </div>
          <div class="blog-standard">
            <p>{!! $data['page']->content !!}</p>
          </div>

        </div>
        <!--=== Left Side End===-->
        <div class="col-md-3 col-md-offset-1 right-col-rv">
          <div class="widget sidebar_widget widget_archive">
            <h4 class="widget-title">资讯热榜</h4>
            <ul>
              <li> <a href="#">阿尔法汽车推出两款亲民纯电动皮卡阿尔法汽车推出两款亲民纯电动皮卡</a> </li>
              <li> <a href="#">May 2016</a> </li>
              <li> <a href="#">June 2015</a> </li>
              <li> <a href="#">Febuary 2017</a> </li>
              <li> <a href="#">April 2015</a> </li>
            </ul>
          </div>
        </div>
        <!--=== Right Side End ===-->
      </div>
    </div>
  </section>
  <!--=== Blogs End ======-->

  <!--=== Footer Start ======-->
  @include('home.footer')
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
