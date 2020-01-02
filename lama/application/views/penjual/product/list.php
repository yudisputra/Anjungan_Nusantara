<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->helper('rupiah_helper'); ?>
	<?php $this->load->view("penjual/_partials/head.php") ?>

</head>

<body id="page-top">

	<?php $this->load->view("penjual/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("penjual/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("penjual/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('products/add') ?>"><i class="fas fa-plus"></i> Tambahkan Baru</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Produk</th>
										<th>Harga</th>
										<th>Foto</th>
										<th>Deskripsi Produk</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->name ?>
										</td>
										<td> 
											<?php 
											echo $this->fungsi->nominal('$product->price');?> 
										</td>
										<td>
											<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($product->description, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('products/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('products/delete/'.$product->product_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<!--<?php// $this->load->view("penjual/_partials/footer.php") ?>-->

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("penjual/_partials/scrolltop.php") ?>
	<?php $this->load->view("penjual/_partials/modal.php") ?>

	<?php $this->load->view("penjual/_partials/js.php") ?>

	<script type="text/javascript"  src="<?php echo base_url('assets/style-rupiah/rupiah.js')?>"></script>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
