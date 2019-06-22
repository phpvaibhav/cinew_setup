<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo SITE_NAME.' | Admin' ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
        $backend_assets =  base_url().'backend_asset/';
    ?>
    <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo $backend_assets; ?>custom/images/index.png" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo $backend_assets ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $backend_assets ?>plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $backend_assets ?>dist/css/AdminLTE.min.css">
  
  <!-- Material Design -->
  <link rel="stylesheet" href="<?php echo $backend_assets ?>dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="<?php echo $backend_assets ?>dist/css/ripples.min.css">
  <link rel="stylesheet" href="<?php echo $backend_assets ?>dist/css/MaterialAdminLTE.min.css">
  <!-- MaterialAdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $backend_assets ?>dist/css/skins/skin-green-light.css">
  
  
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo $backend_assets ?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $backend_assets ?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo $backend_assets ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link href="<?php echo base_url(); ?>backend_asset/plugins/toastr/toastr.min.css" rel="stylesheet"> <!-- toastr popup -->
  <link href="<?php echo base_url(); ?>backend_asset/custom/css/admin_custom.css" rel="stylesheet">
    <?php  if(!empty($admin_styles)) load_admin_css($admin_styles);  //load required page styles  ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini" id="tl_admin_main_body" data-base-url="<?php echo base_url(); ?>">
<div class="wrapper">
<?php 
$fname = $this->session->userdata('fullName');
?>
  <header class="main-header">
   <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">R<b>V</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg "><b><?php echo SITE_NAME; ?></b></span>
    </a>
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle fontcol" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu" >
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo '../'.USER_AVATAR_PATH.$_SESSION[ADMIN_USER_SESS_KEY]['image'];?> " class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $fname ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo '../'.USER_AVATAR_PATH.$_SESSION[ADMIN_USER_SESS_KEY]['image']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $fname ?> <br> <small><?php echo SITE_NAME; ?> Admin</small>
                  <small>Member since Nov. <?php echo date('Y'); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url(); ?>admin/admin_profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="javascript:;" class="btn btn-default btn-flat" onclick="logout()">Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image" style="text-align:center">
          <img src="<?php echo base_url() ?>backend_asset/custom/images/logo.png" alt="User Image">
        </div>
        
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
          
          <li class="<?php echo (strtolower($this->router->fetch_class()) == "admin") ? "active" : "" ?>">
          <a href="<?php echo site_url('admin'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="<?php echo (strtolower($this->router->fetch_class()) == "users") ? "active" : "" ?>">
          <a href="#">
            <i class="fa fa-user"></i> <span>Users</span>
          </a>
        </li>

        <li class="<?php echo ($this->uri->segment('3') == "allAdCategory") ? "active" : ""; ?>" treeview>
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Menu1</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="#"><i class="fa fa-circle-o"></i> Submenu1</a></li>
          
          </ul>
        </li>

        <li class="<?php echo ($this->uri->segment('3') == "allClub" || $this->uri->segment('3') == 'clubDetail' || $this->uri->segment('3') == "allClubCategory" || $this->uri->segment('3') == "newsFeedDetail") ? "active" : ""; ?>" treeview>
          <a href="#">
            <i class="fa fa-cc-diners-club"></i> <span>Menu2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="#"><i class="fa fa-circle-o"></i> Submenu1</a></li>

            <li class=""><a href="#"><i class="fa fa-circle-o"></i> Submenu2</a></li>

            <li class=""><a href="#"><i class="fa fa-circle-o"></i>Submenu3</a></li>
          
          </ul>
        </li>
   
     </ul>
    </section>
    <!-- /.sidebar -->
  </aside>