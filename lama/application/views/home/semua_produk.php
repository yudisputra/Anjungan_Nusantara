<!DOCTYPE html>
<html lang="en">
<head>
<title>Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Anjungan shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/homepage_lib/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo site_url()?>assets/homepage_lib/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/homepage_lib/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/homepage_lib/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/homepage_lib/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/homepage_lib/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/homepage_lib/styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/homepage_lib/styles/shop_responsive.css">

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
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>(031) - 8894850</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="mailto:humaidialmasmed@gmail.com">humaidialmasmed@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div><a href="<?php echo base_url()?>Register">Daftar</a></div>
								<div><a href="#">Masuk</a></div>
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
													<li><a class="clc" href="shop.html">Aksesoris</a></li>
													<li><a class="clc" href="shop.html">Kuliner</a></li>
													<li><a class="clc" href="shop.html">Fashion</a></li>
													<li><a class="clc" href="shop.html">Kerajinan Tangan</a></li>
													<li><a class="clc" href="shop.html">Pernak Pernik</a></li>
													<li><a class="clc" href="shop.html">Produk Kulit</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
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
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>1</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="cart.html">Keranjang</a></div>
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

							<!-- <div class="main_nav_menu ml-auto">
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
							</div> -->

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
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>(031) - 8894850</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">humaidialmasmed@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title"><?php echo $judul?></h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span><?php echo count($hasil)?> </span> produk ditemukan</div>
							<div class="shop_sorting">
								<!-- <span>Sort by:</span> -->
								<!-- <ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul> -->
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border" id="list_produk"></div>
							<?php if(count($hasil)==0){ ?>
								<h1>Produk Kosong</h1>
							<?php }else{ ?>
								<?php foreach ($hasil as $key) {  ?>
								<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" alt="" style="width:150px;height:150px"></a></div>
								<div class="product_content">
									<div class="product_price">Rp <?php echo $key->produk_harga?></div>
									<div class="product_name"><div><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><?php echo $key->produk_nama?></a></div></div>
								</div>
								<!-- <div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul> -->
							</div>
							<?php }} ?>
						</div>

						<!-- Shop Page Navigation -->
						<div class="shop_page_nav d-flex flex-row" >
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li>1</li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Terakhir Dilihat</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/banner_product1.png" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">Rp 100.000<span>Rp 125.000</span></div>
										<div class="viewed_name"><a href="#">Tas Rajut</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">baru</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">Rp 125.000</div>
										<div class="viewed_name"><a href="#">Kalung Kerajinan Tangan</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">baru</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">Rp 125.000</div>
										<div class="viewed_name"><a href="#">Kalung Kerajinan Tangan</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">baru</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">Rp 125.000</div>
										<div class="viewed_name"><a href="#">Kalung Kerajinan Tangan</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">baru</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">Rp 275.000<span>Rp 300.000</span></div>
										<div class="viewed_name"><a href="#">Kalung Emas Murni</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">baru</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">Rp 125.000</div>
										<div class="viewed_name"><a href="#">Kalung Kerajinan Tangan</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">baru</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="index.html">Anjungan</a></div>
						</div>
						<div class="footer_title">Ajukan Pertanyaan? Hubungi Kami 24/7</div>
						<div class="footer_phone">(031) - 8894850</div>
						<div class="footer_contact_text">
							<p>9, Jalan Soekarno Hatta</p>
							<p>Lowokwaru, Malang 65141</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-1">
					<div class="footer_column">
						<div class="footer_title">Anjungan<br>Nusantara</div>
						<ul class="footer_list">
							<li><a href="shop.html">Tentang Kami</a></li>
							<li><a href="shop.html">Karir</a></li>
							<li><a href="shop.html">Berita</a></li>
							<li><a href="shop.html">Semua Produk</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Pembeli<br><br></div>
						<ul class="footer_list">
							<li><a href="shop.html">Cara Berbelanja</a></li>
							<li><a href="shop.html">Metode Pembayaran</a></li>
							<li><a href="shop.html">Lihat Promo</a></li>
							<li><a href="shop.html">Produk Terkini</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Penjual<br><br></div>
						<ul class="footer_list">
							<li><a href="#">Berjualan di Anjungan.com</a></li>
							<li><a href="#">Seller Center</a></li>
							<li><a href="#">Super Seller</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Bantuan<br><br></div>
						<ul class="footer_list">
							<li><a href="#">Hubungi Kami</a></li>
							<li><a href="#">Layanan Pelanggan</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
					</div>
				</div>	

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i  aria-hidden="true"></i> by <a href="https://instagram.com/masmed__" target="_blank">Masmed</a>

</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo site_url()?>assets/homepage_lib/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/styles/bootstrap4/popper.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/easing/easing.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo site_url()?>assets/homepage_lib/js/shop_custom.js"></script>
</body>

</html>