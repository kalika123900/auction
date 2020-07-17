<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auction</title>

    <!-- website icon -->
    <!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Rubik:400,500,700,900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="<?=ASSETS?>/css/bootstrap.css.map">
    <link rel="stylesheet" href="<?=ASSETS?>/css/bootstrap.min.css">

    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?=ASSETS?>/css/mdb.min.css">

    <!-- slick slider styles -->
    <link rel="stylesheet" href="<?=ASSETS?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?=ASSETS?>/css/slick.css">

    <!-- Your custom styles -->
    <link rel="stylesheet" href="<?=ASSETS?>/css/styleFront.css?v=1.1">
    <link rel="stylesheet" href="<?=ASSETS?>/css/responsive.css">

    <script type="text/javascript" src="<?=ASSETS?>/js/jquery.min.js"></script>

</head>


<body>
    <!-- ================  Header start here ================= -->
    <header class="main-header">
        <!-- top header -->
        <section class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <!-- left Links -->
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="tel:9876543210"> <?=$this->lang->line('call_us_now')?>: +1 9876543210</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <!-- right Links -->
                        <ul class="nav justify-content-end">
                            <? //print_r($data);die;?>
                            <?php if($userdata!=-1): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?=$this->lang->line('my_account');?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?=site_url('profile-setting');?>">Profile Settings</a>
                                    <a class="dropdown-item" href="<?=site_url('add-product')?>">Add Product </a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another </a>
                                    <a class="dropdown-item" href="#">Something</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?=$this->lang->line('my_wishlist')?> <i class="fas fa-heart"></i></a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- top header end -->
        <!-- search header  -->
        <section class="search-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-5">
                        <!-- left Links -->
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?=site_url()?>">
                                    <img src="<?=ASSETS?>img/logo.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-7 mt-3">
                        <!-- right Links -->
                        <ul class="nav justify-content-end">
                            <?php if($userdata!=-1): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=site_url('/profile-dashboard') ?>"><img class="menu-img" src="<?=ASSETS?>img/wallet.png" alt=""> <?=$this->lang->line('my_business')?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=site_url('logout')?>">
                                    <img class="menu-img" src="<?=ASSETS?>img/user.png" alt=""> <?=$this->lang->line('logout')?></a>
                            </li>
                            <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#myModal_2">
                                    <img class="menu-img" src="<?=ASSETS?>img/user.png" alt=""> <?=$this->lang->line('login')?>
                                </a>
                            </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <div class="col-md-12">
                        <form action="#" method="get">
                            <div class="form-group">
                                <input type="text" class="form-control form-control1" placeholder="What are you looking for" id="home-search-bar">
                                <button class="home-search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- search header  end-->

    </header>
    <!-- ================= Header end here =================== -->
    <!-- =============== section-1 start here =============== -->
    <section class="home-section1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-sm">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#myModal_1">
                                    <div>
                                        <div class="tg-bar1"></div>
                                        <div class="tg-bar2"></div>
                                        <div class="tg-bar3"></div>
                                        <div class="tg-bar2"></div>
                                    </div>
                                    <span> <?=$this->lang->line('all_categories')?> </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Antiques & Art
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="<?= site_url('profile-dashboard')?>">Dashboard</a>
                                            <a class="dropdown-item" href="<?= site_url('messages')?>">Message </a>
                                            <a class="dropdown-item" href="<?= site_url('add-product')?>">Add Product</a>
                                            <a class="dropdown-item" href="<?= site_url('profile-setting')?>">Settings</a>
                                        </div>
                                        <div class="col-md-6">
                                        <a class="dropdown-item" href="<?= site_url('profile-dashboard')?>">Dashboard</a>
                                            <a class="dropdown-item" href="<?= site_url('messages')?>">Message </a>
                                            <a class="dropdown-item" href="<?= site_url('add-product')?>">Add Product</a>
                                            <a class="dropdown-item" href="<?= site_url('profile-setting')?>">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Vehicles
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink2">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <a class="dropdown-item" href="<?= site_url('profile-dashboard')?>">Dashboard</a>
                                            <a class="dropdown-item" href="<?= site_url('messages')?>">Message </a>
                                            <a class="dropdown-item" href="<?= site_url('add-product')?>">Add Product</a>
                                            <a class="dropdown-item" href="<?= site_url('profile-setting')?>">Settings</a>
                                        </div>
                                        <div class="col-md-6">
                                           <a class="dropdown-item" href="<?= site_url('profile-dashboard')?>">Dashboard</a>
                                            <a class="dropdown-item" href="<?= site_url('messages')?>">Message </a>
                                            <a class="dropdown-item" href="<?= site_url('add-product')?>">Add Product</a>
                                            <a class="dropdown-item" href="<?= site_url('profile-setting')?>">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Craft & Garden
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Household
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Clothing & Accessories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Model Building & Hobby
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Sports
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink7">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Watches & Jewellery
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="DropdownLink9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=ASSETS?>img/menu-circle.png" alt=""><br> Other
                                </a>
                                <div class="dropdown-menu" aria-labelledby="DropdownLink9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another </a>
                                            <a class="dropdown-item" href="#">Something</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- navbar end -->
                </div>
            </div>
        </div>
    </section>


    <!-- =============== section-1 end here ================= -->