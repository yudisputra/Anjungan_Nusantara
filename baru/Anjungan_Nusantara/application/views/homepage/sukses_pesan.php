<!-- Cart -->

<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-left">
                                <div class="order_total_title">Pemesanan Berhasil Silahkan Menyelesaikan Transaksi Melalui :</div>
                            </div>
                            
                        </div>
							<div class="order_total_content text-md-left">
                                <div class="order_total_amount">Rekening : <?php echo $databank[0]->bank_nama ?></div>
                            </div>
                            <div class="order_total_content text-md-left">
                                <div class="order_total_amount">No Rekening : <?php echo $databank[0]->no_rekening ?></div>
                            </div>
                            <div class="order_total_content text-md-left">
                                <div class="order_total_amount">Atas Nama : <?php echo $databank[0]->atas_nama ?></div>
                            </div>
                            <div class="order_total_content text-md-left">
                                <div class="order_total_amount">Total : <?php echo $total ?> </div>
                            </div>
                            <div class="order_total_content text-md-left">
                                <div class="order_total_amount">Kode Referensi :<?php echo $kode ?> </div>
                            </div>

					</div>
				</div>
			</div>
		</div>
	</div>