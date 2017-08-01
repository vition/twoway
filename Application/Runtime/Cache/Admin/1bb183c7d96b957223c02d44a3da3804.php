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
  <!-- Theme style -->
  <link rel="stylesheet" href="/Public/Temp/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/Public/Temp/dist/css/skins/_all-skins.min.css">

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
        分类管理
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">新建分类</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">分类名称</label>
                  <input type="hidden" id="class-id" />
                  <input type="text" class="form-control" id="class-name" placeholder="分类名称">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">分类说明</label>
                  <input type="text" class="form-control" id="class-explain" placeholder="分类说明">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
				    <button type="submit" id="create-class" class="btn btn-primary">新增分类</button>
                    <button type="submit" id="updata-class" class="btn btn-primary">修改分类</button>
              </div>

          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">分类管理</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- select -->
                <div class="form-group">
                  <label>分类列表</label>
                  <select class="form-control" id="class-group">
                    <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cla): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cla["class_id"]); ?>" data-explain="<?php echo ($cla["class_explain"]); ?>"><?php echo ($cla["class_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>
                </div>
              </form>
                <div class="form-group">
                  <label for="exampleInputPassword1">分类说明</label>
                  <input type="text" class="form-control" id="class-exp" readonly="readonly" placeholder="">
                </div>
                <div class="box-footer">
                 <button type="submit" id="edit-class" class="btn btn-primary">修改</button>
                 <button type="submit" id="del-class" class="btn btn-primary">删除</button>
                 </div>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/Public/Temp/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/Public/Temp/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/Public/Temp/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/Public/Temp/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/Public/Temp/dist/js/demo.js"></script>
<script>
    $(function(){
       //初始化分类备注
        $("#class-exp").val($("#class-group").find("option:selected").data("explain"));
        //更改分类时修改对应的备注
        $("#class-group").on("change",function(){
            $("#class-exp").val($("#class-group").find("option:selected").data("explain"));
        })
        //点击修改按钮后执行
        $("#edit-class").on("click",function(){
             $("#class-id").val($("#class-group").find("option:selected").val());
             $("#class-name").val($("#class-group").find("option:selected").text());
             $("#class-explain").val($("#class-group").find("option:selected").data("explain"));
        })
        //新建分类
        $("#create-class").on("click",function(){
            datas={};
            updata_class(datas);
        })
        //更新分类
        $("#updata-class").on("click",function(){
            datas={};
            datas["class_id"]=$("#class-id").val();
            updata_class(datas)

        })
        //删除分类
        $("#del-class").on("click",function(){
            datas={};
            datas["del_id"]=$("#class-group").find("option:selected").val();
            updata_class(datas)

        })
    })
    //修改分类操作
    function updata_class(datas){
        datas["data"]={}
        datas["data"]["class_name"]=$("#class-name").val();
        datas["data"]["class_explain"]=$("#class-explain").val();
        if(datas["data"]["class_name"]=="" || datas["del_id"]=="undefined"){
            alert("分类名称不能为空");
        }else{
            $.ajax({
                url:"<?php echo U('classman');?>",
                data:datas,
                dataType:"html",
                type:"post", 
                success:function(data){
                    //alert(data)
                    location.reload()
                }
            })
        }
        
    }
</script>
</body>
</html>