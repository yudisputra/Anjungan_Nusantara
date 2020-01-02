<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("penjual/_partials/head.php") ?>
</head>

<body id="page-top">

	<!--<?php// $this->load->view("penjual/_partials/navbar.php") ?>-->
	<div id="wrapper">

		<!--<?php// $this->load->view("penjual/_partials/sidebar.php") ?>-->

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("penjual/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('products/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">
						<div class="example-wrap">
                  		<h1 class="example-title">Tambahkan Produk</h4>
                  		<div class="example">
						<form action="<?php base_url('product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" id="name" placeholder="Nama Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Harga*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="nomor" name="price" id="price" min="0" placeholder="Harga Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="image">Foto</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" id="image"/>
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="description">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" id="description" placeholder="Deskripsi Produk..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* Harus diisi
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

		<?php $this->load->view("penjual/_partials/js.php") ?>

</body>

</html>
