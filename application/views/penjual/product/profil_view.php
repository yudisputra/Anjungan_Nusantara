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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('profilcontrol/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Alamat</th>
										<th>NO. Telp. </th>
										<th>Email<th>
										<th>Photo</th>
										<th>Profil</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($usaha as $usaha): ?>
									<tr>
										<td width="150">
											<?php echo $usaha->usaha_nama ?>
										</td>
										<td>
											<?php echo $usaha->usaha_alamat ?>
										</td>
										<td>
											<?php echo $usaha->usaha_no_telp ?>
										</td>
										<td>
										<?php echo $usaha->usaha_email ?>
									</td>
										<td>
											<img src="<?php echo base_url('upload/images/'.$usaha->usaha_foto) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($usaha->usaha_profil, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('usaha/edit/'.$usaha->usaha_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('usaha/delete/'.$usaha->usaha_id) ?>')"
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

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
