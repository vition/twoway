-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-12 12:45:42
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twoway`
--

-- --------------------------------------------------------

--
-- 表的结构 `tw_banner`
--

CREATE TABLE IF NOT EXISTS `tw_banner` (
  `banner_id` int(10) NOT NULL AUTO_INCREMENT,
  `banner_sort` int(5) NOT NULL COMMENT '排序',
  `banner_title` varchar(50) NOT NULL COMMENT '标题',
  `banner_content` varchar(500) NOT NULL COMMENT '内容',
  `banner_imgurl` varchar(500) NOT NULL COMMENT '图片地址',
  `banner_url` varchar(500) NOT NULL COMMENT '文章链接',
  `banner_state` int(1) NOT NULL COMMENT '状态',
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tw_banner`
--

INSERT INTO `tw_banner` (`banner_id`, `banner_sort`, `banner_title`, `banner_content`, `banner_imgurl`, `banner_url`, `banner_state`) VALUES
(1, 1, '广汽丰田致享正式上市', '广汽丰田致享正式上市', 'temp/home/images/slider/slider1.jpg', 'http://www.baidu.com', 0),
(2, 2, '2016年广州马拉松赛', '12月11日,2016年广州马拉松赛将开启大幕,3万跑者在广州“一江两岸”的城市赛道上奔跑,自然和人', 'temp/home/images/slider/slider3.jpg', 'http://www.twoway.com.cn', 0),
(3, 3, '2017致享上市发布会', '2017年3月9日，广汽丰田致享正式上市，新车将全系标配VSC车身稳定系统。广汽丰田致享实为新款YA', 'temp/home/images/slider/slider2.jpg', 'http://www.twoway.com.cn', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tw_class`
--

CREATE TABLE IF NOT EXISTS `tw_class` (
  `class_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `class_name` varchar(100) NOT NULL COMMENT '分类名字',
  `class_explain` varchar(100) NOT NULL COMMENT '说明',
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='分类表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tw_class`
--

INSERT INTO `tw_class` (`class_id`, `class_name`, `class_explain`) VALUES
(1, 'TW项目', '项目的介绍测试'),
(2, 'TW新闻', '新闻的介绍'),
(3, '行业动态', '行业的介绍');

-- --------------------------------------------------------

--
-- 表的结构 `tw_config`
--

CREATE TABLE IF NOT EXISTS `tw_config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `config_key` varchar(200) NOT NULL COMMENT '配置项',
  `config_value` varchar(200) NOT NULL COMMENT '配置值',
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tw_config`
--

INSERT INTO `tw_config` (`config_id`, `config_key`, `config_value`) VALUES
(1, 'web_name', '广州睿基营销策划有限公司'),
(2, 'web_url', 'http://www.twoway.com.cn/'),
(3, 'web_keys', '广告,汽车,汽车营销,汽车会展,汽车广告'),
(4, 'web_description', '我们专注汽车广告20年'),
(5, 'web_start', 'true'),
(6, 'web_open_up', 'true'),
(7, 'web_open_reg', 'true'),
(8, 'web_comment', 'true'),
(9, 'web_com_review', 'true'),
(10, 'web_footer', '');

-- --------------------------------------------------------

--
-- 表的结构 `tw_group`
--

CREATE TABLE IF NOT EXISTS `tw_group` (
  `group_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `group_name` varchar(100) NOT NULL COMMENT '分组名称',
  `group_explain` varchar(100) NOT NULL COMMENT '分组备注',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tw_group`
--

INSERT INTO `tw_group` (`group_id`, `group_name`, `group_explain`) VALUES
(1, '超级管理员', '大神级别');

-- --------------------------------------------------------

--
-- 表的结构 `tw_log`
--

CREATE TABLE IF NOT EXISTS `tw_log` (
  `log_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `log_user` varchar(50) NOT NULL COMMENT '涉及用户',
  `log_brief` varchar(100) NOT NULL COMMENT '操作简介',
  `log_content` text NOT NULL COMMENT '操作内容',
  `log_date` datetime NOT NULL COMMENT '发生时间',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `tw_log`
--

INSERT INTO `tw_log` (`log_id`, `log_user`, `log_brief`, `log_content`, `log_date`) VALUES
(1, 'vition', '登录', 'vition尝试登录后台，但是登录失败', '2017-05-10 10:45:15'),
(2, 'vition', '登录', 'vition尝试登录后台，但是登录失败', '2017-05-10 10:45:21'),
(3, 'vition', '登录', 'vition尝试登录后台，但是登录失败', '2017-05-10 10:45:50'),
(4, 'vition', '登录', 'vition成功登录后台', '2017-05-10 10:45:56'),
(5, 'vition', '登录', 'vition成功登录后台', '2017-05-10 14:51:45'),
(6, 'vition', '登录', 'vition成功登录后台', '2017-05-10 15:09:12'),
(7, 'vition', '登录', 'vition成功登录后台', '2017-05-10 15:30:18'),
(8, 'vition', '登录', 'vition成功登录后台', '2017-05-10 15:49:10'),
(9, 'vition', '登录', 'vition成功登录后台', '2017-05-11 09:47:23'),
(10, 'vition', '登录', 'vition成功登录后台', '2017-05-11 12:02:56'),
(11, 'vition', '登录', 'vition成功登录后台', '2017-05-12 10:06:31');

-- --------------------------------------------------------

--
-- 表的结构 `tw_pages`
--

CREATE TABLE IF NOT EXISTS `tw_pages` (
  `pages_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pages_title` varchar(50) NOT NULL COMMENT '页面标题',
  `pages_alias` varchar(20) NOT NULL COMMENT '别名',
  `pages_cover` varchar(200) DEFAULT NULL COMMENT '封面',
  `pages_content` text NOT NULL COMMENT '页面内容',
  `pages_date` datetime NOT NULL COMMENT '页面发布日期',
  `pages_tags` varchar(200) NOT NULL COMMENT '页面备注',
  `pages_position` varchar(20) DEFAULT NULL COMMENT '位置',
  PRIMARY KEY (`pages_id`),
  UNIQUE KEY `pages_alias` (`pages_alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tw_pages`
--

INSERT INTO `tw_pages` (`pages_id`, `pages_title`, `pages_alias`, `pages_cover`, `pages_content`, `pages_date`, `pages_tags`, `pages_position`) VALUES
(1, '关于TW', 'GYTW', '', '<p>睿基（TWOWAY）始于二〇〇二年，总部设在广告创意鼻祖的广州是以&ldquo;汽车巡展、赛事营销&rdquo;为主打特色的创新汽车营销创意型公司经过12年的发展， 已在北京、上海、武汉、成都、重庆、昆明等中国主要大城市设立区域特色分公司旗下各分公司传承优势，针对各区域开展特色业务，更贴近当地消费人文特点，专注并活跃于自身行业已得到多数客商的认可，被客户誉为&ldquo;汽车策划小天才&rdquo;</p>\n', '2017-04-18 16:31:21', '', NULL),
(2, ' 公司愿景', 'GSYJ', '', '<p>&nbsp; 突破BTL，连接ATL，成为创新式全方位线上线下新媒体汽车营销专家突破BTL，连接ATL，成为创新式全方位线上线下新媒体汽车营销专家</p>\n', '2017-04-18 16:32:40', '', NULL),
(3, ' 企业文化', 'QYWH', '', '<p>&nbsp; 睿基(TWOWAY)把古代智者的&ldquo;平衡之道&rdquo;引入到企业经营中从哲学的角度平衡工作与生活，破除现代的浮躁心态睿基(TWOWAY)把古代智者的&ldquo;平衡之道&rdquo;引入到企业经营中从哲学的角度平衡工作与生活</p>\n', '2017-04-18 16:33:17', '', NULL),
(4, '经营哲学', 'JYZX', '', '<p>万事万物都有阴阳两面性；居安思危，理性对待；不卑不亢，不急不躁；在此消彼长中学会平衡之道；均衡稳步持续地向前发展</p>\n', '2017-04-18 16:33:39', '', NULL),
(5, 'TWOWAY', 'TWOWAY', '', '<br/>\n<p style="text-align:center"><span style="font-size:48px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif"><strong><span style="color:#2980b9">TWO</span><span style="color:#3498db">WAY</span></strong></span></span></p>\n\n<p style="text-align:center"><span style="font-size:20px"><span style="font-family:Arial,Helvetica,sans-serif">不仅仅是一个名称</span></span></p>\n\n<p style="text-align:center"><span style="font-size:20px"><span style="font-family:Arial,Helvetica,sans-serif">更是我们<span style="color:#2980b9"><sup>tw</sup></span>的经营理念与发展之道</span></span></p>\n', '2017-05-12 10:09:09', '', 'index');

-- --------------------------------------------------------

--
-- 表的结构 `tw_posts`
--

CREATE TABLE IF NOT EXISTS `tw_posts` (
  `posts_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `posts_class` int(10) NOT NULL COMMENT '分类id',
  `posts_title` varchar(50) NOT NULL COMMENT '标题',
  `posts_content` text NOT NULL COMMENT '内容',
  `posts_cover` varchar(200) NOT NULL COMMENT '封面路径',
  `posts_author` varchar(50) NOT NULL COMMENT '作者',
  `posts_create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `posts_edit_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '编辑时间',
  `posts_state` int(10) NOT NULL DEFAULT '1' COMMENT '状态',
  `posts_tags` varchar(100) NOT NULL COMMENT '标签',
  PRIMARY KEY (`posts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `tw_posts`
--

INSERT INTO `tw_posts` (`posts_id`, `posts_class`, `posts_title`, `posts_content`, `posts_cover`, `posts_author`, `posts_create_time`, `posts_edit_time`, `posts_state`, `posts_tags`) VALUES
(1, 2, 'TWOWAY官方网站改版中', '新的官网即将迎来，让我们拭目以待吧！', '图片', 'vition', '2017-04-07 12:21:32', '2017-04-07 12:21:32', 1, '官网,新内容'),
(4, 1, '这是一个严肃的认真测试标题', '<p>\n	测试的内容就是，哇哈哈，你上当了\n</p>', 'http://wanzao2.b0.upaiyun.com/system/pictures/35134136/original/1460853777_500x500.png', 'vition', '2017-04-14 16:52:26', '2017-05-03 11:28:40', 1, '''测试,就是这样的'''),
(5, 1, '这是一个严肃的认真测试标题', '<p>试的内容就是，哇哈哈，你上当</p>\n', './Public/upload/images/1492160431.903.png', 'vition', '2017-04-14 17:00:31', '2017-04-14 18:27:00', 1, '测试,就是这样的'),
(6, 1, '这是一个严肃的认真测试标题', '<p>测试的内容就是，哇哈哈，你上当了</p>\n', './Public/upload/images/1492160497.6117.png', 'vition', '2017-04-14 17:01:37', '2017-04-14 18:13:08', 1, '测试,就是这样的'),
(7, 1, '自主品牌暗战上海车展 4秒加速续航500超跑或亮相', '<p>不费油的名爵电动超跑！</p>\n\n<p><img alt="自主品牌，自主品牌,上海车展" src="http://imagecn.gasgoo.com/moblogo/News/UEditor/image/20170414/6362775406386122704047717.jpg" style="margin:0px" /></p>\n\n<p>最近，上汽乘用车官方给出了一组全新纯电动超跑概念车- MG E-motion Concept的预告图，在这油价上调的时候推除了纯电动超跑，肯定会在上海车展上引来不少观众的驻足，当然这款电动超跑的颜值也足够抢眼，前大灯还是延续名爵zs的伦敦眼设计，加配星辉式前格栅，更显出时尚科技运动感。</p>\n\n<p>这款概念车同样配置了智能互联系统，且 0-100km/h的加速时间小于4秒，最大续航里程或将超过500公里，这款车到底能不能成为你心中的焦点，那就期待上海车展的到来吧！</p>\n\n<p>不平凡的瑞风S7！</p>\n\n<p><img alt="自主品牌，自主品牌,上海车展" src="http://imagecn.gasgoo.com/moblogo/News/UEditor/image/20170414/6362775406387682717276963.jpg" style="margin:0px" /></p>\n\n<p>&ldquo;宝瓶口&rdquo;的前脸设计，具有极高的辨识度，任谁一看就能脱口而出的说出这绝对又是瑞风家族的一员，没错，就是瑞风S7，凭借着好肌肉线条和高颜值的设计，让我们眼前一亮，内饰还是采用豪华霸气范儿的气质走向，依旧动力十足火力全开的瑞风S7，你不去会会这个风一般的展位？</p>\n\n<p>江淮汽车将在上海车展期间公布瑞风S7的预售价格。该车包括5座和7座版本，搭载1.5T和2.0T两款发动机。其中，1.5T GDI发动机采用了缸内直喷、涡轮增压、DVVT双可变气门正时三大主流技术，最大功率为174马力（128千瓦），最大扭矩为251Nm；而2.0T+发动机则装备了涡轮增压、高效油气分离、皮带驱动正时等技术，最大功率为190马力（140千瓦），最大扭矩为300Nm。</p>\n\n<p>&quot;不露脸&quot;的吉利MPV！</p>\n\n<p><img alt="自主品牌，自主品牌,上海车展" src="http://imagecn.gasgoo.com/moblogo/News/UEditor/image/20170414/6362775406387682717276963.jpg" style="margin:0px" /></p>\n\n<p>近年来，吉利的口碑一直很好，在各个细分市场上也取得很大认可，听说这次的上海车展，吉利带来了一款神秘的MPV,虽然在吉利官方公布的新车照片没有那么直观，可以让我们详细了解，但是从不少路试谍照中，我们还是看出了他拥有着家族式的进气格栅，然后看到的就是它的伪装了？吉利越是捂得严实，我们就越是好奇，所以不管风里雨里千里迢迢也得来看你！</p>\n\n<p>不淡定的瑞虎5！</p>\n\n<p><img alt="自主品牌，自主品牌,上海车展" src="http://imagecn.gasgoo.com/moblogo/News/UEditor/image/20170414/6362775406389242725804380.jpg" style="margin:0px" /></p>\n\n<p>在上海车展这个大平台上，奇瑞当然也带来了得意之作，那就是瑞虎5，奇瑞的全新SUV车型，前脸运用菱形组合的造型设计，镀铬饰条贯穿中网与大灯相连，凸显出前脸造型的整体性，据说瑞虎的仪表台设计的更有新意，采用不对称黑红双色的设计，可谓掙足了眼球，赢得了话题。</p>\n\n<p>不低调的长安CS55？</p>\n\n<p><img alt="自主品牌，自主品牌,上海车展" src="http://imagecn.gasgoo.com/moblogo/News/UEditor/image/20170414/6362775406390802739033625.jpg" style="margin:0px" /></p>\n\n<p>继长安CS95火爆之后，长安又推出了CS55,这款高颜值强动力的车型，让我们特别想了解一下他的内在是否和外表一样美，半悬浮式中控大屏是内在的一大看点，中控台的线条处理设计的与外观十分搭配，动力方面嘛，长安会搭载两种发动机，且其中一款是长安自主研发的，你肯定想知道自主研发的发动机有多厉害，那一就不要错过这次的车展。</p>\n\n<p>愈战愈勇的海马！</p>\n\n<p><img alt="自主品牌，自主品牌,上海车展" src="http://imagecn.gasgoo.com/moblogo/News/UEditor/image/20170414/6362775406392362743262871.jpg" style="margin:0px" /></p>\n\n<p>前段时间，海马S5Young及S5的强动力版通过花椒直播上市，半小时就获得了52万+网友的好评加持</p>\n\n<p>结语:小编说的这些有没有吊起您的胃口，是否想更深的了解这些车和这些车企的文化？去上海车展你肯定会找到你心中想要的那个答案。现在的你是否还在等白百何的离婚声明？别等了，再等下去我怕去上海的机票都没了！！！</p>\n', 'http://imagecn.gasgoo.com/moblogo/News/UEditor/image/20170414/6362775406390802739033625.jpg', 'vition', '2017-04-14 17:17:54', '2017-04-14 18:07:17', 1, '汽车,海马'),
(8, 1, '2016广本大篷车（全年）', '<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424090930_11318.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424090930_52607.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424090930_29242.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424090930_96657.jpg" alt="" />', './Public/upload/images/1493017776.728.jpeg', 'vition', '2017-04-24 15:09:36', '2017-04-24 15:09:36', 1, ''),
(9, 1, '2016广丰雷凌双擎杯半决赛', '<div align="center">\n	<p>\n		<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091316_66629.jpg" alt="" height="400" width="600" />\n	</p>\n	<p>\n		<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091316_14908.jpg" alt="" height="400" width="600" />\n	</p>\n	<p>\n		<br />\n	</p>\n	<p>\n		<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091317_34675.jpg" alt="" height="400" width="600" />\n	</p>\n	<p>\n		<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091317_89763.jpg" alt="" height="400" width="600" />\n	</p>\n	<p>\n		<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091317_85470.jpg" alt="" height="400" width="600" /> \n	</p>\n	<p>\n		<br />\n	</p>\n</div>', './Public/upload/images/1493018003.94.jpeg', 'vition', '2017-04-24 15:13:23', '2017-04-24 16:31:31', 1, ''),
(10, 1, '2016广丰雷凌双擎杯总决赛', '<p align="center">\n	<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091601_26762.jpg" alt="" height="400" width="600" />\n</p>\n<p align="center">\n	<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091601_72413.jpg" alt="" height="400" width="600" />\n</p>\n<p align="center">\n	<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091601_46334.jpg" alt="" height="400" width="600" />\n</p>\n<p align="center">\n	<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091602_82339.jpg" alt="" height="400" width="600" />\n</p>\n<p align="center">\n	<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091602_73597.jpg" alt="" height="400" width="600" />\n</p>\n<p align="center">\n	<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091602_53022.jpg" alt="" height="400" width="600" />\n</p>\n<p align="center">\n	<br />\n</p>', './Public/upload/images/1493018167.4523.jpeg', 'vition', '2017-04-24 15:16:07', '2017-04-24 17:01:01', 1, ''),
(11, 1, '2016广汽丰田赞助广州马拉松', '<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091756_80427.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091756_33980.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091756_88552.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091756_67351.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424091756_27550.jpg" alt="" />', './Public/upload/images/1493018279.6187.jpeg', 'vition', '2017-04-24 15:17:59', '2017-04-24 15:17:59', 1, ''),
(12, 1, '2016万力之夜（北京4月）', '<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092004_91191.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092004_49896.jpg" alt="" />', './Public/upload/images/1493018407.331.jpeg', 'vition', '2017-04-24 15:20:07', '2017-04-24 15:20:07', 1, ''),
(13, 1, '2017猎豹汽车CT7发布及试驾会', '<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092314_58490.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092315_65821.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092315_92828.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092315_65200.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092315_50481.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092315_98461.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424092316_33755.jpg" alt="" />', './Public/upload/images/1493018598.232.jpeg', 'vition', '2017-04-24 15:23:18', '2017-04-24 15:23:18', 1, ''),
(14, 1, '2017致享上市发布会（成都3月）', '<img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093201_91323.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093202_86766.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093202_44318.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093202_17283.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093202_33480.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093203_42503.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093203_17676.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093203_88947.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093203_87961.jpg" alt="" /><img src="/twoway/Public/Temp/plugins/editor/php/../attached/image/20170424/20170424093204_91578.jpg" alt="" />', './Public/upload/images/1493019126.3202.jpeg', 'vition', '2017-04-24 15:32:06', '2017-04-24 15:32:06', 1, ''),
(15, 3, '争夺战愈演愈烈 中国SUV市场的“上下求索”', '我国SUV市场的争夺战愈演愈烈，而各车企竞争的价格区间也上上下下蔓延开来。其中，向上触摸至兰博基尼、保时捷、林肯等豪华车品牌；而诸如猎豹、江铃等国产车企推出7万~15万的SUV，旨在迅速占领低价SUV市场高地。\n<p>\n	　　据中汽协统计，2016年，从乘用车四类车型销量情况看， \nSUV以44.6%的增速继续保持高速增长，增长速度大大高于轿车、MPV、交叉型乘用车。而据中汽协3月公布的最新数据，在轿车、SUV、MPV和交叉型乘用车四大品类市场中，仅SUV保持正增长，售车83.23万辆，同比增长19.59%；其余细分市场均呈不同程度的下滑。\n</p>\n<div class="img_wrapper">\n	<img src="http://n.sinaimg.cn/auto/transform/20170424/CpDz-fyeqcac1634984.png" alt="争夺战愈演愈烈 中国SUV市场的“上下求索” " /><span class="img_descr"></span>\n</div>\n<p>\n	　　正因为近几年中国SUV市场的良好增长，各豪车品牌也开始加大对SUV的关注和布局，开始瞄准中国市场。宾利、劳斯莱斯以及兰博基尼等品牌纷纷开始推出旗下首款超豪华SUV车型。\n</p>\n<p>\n	　　据悉，兰博基尼的首款SUV车型Urus将于今年年底在意大利首秀。兰博基尼汽车有限公司总裁兼首席执行官Stefano曾透露，希望借助此款SUV使销量翻倍，从目前的3500辆左右增至每年超7000辆。\n</p>\n<p>\n	　　相比起正要进入这个领域的豪车品牌，林肯已经率先在这个领域尝到了甜头。相关数据显示，2016年林肯累积售出32558万辆，同比增长180%；2017年第一季度累计售出11731辆，同比增长114%。有分析称，林肯销量的大幅上涨主要得益于SUV车型。而不仅如此，林肯日前宣布，2019年将推首款国产全新SUV，专供中国市场。\n</p>\n<p>\n	　　虽然豪华车品牌开始纷纷布局SUV，但在中国，SUV市场竞争最激烈的还是在6万~15万价格区间之中。\n</p>\n<p>\n	　　各车企发布的销售数据显示，2017年第一季度SUV销量，哈弗H6、传祺GS4、哈弗H2、途观、长安CS75、宝骏560位列前六，销量分别为11.88万、8.92万、7.25万、7.11万、6.95万、6.73万。其中除了途观之外，其余车型均处于6万~15万价格区间。\n</p>\n<div class="img_wrapper">\n	<img src="http://n.sinaimg.cn/auto/transform/20170424/YSJg-fyepsec0673139.png" alt="争夺战愈演愈烈 中国SUV市场的“上下求索” " /><span class="img_descr"></span>\n</div>\n<p>\n	　　在低价SUV市场中，各大车企看到了多重的可能性，开始纷纷加码、布局产品。\n</p>\n<div id="ad_49438" class="otherContent_01" style="margin:10px 20px 10px 0px;padding:4px;">\n</div>\n<p>\n	　　此次上海车展上，首次参展的江铃驭胜携旗下驭胜S330、驭胜S350及全新驭胜7座跨界概念车、两款新能源车参展，加码低价SUV市场。江铃驭胜提供的数据显示，驭胜S330、驭胜S350在2017年第一季度销量表现良好，同比增长446%。而此次展示的新能源SUV车型S330PHEV与S330BEV也显示出江铃驭胜对SUV矩阵式的细分市场实现全覆盖的野心。\n</p>\n<p>\n	　　猎豹汽车，也在上海车展上推出了其面向移动互联时代的战略新产品猎豹CS9。该款车型采用1.5L发动机和5MT/ CVT动力组合，通过提高传动效率、降低风阻等一系列节能降耗技术，提高竞争力。据悉，CS9也处于上述价格区间，参与与其他品牌的正面竞争。\n</p>\n<p>\n	　　亮剑之后开始进入刺刀见红的比拼，孰胜孰劣市场终将给出答案。\n</p>', 'http://n.sinaimg.cn/auto/transform/20170424/YSJg-fyepsec0673139.png', 'vition', '2017-04-24 17:31:03', '2017-04-24 17:31:03', 1, ''),
(16, 2, '清明放假通知', '<ol>\n	<li>\n		<span style="font-size:16px;">2017年清明节放假通知安排如下: 4月2日(星期日)至4月4日（星期二）放假，共3天，4月1日(星期六)上班，4月5日（星期三）照常上班。</span>\n	</li>\n	<li>\n		<span style="font-size:16px;">部门另有安排的除外。请各部门做好安全及卫生工作。</span>\n	</li>\n	<li>\n		<span style="font-size:16px;">各位出行的同事请注意安全。</span>\n	</li>\n</ol>\n<span style="font-size:16px;"><span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:16px;">另：</span></span>\n<ol>\n	<li>\n		<span style="font-size:16px;">1. 休假期间需要出差/外勤/加班的同事，请在公司微信系统提前申请及报备。</span>\n	</li>\n	<li>\n		<span style="font-size:16px;">2.大门钥匙已分配到各部门主管，假期如需加班的同事钥匙内部协调。</span>\n	</li>\n	<li>\n		<span style="font-size:16px;">3.请各同事出入注意关门，下班把所有区域的灯、空调关掉（特别是两个会议室）。</span>\n	</li>\n	<li>\n		<span style="font-size:16px;">4.打印机旁边的柜子已准备了些打印纸及文件袋，请大家环保用纸。</span>\n	</li>\n	<li>\n		<span style="font-size:16px;">5.垃圾袋已分别放在两个休闲区下面的柜子里，加班期间饭余垃圾过多请自行更换垃圾袋及扔到大厦外垃圾桶，避免四害入舍。</span>\n	</li>\n	<li>\n		<span style="font-size:16px;">特此通知！</span>\n	</li>\n</ol>\n<span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span><br />\n<span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span><br />\n<div align="right">\n	<span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Twoway行政部</span><br />\n<span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2017年4月1日</span><br />\n</div>\n<br />', '', 'vition', '2017-04-24 17:54:40', '2017-04-24 17:54:40', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `tw_user`
--

CREATE TABLE IF NOT EXISTS `tw_user` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_name` varchar(100) NOT NULL COMMENT '用户名',
  `user_psw` varchar(40) NOT NULL COMMENT '用户密码',
  `user_group` int(10) NOT NULL COMMENT '用户组',
  `user_register` datetime NOT NULL COMMENT '注册时间',
  `user_last` datetime NOT NULL COMMENT '上次登录时间',
  `user_login` int(10) NOT NULL COMMENT '登录次数',
  `user_state` int(10) NOT NULL COMMENT '状态',
  `user_remark` varchar(500) DEFAULT NULL COMMENT '备注',
  `user_avatar` varchar(500) DEFAULT 'Temp/dist/img/avatar.png',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tw_user`
--

INSERT INTO `tw_user` (`user_id`, `user_name`, `user_psw`, `user_group`, `user_register`, `user_last`, `user_login`, `user_state`, `user_remark`, `user_avatar`) VALUES
(1, 'vition', '895B317C76B8E504C2FB32DBB4420178F60CE321', 1, '2017-04-05 12:04:00', '2017-04-05 12:04:00', 1, 1, '', 'Temp/dist/img/user2-160x160.jpg'),
(2, 'test', '7C4A8D09CA3762AF61E59520943DC26494F8941B', 4, '2017-04-28 12:00:00', '2017-04-28 12:00:00', 1, 1, '', 'Temp/dist/img/avatar.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
