<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Halaman Admin</title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/templateadmin/base/assets/images/apple-touch-icon.png')?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/templateadmin/base/assets/images/favicon.ico')?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="<?php echo base_url('assets/sweetalert/sweetalert2.all.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.editor.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert/sweetalert2.min.css')?>">

    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap-extend.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/base/assets/css/site.min.css')?>">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/animsition/animsition.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/asscrollable/asScrollable.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/switchery/switchery.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/intro-js/introjs.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/slidepanel/slidePanel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/flag-icon-css/flag-icon.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/chartist/chartist.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/jvectormap/jquery-jvectormap.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/base/assets/examples/css/dashboard/v1.css')?>">
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    
    
    <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/weather-icons/weather-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/web-icons/web-icons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/brand-icons/brand-icons.min.css')?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/assets/my_js/pusher_admin.js"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/breakpoints/breakpoints.js')?>"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center" data-toggle="gridmenu">
          <span class="navbar-brand-text hidden-xs-down">Halaman Admin</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
           <!--Mungkin Butuh toolbar bisa disini -->
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <!-- notification system -->

             <?php 
                   $jumlah_notif = 0;
                 foreach ($notif as $key => $value) {

                 if($value > 0){
                    $jumlah_notif += 1;
                 };
              } 

              ?>
            
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-bell" aria-hidden="true"></i>
                <span class="badge badge-pill badge-danger up" id="jumlah_notif"><?php echo $jumlah_notif ?></span>
              </a>

             
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>Pemberitahuan</h5>
                </div>
    
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content" id="container_notif">
                     
                       <!--  notif -->
                    <?php if($notif[0] > 0) { ?>
                        <a class="list-group-item dropdown-item" href="<?php echo base_url()?>Admin/akun/Penjual" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Beberapa akun penjual menunggu verifikasi.</h6>
                             <span class="badge badge-round badge-danger" id="notif_akun"><?php echo $notif[0]?></span>
                          </div>
                        </div>
                      </a>
                    <?php } ?>

                    <?php if($notif[1] > 0) { ?>
                        <a class="list-group-item dropdown-item" href="<?php echo base_url()?>Admin/produk" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Ada produk yang menunggu persetujuan.</h6>
                             <span class="badge badge-round badge-danger" id="notif_produk"><?php echo $notif[1]?></span>
                          </div>
                        </div>
                      </a>
                    <?php } ?>

                         

                    </div>
                  </div>
                </div>
              </div>
            </li>

             <li class="nav-item dropdown">
              <!-- Setting Foto User -->
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="<?php echo base_url('assets/templateadmin/global/portraits/5.jpg')?>" alt="...">
                  <i></i>
                </span>
              </a>

              <div class="dropdown-menu" role="menu">
               <!--  <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a> -->
                <a class="dropdown-item" href="<?php echo base_url()?>/Login/logout" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i>Logout</a>
                <!-- <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a> -->
              </div>

            </li>
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">Menu</li>
              <li class="site-menu-item">
                <a href="<?php echo base_url() ?>Admin/index">
                        <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                           <!--  <div class="site-menu-badge">
                                <span class="badge badge-pill badge-success">3</span>
                            </div> -->
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <!--menu beri ikon -->
                        <i aria-hidden="true"></i>
                        <span class="site-menu-title">Manajemen Akun</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/akun/Pembeli">
                      <span class="site-menu-title">Akun Pembeli</span>
                    </a>
                  </li>
                </ul>
                 <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/akun/Penjual">
                      <span class="site-menu-title">Akun Penjual</span>
                    </a>
                  </li>
                </ul>
                 <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/akun/Admin">
                      <span class="site-menu-title">Akun Admin</span>
                    </a>
                  </li>
                </ul>
              </li>

                <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <!--menu beri ikon -->
                        <i aria-hidden="true"></i>
                        <span class="site-menu-title">Manajemen Produk</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/kategori">
                      <span class="site-menu-title">Kategori dan Subkategori</span>
                    </a>
                  </li>
                </ul>
                 <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/list_ukm">
                      <span class="site-menu-title">Daftar UKM</span>
                    </a>
                  </li>
                </ul>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/produk">
                      <span class="site-menu-title">Daftar Produk</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <!--menu beri ikon -->
                        <i aria-hidden="true"></i>
                        <span class="site-menu-title">Manajemen Penjualan</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/bank">
                      <span class="site-menu-title">Daftar Bank</span>
                    </a>
                  </li>
                </ul>
                 <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/beli">
                      <span class="site-menu-title">Daftar Pesanan</span>
                    </a>
                  </li>
                </ul>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo base_url()?>Admin/grafik">
                      <span class="site-menu-title">Daftar Grafik Penjualan</span>
                    </a>
                  </li>
                </ul>
              </li>


            </ul>
          </div>
        </div>
      </div>
      </div> 
