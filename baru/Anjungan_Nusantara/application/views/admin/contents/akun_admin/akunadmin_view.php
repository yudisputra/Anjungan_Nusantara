<div class="page-header page-header-bordered">
  <h1 class="page-title">Manajemen Akun Admin</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Akun</a></li>
    <li class="breadcrumb-item active">Manajemen </li>
  </ol>
</div>

<div class="page-content">
	<div class="panel">
    <header class="panel-heading">
      <div class="panel-actions"></div>
      <h3 class="panel-title">Akun Admin</h3>
    </header>
    <div class="panel-body">
      <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-target="#exampleTabs" data-toggle="modal"><i class="icon md-plus-circle"></i>Tambah Data</button>
      <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>E-mail</th>
                  <th>No Handphone</th>
                  <?php if($judul == "Penjual") { ?>
                     <th>Status</th>
                  <?php } ?>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($data_akun as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->profile_nama ?></td>
                      <td><?php echo $key->e_mail ?></td>
                      <td><?php echo $key->profile_no_hp ?></td>
                      <?php if($judul == "Penjual") { $status = $key->login_status ; if($status == "Terverifikasi") { ?>
                          <td><button id="<?php echo $key->login_id ?>" type="button" class="btn btn-info btnStatus"><?php echo $status ?></button></td>
                      <?php }else{  ?>
                         <td><button id="<?php echo $key->login_id ?>" type="button" class="btn btn-danger btnStatus"><?php echo $status ?></button></td>
                        <?php }} ?>
                      <td class="actions">
                         <button type="submit" class="btn btn-info" id="<?php echo $key->login_profile_id ?>" data-target="#exampleInfo" data-toggle="modal">Info</button>
                         <button type="submit" class="btn btn-success"data-target="#exampleUpdate" data-toggle="modal" id="<?php echo $key->login_profile_id ?>">Update</button>
                         <button type="submit" class="btn btn-warning" id="<?php echo $key->login_profile_id ?>">Hapus</button>
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