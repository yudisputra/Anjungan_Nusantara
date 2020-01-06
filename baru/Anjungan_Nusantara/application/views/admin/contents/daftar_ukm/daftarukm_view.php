<div class="page-header page-header-bordered">
  <h1 class="page-title">Manajemen Data UKM</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Produk</a></li>
    <li class="breadcrumb-item active">Manajemen Data UKM</li>
  </ol>
</div>

<div class="page-content">
	<div class="panel">
    <header class="panel-heading">
      <div class="panel-actions"></div>
      <h3 class="panel-title">Daftar UKM</h3>
    </header>
    <div class="panel-body">
    <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Usaha</th>
                  <th>Pemilik</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($list_ukm as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->usaha_nama ?></td>
                      <td><?php echo $key->profile_nama ?></td>
                      <td class="actions">
                          <button type="submit" class="btn btn-info" id="<?php echo $key->usaha_id ?>" data-target="#exampleInfo" data-toggle="modal">Info Usaha</button>
                         <button type="submit" class="btn btn-success" id="<?php echo $key->usaha_id ?>" data-target="#exampleUpdate" data-toggle="modal">Update</button>
                         <button type="submit" class="btn btn-warning" id="<?php echo $key->usaha_id ?>">Hapus</button>
                      </td>
                    </tr>
                <?php $i++ ;} ?>
              </tbody>
            </table>
    </div>
  </div>
</div>

<script>

</script>