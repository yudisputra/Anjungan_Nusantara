	
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="<?php echo base_url('') ?>assets/template/images/banner_product1.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text" style="color: #c62828;">era baru umkm</h1>
						<div class="banner_price"><span>Rp 125.000</span>Rp 100.000</div>
						<div class="banner_product_name">Tas Rajut Kerajinan Tangan</div>
						<div class="button banner_button"><a href="product.html">Belanja Sekarang</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Promo Minggu Ini -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
					<!-- Deals -->

					<div class="deals">
						<div class="deals_title">Promo Minggu Ini</div>
						<div class="deals_slider_container">
							
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
							<?php foreach ($produk_minggu_ini as $key) { ?>
								<!-- Deals Item -->
								<div class="owl-item deals_item">
								<div class="deals_image"><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><img src="<?php echo base_url("assets/foto/foto_produk/$key->produk_foto_depan")?>" width="200" height="300"></a></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="shop.html">Kerajinan Tangan</a></div>
											<div class="deals_item_price_a ml-auto"><strike>Rp <?php echo number_format(($key->produk_harga+5000),2,",",".") ?></strike></div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><div><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>"><?php echo $key->produk_nama ?></a></div></div>
											<div class="deals_item_price ml-auto">Rp <?php echo number_format($key->produk_harga,2,",",".") ?></div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Tersedia: <span><?php echo $key->produk_stock ?></span></div>
												<div class="sold_title ml-auto">Telah Terjual: <span><?php echo $key->produk_terjual ?></span></div>
											</div>
											<?php 
												$angka1 = $key->produk_stock - $key->produk_terjual;
												$angka2 = $key->produk_stock;
												$angka3 = $angka1/$angka2*100;
											?>
											<div class="available_bar"><span style="width:<?php echo $angka3?>%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Dapatkan Segera</div>
												<div class="deals_timer_subtitle">Penawaran Berakhir dalam:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span>jam</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span>menit</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span>detik</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="<?php echo base_url('') ?>assets/template/images/banner_product1.png" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="shop.html">Kerajinan Tangan</a></div>
											<div class="deals_item_price_a ml-auto">Rp 125.000</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><div><a href="product.html">Tas Rajut Kerajinan Tangan</a></div></div>
											<div class="deals_item_price ml-auto">Rp 100.000</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Tersedia: <span>6</span></div>
												<div class="sold_title ml-auto">Telah Terjual: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:83%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Dapatkan Segera</div>
												<div class="deals_timer_subtitle">Penawaran Berakhir dalam:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer2_hr" class="deals_timer_hr"></div>
														<span>jam</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer2_min" class="deals_timer_min"></div>
														<span>menit</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer2_sec" class="deals_timer_sec"></div>
														<span>detik</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="<?php echo base_url('') ?>assets/template/images/banner_product1.png" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="shop.html">Kerajinan Tangan</a></div>
											<div class="deals_item_price_a ml-auto">Rp 125.000</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><div><a href="product.html">Tas Rajut Kerajinan Tangan</a></div></div>
											<div class="deals_item_price ml-auto">Rp 100.000</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Tersedia: <span>6</span></div>
												<div class="sold_title ml-auto">Telah Terjual: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:83%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Dapatkan Segera</div>
												<div class="deals_timer_subtitle">Penawaran Berakhir dalam:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer3_hr" class="deals_timer_hr"></div>
														<span>jam</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_min" class="deals_timer_min"></div>
														<span>menit</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_sec" class="deals_timer_sec"></div>
														<span>detik</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

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
												
												<div class="product_price" style="font-size: 14px;"><a href="<?php echo base_url()?>Welcome/detail_produk/<?php echo $key->produk_id ?>">Rp <?php echo $key->produk_harga ?></a></div>
												<div class="product_name" style="font-size: 14px;"><div><?php echo $key->produk_nama ?></div></div>
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

							<br><br><br>

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

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/banner_product1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">Rp 100.000<span>Rp 125.000</span></div>
												<div class="product_name"><div><a href="product.html">Tas Rajut Kerajinan Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="product.html"><button class="product_cart_button">Lebih Detail</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">baru</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">Rp 200.000</div>
												<div class="product_name"><div><a href="product.html">Kalung Kerajinan Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button active">Lebih Detail</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">baru</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">Rp 25.000</div>
												<div class="product_name"><div><a href="product.html">Bumbu Rempah</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="product.html"><button class="product_cart_button">Lebih Detail</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">baru</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">Rp 100.000<span>Rp 125.000</span></div>
												<div class="product_name"><div><a href="product.html">Tas Rajut Batik</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="product.html"><button class="product_cart_button">Lebih Detail</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">baru</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">Rp 100.000</div>
												<div class="product_name"><div><a href="product.html">Lemari Ukir</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="product.html"><button class="product_cart_button">Lebih Detail</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">baru</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">Rp 50.000</div>
												<div class="product_name"><div><a href="product.html">Lukisan Wajah</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="product.html"><button class="product_cart_button">Lebih Detail</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">baru</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">Rp 200.000</div>
												<div class="product_name"><div><a href="product.html">Jamu Nyonya 1kg</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="product.html"><button class="product_cart_button">Lebih Detail</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">baru</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">Rp 75.000</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="product.html"><button class="product_cart_button">Lebih Detail</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">baru</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/template/images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">Rp 75.000</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="product.html"><button class="product_cart_button">Lebih Detail</button></a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">baru</li>
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
	</div>


	<!-- Popular categories -->

	<div class="popular_categories">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="popular_categories_content">
						<div class="popular_categories_title">Kategori Populer</div>
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
													<div class="product_price" style="font-size:14px;">Rp <?php echo $key->produk_harga?></div>
													<div class="product_name" style="font-size:14px;"><div><a href="<?php echo base_url()?>Welcome/detail_product/<?php echo $key->produk_id?>"><?php echo $key->produk_nama?></a></div></div>
													<div class="product_extras">
														<div class="product_color" style="border: 0px;">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="<?php echo base_url()?>Detail_Product" style="color: #fff;">Tambahkan Keranjang</a></button>
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
											<button class="arrivals_single_button"><a href="<?php echo base_url()?>Detail_Product" style="color: #FFF;">Tambahkan Keranjang</a></button>
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

	