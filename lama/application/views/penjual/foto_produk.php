    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
          <div class="col-xxl-8 col-lg-12">

            <div class="example-wrap">
              <div class="example example-well">
                <div class="page-header text-center">
                  <h1 class="page-title">Foto Produk</h1>
                  <?php echo form_open('Penjual/pilih_foto/'.$this->uri->segment(3)); ?>
                </div>
                <div class="page-header text-center">
                <div class="example-warp">
                 <select class="image-picker show-html" name="foto_depan">
                                     <?php foreach ($foto_data as $key) { ?>
                                       <option data-img-src="<?php echo base_url()?>/assets/foto/foto_produk/<?php echo $key->list_gambar?>" value="<?php echo $key->list_gambar?>"  height="42" width="42"></option>
                                      <?php } ?>
                  </select>
                  </div> 
                </div>
                <div class="page-header text-center">
                  <button type="submit" class="btn btn-primary btn-round">
                    Pilih Foto Sebagai Foto Depan Produk
                  </button>
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
        $("select").imagepicker();
    </script>
    <!-- End Page -->