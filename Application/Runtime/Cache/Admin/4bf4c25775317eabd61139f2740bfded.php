<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo ($webTitle); ?>后台管理界面</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/Public/Temp/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Public/Temp/othercss/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/Public/Temp/othercss/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/Public/Temp/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Public/Temp/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/Public/Temp/dist/css/skins/_all-skins.min.css">
   <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/Public/Temp/plugins/iCheck/all.css">
  <style>
    #banner-list{text-align:center;}
    #banner-list th, input{text-align:center;}
    #banner-list .fa{font-size:large;cursor:pointer;}
    .box-header .btn{margin:5px;}
    .sort_banner{width:3em;}
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TW</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>管理后台</b>Twoway</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="/Public/<?php echo ((isset($user["user_avatar"]) && ($user["user_avatar"] !== ""))?($user["user_avatar"]):'Temp/dist/img/avatar.png'); ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/Public/Temp/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/Public/Temp/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/Public/Temp/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/Public/Temp/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/Public/<?php echo ((isset($user["user_avatar"]) && ($user["user_avatar"] !== ""))?($user["user_avatar"]):'Temp/dist/img/avatar.png'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo session('admin')['username'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/Public/<?php echo ((isset($user["user_avatar"]) && ($user["user_avatar"] !== ""))?($user["user_avatar"]):'Temp/dist/img/avatar.png'); ?>" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo U('logout');?>" class="btn btn-default btn-flat">退出</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- jQuery 2.2.3 -->
<script src="/Public/Temp/plugins/jQuery/jquery-2.2.3.min.js"></script>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/Public/<?php echo ((isset($user["user_avatar"]) && ($user["user_avatar"] !== ""))?($user["user_avatar"]):'Temp/dist/img/avatar.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo session('admin')['username'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>在线</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php if(is_array($list)): foreach($list as $key=>$vo): echo ($key); ?>|<?php echo ($vo); endforeach; endif; ?>

      

      


      <?php if(session('admin')['access']): ?>
        <ul class="sidebar-menu">
          <li class="header">控制菜单</li>
          <li class="treeview ">
            <a target="_blank" href="/index.php">
              <i class="fa fa-home"></i> <span>打开前端</span>
            </a>
          </li>
          <li class="treeview ">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>全局配置</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href=<?php echo U('base');?>><i class="fa fa-circle-o"></i>基本信息</a></li>
              <li><a href=<?php echo U('advconfig');?>><i class="fa fa-circle-o"></i>高级配置</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i>
              <span>文章管理</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=<?php echo U('newposts');?>><i class="fa fa-circle-o"></i>新建文章</a></li>
              <li><a href=<?php echo U('postsman');?>><i class="fa fa-circle-o"></i>文章管理</a></li>
              <li><a href=<?php echo U('classman');?>><i class="fa fa-circle-o"></i>分类管理</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>单页管理</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>
          <ul class="treeview-menu">
            <li><a href=<?php echo U('newpage');?>><i class="fa fa-circle-o"></i>新建页面</a></li>
            <li><a href=<?php echo U('pagesman');?>><i class="fa fa-circle-o"></i>页面管理</a></li>
          </ul>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>人事管理</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=<?php echo U('Index/account_getList');?>><i class="fa fa-circle-o"></i>账号信息</a></li>
              <li><a href=<?php echo U('Index/staff_getlist');?>><i class="fa fa-circle-o"></i>员工档案</a></li>
              <li><a href=<?php echo U('Index/depart_getlist');?>><i class="fa fa-circle-o"></i>职位部门</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-photo"></i>
              <span>资源管理</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=<?php echo U('updatasource');?>><i class="fa fa-circle-o"></i>资源上传</a></li>
              <li><a href=<?php echo U('resource');?>><i class="fa fa-circle-o"></i>资源管理</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-cog"></i>
              <span>其它功能</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=<?php echo U('banner');?>><i class="fa fa-circle-o"></i>Banner管理</a></li>
              <li><a href=<?php echo U('commentman');?>><i class="fa fa-circle-o"></i>评论管理</a></li>
              <li><a href=<?php echo U('logsman');?>><i class="fa fa-circle-o"></i>日志查看</a></li>
            </ul>
          </li>
          <li class="header">高级代码</li>
          <li><a href=<?php echo U('template');?>><i class="fa fa-circle-o text-red"></i> <span>模板编辑</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
      <?php else: ?> 
        <ul class="sidebar-menu">
          <li class="header">控制菜单</li>
            <li class="treeview ">
              <a target="_blank" href="/index.php">
                <i class="fa fa-home"></i> <span>打开前端</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i>
              <span>文章管理</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=<?php echo U('newposts');?>><i class="fa fa-circle-o"></i>新建文章</a></li>
              <li><a href=<?php echo U('postsman');?>><i class="fa fa-circle-o"></i>文章管理</a></li>
              <li><a href=<?php echo U('classman');?>><i class="fa fa-circle-o"></i>分类管理</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-photo"></i>
              <span>资源管理</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=<?php echo U('updatasource');?>><i class="fa fa-circle-o"></i>资源上传</a></li>
              <li><a href=<?php echo U('resource');?>><i class="fa fa-circle-o"></i>资源管理</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-cog"></i>
              <span>其它功能</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=<?php echo U('banner');?>><i class="fa fa-circle-o"></i>Banner管理</a></li>
              <li><a href=<?php echo U('commentman');?>><i class="fa fa-circle-o"></i>评论管理</a></li>
              <li><a href=<?php echo U('logsman');?>><i class="fa fa-circle-o"></i>日志查看</a></li>
            </ul>
          </li>
        </ul>
      <?php endif; ?>







        
    </section>
    <!-- /.sidebar -->
  </aside>
  <script>
$(function(){
	//alert("<?php echo ($active); ?>")
	$(".sidebar-menu .fa").removeClass("active");
	//alert($("[href='<?php echo U($active);?>']").parent().parent().html());
	$("[href='<?php echo U($active);?>']").parent().addClass("active");
	$("[href='<?php echo U($active);?>']").parent().parent().parent().addClass("active");
})
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Banner管理
        <small>首页顶部banner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
 
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bannerModal"><i class="fa fa-plus-square"></i>   新建Banner</button>
              <button type="button" class="btn btn-danger" id="batch-del" ><i class="fa fa-remove"></i>  批量删除</button>
              <button type="button" class="btn btn-success batch-state" data-state="1" ><i class="fa fa-check-square"></i>  批量启用</button>
              <button type="button" class="btn btn-info batch-state" data-state="0" ><i class="fa fa-square"></i>  批量关闭</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="banner-list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="col-xs-1 col-md-1">启用</th>
                  <th class="col-xs-1 col-md-1">排序</th>
                  <th>标题</th>
                  <th class="hidden-xs">内容</th>
                  <th >编辑</th>
                  <th>选中</th>
                  <th>删除</th>
                </tr>
                </thead>
                <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banlist): $mod = ($i % 2 );++$i;?><tr data-id="<?php echo ($banlist["banner_id"]); ?>">
                            <td>
                                <input type="checkbox" class="flat-red start_banner" <?php echo (isChecked($banlist["banner_state"])); ?>>
                            </td>
                            <td><input type="text" class="sort_banner" value="<?php echo ($banlist["banner_sort"]); ?>"></td>
                            <td><?php echo ($banlist["banner_title"]); ?></td>
                            <td class="hidden-xs"><?php echo (mb_substr($banlist["banner_content"],0,50,'utf-8')); ?></td>
                            <td style="vertical-align: middle;">
                                <button type="button" class="btn-link edit-banner"  data-toggle="modal" data-target="#bannerModal">
                                     <i class="fa fa-fw fa-edit"></i>
                                </button>
                            </td>
                            <td>
                               <input type="checkbox" class="minimal select-banner" style="margin-bottom: 2px;">
                            </td>
                            <td><button type="button" class="btn btn-danger btn-xs del_banner">删除</button></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>              
               
                </tbody>
              </table>
            </div>
            
            <!-- Modal -->
            <!--弹窗-->
            <div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">新建/修改banner</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                        <label>启用：</label>
                        <input type="checkbox" class="flat-red banner-info" name="banner_state">
                    </div>
                    <div class="form-group">
                         <label>排序：</label>
                        <input type="text" class="form-control banner-info" name="banner_sort">
                    </div>
                    <div class="form-group">
                        <label>标题：</label>
                        <input type="text" class="form-control banner-info" name="banner_title">
                    </div>
                    <div class="form-group">
                        <label>内容：</label>
                        <textarea class="form-control banner-info" name="banner_content"></textarea>
                    </div>
                    <div class="form-group">
                        <label>图片地址：</label>
                        <input type="text" class="form-control banner-info" name="banner_imgurl">
                    </div>
                    <div class="form-group">
                        <label>链接地址：</label>
                        <input type="text" class="form-control banner-info" name="banner_url">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" id="banner_id" class="banner-info" name="banner_id"/>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" id="insert">新建</button>
                    <button type="button" class="btn btn-info" id="update">修改</button>
                  </div>
                </div>
              </div>
            </div> 
            <!--弹窗-->



            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/Public/Temp/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/Public/Temp/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/Public/Temp/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/Public/Temp/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/Public/Temp/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/Public/Temp/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/Public/Temp/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/Public/Temp/dist/js/demo.js"></script>

<script src="/Public/Temp/plugins/iCheck/icheck.min.js"></script>
<!-- page script -->
<script>
  $(function () {

    //启用选框的样式初始化
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
     //选中选框的样式初始化
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //点击编辑
    $(".edit-banner").on("click",function(){
        var data={}
        data["type"]="getinfo" 
        data["data"]={}
        data["data"]["banner_id"] = $(this).parent().parent().data("id")
       
        var info=$(".banner-info")
        // //for(var i=0;i<info.length;i++){
        //     data[info.eq(i).attr("name")]=info.eq(i).val()
        // }
        $.ajax({
            url:"<?php echo U('banner');?>",
            type:'post',
            data:data,
            datatype:'json',
            success:function(data){
                var info=$(".banner-info")
                bdata=JSON.parse(data)
                for(var i=0;i<info.length;i++){
                    if(info.eq(i).attr("name")=="banner_state"){
                        if(bdata[info.eq(i).attr("name")]==1){
                           // alert("ok")
                            info.eq(i).parent().addClass("checked")
                            info.eq(i).prop("checked",true)
                        }else{
                           // alert("!ok")
                            info.eq(i).parent().removeClass("checked")
                            info.eq(i).prop("checked",false)
                        }
                    }
                    info.eq(i).val(bdata[info.eq(i).attr("name")])
                }
            }
        })
    })
    //新增Banner
    $("#insert").on("click",function(){
        var data={};
        data["type"]="insert" 
        data["data"]=get_info();
         $.ajax({
            url:"<?php echo U('banner');?>",
            type:'post',
            data:data,
            datatype:'html',
            success:function(data){
                //alert(data)
                $('#bannerModal').modal('hide')
                location.reload()
            }
        })
    })
    //修改Banner
    $("#update").on("click",function(){
        var data={};
        data["type"]="update" 
        data["data"]=get_info();
        data["id"]=$("#banner_id").val();
         $.ajax({
            url:"<?php echo U('banner');?>",
            type:'post',
            data:data,
            datatype:'html',
            success:function(data){
                $('#bannerModal').modal('hide')
                location.reload()
            }
        })
    })
    //单独启用
    $(".start_banner").next().on("click",function(){
        var data={};
        data["type"]="update"
        data["id"]=$(this).parent().parent().parent().data("id")
        data["data"]={}
        if($(this).prev().is(":checked")){
            data["data"]["banner_state"]=1
        }else{
            data["data"]["banner_state"]=0
        }
        $.ajax({
            url:"<?php echo U('banner');?>",
            type:'post',
            data:data,
            datatype:'html',
            success:function(data){
            }
        })
    })
    //单独sort
    $(".sort_banner").on("input propertychange",function(){
        var data={};
        data["type"]="update"
        data["id"]=$(this).parent().parent().data("id")
        data["data"]={}
        data["data"]["banner_sort"]=$(this).val();
        $.ajax({
            url:"<?php echo U('banner');?>",
            type:'post',
            data:data,
            datatype:'html'
        })
    })

  });
  //单独删除
  $(".del_banner").on("click",function(){
        var data={};
        data["type"]="delete"
        data["id"]=$(this).parent().parent().data("id")
         $.ajax({
            url:"<?php echo U('banner');?>",
            type:'post',
            data:data,
            datatype:'html',
            success:function(data){
                location.reload()
            }
        })
  })
  //批量删除
  $("#batch-del").on("click",function(){
        var data={};
        data["type"]="delete"
        data["id"]=data["id"]=select_id();
        $.ajax({
            url:"<?php echo U('banner');?>",
            type:'post',
            data:data,
            datatype:'html',
            success:function(data){
                location.reload()
            }
        })
  })
  //批量启用
  $(".batch-state").on("click",function(){
        var data={};
        data["type"]="state"
        data["id"]=select_id();
        if(data["id"]){
            data["state"]=$(this).data("state")
            $.ajax({
                url:"<?php echo U('banner');?>",
                type:'post',
                data:data,
                datatype:'html',
                success:function(data){
                    location.reload()
                }
            })
        }
        
  })
  //获取当前页面数据
  function get_info(){
    var data={}    
        var info=$(".banner-info")
        for(var i=0;i<info.length;i++){
            if(info.eq(i).attr("name")=="banner_state"){
                if(info.eq(i).is(":checked")){
                    data[info.eq(i).attr("name")]=1
                }else{
                    data[info.eq(i).attr("name")]=0
                }
            }else if(info.eq(i).attr("name")!="banner_id"){
                data[info.eq(i).attr("name")]=info.eq(i).val()
            }
            
        }
    return data
  }
  //获取选中的id
  function select_id(){
        var select=$(".select-banner:checked");
        var delid=""
        if(select.length<1){
            return false
        }else{
            for(var i=0;i<select.length;i++){
               delid+=select.eq(i).parent().parent().parent().data("id")+","
            }
            return delid;
        }
        
  }

</script>
</body>
</html>