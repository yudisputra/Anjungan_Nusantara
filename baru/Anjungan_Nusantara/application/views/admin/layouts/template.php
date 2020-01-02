<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title><?php echo $title ?> - Anjungan Nusantara</title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/images/yazaki-logo.png">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/yazaki-logo.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/css/bootstrap-extend.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/site.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_global/vendor/waves/waves.css">

    <?php $this->load->view('admin/components/'.$headers); ?>

    <?php $this->load->view('admin/layouts/nav_sidebar_view'); ?>

    <!-- Page -->
    <div class="page">
      <?php $this->load->view('admin/contents/'.$contents); ?>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-right">
        © 2019 <a href="#">Anjungan Nusantara</a>
      </div>
    </footer>
  

    <?php $this->load->view('admin/components/'.$footers); ?>
    
    
  </body>
</html>
