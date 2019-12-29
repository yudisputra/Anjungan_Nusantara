<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Halaman Penjual</title>

    <link rel="apple-touch-icon" href="<?php echo base_url('assets/templateadmin/base/assets/images/apple-touch-icon.png')?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/templateadmin/base/assets/images/favicon.ico')?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="<?php echo base_url('assets/sweetalert/sweetalert2.all.min.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert/sweetalert2.min.css')?>">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap-extend.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/base/assets/css/site.min.css')?>">

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/animsition/animsition.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/asscrollable/asScrollable.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/switchery/switchery.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/intro-js/introjs.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/slidepanel/slidePanel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/flag-icon-css/flag-icon.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/chartist/chartist.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/jvectormap/jquery-jvectormap.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/base/assets/examples/css/dashboard/v1.css')?>">
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>


    <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/weather-icons/weather-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/web-icons/web-icons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/brand-icons/brand-icons.min.css')?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
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
                  <h1 class="example-title">Tambahkan Produk</h4>
                  <div class="example">
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
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"
                          placeholder="Deskripsi Produk Anda" autocomplete="off" rows="5" /></textarea>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </div>
                      <?php echo form_close(); ?>
                   
                  </div>
                </div>
                <!-- End Example Basic Form (Form grid) -->
              </div>
              <script>
                $('#kategori').change(function(){
                  var id=$(this).val();
                        $('#subkategori').empty().append('<option selected="selected" value="">--Pilih--</option>');

                        
                        $.ajax({
                    url : "<?php echo base_url();?>Penjual/get_subkategori",
                    method : "POST",
                    data : {id: id},
                    async : false,
                        dataType : 'json',
                    success: function(data){
                      

                                for (let index = 0; index < data.length; index++) {
                                    $("#subkategori").append("<option value="+data[index].subkategori_id+">"+data[index].subkategori_nama+"</option>");
                                }
                    }
                  });
                });
              </script>
               <script type="text/javascript"  src="<?php echo base_url('assets/style-rupiah/rupiah.js')?>"></script>
</body>
</html>
