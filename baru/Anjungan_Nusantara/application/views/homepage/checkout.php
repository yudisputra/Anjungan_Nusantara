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
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input type="text"  class="contact_form_name input_field" name="nama" placeholder="Nama Pemesan">
								<input type="text"  class="contact_form_phone input_field" name="hape" placeholder="Nomor Handphone">
							</div>
							<div class="contact_form_text">
								<textarea class="text_field contact_form_message" name="alamat" rows="6" placeholder="Masukkan Alamat Lengkap"></textarea>
                            </div>
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
								<button type="submit" class="button contact_submit_button">Pesan</button>
                            </div>
                        <?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>