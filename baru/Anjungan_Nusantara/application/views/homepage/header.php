<!DOCTYPE html>
<html lang="en">
<head>
<title>Anjungan_Nusantara</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Anjungan shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url('') ?>assets/template/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/cart_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/product_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/styles/shop_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo base_url('') ?>assets/template/images/phone.png" alt=""></div>(031) - 8894850</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo base_url('') ?>assets/template/images/mail.png" alt=""></div><a href="mailto:anjungan_nusantara@gmail.com">anjungan_nusantara@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
						<div class="top_bar_user">
								<?php if($this->session->userdata('logged_in')){ ?>
								    <br>
									<div class="user_icon"><a href="<?php echo base_url()?>User"><img src="<?php echo base_url('assets/homepage_lib/images/user.svg')?>" alt=""></a></div>
									<div><h5>Selamat Datang, <?=$this->session->userdata('username');?></h5></div>
								<?php } else { ?>
									<div class="user_icon"><img src="<?php echo base_url('assets/homepage_lib/images/user.svg')?>" alt=""></div>
									<div><a href="<?php echo base_url()?>Register">Daftar</a></div>
									<div><a href="<?php echo base_url()?>Login">Masuk</a></div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="index.html">Anjungan<br>Nusantara</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-4 order-lg-1 order-2 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Pencarian Produk...">
										<div class="custom_dropdown">
										<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">Semua Kategori</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">Semua Kategori</a></li>
													<?php foreach ($kategori as $key) { ?>
														<li><a class="clc" href=""><?php echo $key->kategori_nama ?></a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo base_url('') ?>assets/template/images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-6 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="<?php echo base_url('') ?>assets/template/images/cart.png" alt="">
										<div class="cart_count"><span>1</span></div>
									</div>
									<div class="cart_content">
									<div class="cart_text"><a href="<?php echo base_url()?>Keranjang">Keranjang</a></div>
										<div class="cart_price">Rp 100.000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">Kategori</div>
								</div>
								<ul class="cat_menu">
								<?php foreach ($kategori as $key) { $kategori_id = $key->kategori_id; ?>
									<li class="hassubs">
										<a href="#"><?php echo $key->kategori_nama ?><i class="fas fa-chevron-right"></i></a>
										<ul>
										<?php foreach ($subkategori as $key) { if($kategori_id == $key->subkategori_kategori_id) {?>
											<li><a href="<?php echo base_url()?>Welcome/show_produk/subkategori/<?php echo $key->subkategori_id ?>"><?php echo $key->subkategori_nama ?><i class="fas fa-chevron-right"></i></a></li>
										<?php }} ?>
										</ul>
									</li>
								<?php } ?>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.html">Beranda<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Promo Menarik<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Diskon 20%</a>
											</li>
											<li><a href="#">Gratis Ongkir</a>
											</li>
											<li><a href="#">Gebyar UKM</a>
											</li>
											<li><a href="#">Flash Sale</a>
											</li>
										</ul>
									</li>
									
									<li class="hassubs">
										<a href="#">Halaman<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Semua Produk</a></li>
											<li><a href="cart.html">Keranjang</a></li>
											<li><a href="contact.html">Kontak</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog_single.html">Postingan Blog</a></li>
											<li><a href="regular.html">Postingan Reguler</a></li>
										</ul>
									</li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu HP-->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Pencarian Produk...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item">
									<a href="#">Beranda<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Promo Menarik<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Disount Up To 20%</a></li>
										<li><a href="#">Gratis Ongkir</a></li>
										<li><a href="#">Gebyar UKM</a></li>
										<li><a href="#">Flash Sale</a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Halaman<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Semua Produk</a></li>
										<li><a href="#">Keranjang</a></li>
										<li><a href="#">Kontak</a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">blog</a></li>
										<li><a href="#">Postingan Blog</a></li>
										<li><a href="#">Postingan Reguler</a></li>
									</ul>
								</li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo base_url('') ?>assets/template/images/phone_white.png" alt=""></div>(031) - 8894850</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo base_url('') ?>assets/template/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">humaidialmasmed@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
