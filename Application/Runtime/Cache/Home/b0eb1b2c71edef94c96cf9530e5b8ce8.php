<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo ($webname); ?></title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
	<link rel="stylesheet" href="/Public/Temp/home/css/flexslider.css">
	<link rel="stylesheet" href="/Public/Temp/home/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Temp/home/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/Temp/home/css/style.css"> -->
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
	.project{border-top:5px solid #ADDBED;padding-top:20px;margin-top:10px;}
	.project .row .col-md-3{margin-bottom:20px;}
	.project-a{display:block;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
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
	<div class="container project">
		<div class="row">
			<?php if(is_array($project)): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?><div class="col-md-3">
					<div class="item">
						<a class="project-a" target="_blank" href="<?php echo U('page','','');?>/<?php echo ($pro["posts_id"]); ?>"><img src="<?php if(is_http($pro['posts_cover']) == true): else: ?>/Public/../<?php endif; echo ($pro["posts_cover"]); ?>" alt=""></a>
						<div class="caption">
                       		<p><a class="project-a" target="_blank" href="<?php echo U('page','','');?>/<?php echo ($pro["posts_id"]); ?>"><?php echo ($pro["posts_title"]); ?></a></p>
                    	</div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
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
        
	
	<!-- jQuery -->
    <script src="/Public/Temp/home/js/jquery.min.js"></script>
    <script src="/Public/Temp/home/js/bootstrap.min.js"></script>
    <script src="/Public/Temp/home/js/jquery.flexslider.js"></script>
    <script src="/Public/Temp/home/js/jquery.inview.js"></script>

    <script src="/Public/Temp/home/js/script.js"></script>
    <script src="/Public/Temp/home/js/contactform.js"></script>
	<script type="text/javascript">
   
  </script>
    
</body>
</html>