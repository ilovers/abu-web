<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>阿佈故事</title>
		<meta name="description" content="阿布故事官网" />
    <meta name="keywords" content="阿布故事" />
    <link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="/static/css/common.css" rel="stylesheet">
    <link href="/static/css/{{$view}}.css" rel="stylesheet">
	<link href="/static/css/animate.css" rel="stylesheet">
  </head>
  <body>
	<div class="container">
	  <nav class="navbar navbar-fixed-top navbar-inverse navbar-static-top">
	  	<div class="container">
		  <div class="navbar-header">
	           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	             <span class="sr-only">Toggle navigation</span>
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
	           </button>
	           <a id="brand" class="navbar-brand" href="/"> 
	             <div id="logo">
				 </div>
	           </a>
	         </div>
	         <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
			     <li @if ($view=="index") class="active" @endif><a href="/">首页</a></li>
				 <li @if ($view=="frame") class="active" @endif><a href="/?v=frame">阿佈故事框</a></li>
				 <li @if ($view=="card") class="active" @endif><a href="/?v=card">阿佈故事卡</a></li>
				 <li @if ($view=="book") class="active" @endif><a href="/?v=book">阿佈故事书</a></li>
				 <li @if ($view=="help") class="active" @endif><a href="/?v=help">常见问题</a></li>
				 <li @if ($view=="activity") class="active" @endif><a href="/?v=activity">活动中心</a></li>
				 <li @if ($view=="about") class="active" @endif><a href="/?v=about">关于我们</a></li>
				 <li @if ($view=="story") class="active" @endif><a href="/?v=story">品牌故事</a></li>
	           </ul>
	         </div>
	       </div>
	  </nav>
	</div>
    @yield('content')
	<section id="bottom">
	  <div class="container-fluid">
		<div class="container">
		  <div class="row">
			<div class="col-md-6">
			  <div class="row link-wrap">
				<div class="col-md-12 wow fadeInDown">
				  <ul class="nav nav-pills">
					  <li role="presentation"><a class="bottom-link" href="/?v=frame">阿佈故事框</a></li>
				      <li role="presentation"><a class="bottom-link" href="/?v=card">阿佈故事卡</a></li>
					  <li role="presentation"><a class="bottom-link" href="/?v=book">阿佈故事书</a></li>
					  <li role="presentation"><a class="bottom-link" href="/?v=help">常见问题</a></li>
					  <li role="presentation"><a class="bottom-link" href="/?v=activity">活动中心</a></li>
					  <li role="presentation"><a class="bottom-link" href="/?v=about">关于我们</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="row logo-wrap">
				<div class="col-md-3 wow fadeInUp">
					<!-- <div><img src="/static/img/company-logo-white.png"/></div> -->
				</div>
				<div class="col-md-3 wow fadeInUp">
				<!-- 	<div><img src="/static/img/smart-logo-white.png"/></div> -->
				</div>
			  </div>
			</div>
			<div class="col-md-6">
				<div class="col-md-3 col-xs-6 download-wrap wow fadeInUp">
				  <div><img src="/static/img/wx-service.png"/></div>
				  <p>微信服务号</p>
				</div>
				<div class="col-md-3 col-xs-6 download-wrap wow fadeInUp">
				  <div><img src="/static/img/wx-account.png"/></div>
				  <p>关注公众号</p>
				</div>
				<div class="col-md-6 center">
				  <div class="bottom-contact wow slideInRight">
						<h3>联系方式</h3>
						<p>电话：010-69261086</p>
						<p class="indent">15810246634</p>
						<p>邮箱：service@abustory.cn</p>
						<p>QQ： 3209908328</p>
						<p>地址：北京大兴泰禾中央广场</p>
						<p class="indent">21c座1号楼314室</p>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 copyright">
			  <p>© 2018 北京阿佈信息科技有限公司  京ICP备17041836号-1</p>
			</div>
		  </div>
		</div>
	  </div>
	</section>
    <script src="/static/bootstrap/js/jquery.min.js"></script>
    <script src="/static/bootstrap/js/bootstrap.min.js"></script>
	<script src="/static/js/wow.min.js"></script>
	<script src="/static/js/common.js"></script>
  </body>
</html>