<div class="page-header page-header-bordered">
  <h1 class="page-title">Manajemen Kategori dan Subkategori</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Produk</a></li>
    <li class="breadcrumb-item active">Manajemen Kategori dan Subkategori</li>
  </ol>
</div>

<div class="page-content">
	<div class="panel">
    <header class="panel-heading">
      <div class="panel-actions"></div>
      <h3 class="panel-title">Kategori dan Subkategori</h3>
    </header>
    <div class="panel-body">
      <div class="nav-tabs-vertical" data-plugin="tabs">
        <ul class="nav nav-tabs nav-tabs-line mr-25" role="tablist">
          <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLineLeftOne" aria-controls="exampleTabsLineLeftOne" role="tab" aria-selected="true">Kategori</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineLeftTwo" aria-controls="exampleTabsLineLeftTwo" role="tab" aria-selected="false">Subkategori</a></li>
        </ul>
        <div class="tab-content py-15">
          <div class="tab-pane active" id="exampleTabsLineLeftOne" role="tabpanel">
            <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal2"><i class="icon md-plus-circle"></i>Tambah Subkategori</button>
            <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal1"><i class="icon md-plus-circle"></i>Tambah Kategori</button>
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($kategori as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->kategori_nama ?></td>
                      <td class="actions">
                         <!-- <button type="submit" class="btn btn-info btnGenerateKategori" id="<?php echo $key->kategori_id ?>" value="<?php echo $key->kategori_nama ?>">Sub-Kategori</button> -->
                         <button type="submit" class="btn btn-success btnUpdateKategori" data-target="#exampleUpdateKategori" data-toggle="modal" id="<?php echo $key->kategori_id ?>" value="<?php echo $key->kategori_nama ?>">Update</button>
                         <button type="submit" class="btn btn-warning btnHapusKategori" id="<?php echo $key->kategori_id ?>">Hapus</button>
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
          <div class="tab-pane" id="exampleTabsLineLeftTwo" role="tabpanel">
            <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal2"><i class="icon md-plus-circle"></i>Tambah Subkategori</button>
            <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal1"><i class="icon md-plus-circle"></i>Tambah Kategori</button>
            <table id="tabelsubkategori" class="table table-hover dataTable table-striped w-full" data-plugin="dataTable" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Sub Kategori</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="bodysubkategori">
              <?php $i = 1; foreach ($subkategori as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->subkategori_nama ?></td>
                      <td><?php echo $key->kategori_nama ?></td>
                      <td class="actions">
                         <button type="submit" class="btn btn-success btnUpdateSubKategori" data-target="#exampleUpdateSubKategori" data-toggle="modal" id="<?php echo $key->subkategori_id ?>" value="<?php echo $key->subkategori_nama ?>">Update</button>
                         <button type="submit" class="btn btn-warning btnHapusSubKategori" id="<?php echo $key->subkategori_id ?>">Hapus</button>
                      </td>
                    </tr>
                <?php $i++ ;} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  
</script>