<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{$data['news']->title}}</title>
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
        <h1>News Detail</h1>
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
              <h3><a href="#">{{$data['news']->title}}</a></h3>
              <h6>{{date("Y-m-d H:i:s",$data['news']->created_at)}}</h6>
            </div>
          </div>
          <div class="blog-standard">
            <p>{!! $data['news']->content !!}</p>
          </div>

          <div class="post-tags"> <a href="#">阿尔法汽车推出两款亲民纯电动皮卡顶顶顶顶水水水</a> <a href="#">武汉皮卡解禁了！2020年12月21日起正式开始实施</a></div>
          <div class="post-controls">
            <!-- 分享<div class="post-share">
              <ul>
                <li> Share: </li>
                <li> <a href="#"><i class="icofont icofont-facebook"></i></a> </li>
                <li> <a href="#"><i class="icofont icofont-twitter"></i></a> </li>
                <li> <a href="#"><i class="icofont icofont-linkedin"></i></a> </li>
              </ul>
            </div> -->
            <div class="comments-info"> <a href="#"> <i class="icofont icofont-comment"></i> 0</a> </div>
          </div>
          <div id="respond" class="comment-respond">
            <h2 id="reply-title" class="comment-reply-title">评论</h2>
            <form method="post" id="form-comments" class="comment-form">
              <div class="form-group">
                <textarea name="comment" id="comment-field" class="form-control" placeholder="评论内容" rows="5"></textarea>
              </div>
              <div class="row-form row">
                <div class="col-form col-md-6">
                  <div class="form-group">
                    <input name="author" type="text" class="form-control" placeholder="姓名">
                  </div>
                </div>
                <div class="col-form col-md-6">
                  <div class="form-group">
                    <input name="phone" type="text" class="form-control" placeholder="手机号">
                  </div>
                </div>
              </div>
              <p class="form-submit">
                <input name="submit" type="submit" id="submit-btn" class="btn btn-color btn-square" value="提交评论">
                <input type="hidden" name="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
              </p>
            </form>
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
          <div class="widget sidebar_widget widget_categories">
            <h4 class="widget-title">Categories</h4>
            <ul>
              <li> <a href="#">Business</a> </li>
              <li> <a href="#">Health</a> </li>
              <li> <a href="#">Motion Graphic</a> </li>
              <li> <a href="#">Conecpt Design</a> </li>
              <li> <a href="#">Lifestyle</a> </li>
            </ul>
          </div>
          <div class="widget sidebar_widget widget_tag_cloud">
            <h4 class="widget-title">Tags</h4>
            <div class="post-tags"> <a href="#">Design</a> <a href="#">Envato</a> <a href="#">Photography</a> <a href="#">Videos</a> <a href="#">Creative</a> <a href="#">Apps</a> </div>
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
