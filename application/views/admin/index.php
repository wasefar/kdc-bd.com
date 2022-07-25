<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo $title;?></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->
      <script src="<?php echo base_url();?>control/dist/js/sweetalert.min.js"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>control/dist/css/sweetalert.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="<?php echo base_url();?>control/plugins/datatables/dataTables.bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url();?>control/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link href="<?php echo base_url();?>control/dropzone/dropzone.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?php echo base_url();?>control/dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>control/dist/css/skins/skin-blue.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>control/dist/css/r_dash.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <!-- Main Header -->
         <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('dashboard/dash');?>" class="logo">
               <!-- mini logo for sidebar mini 50x50 pixels -->
               <span class="logo-mini"><b><?php echo $this->config->item('site_name');?> </b></span>
               <!-- logo for regular state and mobile devices -->
               <span class="logo-lg"><b><?php echo $this->config->item('site_name');?></b></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
               <!-- Sidebar toggle button-->
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <!-- Navbar Right Menu -->
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Messages: style can be found in dropdown.less-->
                     <li style="display: none;" class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 4 messages</li>
                           <li>
                              <!-- inner menu: contains the messages -->
                              <ul class="menu">
                                 <li>
                                    <!-- start message -->
                                    <a href="#">
                                       <div class="pull-left">
                                          <!-- User Image -->
                                          <img src="<?php echo base_url();?>control/dist/img/user.png" class="img-circle" alt="User Image">
                                       </div>
                                       <!-- Message title and timestamp -->
                                       <h4>
                                          Support Team
                                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                       </h4>
                                       <!-- The message -->
                                       <p>Why not buy a new awesome theme?</p>
                                    </a>
                                 </li>
                                 <!-- end message -->
                              </ul>
                              <!-- /.menu -->
                           </li>
                           <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                     </li>
                     <!-- /.messages-menu -->
                     <!-- Notifications Menu -->
                     <!-- Tasks Menu -->
                     <!-- User Account Menu -->
                     <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <!-- The user image in the navbar-->
                           <img src="<?php echo base_url();?>control/dist/img/user.png" class="user-image" alt="User Image">
                           <!-- hidden-xs hides the username on small devices so only the image appears. -->
                           <span class="hidden-xs">Dashboard</span>
                        </a>
                        <ul class="dropdown-menu">
                           <!-- The user image in the menu -->
                           <li class="user-header">
                              <img src="<?php echo base_url();?>control/dist/img/user.png" class="img-circle" alt="User Image">
                              <p>
                                 <?php echo $this->config->item('site_name');?>
                                 <small>Dashboard</small>
                              </p>
                           </li>
                           <!-- Menu Body -->
                           <li style="display: none;" class="user-body">
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
                              <div style="display: none;" class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                 <a href="<?php echo base_url('auth/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <!-- Control Sidebar Toggle Button -->
                     <li  style="display: none;">
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- Left side column. contains the logo and sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel">
                  <div class="pull-left image">
                     <img src="<?php echo base_url();?>control/dist/img/user.png" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                     <p>Admin</p>
                     <!-- Status -->
                     <a href="#">Dashboard</a>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <ul class="sidebar-menu">
                  <!-- Optionally, you can add icons to the links -->
                  <li <?php if($page == 'Dashboard'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/dash');?>">
                     <i class="fa fa-link"></i> 
                     <span>Dashboard</span></a>
                  </li>
                  <li <?php if($page == 'Dashboard Slider'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/slider');?>">
                     <i class="fa fa-link"></i> 
                     <span>Slider</span></a>
                  </li>
                  <li <?php if($page == 'Gallery'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/gallery');?>">
                     <i class="fa fa-link"></i> 
                     <span>Gallery</span></a>
                  </li>
                  <li <?php if($page == 'Services'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/services');?>">
                     <i class="fa fa-link"></i> 
                     <span>Services</span></a>
                  </li>
                  <li <?php if($page == 'Blog'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/blog');?>">
                     <i class="fa fa-link"></i> 
                     <span>Blog</span></a>
                  </li>
                  <li <?php if($page == 'Notice'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/notice');?>">
                     <i class="fa fa-link"></i> 
                     <span>Notice</span></a>
                  </li>
                  <li <?php if($page == 'Projects'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/projects');?>">
                     <i class="fa fa-link"></i> 
                     <span>Projects</span></a>
                  </li>
                  <li <?php if($page == 'Team'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/team');?>">
                     <i class="fa fa-link"></i> 
                     <span>Team</span></a>
                  </li>
                  <li <?php if($page == 'Custom Blocks'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/custom_blocks');?>">
                     <i class="fa fa-link"></i> 
                     <span>Custom Blocks</span></a>
                  </li>
                  <li <?php if($page == 'Pages'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/pages');?>">
                     <i class="fa fa-link"></i> 
                     <span>Pages</span></a>
                  </li>
                  <li <?php if($page == 'Why Choose us'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/promo_text');?>">
                     <i class="fa fa-link"></i> 
                     <span>Why Choose us</span></a>
                  </li>
                  <li <?php if($page == 'Our Clients'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/our_clients');?>">
                     <i class="fa fa-link"></i> 
                     <span>Our Clients</span></a>
                  </li>
                  <li <?php if($page == 'Testimonial'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/testimonial');?>">
                     <i class="fa fa-link"></i> 
                     <span>Testimonial</span></a>
                  </li>
                  <li <?php if($page == 'Career'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/career');?>">
                     <i class="fa fa-link"></i> 
                     <span>Career</span></a>
                  </li>
                  <li <?php if($page == 'Training'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/training');?>">
                     <i class="fa fa-link"></i> 
                     <span>Training</span></a>
                  </li>
                  <li <?php if($page == 'Settings'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('dashboard/settings');?>">
                     <i class="fa fa-link"></i> 
                     <span>Settings</span></a>
                  </li>
                  <li <?php if($page == 'Dashboard Admin User'){echo 'class="active"';};?>>
                     <a href="<?php echo base_url('auth/users');?>">
                     <i class="fa fa-link"></i> 
                     <span>Admin User</span></a>
                  </li>
                  <li><a target="_blank" href="<?php echo base_url();?>"><i class="fa fa-link"></i> <span>Frontend</span></a></li>
                  <li><a href="<?php echo base_url('auth/logout');?>"><i class="fa fa-link"></i> <span>Logout</span></a></li>
               </ul>
               <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  <?php echo $this->config->item('site_name');?>
                  <small>Dashboard</small>
               </h1>
               <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> <?php echo $this->config->item('site_name');?></a></li>
                  <li class="active">Dash</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <?php echo $main_content;?>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <!-- Main Footer -->
         <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
               <?php echo $this->config->item('site_name');?>
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2017 <a href="#"><?php echo $this->config->item('site_name');?></a>.</strong> All rights reserved.
         </footer>
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- REQUIRED JS SCRIPTS -->
      <!-- jQuery 2.2.0 -->
      <a id="base_url" style="display: none;" href="<?php echo base_url()?>"></a>
      <script src="<?php echo base_url();?>control/plugins/jQuery/jQuery-2.2.0.min.js"></script>
      <!-- Bootstrap 3.3.6 -->
      <script src="<?php echo base_url();?>control/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>control/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url();?>control/plugins/datatables/dataTables.bootstrap.min.js"></script>
      <!-- AdminLTE App -->
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script src="<?php echo base_url();?>control/dist/js/app.min.js"></script>
      <script src="<?php echo base_url();?>control/dist/js/jquery_form.js"></script>
      <script type="text/javascript" src="<?php echo base_url('control/plugins/ckeditor/ckeditor.js');?>"></script>
      <script src="<?php echo base_url();?>control/dropzone/dropzone.min.js"></script>
      <script src="<?php echo base_url();?>control/dist/js/ru.js?var=1.004"></script>
   </body>
</html>