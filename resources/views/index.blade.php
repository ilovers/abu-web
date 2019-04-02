@extends('layouts.app')
@section('content')
<section id="top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="trademark wow bounce">
          <p class="short-title">阿佈故事</p>
          <p class="name">人生相知 故事相伴</p>
          <p class="slogan">——轻松拥有属于自己的故事书</p></div>
        <div class="btn-buy wow bounce">
          <a class="btn btn-primary" href="/?v=help">立即预约</a></div>
      </div>
    </div>
  </div>
</section>
<section id="banner">
  <div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/static/img/banner-1.png" alt="First slide"></div>
      <div class="item">
        <img src="/static/img/banner-2.png" alt="Second slide"></div>
      <div class="item">
        <img src="/static/img/banner-3.png" alt="Third slide"></div>
      <div class="item">
        <img src="/static/img/banner-4.png" alt="Forth slide"></div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">
      <span _ngcontent-c3="" aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
      <span _ngcontent-c3="" aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
    </a> -->
  </div>
</section>
<section id="link">
  <div class="container common-bg">
    <div class="row">
      <div class="col-md-12">
        <div class="btn-more">
          <a class="btn btn-primary wow zoomIn" href="/?v=book">了解更多</a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="link-wrap">
          <a href="https://www.taobao.com/" target="_blank"><img src="/static/img/abu-link.png" /></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="show">
  <div class="container common-bg">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
				<div id="product-des">
					<img class="img-bg" src="/static/img/our-product.png" />
				</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div id="features">
          <div class="row">
            <div class="col-md-2 col-xs-4">
              <div class="feature-icon wow zoomIn">
                <img class="img-bg" src="/static/img/icon-f1.png" /></div>
            </div>
            <div class="col-md-2 col-xs-4">
              <div class="feature-icon wow zoomIn">
                <img class="img-bg" src="/static/img/icon-f2.png" /></div>
            </div>
            <div class="col-md-2 col-xs-4">
              <div class="feature-icon wow zoomIn">
                <img class="img-bg" src="/static/img/icon-f3.png" /></div>
            </div>
            <div class="col-md-2 col-xs-4">
              <div class="feature-icon wow zoomIn">
                <img class="img-bg" src="/static/img/icon-f4.png" /></div>
            </div>
            <div class="col-md-2 col-xs-4">
              <div class="feature-icon wow zoomIn">
                <img class="img-bg" src="/static/img/icon-f5.png" /></div>
            </div>
            <div class="col-md-2 col-xs-4">
              <div class="feature-icon wow zoomIn">
                <img class="img-bg" src="/static/img/icon-f6.png" /></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="pro-img-wrap left col-md-6 col-xs-12">
          <div class="wow zoomIn">
            <img src="/static/img/pro-img1-1.png" /></div>
        </div>
        <div class="pro-img-wrap right col-md-6 col-xs-12">
          <div class="wow zoomIn">
            <img src="/static/img/pro-img1-2.png" /></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="pro-img-wrap left col-md-6 col-xs-12">
          <div class="wow zoomIn">
            <img src="/static/img/pro-img2-1.png" /></div>
        </div>
        <div class="pro-img-wrap right col-md-6 col-xs-12">
          <div class="wow zoomIn">
            <img src="/static/img/pro-img2-2.png" /></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="buy">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="buy-info" class="wow fadeIn">
          <div class="buy-promise wow slideInLeft">
            <h1>和我们一起选择阿佈故事</h1>
            <p>1000+ 家庭的共同选择</p>
          </div>
          <div class="btn-buy wow bounce">
          <a class="btn btn-primary" href="https://www.taobao.com/">立即购买</a></div>
        </div>
      </div>
    </div>
</section>
@endsection