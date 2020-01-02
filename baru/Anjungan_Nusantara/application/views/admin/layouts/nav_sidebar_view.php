<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
  <div class="navbar-header">
    <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
      data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
    </button>
    <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
      <i class="icon md-more" aria-hidden="true"></i>
    </button>
    <a href="<?php echo base_url()?>">
      <div class="navbar-brand navbar-brand-center">
        <!-- <img class="navbar-brand-logo" src="<?php echo base_url()?>assets/images/yazaki-logo-header.png"> -->
        <span class="navbar-brand-text hidden-xs-down">Halaman Admin</span>
      </div>
    </a>
    <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
      <span class="sr-only">Toggle Search</span>
      <i class="icon md-search" aria-hidden="true"></i>
    </button>
  </div>

  <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
      <!-- Navbar Toolbar -->
    
      <!-- End Navbar Toolbar -->

      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
            aria-expanded="false" data-animation="scale-up" role="button">
            <i class="icon wb-bell" aria-hidden="true"></i>
            <span class="badge badge-pill badge-danger up"><?php //echo $jumlah_notif ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
            <div class="dropdown-menu-header">
              <h5>Pemberitahuan</h5>
            </div>
            <div class="list-group">
              <div data-role="container">
                <div data-role="content">
                  
                <!--  notif -->
                <?php if($notif[0] > 0) { ?>
                    <a class="list-group-item dropdown-item" href="reroute to akun penjual" role="menuitem">
                    <div class="media">
                      <div class="pr-10">
                        <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Beberapa akun penjual menunggu verifikasi.</h6>
                          <span class="badge badge-round badge-danger"><?php //echo $notif[0]?></span>
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
          <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
            <span class="avatar avatar-online">
              <img src="<?php echo base_url() ?>assets_global/portraits/5s.png" alt="...">
              <i></i>
            </span>
          </a>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="<?php echo base_url('Login/logout') ?>" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
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
            <i class="input-search-icon md-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="site-search" placeholder="Search...">
            <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
          </div>
        </div>
      </form>
    </div>
    <!-- End Site Navbar Seach -->
  </div>
</nav>    
 <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category"> Menu</li>
              <li class="site-menu-item has-sub <?php if($this->uri->segment(1)=="Dashboard"){echo "active open";}?>">
                <a class="animsition-link" href="<?php echo base_url()?>Dashboard">
                        <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                    </a>
              </li>
              <li class="site-menu-item has-sub <?php if($this->uri->segment(2)=="Machine"){echo "active open";}?>">
                <a href="javascript:void(0)">
                  <i class="site-menu-icon md-settings" aria-hidden="true"></i>
                  <span class="site-menu-title">Manajemen Akun</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item has-sub <?php if($this->uri->segment(2)=="Admin"){echo "active";}elseif($this->uri->segment(3)=="akun_pembeli"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/akun_pembeli">
                      <span class="site-menu-title">Akun Pembeli</span>
                    </a>
                  </li>
                  <li class="site-menu-item <?php if($this->uri->segment(3)=="Machine_master"){echo "active";}elseif($this->uri->segment(3)=="Machinemaster_import"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/akun_penjual">
                      <span class="site-menu-title">Akun Penjual</span>
                    </a>
                  </li>
                  <li class="site-menu-item <?php if($this->uri->segment(3)=="Machine_master"){echo "active";}elseif($this->uri->segment(3)=="Machinemaster_import"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/akun_admin">
                      <span class="site-menu-title">Akun Admin</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub <?php if($this->uri->segment(2)=="Machine"){echo "active open";}?>">
                <a href="javascript:void(0)">
                  <i class="site-menu-icon md-settings" aria-hidden="true"></i>
                  <span class="site-menu-title">Manajemen Produk</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item has-sub <?php if($this->uri->segment(2)=="Machine"){echo "active";}elseif($this->uri->segment(3)=="machine_import"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/daftar_kategoridansub">
                      <span class="site-menu-title">Kategori dan Subkategori</span>
                    </a>
                  </li>
                  <li class="site-menu-item <?php if($this->uri->segment(3)=="Machine_master"){echo "active";}elseif($this->uri->segment(3)=="Machinemaster_import"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/daftar_ukm">
                      <span class="site-menu-title">Daftar UKM</span>
                    </a>
                  </li>
                  <li class="site-menu-item <?php if($this->uri->segment(3)=="Machine_master"){echo "active";}elseif($this->uri->segment(3)=="Machinemaster_import"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/daftar_produk">
                      <span class="site-menu-title">Daftar Produk</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub <?php if($this->uri->segment(2)=="Machine"){echo "active open";}?>">
                <a href="javascript:void(0)">
                  <i class="site-menu-icon md-settings" aria-hidden="true"></i>
                  <span class="site-menu-title">Manajemen Penjualan</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item has-sub <?php if($this->uri->segment(2)=="Machine"){echo "active";}elseif($this->uri->segment(3)=="machine_import"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/daftar_bank">
                      <span class="site-menu-title">Daftar Bank</span>
                    </a>
                  </li>
                  <li class="site-menu-item <?php if($this->uri->segment(3)=="Machine_master"){echo "active";}elseif($this->uri->segment(3)=="Machinemaster_import"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/daftar_pesanan">
                      <span class="site-menu-title">Daftar Pesanan</span>
                    </a>
                  </li>
                  <li class="site-menu-item <?php if($this->uri->segment(3)=="Machine_master"){echo "active";}elseif($this->uri->segment(3)=="Machinemaster_import"){echo "active";}?>">
                    <a class="animsition-link" href="<?php echo base_url() ?>Admin/daftar_penjualan">
                      <span class="site-menu-title">Daftar Grafik Penjualan</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
        
            </div>
        </div>
      </div>
    
      <div class="site-menubar-footer">
        
        <a href="<?php echo base_url('Login/logout') ?>" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
          <span  class="icon md-power" aria-hidden="true"></span>
        </a>
      </div>
  </div>