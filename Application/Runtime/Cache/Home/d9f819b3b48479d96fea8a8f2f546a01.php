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
	<style>
	#main-nav .navbar-header a {width:240px;background:url("/Public/Temp/home/images/logo.png") no-repeat;background-size:auto 60px;	color: #fff;    margin-left: 5px;}
	.project-a{color:#055AA5;}
	.project-a:hover{color:#FF0000;}
	.caption > p{background-color: rgba(255, 255, 255, 0.7);color:#000000!important;padding:1em!important;line-height: 1.1em;font-size: 1.1em!important;}
	.carousel-caption h3{background-color: rgba(255, 255, 255, 0.3);color:#000000!important;}
	.about-right i{color:#0758A4;font-size: 45px;padding: 0px 30px 0 0;}
	.about-right p{color:#8E8E8E;font-size: 1.1em;padding-top:5px;padding-bottom:20px;}
	ul,li {
		/*list-style: none;
		margin: 0;
		padding: 0;*/
	}
	#logo li {
		display: inline-block;
		float: left;
		width: 70px;
		height: 70px;
	}

	#myCarousel {
		margin: 50px 0 0 0;
	}
	#navbar-collapse ul {
		margin-top:0;
	}
	.carousel-inner img {
		margin: 0 auto;
	}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=bhtm8oON1GR2FwAaSr5UY3K4nke8BD28"></script>
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

    <!-- 幻灯片开始 -->
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ii): $mod = ($i % 2 );++$i; if($key == 0): ?><li data-target="#carousel-generic" data-slide-to="<?php echo ($key); ?>" class="active"></li>
				<?php else: ?>
					<li data-target="#carousel-generic" data-slide-to="<?php echo ($key); ?>"></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anbanner): $mod = ($i % 2 );++$i; if($key == 0): ?><div class="item active">
					<?php else: ?>
					<div class="item"><?php endif; ?>
					<a target="_blank" href="<?php echo ($anbanner["banner_url"]); ?>"><img src="/Public/<?php echo ($anbanner["banner_imgurl"]); ?>" alt="<?php echo ($anbanner["banner_title"]); ?>"></a>
					<div class="carousel-caption">
						<h3><?php echo ($anbanner["banner_title"]); ?></h3>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
			<!-- <div class="item">
				<img src="http://localhost/twoway/Public/Temp/home/images/slider/slider6.jpg" alt="...">
				<div class="carousel-caption">
				...懂得
				</div>
			</div>
			... -->
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">上一张</span>
		</a>
		<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">下一张</span>
		</a>
	</div>
    <!-- 幻灯片结束 -->
	<div class="container">
		<?php echo ($TWOWAY["pages_content"]); ?>	
	</div>
    <!--about-->
    <div id="about">

    	<!-- <div class="container">

			<div class="row">
			 		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			 			<div class="about-heading">
			 				<h3><?php echo ($abouttitle); ?></h3> 
			 				
			 			</div>
			 		</div>
			 	</div> 	
    	</div> -->
    	<!--about wrapper left-->
    	<div class="container">
		
    		<div class="row">
    			<div class="col-xs-12 hidden-sm col-md-5">
    					<section id="cd-timeline" class="cd-container">
    						<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-picture">
									<i class="fa fa-group fa-2x"></i>
								</div>

								<div class="cd-timeline-content">
									<h4><strong>2002年</strong></h4>
									<p>公司成立，中国第一个专业运营&项目管理公司</p>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location">
									<i class="fa fa-map-marker fa-2x"></i>
								</div>
								<div class="cd-timeline-content">
									<h4><strong>2004年</strong></h4>
									<p>逐步在全国建立分公司：广州. 深圳. 上海. 武汉. 北京. 成都. 重庆…</p>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location">
									<i class="fa fa-map-marker fa-2x"></i>
								</div>

								<div class="cd-timeline-content">
									<h4><strong>2006年</strong></h4>
									<p>开始研讨/构建EVENT领域的“客户核心需求”，组建EVENT各专项领域专业团队,启动EVENT业务</p>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location">
									<i class="fa fa-map-marker fa-2x"></i>
								</div>

								<div class="cd-timeline-content">
									<h4><strong>2009年</strong></h4>
									<p>成为专业EVENT公司，具备行业“资质与资格”的EVENT公司</p>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location">
									<i class="fa fa-map-marker fa-2x"></i>
								</div>

								<div class="cd-timeline-content">
									<h4><strong>2014年</strong></h4>
									<p>为摆脱event领域日益激烈的“恶性竞争”开始研讨event领域的“核心竞争力”</p>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location">
									<i class="fa fa-map-marker fa-2x"></i>
								</div>

								<div class="cd-timeline-content">
									<h4><strong>2015年</strong></h4>
									<p>成立marketing&contents部,围绕客户在营销上的需求，构建tw新的核心业务板块 sports，体验营销，下沉整合营销，娱乐营销等4块核心业务</p>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-movie">
									<i class="fa fa-arrow-circle-down fa-2x"></i>
								</div>

								<div class="cd-timeline-content">
									<h4><strong>2016年</strong></h4>
									<p>成立第一事业&第二事业本部,对EVENT业务板块进行重新整合,组建／强化“tw新核心产品”的建设团队;整合营业部门，强化既有客户的营业与经营能力;组建专职的“市场&新客户开发”团队</p>
								</div>
							</div>
    					</section>
    			</div>

    			<!--about wrapper right-->
    			<div class="col-xs-12 col-md-7">
    				<div class="about-right">
    					<div>
    						<h1>TWOWAY concept 之道</h1>
    					</div>
  						<div>
  							<h3><i class="fa fa-linode"></i>The first</h3>
  							<p>1.最早发现客户与市场核心需求，2.最早满足客户与市场核心需求，3.并以此成为行业第一<br/></p>
  						</div>
  						<div>
  							<h3><i class="fa fa-eercast"></i>Core value </h3>
  							<p>以核心价值与核心产品，满足客户与市场的核心需求<br/></p>
  						</div>
  						<div>
  							<h3><i class="fa fa-superpowers"></i>Only one</h3>
  							<p>围绕客户与市场的核心需求&核心价值与产品，整合/构建核心资源，成为满足客户与市场需求的不可替代的唯一<br/></p>
  						</div>
 

    				</div>
    			</div>
    		</div>

    	</div>
    </div>

	<!--about bg-->
	<!--
		<div id="about-bg">

			<div class="container">
				<div class="row">

					<div class="about-bg-heading">
						<h1>我们成功数据的见证</h1>
						<p>到目前为止我们所取得的成就</p>
					</div>

					<div class=" col-xs-12 col-md-3">
						<div class="about-bg-wrapper">
								<span class="count"><h1><span class="border">2</span>15</h1></span>
							<p>场地试驾</p>
						</div>
					</div>

					<div class="col-xs-12 col-md-3">
						<div class="about-bg-wrapper">
							<span class="count"><h1>217</h1></span>
							<p>发布会</p>
						</div>
					</div>

					<div class="col-xs-12 col-md-3">
						<div class="about-bg-wrapper">
							<span class="count"><h1>1522</h1></span>
							<p>branches</p>
						</div>
					</div>

					<div class="col-xs-12 col-md-3">
						<div class="about-bg-wrapper">
							<span class="count"><h1>3151</h1></span>
							<p>expert team</p>
						</div>
					</div>

				</div>
			</div>

			<div class="cover"></div>
	-->
		</div> 

		<!--service-->
		<div id="service">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-md-offset-3">
						<div class="service-heading">
							<h3>我们的服务</h3> 
							<p>Twoway 十年专注服务各汽车品牌，为客户提供一站式360度全方位服务，只为了把汽车BTL这块领域做彻底，做得更好，更完美。</p>
						</div>
					</div>
				</div>   	
	    	</div>

			<!--services wrapper-->
    <section class="services-style-one">
    	<div class="outer-box clearfix">
    		
            <div class="services-column">
            	<div class="content-outer">
                	<div class="row clearfix">
                    	
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                                <h4><strong>综合舞台</strong></h4>
                                <div class="text">综合舞台 演出现场执导<br/>音乐／视频等素材制作 舞台编导<br/>灯光&舞台视觉 舞美&器材 艺人&明星</div>
                            </div>
                        </div>
                        
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
                                <h4><strong>综合驾控</strong></h4>
                                <div class="text">驾控体验<br/>驾控培训&辅导<br/>性能驾控体验 生活形态驾控体验</div>
                            </div>
                        </div>
                        
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-automobile" aria-hidden="true"></i></div>
                                <h4><strong>车展&移动巡展</strong></h4>
                                <div class="text">国际车展<br/>地方车展<br/>移动巡展<br/>大篷车<br/>巡回EVENT </div>
                            </div>
                        </div>
                        
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-ravelry" aria-hidden="true"></i></div>
                                <h4><strong>展览展示&技术展示</strong></h4>
                                <div class="text">车展展具<br/>演出舞台<br/>各EVENT展具<br/>技术可视化展具 </div>
                            </div>
                        </div>
                        
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
                                <h4><strong>项目管理&综合运营</strong></h4>
                                <div class="text">各EVENT项目管理<br/>各EVENT现场运营<br/>常设馆／展厅运营  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Content Column-->
            <div class="content-column clearfix">
                <div class="content-box">
                	<div class="inner-box">
                		<div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-asterisk" aria-hidden="true"></i></div>
                                <h4><strong style="color:#149CD2">Tw-sports</strong></h4>
                                <div class="text"> 赛事运作<br/>车队运作<br/>俱乐部运作<br/>赛车改装</div>
                            </div>
                        </div>
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-recycle" aria-hidden="true"></i></div>
                                <h4><strong style="color:#149CD2">体验营销</strong></h4>
                                <div class="text">内容 & 传播<br/>筛选- 精准邀约- 转换<br/>F2F 转化营销<br/>365 & 闭环营销
</div>
                            </div>
                        </div>
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-map-o" aria-hidden="true"></i></div>
                                <h4><strong style="color:#149CD2">下沉整合营销</strong></h4>
                                <div class="text">区域代理<br/>下沉/区域营销<br/>圈层营销</div>
                            </div>
                        </div>
                        <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<div class="inner-box">
                            	<div class="icon-box"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                <h4><strong style="color:#149CD2">娱乐营销</strong></h4>
                                <div class="text">内容/娱乐植入&赞助<br/>内容放大&营销延展<br/>娱乐圈层营销</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
		</div>

		<!--portfolio-->
		<div id="portfolio">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<div class="portfolio-heading">
							<h3>项目介绍 <a href="<?php echo U('project');?>" target="_blank"><i class="fa fa-search" aria-hidden="true"></i>更多项目</a></h3> 
							<p>风雨共济，互相信赖不随流，敢于创新与突破、激发无限的潜能与创造敢于分享乐于分享，从而达到1+1＞2分享中学习,打造自己的核心能力</p>
						</div>
					</div>

				</div>   	
	    	</div>

	    	<div class="portfolio-thumbnail project-box">
	    		<div class="container-fluid">
	    			<div class="row">
						<?php if(is_array($project)): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?><div class="col-xs-6 col-sm-3 col-md-3">
								<a target="_blank" href="<?php echo U('page','','');?>/<?php echo ($pro["posts_id"]); ?>">
		    					<div class="item">
		    						<img src="/Public/../<?php echo ($pro["posts_cover"]); ?>" alt="">
		    						<div class="caption">
	                               		<i class="fa fa-search" aria-hidden="true"></i>
	                               		<p class="hidden-xs"><a class="project-a" target="_blank" href="<?php echo U('page','','');?>/<?php echo ($pro["posts_id"]); ?>"><?php echo ($pro["posts_title"]); ?></a></p>
	                            	</div>
		    					</div>
		    					</a>
		    				</div><?php endforeach; endif; else: echo "" ;endif; ?>
	    			</div>
	    		</div>
	    	</div>
		</div>
		<!--contact-->

		<div id="contact">
	    	<div style="width:80%;height:500px;border:#ccc solid 1px;font-size:12px;margin:0 auto" id="map">
    		</div>

	    	<!-- <div id="baidu-map">
				<div style="width:80%;height:400px;border:#ccc solid 1px;font-size:12px;margin:0 auto" id="map"></div>  
			</div> -->           
		</div>
		<!--百度地图map -->
		<script type="text/javascript">
            var map0 = '';
            var markerArr = [
                { title: "名称：上海分公司", point: "121.279174,31.304346", address: "嘉定区胜辛南路500号2幢1164室", tel: "" },
                { title: "名称：广州总公司", point: "113.281223,23.137819", address: "越秀区德政北路538号达信大厦8楼", tel: "" },
                { title: "名称：北京分公司", point: "116.525577,39.97438", address: "北京市朝阳区半截塔村55号28幢A2-3室", tel: "" },
                { title: "名称：武汉分公司", point: "114.269177,30.611231", address: "武汉市江汉区青年路378号万国花园1栋1单元24层2室", tel: "" },
                { title: "名称：合肥分公司", point: "117.229932,31.811398", address: "合肥市政务区怀宁路288号置地广场D幢办2005", tel: "" },
                { title: "名称：重庆分公司", point: "106.563439,29.583401", address: "重庆市江北区建新东路88号1单元13层2.3.4号", tel: "" }

            ];

            function map_init() {
                var map = new BMap.Map("map"); // 创建Map实例
                var point = new BMap.Point(106.964443,35.268868); //地图中心点，广州市
                map.centerAndZoom(point, 5); // 初始化地图,设置中心点坐标和地图级别。
                // map.enableScrollWheelZoom(true); //启用滚轮放大缩小
                //向地图中添加缩放控件
                var ctrlNav = new window.BMap.NavigationControl({
                    anchor: BMAP_ANCHOR_TOP_LEFT,
                    type: BMAP_NAVIGATION_CONTROL_LARGE
                });
                map.addControl(ctrlNav);

                //向地图中添加缩略图控件
                var ctrlOve = new window.BMap.OverviewMapControl({
                    anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
                    isOpen: 1
                });
                map.addControl(ctrlOve);

                //向地图中添加比例尺控件
                var ctrlSca = new window.BMap.ScaleControl({
                    anchor: BMAP_ANCHOR_BOTTOM_LEFT
                });
                map.addControl(ctrlSca);

                var point = new Array(); //存放标注点经纬信息的数组
                var marker = new Array(); //存放标注点对象的数组
                var info = new Array(); //存放提示信息窗口对象的数组
                for (var i = 0; i < markerArr.length; i++) {
                    var p0 = markerArr[i].point.split(",")[0]; //
                    var p1 = markerArr[i].point.split(",")[1]; //按照原数组的point格式将地图点坐标的经纬度分别提出来
                    point[i] = new window.BMap.Point(p0, p1); //循环生成新的地图点
                    marker[i] = new window.BMap.Marker(point[i]); //按照地图点坐标生成标记
                    

                    map.addOverlay(marker[i]);
                    marker[i].setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
                    var label = new window.BMap.Label(markerArr[i].title, { offset: new window.BMap.Size(20, -10) });
                    // marker[i].setLabel(label);
                    info[i] = new window.BMap.InfoWindow("<p style=’font-size:12px;lineheight:1.8em;’>" + markerArr[i].title + "</br>地址：" + markerArr[i].address ); // 创建信息窗口对象
                }
                marker[0].addEventListener("mouseover", function () {
                    this.openInfoWindow(info[0]);
                });
                marker[1].addEventListener("mouseover", function () {
                    this.openInfoWindow(info[1]);
                });
                marker[2].addEventListener("mouseover", function () {
                    this.openInfoWindow(info[2]);
                });
                marker[3].addEventListener("mouseover", function () {
                    this.openInfoWindow(info[3]);
                });
                marker[4].addEventListener("mouseover", function () {
                    this.openInfoWindow(info[4]);
                });
                marker[5].addEventListener("mouseover", function () {
                    this.openInfoWindow(info[5]);
                });
            }
            //异步调用百度js
            function map_load() {
                var load = document.createElement("script");
                load.src = "http://api.map.baidu.com/api?v=1.4&callback=map_init";
                document.body.appendChild(load);
            }
            window.onload = map_load;
        </script>
		<!--百度地图map -->
		
		<!--client-->
		<div id="client">
			<div class="container">
				<div class="row">

					<div class="col-sm-4 col-md-2">
						<span></span><img src="/Public/Temp/home/images/client/client1.png" alt="">
					</div>

					<div class="col-sm-4 col-md-2">
						<span></span><img src="/Public/Temp/home/images/client/client2.png" alt="">
					</div>

					<div class="col-sm-4 col-md-2">
						<span></span><img src="/Public/Temp/home/images/client/client3.png" alt="">
					</div>

					<div class="col-sm-4 col-md-2">
						<span></span><img src="/Public/Temp/home/images/client/client4.png" alt="">
					</div>

					<div class="col-sm-4 col-md-2">
						<span></span><img src="/Public/Temp/home/images/client/client5.png" alt="">
					</div>

					<div class="col-sm-4 col-md-2">
						<span></span><img src="/Public/Temp/home/images/client/client6.png" alt="">
					</div>

				</div>
			</div>
		</div>

		<!--footer-->
		<div id="footer" style="background: black">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-heading">
							<h3><span>关于</span>TW</h3>
							<p> 睿基（TWOWAY）始于二〇〇二年，总部设在广告创意鼻祖的广州是以“汽车巡展、赛事营销”为主打特色的创新汽车营销创意型公司经过12年的发展，已在北京、上海、武汉、成都、重庆、昆明等中国主要大城市设立区域特色分公司旗下各分公司传承优势，针对各区域开展特色业务，更贴近当地消费人文特点，专注并活跃于自身行业已得到多数客商的认可，被客户誉为“汽车策划小天才”</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-heading">
							<h3><span>最新</span> 动态</h3>
							<ul>
								<?php if(is_array($inside)): $i = 0; $__LIST__ = $inside;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$postsin): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo U('page','','');?>/<?php echo ($postsin["posts_id"]); ?>"><?php echo ($postsin["posts_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6" id="logo">
						<div class="footer-heading">
							<h3><span>合作</span> 伙伴</h3>		
						<!-- Wrapper for slides -->		
						</div>
                        <div id="myCarousel" class="carousel slide" style="background: black">
                            <div class="carousel-inner" style="background: black">
                                <div class="item active" style="background:black">
                                    <img src="/Public/upload/images/logo3.jpg" alt="第一张">
                                </div>
                                <div class="item" style="background:black;">
                                    <img src="/Public/upload/images/logo2.jpg" alt="第二张">
                                </div>
                                <div class="item" style="background:black;">
                                    <img src="/Public/upload/images/logo1.jpg" alt="第三张">
                                </div>
                            </div>
                            <a href="#myCarousel" data-slide="prev" class="carousel-control left">
                                <span class="glyphicon glyphicon-chevron-left" style="margin-left: -20px;"></span>
                            </a>
                            <a href="#myCarousel" data-slide="next" class="carousel-control right">
                                <span class="glyphicon glyphicon-chevron-right" style="padding-left:12px;"></span>
                            </a>
                        </div>
					</div>
				</div>
			</div>
		</div>

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
	<script type="text/javascript">
		$('myCarousel').carousel({
			interval : 100,
		});
	</script>
	<!-- <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(113.281016,23.138284),18);
    }
    function setMapEvent(){
      //map.enableScrollWheelZoom();关闭鼠标滚轮事件
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
      var labels = [
        {position:{lng:113.281726,lat:23.137802},content:"TWOWAY"}
      ];
      for(var index = 0; index < labels.length; index++){
        var opt = { position: new BMap.Point(labels[index].position.lng,labels[index].position.lat )};
        var label = new BMap.Label(labels[index].content,opt);
        map.addOverlay(label);
      };
      var plOpts = [
        {strokeColor:"#00f",strokeWeight:"4",strokeOpacity:"0.6"}
      ];
      var plPath = [
        [
          new BMap.Point(113.28107,23.138052),
          new BMap.Point(113.281717,23.138052),
          new BMap.Point(113.281744,23.137761),
          new BMap.Point(113.28107,23.137736),
          new BMap.Point(113.281061,23.138035),
          new BMap.Point(113.281061,23.138035),
          new BMap.Point(113.281061,23.138035)
        ],
      ];
      for(var index = 0; index < plOpts.length; index++){
        var polyline = new BMap.Polyline(plPath[index],plOpts[index]);
        map.addOverlay(polyline);
      }
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
  </script> -->
    
</body>
</html>