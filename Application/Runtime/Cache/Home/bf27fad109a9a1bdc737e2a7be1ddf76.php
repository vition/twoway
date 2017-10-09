<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo ((isset($posts["posts_title"]) && ($posts["posts_title"] !== ""))?($posts["posts_title"]):""); echo ($webname); ?></title>
<meta name="description" content="<?php echo ($webdescription); ?>">
<meta name="keywords" content="<?php echo ($webkeys); ?>">
<!-- <link rel="stylesheet" href="/Public/Temp/home/css/flexslider.css"> -->
<link rel="stylesheet" href="/Public/Temp/home/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/Temp/home/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/Temp/home/css/style.css">
<link rel="stylesheet" href="/Public/Temp/home/css/timelinestyle.css" />

<!-- <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- <link href="https://static.bootcss.com/www/assets/css/site.min.css?v5" rel="stylesheet"> -->
	<style type="text/css">
		#main-nav .navbar-header a {width:240px;background:url("/Public/Temp/home/images/logo.png") no-repeat;background-size:auto 60px;	color: #fff;    margin-left: 5px;}
		.project-a{color:#055AA5;}
		.project-a:hover{color:#FF0000;}
		.caption > p{background-color: rgba(255, 255, 255, 0.7);color:#000000!important;padding:1em!important;line-height: 1.1em;font-size: 1.1em!important;}
		.about-right i{color:#0758A4;font-size: 45px;padding: 0px 30px 0 0;}
		.about-right p{color:#8E8E8E;font-size: 1.1em;padding-top:5px;padding-bottom:20px;}
		

		body {
			font-size: 1.6rem;
    		font-weight: normal;
    		line-height: 1.6;
		}
		.topic {
			background: rgba(0, 0, 0, 0) url("/Public/upload/images/m-bg.jpg") no-repeat scroll 0 0 / 100% 100%;
    		height: 130px;
    		width: 100%;
		}
		.toppic-title {
		    color: #fff;
		    padding-top: 20px;
		}
		/*.left {
		    float: left;
		}*/
		.toppic-span {
		    color: white; 
		    font-family: 'Segoe UI', Arial, sans-serif; 
		    font-size: 14px; 
		    line-height: 21px;
		    margin-left: 30px;
		}
		.am-container-1 {
			margin-left: 500px;
		}
		.product-show-title{
			background-color: #0086da;
		    border-radius: 3px;
		    color: #ffffff;
		    display: inline-block;
		    margin-left: 30px;
		    margin-top: 30px;
		    margin-bottom: 10px;
		    padding: 2px 5px;
		    font-weight: bold;
		}
		.tab2 {
			background-color: #01050B;
		}
		.tab3 {
			background-color: #01050B;
		}
		.tab1 {
			background: rgba(0, 0, 0, 0) url("/Public/upload/images/m-bg.jpg") no-repeat scroll 0 0 / 100% 100%;
		    height: 130px;
		    width: 100%;
		}
		.jumbotron {
			background: url("/Public/upload/images/m-bg.jpg");
			margin-bottom: 0;
		}
	</style>
</head>
<body id="top" data-spy="scroll">
	<!--top header-->
		<!-- 渐变色样式 -->
	<style>
		#grad {
			width: 100%;
			height: 10px;
			  background: -webkit-linear-gradient(left,rgba(6,89,165,1),rgba(6,89,165,0)); /* Safari 5.1 - 6 */
			  background: -o-linear-gradient(right,rgba(6,89,165,1),rgba(6,89,165,0)); /* Opera 11.1 - 12*/
			  background: -moz-linear-gradient(right,rgba(6,89,165,1),rgba(6,89,165,0)); /* Firefox 3.6 - 15*/
			  background: linear-gradient(to right, rgba(6,89,165,1), rgba(6,89,165,0)); /* 标准的语法 */
			} 
	</style>
	<!-- 渐变色样式 -->

<header id="home">
	<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top-left">

							<!-- <ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul> -->

						</div>
					</div>

					

				</div>
			</div>
		</section>
	<!--main-nav-->
	<div id="main-nav">
		<nav class="navbar">
			<div class="container">
				<div class="navbar-header">
					<a href="<?php echo U('./Home/index');?>" class="navbar-brand"></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
						<span class="sr-only">Toggle</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="ftheme">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo U('./Home/index');?>">Twoway</a></li>
						<li><a href="<?php echo U('./Home/index');?>#about">关于TW</a></li>
						<li><a href="<?php echo U('./Home/index');?>#about-bg">TW数据</a></li>
						<li><a href="<?php echo U('./Home/index');?>#service">TW的服务</a></li>
						<li><a href="<?php echo U('./Home/index');?>#portfolio">TW项目</a></li>
						<li><a href="<?php echo U('./Home/index/shanghai');?>">上海项目</a></li>
						<li><a href="<?php echo U('./Home/index');?>#contact">联系我们</a></li>
						<li><a href="<?php echo U('./Home/index/hire');?>">人才招聘</a></li>
						<li class="hidden-sm hidden-xs">
                            <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
					</ul>
				</div>
				<div class="search-form">
                    <form>
                        <input type="text" id="s" size="40" placeholder="Search..." />
                    </form>
                </div>
			</div>
		</nav>
	
	</div><div id="grad">

	</div>
</header>
	<!--slider-->
	<div class="jumbotron">
		<div class="container">
			<hgroup>
				<img src="/Public/upload/images/m-zp.png" alt=""  style="height: 50px;" />
				<h3 style="color: white; font-size: 26px;">招贤纳士</h3>
			</hgroup>
		</div>
	</div>
	<div class="tab2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 tab2-img">
					<img src="/Public/upload/images/m-zp1.png" class="auto img-responsive center-block" alt="">
				</div>
				<div class="text col-md-6 col-sm-6 tab2-text" style="padding-top: 50px">
					<span class="product-show-title">客户经理</span>
					<p class="toppic-span">职位职责：</p>
					<p class="toppic-span">1.负责汽车行业的业务跟进及客户管理维护。</p>
					<p class="toppic-span">2. 能够独立面对客户处理项目中的问题，及时收集和反馈客户信息，积极协调和统筹公司内外资源，不断提升客户满意度。</p>
					<p class="toppic-span">3.有撰 
写相关策划方案，并完成与客户的提案能力。</p>
					<p class="toppic-span">4.维护客户关系，接待客户并定期和不定期的拜访，深度挖掘客户需求。</p>
					<p class="toppic-span">5.参与合同的谈判、签订和项目收款工作。
</p>
					<p class="toppic-span">任职要求：</p>
					<p class="toppic-span">1、 大专及以上学历，广告、营销、传播、设计等相关专业背景优先。</p>
					<p class="toppic-span">2、 3年以上广告公司或活动公关公司经验，熟悉汽车展览、发布会及大型公关活动。</p>
					<p class="toppic-span">3、 具较强的客户沟通能力，对于突发事件有明确的判断力和较强的应变力。</p>
					<p class="toppic-span">4、 具体良好的文字功底，能独立完成线下活动方案撰写，具体优秀的提案能力。</p>
					<p class="toppic-span">5、 能根据公司高层与客户的要求独立完成跟进一个项目</p>		
				</div>
				
			</div>
		</div>
	</div>

	<div class="tab2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 tab2-img">
					<img src="/Public/upload/images/121.jpg" class="auto img-responsive center-block" alt="" style="padding-top: 30px">
				</div>
				<div class="text col-md-6 col-sm-6 tab2-text">
					<span class="product-show-title">策划经理</span>
					<p class="toppic-span">职位描述：</p>
					<p class="toppic-span">1.大专以上学历，4年以上大型广告/公关公司策划相关工作经验，有成功策划案例，具备较强的客户沟通和提案能力；</p>
					<p class="toppic-span">2.有良好的行业背景，熟悉汽车领域，熟悉传统媒体运用、公关传播及行动营销特性；善于发现客户的需求和潜在需求；</p>
					<p class="toppic-span">3.能依据客户需求，制订营销策划、市场推广和销售战略、策略、计划方案，并组织实施；</p>
					<p class="toppic-span">4.能独立组织或带领团队完成市场推广、公关活动策划项目，包括撰写策划方案等；</p>
					<p class="toppic-span">5.良好工作态度、高度的责任心，较强的压力承受能力，适应经常性延时工作；
</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="tab3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 tab2-img">
					<img src="/Public/upload/images/1313.jpg" class="auto img-responsive center-block" alt="" style="padding-top: 40px">
				</div>
				<div class="text col-md-6 col-sm-6 tab2-text">
					<span class="product-show-title">项目经理</span>
					<p class="toppic-span">职位描述：</p>
					<p class="toppic-span">1. 充分理解项目需求，与客户进行良好沟通，根据市场状况、竞品分析，完成相关活动的企划方案</p>
					<p class="toppic-span">2. 能够独立、准确无误地管理并完成车展，试乘试驾，新车发布会等相关活动的执行统筹工作 </p>
					<p class="toppic-span">3. 把控项目前期统筹，中期运营，后期数据整理分析 </p>
					<p class="toppic-span">4. 评估和控制项目成本以保证利润，并及时向客户请款、按时向第三方付款 </p>
					<p class="toppic-span">职位要求：
</p>
					<p class="toppic-span">1.男女不限，有一定的策划能力</p>
					<p class="toppic-span">2.3年以上汽车行业线下公关活动工作经验，熟悉作业流程。</p>	
					<p class="toppic-span">3.2年以上管理3人以上团队经验</p>
					<p class="toppic-span">4.熟练做Excel,ppt等办公软件做相关活动手册及总结报告 </p>
					<p class="toppic-span">5.具有团队合作精神以及服务意识，能适应长期出差者优先</p>				
				</div>
			</div>
		</div>
	</div>


	<div class="tab3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 tab2-img">
					<img src="/Public/upload/images/m-zp3.png" class="auto img-responsive center-block" alt="" style="padding-top: 10px">
				</div>
				<div class="text col-md-6 col-sm-6 tab2-text" style="padding-top: 40px">
					<span class="product-show-title">广告客户总监</span>
					<p class="toppic-span">岗位职责：</p>
					<p class="toppic-span">1.主动寻找市场机会，了解行业动向、敏锐扑捉客户信息;可灵活有策略的影响客户,具备场控意识，并可主动引导客户进入创意意境,与客户建立良好关系以及新业务的开发;</p>
					<p class="toppic-span">2.对车展项目有前瞻性的想法,可针对不同客户提出有效分析改善意见,方案,落实方法;</p>
					<p class="toppic-span">3.对现有的车展客户以及将来客户的工作流程有系统的认识和了解,给组员有构想方案的最大指引;</p>
					<p class="toppic-span">4.有效,及时的推动相关与案人员和客户的沟通与落实,严格按照时间推进表引导推进;收集客户满意度;善用发挥组员所长，主动给予支持与辅导;</p>
					<p class="toppic-span">5.提交项目总结、季度总结、年度总结,总结中分析发现问题;制定与业务紧密相关联的培训课件,定时组织培训进修, 引导组员掌握沟通技巧，有效倾听，适时引导，积极反馈，与对方达成共识技能,提升整体专业技能.</p>
					<p class="toppic-span">职位要求：</p>
					<p class="toppic-span">1.男女不限;</p>
					<p class="toppic-span">2.5年以上车展管理工作经验,整合现有资源，主动为客户提出新需求,对客户提出的延伸需求或新需求，能够及时提出引导性思维;</p>
					<p class="toppic-span">3.强策划能力,沟通能力,决策能力,分析能力,提案能力及现场应变能力,好的项目统筹能力,项目文书表达能力;</p>
					<p class="toppic-span">4.非常好的团队协作能力,对车展领域有详深远的个人发展规划;</p>

				</div>
			</div>
		</div>
	</div>

	<div class="tab3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 tab2-text">
					<span class="product-show-title">项目总监</span>
					<p class="toppic-span">职位描述：</p>
					<p class="toppic-span">负责整个项目部的技能、保证项目质量，把控项目出品，主动协调其他专业团队展开/推进/完成情况并给予专业监控及指导。负责项目团队管理，团队整体能力提升，激励团队士气及培养下属。</p>
					<p class="toppic-span">1、带领团队消化公司内部所有项目，其中包括汽车活动的各种类型：车展、巡展、试乘试驾、大型 会务等等。</p>
					<p class="toppic-span">2、优秀的客户沟通能力，与客户保持良好沟通；设定项目整体思路，提供项目策划创意，监控项目进
度，确保项目完成质量和品质。</p>
					<p class="toppic-span">3、整体控制项目预算，合理安排项目款项支付，监督项目后期结算，提高项目利润。</p>
					<p class="toppic-span">4、对项目存在潜在风险给予客观判断，并提供预防措施和技术支持。</p>
					<p class="toppic-span">5、协调解决项目进程中出现的困难（如财务、质量、第三方合作等方面）</p>
					<p class="toppic-span">6、项目产品建设及设定项目流程标准作业。</p>
					<p class="toppic-span">7、主动为团队提供业务支援和辅导，适时提出具体、有益的建议。凝聚团队士气，保持团队稳定性。</p>
					<p class="toppic-span">8、在专业上（制作、器材、运营、演出、行政财务制度）培训下属，提高下属专业能力。</p>
				</div>
				<div class="text col-md-6 col-sm-6 tab2-text" style="padding-top: 70px">
					
					<p class="toppic-span">职位要求：</p>
					<p class="toppic-span">1、8年以上广告公司，5年以上汽车行业公关活动公司实战经验，，熟悉广告行业的操作流程。优秀的沟通能力、项目统筹能力及策划能力。</p>
					<p class="toppic-span">2、能够熟练统筹和执行各种汽车类别公关活动，具备较强的项目把控及监控能力。</p>
					<p class="toppic-span">3、对项目管理有较深的认知，具备跨部门协调合作能力</p>
					<p class="toppic-span">4、能够熟练的撰写相关活动执行方案，文字功底佳。</p>
					<p class="toppic-span">5、能够独立控制项目成本。</p>
					<p class="toppic-span">6、优秀的团队管理能力，能够培养下属，具备逻辑思维，有说服力。</p>
					<span class="product-show-title">工作地址</span>
					<p class="toppic-span">公司名称：广州市优博组广告有限公司</p>
					<p class="toppic-span">公司地址：广州市越秀区德政北路538号达信大厦808</p>
					<p class="toppic-span">传真：37885250</p>
					<p class="toppic-span">公司主页：www.twoway.com.cn</p>
				</div>
			</div>
		</div>
	</div>


	<!--footer-->

		<!--bottom footer-->
	<!--footer-->
<div id="bottom-footer" class="hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>

			<div class="col-md-8">
				<div class="footer-right">
                    <ul class="list-unstyled list-inline pull-right">
						<li><a href="<?php echo U('./Home/index');?>">Twoway</a></li>
						<li><a href="<?php echo U('./Home/index');?>#about">关于TW</a></li>
						<li><a href="<?php echo U('./Home/index');?>#about-bg">TW数据</a></li>
						<li><a href="<?php echo U('./Home/index');?>#service">TW的服务</a></li>
						<li><a href="<?php echo U('./Home/index');?>#portfolio">TW项目</a></li>
						<li><a href="<?php echo U('./Home/index');?>#contact">联系我们</a></li>
						<li><a href="<?php echo U('./Home/index/hire');?>">人才招聘</a></li>
						<li><?php echo ($web_footer); ?></li>
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- jQuery -->
<script src="/Public/Temp/home/js/jquery.min.js"></script>
<script src="/Public/Temp/home/js/bootstrap.min.js"></script>

<script src="/Public/Temp/home/js/jquery.inview.js"></script>
<script src="/Public/Temp/home/js/script.js"></script>
<script src="/Public/Temp/home/js/contactform.js"></script>
</body>
</html>