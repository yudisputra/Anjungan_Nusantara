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
						<a href="<?php echo site_url('products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('ProfilControl/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="usaha_nama" placeholder="Nama Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('usaha_nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Alamat</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="usaha_alamat" min="0" placeholder="Alamat Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('usaha_alamat') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="price">No. Telp</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="usaha_no_telp" min="0" placeholder="No. Telp. Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('usaha_no_telp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Email</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="email" name="usaha_email" min="0" placeholder="Email Perusahaan" />
								<div class="invalid-feedback">
									<?php echo form_error('usaha_email') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="usaha_foto" />
								<div class="invalid-feedback">
									<?php echo form_error('usaha_foto') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Profil</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Profil Perusahaan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('usaha_profil') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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
