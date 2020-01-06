<!-- Cart -->
<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Keranjang Belanja</div>
						<div class="cart_items">
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_image">
									<?php $i = 1; ?>
											<?php foreach ($this->cart->contents() as $items): ?>
											 <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
											 <img src="<?php echo $items['foto']; ?>" alt="">
											<?php $i++; ?>
									<?php endforeach; ?>
									
									</div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Nama Barang</div>
											<?php $i = 1; ?>
											<?php foreach ($this->cart->contents() as $items): ?>
											 <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
											<div class="cart_item_text"><?php echo $items['name']; ?></div>
											<?php $i++; ?>
											<?php endforeach; ?>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Jumlah</div>
											<?php $i = 1; ?>
											<?php foreach ($this->cart->contents() as $items): ?>
											 <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
											<div class="cart_item_text"><?php echo $items['qty']; ?></div>
											<?php $i++; ?>
											<?php endforeach; ?>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Harga</div>
											<?php $i = 1; ?>
											<?php foreach ($this->cart->contents() as $items): ?>
											 <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
											<div class="cart_item_text">Rp <?php echo $this->cart->format_number($items['price']); ?></div>
											<?php $i++; ?>
											<?php endforeach; ?>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total Pembayaran</div>
											<?php $i = 1; ?>
											<?php foreach ($this->cart->contents() as $items): ?>
											 <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
											<div class="cart_item_text">Rp <?php echo $this->cart->format_number($items['subtotal']); ?></div>
											<?php $i++; ?>
											<?php endforeach; ?>
										</div>
									</div>
								</li>
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Total Pembayaran:</div>
								<div class="order_total_amount">Rp <?php echo $this->cart->format_number($this->cart->total()); ?></div>
							</div>
						</div>

						<div class="order_total">
							<div class="order_total_content text-md-left">
							<div class="order_total_title">Pilih Bank:
							<?php echo form_open('keranjang/checkout'); ?>
							<select class="form-control" name="bank">
							<?php foreach ($list_bank as $key) { ;?>
                                    <option value="<?php echo $key->bank_id; ?>"><?php echo $key->bank_nama ?></option>
                            <?php } ?>
							</select>
							</div>
							</div>
						</div>

						<div class="cart_buttons">
							
							<button type="button" class="button cart_button_checkout">Kembali</button>
							<button type="submit" class="button cart_button_checkout" id="buttonok">Pesan</button>
                            <?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>