<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{$data['meta']->title}}</title>
<meta content="{{$data['meta']->keywords}}" name="keywords">
<meta content="{{$data['meta']->description}}" name="description">
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

<!--=== Wrapper Start ===-->
<div class="wrapper" id="main">

@include('home.header')

  <!--=== Flex Slider Start ===-->
  <section class="pt-0 pb-0">
    <div class="slider-bg flexslider">
      <ul class="slides">
        <!--=== SLIDE 1 ===-->
        <li>
          <div class="slide-img" style="background:url(/home/images/slides/home-bg-1.jpg) center center / cover scroll no-repeat;"></div>
          <div class="hero-text-wrap">
            <div class="hero-text white-color">
              <div class="container text-center">
                <h2 class="white-color font-500 letter-spacing-5">第五代后箱盖</h2>
                <h1 class="white-color text-uppercase font-700">中国皮卡网指定合作商</h1>
                <h3 class="white-color font-400"><!-- We develop products and services for ecommerce, insurance <br>and a handful of other key industries. --></h3>
                <p class="text-center mt-30"><a class="btn btn-white btn-rounded btn-animate"><span>查看产品详情<i class="icofont icofont-arrow-right"></i></span></a> </p>
              </div>
            </div>
          </div>
        </li>
        <!--=== SLIDE 2 ===-->
        <li>
          <div class="slide-img" style="background:url(/home/images/slides/home-bg-2.jpg) center center / cover scroll no-repeat;"></div>
          <div class="hero-text-wrap gradient-overlay-bg">
            <div class="hero-text">
              <div class="container text-center">
                <h2 class="white-color font-500 letter-spacing-5">Visualizing Innovation</h2>
                <h1 class="white-color text-uppercase font-700">Experience Design Agency</h1>
                <p class="text-center mt-30"><a class="btn btn-dark btn-rounded btn-animate"><span>Learn More <i class="icofont icofont-arrow-right"></i></span></a> <a class="btn btn-outline-white btn-rounded">Contact Us</a> </p>
              </div>
            </div>
          </div>
        </li>
        <!--=== SLIDE 3 ===-->
        <li>
          <div class="slide-img" style="background:url(/home/images/slides/home-bg-3.jpg) center center / cover scroll no-repeat;"></div>
          <!-- <div class="hero-text-wrap">
            <div class="hero-text">
              <div class="container text-center">
                <h2 class="white-color font-500 letter-spacing-5">Scoda Creative Agency</h2>
                <h1 class="white-color text-uppercase font-700">Business Consulting</h1>
                <h3 class="white-color font-400">A digital agency focused on UX / UI and strategic development.</h3>
                <p class="text-center mt-30"><a class="btn btn-color btn-rounded">See Our Work</a> </p>
              </div>
            </div>
          </div> -->
        </li>
      </ul>
    </div>
  </section>
  <!--=== Flex Slider End ===-->

  <!--=== Who We Are Start ===-->
  <section class="first-ico-box">
    <div class="dn-bg-lines">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
   <!--  <div class="left_parallax">
      <div class="vertical-text">
        <h3 data-lax-preset="driftRight" data-lax-optimize=true class="lax chunkyText font-700 dark-color">Design</h3>
      </div>
    </div> -->
    <!-- <div class="right_parallax">
      <h3 data-lax-preset="driftLeft" data-lax-optimize=true class="lax chunkyText font-700 red-color">Creative.</h3>
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="wow fadeTop" data-wow-delay="0.1s">关于我们</h2>
          <h4 class="text-uppercase wow fadeTop" data-wow-delay="0.2s">- The way we work is fun -</h4>
          <p class="mt-30 wow fadeTop" data-wow-delay="0.3s">郑州喀达尔信息科技有限公司是一家汽车配件设计研发、模具制造、产品生产、销售与一体的产品创新企业，公司多年以来一直专注于汽车钣金件开发与生产，现新推出皮卡车全序冲压钣金货箱盖。产品有长城、江铃、日产、福田、大通、江淮TOYOTA、FORD、NISSAN、MAZDA等国内外各种皮卡车型货箱盖。产品采用整车生产工艺三维测点建模，全序模具冲压成型、机器人自动焊接、整体电泳等行业先进车身件制造工艺，搭配全新设计贯穿式尾灯，无损免打孔安装，为用户呈现全新概念的优质产品。</p>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-4 feature-box text-center radius-icon wow fadeTop" data-wow-delay="0.1s"> <i class="icofont icofont-signal font-50px default-icon"></i>
          <h4 class="text-uppercase">皮卡车型 整体上升</h4>
          <p>潜力巨大 势头正劲</p>
        </div>
        <div class="col-md-4 feature-box text-center radius-icon wow fadeTop" data-wow-delay="0.2s"> <i class="icofont icofont-responsive font-50px default-icon"></i>
          <h4 class="text-uppercase">皮卡政策 逐步放开</h4>
          <p>政策放开 扫除障碍</p>
        </div>
        <div class="col-md-4 feature-box text-center radius-icon wow fadeTop" data-wow-delay="0.3s"> <i class="icofont icofont-money-bag font-50px default-icon"></i>
          <h4 class="text-uppercase">皮卡消费 习惯改变</h4>
          <p>品质优先 消费升级</p>
        </div>
      </div>
    </div>
  </section>
  <!--=== Who We Are End ===-->

  <!--=== Portfolio Start ===-->
  <section class="pt-0 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="wow fadeTop" data-wow-delay="0.1s">爆款产品</h2>
          <h4 class="text-uppercase wow fadeTop" data-wow-delay="0.2s">- Hot Products -</h4>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="portfolio-container text-center">

          <ul id="portfolio-grid" class="three-column">
          @foreach($data['product'] as $vo)
            <li class="portfolio-item wow fadeIn" data-wow-delay="0.1s" data-groups='["all", "print", "branding"]'>
              <div class="portfolio gallery-image-hover">
                <div class="dark-overlay"></div>
                <img src="{{$vo->thumb}}" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title"></h3>
                    <a href="single-portfolio.html" class="links">{{$vo->title}}</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="{{$vo->thumb}}"><i class="icofont icofont-search-1"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="icofont icofont-link-alt"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
          @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--=== Portfolio End ===-->


  <!--=== Blogs Start ===-->
  <section>
    <div class="dn-bg-lines">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="wow fadeTop" data-wow-delay="0.1s">新闻资讯</h2>
          <h4 class="text-uppercase wow fadeTop" data-wow-delay="0.2s">- Latest News -</h4>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-12 remove-padding">
          <div class="owl-carousel blog-slider">
          @foreach($data['news'] as $vo)
            <div class="post">
              <div class="post-img"> <img class="img-responsive" src="{{$vo->thumb}}" alt="{{$vo->keywords}}"/> </div>
              <div class="post-info">
                <h3><a href="blog-grid.html">{{$vo->title}}</a></h3>
                <h6>{{date("Y-m-d",$vo->created_at)}}</h6>
                <p>{{$vo->description}}...</p>
                <a class="readmore" href="#"><span>Read More</span></a> </div>
            </div>
            <!--=== Post End ===-->
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Blogs End ===-->
  @include('home.footer')

  <!--=== GO TO TOP  ===-->
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
  <!--=== GO TO TOP End ===-->

</div>
<!--=== Wrapper End ===-->

<!--=== Javascript Plugins ===-->
<script src="/home/js/jquery.min.js"></script>
<script src="/home/js/validator.js"></script>
<script src="/home/js/plugins.js"></script>
<script src="/home/js/master.js"></script>
<script src="/home/js/bootsnav.js"></script>
<!--=== Javascript Plugins End ===-->

<script>
  window.onload = function() {
    document.getElementById("main").classList.add("loaded")

    lax.setup()

    const update = () => {
      lax.update(window.scrollY)
      window.requestAnimationFrame(update)
    }

    window.requestAnimationFrame(update)

    let w = window.innerWidth
    window.addEventListener("resize", function() {
      if(w !== window.innerWidth) {
        lax.updateElements()
      }
    });
  }
</script>

</body>
</html>
