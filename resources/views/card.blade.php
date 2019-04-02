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
        <div class="btn-preorder wow bounce">
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
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
      <span _ngcontent-c3="" aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
      <span _ngcontent-c3="" aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</section>
<section id="overview">
  <div class="container common-bg">
    <div class="row">
	  <div class="col-md-12 word-block">
		<h1 class="wow fadeInDown">阿佈故事卡</h1>
		<div class="wow fadeInUp">
		  <p>用卡的方式，记录留存您那独一无二的故事。</P>
		  <p>我们用心聆听，贴心制作。</P>
		  <div class="btn-buy wow fadeInUp">
          <a class="btn btn-primary" href="https://www.taobao.com/">立即购买</a></div>
		</div>
	  </div>
	</div>
  </div>
</section>
<section id="show">
  <div class="container">
    <div class="row common-bg card-row">
			<div class="pro-img-wrap left col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-1.png" /></div>
			</div>
			<div class="pro-img-wrap right col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-2.png" /></div>
			</div>
    </div>
    <div class="row common-bg card-row">
			<div class="pro-img-wrap left col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-3.png" /></div>
			</div>
			<div class="pro-img-wrap right col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-4.png" /></div>
			</div>
    </div>
		<div class="row common-bg card-row">
			<div class="pro-img-wrap left col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-5.png" /></div>
			</div>
			<div class="pro-img-wrap right col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-6.png" /></div>
			</div>
    </div>
		<div class="row common-bg card-row">
			<div class="pro-img-wrap left col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-7.png" /></div>
			</div>
			<div class="pro-img-wrap right col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-8.png" /></div>
			</div>
    </div>
		<div class="row common-bg card-row">
			<div class="pro-img-wrap left col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-9.png" /></div>
			</div>
			<div class="pro-img-wrap right col-md-6 col-xs-12">
				<div class="wow zoomIn">
					<img src="/static/img/card-10.png" /></div>
			</div>
    </div>
		<div class="row">
			<div class="pro-img-wrap left col-md-12">
				<div class="wow zoomIn">
					<img class="img-responsive" src="/static/img/book-11.png" /></div>
			</div>
		</div>
  </div>
</section>
@endsection