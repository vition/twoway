<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo ($posts["posts_title"]); ?>-<?php echo ($webname); ?></title>
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
	@media screen and (max-width: 600px) { #content{width:80%;margin:10px auto;border-top:5px solid #ADDBED;padding-top:20px;}}
	@media screen and (min-width: 601px) { #content{width:60%;margin:10px auto;border-top:5px solid #ADDBED;padding-top:20px;}}
	#posts-contents img{display: block;max-width: 100%;height: auto;margin: 0 auto;}
	#content .posts-title{text-align: center;margin-bottom: 20px;font-size:1.5em;}
	#content .posts-time{text-align: right;margin-bottom: 30px;font-size: 1.2em;padding-right:10%;color:#666666;}
	#content .posts-share{padding-left:20%;}
    .posts-time span{display: inline-block;margin-left:20px;padding-left:5px;}
    .posts-time span i::before{margin-right:5px;}
    .posts-time .ilikes:hover{color:#0064AC;cursor:pointer;}
    .prenext{cursor:pointer;}

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
	
	<div id="content">
		<h3 class="posts-title"><?php echo ($posts["posts_title"]); ?></h3>
		<div class="posts-time"><span>发布时间：<?php echo ($posts["posts_create_time"]); ?></span><span><i class="glyphicon glyphicon-eye-open">阅读(<?php echo ($posts["posts_views"]); ?>)</i></span><span class="ilikes" data-id="<?php echo ($posts["posts_id"]); ?>"><i class="glyphicon glyphicon-thumbs-up">点赞(<?php echo ($posts["posts_likes"]); ?>)</i></span></div>
		<div id="posts-contents"><?php echo ($posts["posts_content"]); ?></div>

        <div> <a  class="prenext" href="<?php echo U('page','','');?>/<?php echo ((isset($thisprev["posts_id"]) && ($thisprev["posts_id"] !== ""))?($thisprev["posts_id"]):0); ?>"><?php echo ((isset($thisprev["title"]) && ($thisprev["title"] !== ""))?($thisprev["title"]):''); ?></a><a class="prenext" style="float: right;" href="<?php echo U('page','','');?>/<?php echo ((isset($thisnext["posts_id"]) && ($thisnext["posts_id"] !== ""))?($thisnext["posts_id"]):0); ?>"><?php echo ((isset($thisnext["title"]) && ($thisnext["title"] !== ""))?($thisnext["title"]):''); ?></a></div>

		<div class="posts-share">
			<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a><a href="#" class="bds_ty" data-cmd="ty" title="分享到天涯社区"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a></div>
			
                <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                </script>
            
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
        $(function(){
           $(".ilikes").on("click",function(){
                var pid=$(this).data("id");
                $.ajax({
                    url:"<?php echo U('page');?>",
                    type:"post",
                    data:{id:pid},
                    dataType:"json",
                    success:function(data){
                        var json=eval(data)
                        if(json.state=="success"){
                            $(".ilikes i").text("点赞("+json.msg+")")
                        }else{
                            alert(json.msg)
                        }
                    }
                })
           })
        })
  </script>
    
</body>
</html>