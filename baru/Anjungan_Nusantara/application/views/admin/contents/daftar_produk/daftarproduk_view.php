<div class="page-header page-header-bordered">
  <h1 class="page-title">Manajemen Data Produk</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Produk</a></li>
    <li class="breadcrumb-item active">Manajemen Data Produk</li>
  </ol>
</div>

<div class="page-content">
	<div class="panel">
    <header class="panel-heading">
      <div class="panel-actions"></div>
      <h3 class="panel-title">Daftar Produk</h3>
    </header>
    <div class="panel-body">
      <a href="<?php echo base_url() ?>Admin/form_produk_baru"><button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right"><i class="icon md-plus-circle"></i>Tambah Data</button></a>
      <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Harga Jual</th>
                  <th>Stock</th>
                  <th>Nama Toko</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($produk_data as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->produk_nama ?></td>
                      <td><?php echo $key->subkategori_nama ?></td>
                      <td><?php echo $key->produk_harga ?></td>
                      <td><?php echo $key->produk_harga_jual ?></td>
                      <td><?php echo $key->produk_stock ?></td>
                      <td><?php echo $key->usaha_nama ?></td>
                      <?php $status = $key->produk_status; if($status == "Disetujui") { ?>
                          <td><button  type="button" class="btn btn-info btnStatus"><?php echo $status ?></button></td>
                      <?php }else{  ?>
                         <td><button id="<?php echo $key->produk_id?>" type="button" class="btn btn-danger btnStatus"><?php echo $status ?></button></td>
                        <?php } ?>
                      <td class="actions">
                         <a href="<?php echo base_url()?>Admin/lihat_foto/<?php echo $key->produk_id ?>"><button type="submit" class="btn btn-info">Foto</button></a>
                         <button type="submit" class="btn btn-success"  data-target="#exampleUpdate" data-toggle="modal" id="<?php echo $key->produk_id ?>">Update</button>
                         <button type="submit" class="btn btn-warning" id="<?php echo $key->produk_id ?>">Hapus</button>
                      </td>
                    </tr>
                <?php $i++ ;} ?>
                <!-- <tr>
                  <td>Damon</td>
                  <td>5516 Adolfo Green</td>
                  <td>Littelhaven</td>
                </tr> -->
              </tbody>
            </table>
    </div>
  </div>
</div>

<script>

</script>