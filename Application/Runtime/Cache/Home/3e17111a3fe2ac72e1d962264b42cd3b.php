<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Advanced form elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/twoway/Public/Temp/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="/twoway/Public/Temp/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/twoway/Public/Temp/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/twoway/Public/Temp/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="/twoway/Public/Temp/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="/twoway/Public/Temp/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/twoway/Public/Temp/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/twoway/Public/Temp/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/twoway/Public/Temp/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/twoway/Public/Temp/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>vition</p>
          <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
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
      <ul class="sidebar-menu">
        <li class="header">控制菜单</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>全局配置</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href=<?php echo U('base');?>><i class="fa fa-circle-o"></i> 基本信息</a></li>
            <li><a href=<?php echo U('advconfig');?>><i class="fa fa-circle-o"></i> 高级配置</a></li>
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
            <li><a href=<?php echo U('top_nav');?>><i class="fa fa-circle-o"></i>新建文章</a></li>
            <li><a href=<?php echo U('boxed');?>><i class="fa fa-circle-o"></i>文章管理</a></li>
            <li><a href=<?php echo U('collapsed_sidebar');?>><i class="fa fa-circle-o"></i>分类管理</a></li>
          </ul>
        </li>
        <li>
			 <a href="#">
            <i class="fa fa-files-o"></i>
            <span>单页管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=<?php echo U('chartjs');?>><i class="fa fa-circle-o"></i>新建页面</a></li>
            <li><a href=<?php echo U('morris');?>><i class="fa fa-circle-o"></i>页面管理</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>用户管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=<?php echo U('chartjs');?>><i class="fa fa-circle-o"></i>新建用户</a></li>
            <li><a href=<?php echo U('morris');?>><i class="fa fa-circle-o"></i>用户管理</a></li>
            <li><a href=<?php echo U('flot');?>><i class="fa fa-circle-o"></i>分组管理</a></li>
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
            <li><a href=<?php echo U('general');?>><i class="fa fa-circle-o"></i>日志查看</a></li>
            <li><a href=<?php echo U('icons');?>><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href=<?php echo U('buttons');?>><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href=<?php echo U('sliders');?>><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href=<?php echo U('timeline');?>><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href=<?php echo U('modals');?>><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        高级配置
        <small>Twoway</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->

          <!-- iCheck -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">配置高级选项</h3>
            </div>
            <div class="box-body">
              <!-- Minimal style -->

              <!-- radio -->
			  <div><label>网站是否开启</label></div>
              <div class="form-group">
                <label>
                  <input type="radio" name="action" class="flat-red" checked>
                </label>
				 <label>
                  启动
                </label>
                <label>
                  <input type="radio" name="action" class="flat-red">
                </label>
                <label>
                  关闭
                </label>
              </div>
			  <div><label>网站是否对外开放</label></div>
			  <div class="form-group">
			  
                <label>
                  <input type="radio" name="open" class="flat-red" checked>
					<label>
					  所有人
					</label>
                </label>
                <label>
                  <input type="radio" name="open" class="flat-red">
                </label>
					<label>
					  仅会员
					</label>
              </div>
			  <div><label>网站是否开放注册</label></div>
			  <div class="form-group">
                <label>
                  <input type="radio" name="register" class="flat-red" checked>
                </label>
				<label>
					关闭
                </label>
                <label>
                  <input type="radio" name="register" class="flat-red">
                </label>
                <label>
                  开启
                </label>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/twoway/Public/Temp/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/twoway/Public/Temp/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="/twoway/Public/Temp/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="/twoway/Public/Temp/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/twoway/Public/Temp/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/twoway/Public/Temp/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/twoway/Public/Temp/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="/twoway/Public/Temp/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/twoway/Public/Temp/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="/twoway/Public/Temp/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="/twoway/Public/Temp/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="/twoway/Public/Temp/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="/twoway/Public/Temp/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/twoway/Public/Temp/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/twoway/Public/Temp/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>