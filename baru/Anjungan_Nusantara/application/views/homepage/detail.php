	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">

					<!-- Images -->
					<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
					
						<?php foreach($detail as $key) { if($key->list_gambar != $detail[0]->produk_foto_depan) {?>
						<li data-image="images/banner_product2.jpg"><img src="<?php echo base_url("assets/foto/foto_produk/$key->list_gambar")?>" alt=""></li>
						<?php }} ?>
					</ul>
				</div>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img id="fotofotoproduk" src="<?php echo base_url('assets/foto/foto_produk/'.$detail[0]->produk_foto_depan)?>" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
				
					<div class="product_description">
					
							
						<div class="product_category"><?php echo $detail[0]->subkategori_nama ?></div>
						<div class="product_name" id="namabarang"><?php echo $detail[0]->produk_nama ?></div>
						<input id="idbarang" type="text" value="<?php echo $detail[0]->produk_id ?>" style="display:none">
						<div class="product_text"><p><?php echo $detail[0]->produk_deskripsi ?></p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Jumlah: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									<!-- Product Color -->
									<!-- <ul class="product_color">
										<li>
											<span>Warna: </span>
											<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
											<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

											<ul class="color_list">
												<li><div class="color_mark" style="background: #999999;"></div></li>
												<li><div class="color_mark" style="background: #b19c83;"></div></li>
												<li><div class="color_mark" style="background: #000000;"></div></li>
											</ul>
										</li>
									</ul> -->

								</div>

								<div class="product_price" id="hargabarang">Rp <?php echo $detail[0]->produk_harga ?></div>
								<div class="button_container">
									<button type="button" class="button cart_button" id="cekkeranjang">Tambahkan Keranjang</button>
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
							</form>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
