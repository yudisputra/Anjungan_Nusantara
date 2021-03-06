<!DOCTYPE html>
<html lang="en">
<head>
<title>Anjungan_Nusantara</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Anjungan shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/homepage_lib/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url()?>assets/homepage_lib/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage_lib/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage_lib/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage_lib/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage_lib/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage_lib/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage_lib/styles/rating.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage_lib/styles/responsive.css">

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
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo base_url('assets/homepage_lib/images/phone.png')?>" alt=""></div>(0341) - 123456</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo base_url(); ?>assets/homepage_lib/images/mail.png" alt=""></div>anjungannusantarabatu@gmail.com</div>
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
							<div class="logo"><a href="<?php echo base_url()?>Welcome">Anjungan<br>Nusantara</a></div>
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
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo base_url()?>assets/homepage_lib/images/search.png" alt=""></button>
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
										<img src="<?php echo base_url()?>assets/homepage_lib/images/cart.png" alt="">
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

							<!-- <div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="<?php echo base_url()?>Welcome">Beranda<i class="fas fa-chevron-down"></i></a></li>
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
											<li><a href="<?php echo base_url()?>Semua_Produk">Semua Produk</a></li>
											<li><a href="<?php echo base_url()?>Keranjang">Keranjang</a></li>
											<li><a href="<?php echo base_url()?>Kontak">Kontak</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Blog<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="<?php echo base_url()?>Blog">Blog</a></li>
											<li><a href="<?php echo base_url()?>Blog_Single">Postingan Blog</a></li>
											<li><a href="<?php echo base_url()?>Regular_Blog">Postingan Reguler</a></li>
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
									<a href="<?php echo base_url()?>Welcome">Beranda<i class="fa fa-angle-down"></i></a>
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
									<a href="#">blog<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="<?php echo base_url()?>Blog">blog</a></li>
										<li><a href="<?php echo base_url()?>Blog_Single">Postingan Blog</a></li>
										<li><a href="<?php echo base_url()?>Regular_Blog">Postingan Reguler</a></li>
									</ul>
								</li>
							</ul>

							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo base_url('assets/homepage_lib/images/phone_white.png')?>" alt=""></div>(031) - 8894850</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo base_url('assets/homepage_lib/images/mail_white.png')?>" alt=""></div><a href="mailto:fastsales@gmail.com">anjungannusantarabatu@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(assets/homepage_lib/images/banner_background.jpg)">
		</div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="<?php echo base_url('assets/homepage_lib/images/banner_product1.png') ?>" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">era baru umkm</h1>
						<div class="banner_price"><span>Rp 125.000</span>Rp 100.000</div>
						<div class="banner_product_name">Tas Rajut Kerajinan Tangan</div>
						<div class="button banner_button"><a href="<?php echo base_url()?>Semua_Produk">Belanja Sekarang</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Promo Minggu Ini -->
	<br>
	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

					<!-- Deals -->

					<div class="deals">
						<div class="deals_title">Produk Minggu Ini</div>
						<div class="deals_slider_container">

							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
                            <?php foreach ($produk_minggu_ini as $key) { ?>
								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" width="200" height="300"></a></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><div><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><?php echo $key->produk_nama ?></a></div></div>
										</div>
										<div class="available">
										<div class="deals_item_price ml-auto">Rp <?php echo $key->produk_harga ?></div>
										</div>
									</div>
								</div>
                                <?php } ?>
							</div>
						</div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>

					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Terjual Sekarang</li>
									<!-- <li>Terjual Sekarang</li> -->
									<li>Rating Terbaik</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Product Panel -->
							<div class="product_panel panel active">
								<div class="featured_slider slider">
								<?php foreach ($produk_baru_terjual as $key) { ?>
									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" alt="" style="width:150px;height:150px"></a></div>
											<div class="product_content">
												<br>
												<br>
												<br>
												<div class="product_price"><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>">Rp <?php echo $key->produk_harga ?></a></div>
												<div class="product_name"><div><?php echo $key->produk_nama ?></div></div>
												<div class="product_extras">
													<!-- <div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div> -->
													<a href="<?php echo base_url()?>Detail_Product/"<?php echo $key->produk_id?>><button class="product_cart_button">Tambahkan Keranjang</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<!-- <ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">Halo</li>
											</ul> -->
										</div>
									</div>
								<?php } ?>
								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">
								<?php foreach ($produk_rating as $key) { ?>
									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?php echo base_url()?>Detail_Product"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" alt=""></a></div>
											<div class="product_content">
												<br>
												<br>
												<br>

										<!--		<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
										
<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
											<br>

												<div class="product_price">Rp <?php echo $key->produk_harga ?></div>
												<div class="product_name"><div><?php echo $key->produk_nama ?></div></div>
												<div class="product_extras">
													<!-- <div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div> -->
													<a href="<?php echo base_url()?>Detail_Product"><button class="product_cart_button">Tambahkan Keranjang</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<!-- <ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">Halo</li>
											</ul> -->
										</div>
									</div>
									<?php } ?>

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular categories -->

	<div class="popular_categories">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="popular_categories_content">
						<div class="popular_categories_title">Popular Kategori</div>
						<div class="popular_categories_slider_nav">
							<div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
						<div class="popular_categories_link"><a href="<?php echo base_url()?>Semua_Produk">Lihat Semua</a></div>
					</div>
				</div>

				<!-- Popular categories Slider -->

				<div class="col-lg-9">
					<div class="popular_category_slider_container">
						<div class="owl-carousel owl-theme popular_categories_slider">
							
							<?php foreach($kategori_populer as $key) { ?>
							<!-- Popular categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<!-- <div class="popular_category_image"><img src="images/popular_1.png" alt=""></div> -->
									<div class="popular_category_text"><a href="<?php echo base_url()?>Semua_Produk"><?php echo $key->kategori_nama ?></a></div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Produk Terbaru</div>
							<ul class="clearfix">
							<?php foreach($tiga_subkategori_terbaik as $key){ ?>
								<!-- <li class="active">Ditampilkan</li>
								<li>Pernak Pernik</li>
								<li>Fashion</li> -->
								<li><?php echo $key->subkategori_nama?></li>
							<?php }?>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">
										<?php foreach($produk_terbanyak_tiga_kategori[0] as $key) {?>
										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?php echo base_url()?>Welcome/detail_product/<?php echo $key->produk_id?>"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" width="150" height="200"></a></div>
												<div class="product_content">
													<div class="product_price">Rp <?php echo $key->produk_harga?></div>
													<div class="product_name"><div><a href="<?php echo base_url()?>Welcome/detail_product/<?php echo $key->produk_id?>"><?php echo $key->produk_nama?></a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="<?php echo base_url()?>Detail_Product">Tambahkan Keranjang</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">baru</li>
												</ul>
											</div>
										</div>
										<?php } ?>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">
										<?php foreach($produk_terbanyak_tiga_kategori[1] as $key) {?>
										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?php echo base_url()?>Welcome/detail_product/<?php echo $key->produk_id?>"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" width="150" height="200"></a></div>
												<div class="product_content">
													<div class="product_price">Rp <?php echo $key->produk_harga?></div>
													<div class="product_name"><div><a href="<?php echo base_url()?>Welcome/detail_product/<?php echo $key->produk_id?>"><?php echo $key->produk_nama?></a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="<?php echo base_url()?>Detail_Product">Tambahkan Keranjang</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">baru</li>
												</ul>
											</div>
										</div>
										<?php } ?>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>
								
								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">
										<?php foreach($produk_terbanyak_tiga_kategori[2] as $key) {?>
										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?php echo base_url()?>Welcome/detail_product/<?php echo $key->produk_id?>"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" width="150" height="200"></a></div>
												<div class="product_content">
													<div class="product_price">Rp <?php echo $key->produk_harga?></div>
													<div class="product_name"><div><a href="<?php echo base_url()?>Welcome/detail_product/<?php echo $key->produk_id?>"><?php echo $key->produk_nama?></a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="<?php echo base_url()?>Detail_Product">Tambahkan Keranjang</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">baru</li>
												</ul>
											</div>
										</div>
										<?php } ?>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>
								

							</div>

							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/banner_product1.png" alt=""></a></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="shop.html">Fashion</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut</a></div>
												<div class="arrivals_single_price text-right">Rp 125.000</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button"><a href="<?php echo base_url()?>Detail_Product">Tambahkan Keranjang</a></button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">baru</li>
										</ul>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Best Sellers -->
	
	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Produk Penjualan Terbaik</div>
							<ul class="clearfix">
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>

						<div class="bestsellers_panel panel active">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">
								<?php foreach($terjual_terbanyak as $key) { ?>
								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" width="200" height="300"></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><?php echo $key->subkategori_nama ?></a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><?php echo $key->produk_nama ?></a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp <?php echo $key->produk_harga ?></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<!-- <ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul> -->
								</div>
								<?php } ?>
							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="<?php echo base_url()?>Detail_Product"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="<?php echo base_url()?>Detail_Product">Tas Rajut Kerajinan Tangan</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">Rp 100.000<span>Rp 125.000</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">baru</li>
									</ul>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	


	<!-- Reviews -->

	<div class="reviews">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="reviews_title_container">
						<h3 class="reviews_title">Ulasan Terbaru</h3>
						<div class="reviews_all ml-auto"><a href="#">lihat semua <span>ulasan</span></a></div>
					</div>

					<div class="reviews_slider_container">

						<!-- Reviews Slider -->
						<div class="owl-carousel owl-theme reviews_slider">

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><!-- <img src="images/banner_product1.png" alt=""> --></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 Hari Lalu</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 Hari Lalu</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 Hari Lalu</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 Hari Lalu</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 Hari Lalu</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 Hari Lalu</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

						</div>
						<div class="reviews_dots"></div>
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

							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url()?>assets/homepage_lib/images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url()?>assets/homepage_lib/images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url()?>assets/homepage_lib/images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url()?>assets/homepage_lib/images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url()?>assets/homepage_lib/images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url()?>assets/homepage_lib/images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url()?>assets/homepage_lib/images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url()?>assets/homepage_lib/images/brands_8.jpg" alt=""></div></div>

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

	<!-- <div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Daftar untuk berita terbaru</div>
							<div class="newsletter_text"><p>...dan dapatkan diskon 20% untuk pembelian pertama.</p></div>
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
	</div> -->

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="<?php echo base_url()?>Welcome">Anjungan</a></div>
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
							<!-- <li><a href="shop.html">Karir</a></li> -->
							<!-- <li><a href="shop.html">Berita</a></li> -->
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
							<!-- <li><a href="shop.html">Lihat Promo</a></li> -->
							<li><a href="shop.html">Produk Terkini</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Penjual<br><br></div>
						<ul class="footer_list">
							<li><a href="#">Berjualan di Anjungan.com</a></li>
							<!-- <li><a href="#">Seller Center</a></li>
							<li><a href="#">Super Seller</a></li> -->
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved

</div>
						<div class="logos ml-sm-auto">
						<!--logo list -->
							<!-- <ul class="logos_list">
								<li><a href="#"><img src="<?php echo base_url()?>assets/homepage_lib/images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url()?>assets/homepage_lib/images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url()?>assets/homepage_lib/images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url()?>assets/homepage_lib/images/logos_4.png" alt=""></a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/homepage_lib/js/jquery-3.3.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/styles/bootstrap4/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/styles/bootstrap4/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/plugins/greensock/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/plugins/greensock/TimelineMax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/plugins/greensock/animation.gsap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/plugins/greensock/ScrollToPlugin.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/plugins/slick-1.8.0/slick.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/plugins/easing/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/homepage_lib/js/custom.js"></script>
</body>

</html>
