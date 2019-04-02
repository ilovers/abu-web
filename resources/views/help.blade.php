@extends('layouts.app')
@section('content')
<section id="top">
  <div class="container top-wrap wow fadeInDown">
    <div class="row top-title">
	  <div class="col-md-12">
	    <h1>常见问题</h1>
	  </div>
	</div>
  </div>
</section>

<section id="content">
	<div class="container">
		<div class="row content-row common-bg">
			<div class="col-md-5 img-wrap wow slideInLeft">
				<div><img class="img-responsive" src="/static/img/help-1.png" /></div>
			</div>
			<div class="col-md-7">
				<div class="wow slideInRight" id="how-to-book">
					<h1>如何预约？</h1>
					<p>请拨打以下电话，联系我们的客服进行预约。</p>
					<p>Tel: <span class="red">010-69261086&nbsp;&nbsp;&nbsp;&nbsp;15810246634</span></p>
				</div>
			</div>
		</div>
		<div class="row content-row common-bg">
			<div class="col-md-5 img-wrap wow slideInLeft">
				<div><img class="img-responsive" src="/static/img/help-2.png" /></div>
			</div>
			<div class="col-md-7">
				<div class="wow slideInRight word-more" id="re-buy">
					<h1>关于退货</h1>
					<p>您订购的产品一旦进入定制流程，我们的团队将给您安排最专</p>
					<p>业的撰稿师和设计师为您服务，他们都付出了劳动，由于您的</p>
					<p>原因终止了定制流程，我们是要收取一定的费用哦，按照已经</p>
					<p>完成的进度来计算，退货比例在10%-80%之间，</p>
					<ul>
						<li>进入档期安排沟通阶段收取10%，</li>
						<li>进入撰稿阶段收取40%，</li>
						<li>进入设计阶段收取60%，</li>
						<li>进入制作阶段收取80%。</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row content-row common-bg">
			<div class="col-md-5 img-wrap wow slideInLeft">
				<div><img class="img-responsive" src="/static/img/help-3.png" /></div>
			</div>
			<div class="col-md-7">
				<div class="wow slideInRight word-more" id="confirm">
					<h1>关于素材与确稿</h1>
					<p><span class="pink">素材：</span>别担心没故事，撰稿师会挖掘你的故事和情感，照片不</p>
					<p>够，也没关系，设计师会补充一些设计素材，给您呈现更好的</p>
					<p>视觉效果。<span class="pink">风格偏好：</span>在访谈环节，撰稿师会跟您确认您想要</p>
					<p>表达的故事内容。</p>
					<p><span class="pink">确稿：</span>您有一次“修改”的机会，包括“文字稿”和“设计稿”</p>
					<p>我们会为每一个客户量身定制最适合您的策划方案，也会充分</p>
					<p>尊重您的修改意见。为了提高工作效率,节省客户时间，若多次</p>
					<p>修改需要收取一定费用哦。</p>
				</div>
			</div>
		</div>
		<div class="row content-row common-bg">
			<div class="col-md-5 img-wrap wow slideInLeft">
				<div><img class="img-responsive" src="/static/img/help-4.png" /></div>
			</div>
			<div class="col-md-7">
				<div class="wow slideInRight" id="color">
					<h1>关于色差</h1>
					<p>由于相片像素、显示器色彩原因，您收到的作品，可能跟您提供的</p>
					<p>照片有一定色差，这是行业正常现象。《阿佈故事》产品，本身以</p>
					<p>故事和情感取胜，不会因某张照片有少许色彩差而影响作品品质。</p>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row content-row common-bg">
			<div class="col-md-5 img-wrap wow slideInLeft">
				<div><img class="img-responsive" src="/static/img/help-5.png" /></div>
			</div>
			<div class="col-md-7">
				<div class="wow slideInRight" id="create">
					<h1>关于制作</h1>
					<p>所有制品皆由手工制作，可能会有个别的不完美之处，如果你</p>
					<p>是一个超完美者，请谨慎下单。但我们会尽自己最大的努力做</p>
					<p>到相对完美。我们队产品那份执着和热情，需要您的保护。</p>
				</div>
			</div>
		</div>
		<div class="row content-row common-bg">
			<div class="col-md-5 img-wrap wow slideInLeft">
				<div><img class="img-responsive" src="/static/img/help-6.png" /></div>
			</div>
			<div class="col-md-7">
				<div class="wow slideInRight" id="send">
					<h1>关于发货</h1>
					<p>定制期间务必保持通讯顺通，联系不上的话，只能重新安排您</p>
					<p>的订单档期，并顺延您的发货时间，作品交付后，因我放原因</p>
					<p>造成差错，我方将负责重新印制；若您已签订“确稿”协议，</p>
					<p>请您多多担待哦！</p>
				</div>
			</div>
		</div>
	</div>

</section>
@endsection