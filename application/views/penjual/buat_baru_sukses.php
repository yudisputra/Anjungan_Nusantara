    <!-- Page -->
    <?php $this->load->view('penjual/template'); ?>

    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="col-xxl-8 col-lg-12">
            <!-- Widget Statistic -->
            <div class="card card-shadow" id="widgetStatistic">
              <div class="card-block p-0">
                <div class="row no-space h-full" data-plugin="matchHeight">
                  <div class="col-md-12 col-sm-12">
                    <h3>Selamat Datang, </h3>
                    <br> <br> <br> <br>
                     <?php

                            echo "sukses Simpan Data";

                            echo anchor('penjual/dashboard', 'Masukkan Data Lagi');
                        ?>


                  </div>
                </div>
              </div>
            </div>
            <!-- End Widget Statistic -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Page -->
