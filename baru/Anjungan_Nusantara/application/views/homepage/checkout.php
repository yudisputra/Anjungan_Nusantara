<!-- Contact Form -->

<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
                        <div class="contact_form_title">Rincian Pesanan</div>
                        <div class="contact_form_subtitle"><h4>Silahkan Isi Alamat</h4></div>
                        <br>
                        <?php echo form_open('Keranjang/pesan');?>
                                <div class="form-group">
                                    <label for="nama">Nama Pemesan</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesanan">
                                </div>
                                
                                <div class="form-group">
                                    <label for="alamat">Alamat Pemesan</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="hape">Nomor Handphone</label>
                                    <input type="text" class="form-control" name="hape" id="hape" placeholder="Nomor Handphone"></div>  
                                </div>
                            <br>
                            <!-- Order Total -->
                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">Total Pembayaran:</div>
                                    <div class="order_total_amount">Rp <?php echo $this->cart->format_number($this->cart->total()); ?></div>
                                </div>
                            </div>
                            <!-- Order Total -->
                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">Pembayaran Lewat:</div>
                                    <div class="order_total_amount"><?php echo $databank[0]->bank_nama ?></div>
                                    <input type="text" name="bank" value="<?php echo $databank[0]->bank_id ?>" style="display:none">
                                    <input type="text" name="namabank" value="<?php echo $databank[0]->bank_nama ?>" style="display:none">
                                </div>
                            </div>
                            

							<div class="contact_form_button">
							<br>
                            	<button type="submit" class="button cart_button_checkout">Pesan</button>
                            </div>
                        <?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>
    <br>