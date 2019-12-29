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
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-bell" aria-hidden="true"></i>
                <span class="badge badge-pill badge-danger up">5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                  <span class="badge badge-round badge-danger">New 5</span>
                </div>
    
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">A new order has been placed</h6>
                            <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Completed the task</h6>
                            <time class="media-meta" datetime="2018-06-11T18:29:20+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Settings updated</h6>
                            <time class="media-meta" datetime="2018-06-11T14:05:00+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Event started</h6>
                            <time class="media-meta" datetime="2018-06-10T13:50:18+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Message received</h6>
                            <time class="media-meta" datetime="2018-06-10T12:34:48+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon wb-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
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
                        <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                        <span class="site-menu-title">Layouts</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/menu-collapsed.html">
                      <span class="site-menu-title">Menu Collapsed</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/menu-collapsed-alt.html">
                      <span class="site-menu-title">Menu Collapsed Alt</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/menu-expended.html">
                      <span class="site-menu-title">Menu Expended</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/grids.html">
                      <span class="site-menu-title">Grid Scaffolding</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/layout-grid.html">
                      <span class="site-menu-title">Layout Grid</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/headers.html">
                      <span class="site-menu-title">Different Headers</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/panel-transition.html">
                      <span class="site-menu-title">Panel Transition</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/boxed.html">
                      <span class="site-menu-title">Boxed Layout</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/two-columns.html">
                      <span class="site-menu-title">Two Columns</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/menubar-flipped.html">
                      <span class="site-menu-title">Menubar Flipped</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/menubar-native-scrolling.html">
                      <span class="site-menu-title">Menubar Native Scrolling</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/bordered-header.html">
                      <span class="site-menu-title">Bordered Header</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Page Aside</span>
                      <div class="site-menu-label">
                        <span class="badge badge-danger badge-round mr-25">new</span>
                      </div>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="layouts/aside-left-static.html">
                          <span class="site-menu-title">Left Static</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="layouts/aside-right-static.html">
                          <span class="site-menu-title">Right Static</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="layouts/aside-left-fixed.html">
                          <span class="site-menu-title">Left Fixed</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="layouts/aside-right-fixed.html">
                          <span class="site-menu-title">Right Fixed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Pages</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Errors</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/error-400.html">
                          <span class="site-menu-title">400 Bad Request</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/error-403.html">
                          <span class="site-menu-title">403 Forbidden</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/error-404.html">
                          <span class="site-menu-title">404 Not Found</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/error-500.html">
                          <span class="site-menu-title">500 Internal Server Error</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/error-503.html">
                          <span class="site-menu-title">503 Service Unavailable</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/faq.html">
                      <span class="site-menu-title">FAQ</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/gallery.html">
                      <span class="site-menu-title">Gallery</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/gallery-grid.html">
                      <span class="site-menu-title">Gallery Grid</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/search-result.html">
                      <span class="site-menu-title">Search Result</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Maps</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/map-google.html">
                          <span class="site-menu-title">Google Maps</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/map-vector.html">
                          <span class="site-menu-title">Vector Maps</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/maintenance.html">
                      <span class="site-menu-title">Maintenance</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/forgot-password.html">
                      <span class="site-menu-title">Forgot Password</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/lockscreen.html">
                      <span class="site-menu-title">Lockscreen</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/login.html">
                      <span class="site-menu-title">Login</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/register.html">
                      <span class="site-menu-title">Register</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/login-v2.html">
                      <span class="site-menu-title">Login V2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/register-v2.html">
                      <span class="site-menu-title">Register V2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/login-v3.html">
                      <span class="site-menu-title">Login V3</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/register-v3.html">
                      <span class="site-menu-title">Register V3</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/user.html">
                      <span class="site-menu-title">User List</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/invoice.html">
                      <span class="site-menu-title">Invoice</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/blank.html">
                      <span class="site-menu-title">Blank Page</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Email</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/email-articles.html">
                          <span class="site-menu-title">Articles</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/email-welcome.html">
                          <span class="site-menu-title">Welcome</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/email-post.html">
                          <span class="site-menu-title">Post</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/email-thumbnail.html">
                          <span class="site-menu-title">Thumbnail</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="pages/email-news.html">
                          <span class="site-menu-title">News</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/code-editor.html">
                      <span class="site-menu-title">Code Editor</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/profile.html">
                      <span class="site-menu-title">Profile</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/profile-v2.html">
                      <span class="site-menu-title">Profile V2</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/profile-v3.html">
                      <span class="site-menu-title">Profile V3</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/site-map.html">
                      <span class="site-menu-title">Sitemap</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/project.html">
                      <span class="site-menu-title">Project</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
          
            </ul>
          </div>
        </div>
      </div>
      </div> 

    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="col-xxl-8 col-lg-12">
            <!-- Widget Statistic -->
            <div class="card card-shadow" id="widgetStatistic">
              <div class="card-block p-0">
                <div class="row no-space h-full" data-plugin="matchHeight">
                  <div class="col-md-8 col-sm-12">
                    <div id="widgetJvmap" class="h-full"></div>
                  </div>
                  <div class="col-md-4 col-sm-12 p-30">
                    <div class="form-group">
                      <div class="input-search input-search-dark">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="" placeholder="Search...">
                      </div>
                    </div>
                    <p class="font-size-20 blue-grey-700">Statistic</p>
                    <p class="blue-grey-400">Status: live</p>
                    <p>
                      <i class="icon wb-map blue-grey-400 mr-10" aria-hidden="true"></i>
                      <span>258 Countries, 4835 Cities</span>
                    </p>
                    <ul class="list-unstyled mt-20">
                      <li>
                        <p>VISITS</p>
                        <div class="progress progress-xs mb-25">
                          <div class="progress-bar progress-bar-info bg-blue-600" style="width: 70.3%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
                            <span class="sr-only">70.3%</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <p>TODAY</p>
                        <div class="progress progress-xs mb-25">
                          <div class="progress-bar progress-bar-info bg-green-600" style="width: 70.3%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
                            <span class="sr-only">70.3%</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <p>WEEK</p>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar progress-bar-info bg-purple-600" style="width: 70.3%"
                            aria-valuemax="100" aria-valuemin="0" aria-valuenow="70.3"
                            role="progressbar">
                            <span class="sr-only">70.3%</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Widget Statistic -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/babel-external-helpers/babel-external-helpers.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/jquery/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/popper-js/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/bootstrap/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/animsition/animsition.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/mousewheel/jquery.mousewheel.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/asscrollbar/jquery-asScrollbar.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/asscrollable/jquery-asScrollable.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/ashoverscroll/jquery-asHoverScroll.js')?>"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/switchery/switchery.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/intro-js/intro.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/screenfull/screenfull.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/slidepanel/jquery-slidePanel.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/vendor/skycons/skycons.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/vendor/chartist/chartist.min.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/vendor/aspieprogress/jquery-asPieProgress.min.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/vendor/jvectormap/jquery-jvectormap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/vendor/matchheight/jquery.matchHeight-min.js')?>"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url('assets/templateadmin/global/js/Component.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/js/Plugin.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/js/Base.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/js/Config.js')?>"></script>
    
    <script src="<?php echo base_url('assets/templateadmin/base/assets/js/Section/Menubar.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/base/assets/js/Section/GridMenu.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/base/assets/js/Section/Sidebar.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/base/assets/js/Section/PageAside.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/base/assets/js/Plugin/menu.js')?>"></script>
    
    <script src="<?php echo base_url('assets/templateadmin/global/js/config/colors.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/base/assets/js/config/tour.js')?>"></script>
    <!-- <script>Config.set('assets', '../assets');</script> -->
    
    <!-- Page -->
    <script src="<?php echo base_url('assets/templateadmin/base/assets/js/Site.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/js/Plugin/asscrollable.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/js/Plugin/slidepanel.js')?>"></script>
    <script src="<?php echo base_url('assets/templateadmin/global/js/Plugin/switchery.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/js/Plugin/matchheight.js')?>"></script>
        <script src="<?php echo base_url('assets/templateadmin/global/js/Plugin/jvectormap.js')?>"></script>
    
        <script src="<?php echo base_url('assets/templateadmin/base/assets/examples/js/dashboard/v1.js')?>"></script>
  </body>
</html>
