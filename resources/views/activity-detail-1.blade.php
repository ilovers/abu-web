@extends('layouts.app')
@section('content')
<section id="top">
  <!--使用方法 href="/?v=activity-detail&id=1"-->
  <div class="container top-wrap wow fadeInDown">
    <div class="row top-title">
			<div class="col-md-12">
				<h1>标题-活动1</h1>
			</div>
  	</div>
  </div>
</section>
<section id="activity">
	<div class="container">
		<div class="row content-row common-bg">
			<div class="col-md-12">
				<div class="wow zoomIn">
					<img  class="img-responsive" src="/static/img/activity-detail-1-1.png" /></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row content-row common-bg">
			<div class="col-md-12">
				<div class="wow zoomIn">
					<img  class="img-responsive" src="/static/img/activity-detail-1-2.png" /></div>
			</div>
		</div>
	</div>
</section>
@endsection