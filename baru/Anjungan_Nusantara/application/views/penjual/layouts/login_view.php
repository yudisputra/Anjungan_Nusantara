<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Login | SAI Maintenance</title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/yazaki-logo5.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/waves/waves.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/examples/css/pages/login-v3.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets_global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/fonts/brand-icons/brand-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/fonts/bebas/bebas.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="<?php echo base_url() ?>assets_global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login-v3 layout-full">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="panel">
          <div class="panel-body">  
            <div class="brand">
              <img width="160px" class="brand-img" src="<?php echo base_url()?>assets/images/yazaki-logo-complete.png" alt="...">
              <h2 class="brand-text font-size-40">SAI Maintenance</h2>
            </div>
            <form method="post" action="">
              <div class="form-group form-material" data-plugin="formMaterial">
                <div class="input-group">
                <span class="input-group-addon">
                    <i class="icon wb-user"></i>
                </span>
                <input type="username" class="form-control" name="username" placeholder="Username" />
                </div>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="icon wb-lock"></i>
                    </span>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Login</button>
            </form>
          </div>
        </div>

        <footer class="page-copyright page-copyright-inverse">
          <p>PT. Surabaya Autocomp Indonesia</p>
          <p>© 2019. All RIGHT RESERVED.</p>
          
        </footer>
      </div>
    </div>
    <!-- End Page --> 

    <!-- Core  -->
    <script src="<?php echo base_url() ?>assets_global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/animsition/animsition.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets_global/vendor/switchery/switchery.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url() ?>assets_global/vendor/slidepanel/jquery-slidePanel.js"></script>
      <script src="<?php echo base_url() ?>assets_global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url() ?>assets_global/js/Component.js"></script>
    <script src="<?php echo base_url() ?>assets_global/js/Plugin.js"></script>
    <script src="<?php echo base_url() ?>assets_global/js/Base.js"></script>
    <script src="<?php echo base_url() ?>assets_global/js/Config.js"></script>
    
    <script src="<?php echo base_url() ?>assets/js/Section/Menubar.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Section/GridMenu.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Section/Sidebar.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Section/PageAside.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Plugin/menu.js"></script>
    
    <script src="<?php echo base_url() ?>assets_global/js/config/colors.js"></script>
    <script src="<?php echo base_url() ?>assets/js/config/tour.js"></script>
    <script>Config.set('assets', '<?php echo base_url() ?>assetsassets');</script>
    
    <!-- Page -->
    <script src="<?php echo base_url() ?>assets/js/Site.js"></script>
    <script src="<?php echo base_url() ?>assets_global/js/Plugin/asscrollable.js"></script>
    <script src="<?php echo base_url() ?>assets_global/js/Plugin/slidepanel.js"></script>
    <script src="<?php echo base_url() ?>assets_global/js/Plugin/switchery.js"></script>
        <script src="<?php echo base_url() ?>assets_global/js/Plugin/jquery-placeholder.js"></script>
        <script src="<?php echo base_url() ?>assets_global/js/Plugin/material.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    
  </body>
</html>
