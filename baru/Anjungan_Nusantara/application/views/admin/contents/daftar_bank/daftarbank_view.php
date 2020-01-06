<div class="page-header page-header-bordered">
  <h1 class="page-title">Manajemen Data Bank</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Penjualan</a></li>
    <li class="breadcrumb-item active">Manajemen Data Bank</li>
  </ol>
</div>

<div class="page-content">
	<div class="panel">
    <header class="panel-heading">
      <div class="panel-actions"></div>
      <h3 class="panel-title">Daftar Bank</h3>
    </header>
    <div class="panel-body">
      <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal"><i class="icon md-plus-circle"></i>Tambah Rekening Bank</button>
      <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Bank</th>
                  <th>No Rekening</th>
                  <th>Atas Nama</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($list_bank as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->bank_nama ?></td>
                      <td><?php echo $key->no_rekening ?></td>
                      <td><?php echo $key->atas_nama ?></td>
                      <td class="actions">
                         <button type="submit" class="btn btn-success" id="<?php echo $key->bank_id ?>" data-target="#exampleUpdate" data-toggle="modal">Update</button>
                         <button type="submit" class="btn btn-warning" id="<?php echo $key->bank_id ?>">Hapus</button>
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