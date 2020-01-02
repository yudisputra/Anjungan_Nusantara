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
      <h3 class="panel-title">Tambah Produk</h3>
    </header>
    <div class="panel-body">
    <?php echo form_open_multipart('Penjual/tambahkan_produk'); ?>

        <div class="form-group">
            <label class="form-control-label" for="name">Nama Produk</label>
            <input type="text" class="form-control" id="produk_nama" name="produk_nama"
            placeholder="Nama Produk Anda" autocomplete="off" required="" />
            <?php echo form_error('produk_nama') ?>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="name">Kategori</label>
            <select class="form-control" id="kategori">
                <option>--Pilih--</option>
                <?php foreach ($kategori as $key) { ?>
                <option value="<?php echo $key->kategori_id?>"><?php echo $key->kategori_nama ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="name">Sub Kategori</label>
            <select class="form-control" id="subkategori" name="subkategori">
                        <option>--Pilih--</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="harga">Harga Produk</label>
            <input type="price" class="form-control" id="produk_harga" name="produk_harga"
            placeholder="Harga Produk Anda" /*onkeyup="convertToRupiah(this);" */autocomplete="off" required="" />
            <?php 
            echo form_error('produk_harga') ?>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="stok">Stok Produk</label>
            <input type="number" min="0" class="form-control" id="produk_stock" name="produk_stock"
            placeholder="Stok Produk Anda" autocomplete="off" required="" />
            <?php echo form_error('produk_stock') ?>
        </div>

        <input type="price" class="form-control" id="produk_usaha_id" name="produk_usaha_id"
            style="display: none;" value=<?php echo $this->session->userdata('profile_id')?> />

        <div class="form-group">
            <label class="form-control-file" for="file">Foto Produk</label>
                <label class="form-control-file" for="file">Maksimal 4 Foto</label>
                <input type="file" name="userfile[]" type="button" class="btn btn-primary" id="change-profile-pic" multiple>


            <!--  <input type="file" class="form-control" id="inputBasicFotoProfil" name="inputFotoProfil"
                placeholder="Foto Profil Toko Anda" autocomplete="off" /> -->
        </div>

        <!--<div class="form-group">
        <label for="foto">Foto Produk</label>
        <input class="form-control-file" type="file" id="foto" name="images" />
        <input class="form-control-file" type="file" id="foto" name="images" />
        <input class="form-control-file" type="file" id="foto" name="images" />
        <input class="form-control-file" type="file" id="foto" name="images" />
        </div> -->

        <div class="form-group">
            <label for="deskripsi">Deskripsi Produk</label>
            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"  placeholder="Deskripsi Produk Anda" autocomplete="off" rows="5"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="float-right btn btn-primary">Tambahkan</button>
        </div>
        <?php echo form_close(); ?>
    </div>
  </div>
</div>
