<div class="page-header page-header-bordered">
  <h1 class="page-title">Update Profil Toko</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Profil Toko</a></li>
    <li class="breadcrumb-item active">Update Profil toko</li>
  </ol>
</div>

<div class="page-content">
	<div class="panel">
    <header class="panel-heading">
      <div class="panel-actions"></div>
      <h3 class="panel-title">Update Identitas toko</h3>
    </header>
    <div class="panel-body">
        <div class="form-group">
            <?php echo form_open_multipart('Penjual/update_usaha/'.$this->uri->segment(3)); ?>

            <label class="form-control-label" for="inputBasicNama">Nama Toko</label>
            <input type="text" class="form-control" id="usaha_nama" name="usaha_nama"
                placeholder="Nama Toko Anda" autocomplete="off" value="<?php //echo $usaha_data[0]->usaha_nama?>" />
                <br>
            <label style="color: red"><?php echo form_error('usaha_nama') ?></label>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="inputBasicAlamatToko">Alamat Toko</label>
            <input type="text" class="form-control" id="usaha_alamat" name="usaha_alamat"
                placeholder="Alamat Toko Anda" autocomplete="off" value="<?php //echo $usaha_data[0]->usaha_alamat?>" />
                <br>
            <label style="color: red"><?php echo form_error('usaha_alamat') ?></label>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="inputBasicNo.Telpon">No. Telp.</label>
            <input type="number" class="form-control" id="usaha_no_telp" name="usaha_no_telp"
                placeholder="No. Telepon Toko Anda" autocomplete="off" value="<?php //echo $usaha_data[0]->usaha_no_telp?>" />
                <br>
            <label style="color: red"><?php echo form_error('usaha_no_telp') ?></label>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="inputBasicemail">E-mail</label>
            <input type="email" class="form-control" id="usaha_email" name="usaha_email"
                placeholder="Email Toko Anda" autocomplete="off" value="<?php //echo $usaha_data[0]->usaha_email?>" />
                <br>
            <label style="color: red"><?php echo form_error('usaha_email') ?></label>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="inputBasicfotoprofil">Foto Profil</label>
            <br>
            Silahkan Upload Foto Profil Anda    :
            <input type="file" name="usaha_foto" id="usaha_foto">
            <label style="color: red"><?php echo form_error('usaha_foto') ?></label>
            <!--<input type="submit" value="Upload Image" name="submit">-->
        </div>

        <div class="form-group">
            <label class="form-control-label" for="inputBasicUsahaProfil">Profil</label>
            <textarea class="form-control" cols="20" rows="10" name="usaha_keterangan" id="usaha_keterangan" placeholder="Jelaskan tentang Usaha Anda"><?php //echo $usaha_data[0]->usaha_keterangan?></textarea>
            <!--<input type=textarea rows="5" class="form-control" id="inputBasicFotoProfil" name="inputFotoProfil"
                placeholder="Profil Toko Anda" autocomplete="off" /> -->
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-primary">Kembali</button>
        </div>
    </div>
  </div>
</div>
