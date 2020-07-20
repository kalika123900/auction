<?php
  $sessdata = $this->session->get_userdata();
  if(!isset($sessdata['id']))
  {
    redirect('/');
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title><?=SITE_TITLE?> </title>
            
    <!-- Bootstrap -->
    <link href="<?=ASSETS?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=ASSETS?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=ASSETS?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=ASSETS?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?=ASSETS?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=ASSETS?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=ASSETS?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" />


    <!-- Custom Theme Style -->
    <link href="<?=ASSETS?>/css/custom.min.css" rel="stylesheet">


    <script src="<?=ASSETS?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=ASSETS?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://cdn.tinymce.com/4.4/tinymce.min.js" referrerpolicy="origin"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0; background: #fff; height: 65px;">
            <a class="navbar-brand" href="#" style="height:73px; text-align:center">
                   <img src="<?=ASSETS?>images/logo.png" alt="logo" style="width:80%;">
            </a>
            </div>
                 
            <div class="clearfix"></div>
          
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=ASSETS?>images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?=$this->session->get_userdata()['display_name'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <?php /* Code for showing active*/ 

                $nav = $this->uri->segment(2); 
                $open = 1;
                switch ($nav)
                {
                  case 'category':
                  $open = 2;
                  break;
                  case 'course':
                  $open = 3;
                  break;
                  case 'user':
                  $open = 5;
                  break;
                  default:
                  $open = 1;
                  break;
                }
            ?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li class="<?=$open==1?'active':''?>"><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="<?=$open==1?'display : block':''?>">
                      <li><a href="<?=site_url()?>admin/dashboard">Dashboard</a></li>
                      <li><a href="<?=site_url()?>admin/orders">Orders</a></li>
                     </ul>
                  </li>
                  <li class="<?=$open==2?'active':''?>"><a><i class="fa fa-header"></i> Categories<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="<?=$open==2?'display : block':''?>">
                      <li><a href="<?=site_url()?>admin/category/add">Add Category</a></li>
                      <li><a href="<?=site_url()?>admin/category">List All</a></li>
                     </ul>
                  </li>
                  <li class="<?=$nav==3?'active':''?>"><a><i class="fa fa-desktop"></i> Courses <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="<?=$open==3?'display : block':''?>">
                      <li><a href="<?=site_url()?>admin/course">Course List</a></li>
                    </ul>
                  </li>
                  <li class="<?=$nav==4?'active':''?>"><a><i class="fa fa-table"></i> Coupons <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=site_url('/admin/coupons/create')?>"> Create Coupons</a></li>
                      <li><a href="<?=site_url('/admin/coupons')?>"> Coupons List</a></li>
                    </ul>
                  </li>
                   <li class="<?=$nav==4?'active':''?>"><a><i class="fa fa-table"></i> Products <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=site_url('/admin/products')?>"> All Products</a></li>
                      <li><a href="<?=site_url('/admin/auctions')?>"> Current Auctions</a></li>
                    </ul>
                  </li>
                 
                  <li class="<?=$nav==5?'active':''?>"><a><i class="fa fa-users"></i>Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="<?=$open==3?'display : block':''?>">
                      <li><a href="<?=site_url('/admin/user')?>">All Users</a></li>
                      <li><a href="<?=site_url('/admin/user/new-companies')?>">Approval Pending</a></li>
                    </ul>
                  </li>
             
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=ASSETS?>images/img.jpg" alt=""><?=$this->session->get_userdata()['display_name']; ?>                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="<?=site_url('admin/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              
                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o" ></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
    <!-- FastClick -->
  