    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="col-xxl-8 col-lg-12">
            <!-- Widget Statistic -->
               <div class="card card-shadow" id="widgetStatistic">
              <div class="card-block p-0">
                <div class="row no-space h-full" data-plugin="matchHeight">
                  <div class="col-md-12 col-sm-12">
                   <!-- panel atas-->
                   <div class="card user-following">
              <div class="card-header card-header-transparent p-20">
                <h4 class="card-title mb-0">Profil Toko Anda</h4>
              </div>
              <div class="card-block">
                <div class="row">
                  <div class="col-sm-3 col-3 mb-20">
                    <img src="<?php echo base_url() ?>assets/foto/foto_usaha/<?php echo $usaha_data[0]->usaha_foto ?>" height="200" width="200">
                    <br>
                  </div>
                  <div class="col-sm-4 col-4 mb-20">
                    <span>
                      <span><h4 class="font-size-16 mb-5">Nama Toko : <?php echo $usaha_data[0]->usaha_nama?></h4></span>
                      <br>
                       <span><h4 class="font-size-16 mb-5">Alamat Toko : <?php echo $usaha_data[0]->usaha_alamat?></h4></span>
                       <br>
                        <span><h4 class="font-size-16 mb-5">No Telepon : <?php echo $usaha_data[0]->usaha_no_telp?></h4></span>
                    </span>
                  </div>
                   <div class="col-sm-5 col-5 mb-20">
                    <span>
                      <span><h4 class="font-size-16 mb-5">E-mail Toko : <?php echo $usaha_data[0]->usaha_email?></h4></span>
                      <br>
                       <span><h4 class="font-size-16 mb-5">Keterangan Toko : <?php echo $usaha_data[0]->usaha_keterangan?></h4></span>
                       <br>
                    </span>
                  </div>
                </div>
                <div class="text-center">
                  <a href="<?php echo base_url()?>Penjual/update_usaha/<?php echo $usaha_data[0]->usaha_id?>"><button class="btn btn-round btn-primary" type="button" name="button">Ubah Data Toko</button></a>
                </div>
              </div>
            </div>


                   <!-- batas panel atas -->


                <!-- Example Tabs Left -->
              
                <!--batas-->
                        
                      </div>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Widget Statistic -->
          </div>
        </div>
    <!-- End Page -->
    <?php if ($this->session->flashdata('flash_message')): ?>
                            <script>
                                Swal.fire({
                                    title: "Done",
                                    text: "<?php echo $this->session->flashdata('flash_message'); ?>",
                                    timer: 1800,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
    <?php endif; ?>