<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Halaman Penjual</title>
    
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/breakpoints/breakpoints.js')?>"></script>
    <script>
      Breakpoints();
    </script>
</head>
<body>
	 <div class="page-content">
        <div class="panel">
          <div class="panel-body container-fluid">


            <div class="row row-lg">
              <div class="col-md-2">
              
              </div>
              <div class="col-md-6">
                <!-- Example Basic Form (Form grid) -->
                <div class="example-wrap">
                  <h1 class="example-title">Identitas Toko</h4>
                  <div class="example">

                      <div class="form-group">
                      <?php echo form_open_multipart('Penjual/create_penjual'); ?>

                        <label class="form-control-label" for="inputBasicNama">Nama Toko</label>
                        <input type="text" class="form-control" 
                        id="usaha_nama" name="usaha_nama"
                          placeholder="Nama Toko Anda" autocomplete="off" />
                          <br>
                        <label style="color: red"><?php echo form_error('usaha_nama') ?></label>
                      </div>

                       <div class="form-group">
                        <label class="form-control-label" for="inputBasicAlamatToko">Alamat Toko</label>
                        <input type="text" class="form-control" 
                        id="usaha_alamat" name="usaha_alamat"
                          placeholder="Alamat Toko Anda" autocomplete="off" />
                           <br>
                        <label style="color: red"><?php echo form_error('usaha_alamat') ?></label>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicNo.Telpon">No. Telp.</label>
                        <input type="number" class="form-control" 
                        id="usaha_no_telp" name="usaha_no_telp"
                          placeholder="No. Telepon Toko Anda" autocomplete="off" />
                           <br>
                        <label style="color: red"><?php echo form_error('usaha_no_telp') ?></label>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicemail">E-mail</label>
                        <input type="email" class="form-control" id="usaha_email" name="usaha_email"
                          placeholder="Email Toko Anda" autocomplete="off" />
                           <br>
                        <label style="color: red"><?php echo form_error('usaha_email') ?></label>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicfotoprofil">Logo Toko</label>
                        <br>
                        Silahkan Upload Logo Toko Anda    :
                        <input type="file" name="usaha_foto" id="usaha_foto">
                        <label style="color: red"><?php echo form_error('usaha_foto') ?></label>
                        <!--<input type="submit" value="Upload Image" name="submit">-->
                        <?php echo form_error('usaha_foto') ?>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicUsahaProfil">Profil</label>
                        <textarea class="form-control" cols="20" rows="10" name="usaha_keterangan" id="usaha_keterangan" placeholder="Jelaskan tentang Usaha Anda"></textarea>
                        <!--<input type=textarea rows="5" class="form-control" id="inputBasicFotoProfil" name="inputFotoProfil"
                          placeholder="Profil Toko Anda" autocomplete="off" /> -->
                      </div>

                      <div class="form-group">
                        <input type="submit" name="submit" value="Buat Toko" class="btn btn-primary" id="simpan" nama="simpan"> 
                      <!-- Buat Toko </button> -->
                      <!--  <?php echo form_close();?> -->
                      </div>
                  </div>
                </div>
                <!-- End Example Basic Form (Form grid) -->
              </div>


                  
</body>
</html>
