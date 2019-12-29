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
                    <div class="panel">
          <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Daftar Pembelian</h3>
          </header>
          <div class="panel-body">
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                  <!-- <button class="btn btn-outline btn-primary" type="button" data-target="#exampleTabs" data-toggle="modal">
                    <i class="icon wb-plus" aria-hidden="true"></i>Tambah Data
                  </button> -->
                </a>
                </div>
              </div>
            </div>
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pembeli</th>
                  <th>Kode Pembelian</th>
                  <th>Tanggal Pembelian</th>
                  <th>Total Pembelian</th>
                  <th>Status</th>
                  <th>Bukti Transfer</th>
                  <th>Lihat Data</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($list_beli as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><button type="submit" class="btn btn-success lihat-profil" id="<?php echo $key->profile_id ?>" data-target="#profil" data-toggle="modal"><?php echo $key->profile_nama ?></button></td>
                      <td><?php echo $key->kode_tujuan ?></td>
                      <td><?php echo $key->tanggal_pembelian ?></td>
                      <td>Rp <?php echo $key->total_pembayaran ?></td>
                      <td><button type="submit" class="btn btn-success lihat-status" id="<?php echo $key->id_pembelian ?>" data-target="#status" data-toggle="modal"><?php echo $key->status_pembelian ?></button></td>
                      <td><button type="submit" class="btn btn-success" id="<?php echo $key->id_pembelian ?>">Foto Transfer</button></td>
                      <td class="actions">
                         <button type="submit" class="btn btn-success" id="<?php echo $key->id_pembelian ?>" data-target="#exampleUpdate" data-toggle="modal">Data Pesanan</button>
                         <button type="submit" class="btn btn-warning lihat-tujuan" id="<?php echo $key->id_pembelian ?>" data-target="#tujuan" data-toggle="modal">Data Tujuan</button>
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
            <!-- End Widget Statistic -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Page -->
    <!-- Profil -->
    <div class="modal fade" id="profil" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Profil Pembeli</h4>
                                </div>
                                <div class="modal-body">
                                    <h4 class="example-title">Profil Nama</h4>
                                    <input type="text" class="form-control infoNama" id="profilNama" disabled>

                                    <h4 class="example-title">Profil No Hape</h4>
                                    <input type="text" class="form-control infoNama" id="profilHape" disabled>

                                    <h4 class="example-title">Profil Alamat</h4>
                                    <input type="text" class="form-control infoNama" id="profilAlamat" disabled>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>

    <!-- Status -->
    <div class="modal fade" id="status" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Status Pesanan</h4>
                                </div>
                                <div class="modal-body">
                                <div class="form-group">
                                    <select class="form-control" id="selectstatus">
                                    <option value="Belum Ada Bukti">Belum Ada Bukti</option>
                                    <option value="Bukti Sudah Upload">Bukti Transfer Ada</option>
                                    <option value="Dikirim">Dikirim</option>
                                    <option value="Selesai">Selesai</option>
                                    </select>

                                    <input type="text" class="form-control infoNama" id="statusid" style="display:none">
                                </div>

                                </div>
                                <div class="modal-footer">
                                  <button id="ganti-status" type="submit" class="btn btn-primary">Update</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Data Pesanan -->
    <div class="modal fade" id="tujuan" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Tujuan Pesanan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">Nama Penerima</h4>
                                    <input type="text" class="form-control infoNama" id="tujuanNama" disabled>

                                    <h4 class="example-title">No Handphone Penerima</h4>
                                    <input type="text" class="form-control infoNama" id="tujuanHape" disabled>

                                    <h4 class="example-title">Alamat Penerima</h4>
                                    <input type="text" class="form-control infoNama" id="tujuanAlamat" disabled>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>

    <script type="text/javascript">
      $(document).ready( function () {

          $('.lihat-profil').click(function(){ 
               $.ajax({
                        url : "<?php echo base_url();?>Admin/proses_beli",
                        method : "POST",
                        data : { id : this.id, tipe : 'profil'},
                        async : false,
                        dataType : 'json',
                        success: function(data){ 
                            $('#profilNama').val(data[0].profile_nama);
                            $('#profilHape').val(data[0].profile_no_hp);
                            $('#profilAlamat').val(data[0].profile_alamat);
                        }});
          });

          $('.lihat-status').click(function(){ 
               $.ajax({
                        url : "<?php echo base_url();?>Admin/proses_beli",
                        method : "POST",
                        data : { id : this.id, tipe : 'status'},
                        async : false,
                        dataType : 'json',
                        success: function(data){ 
                            $('#selectstatus').val(data[0].status_pembelian);
                            $('#statusid').val(data[0].id_pembelian);
                        }});
          });

          $('#ganti-status').click(function(){ 
              var status =  $('#selectstatus').val();
              var id =  $('#statusid').val();
               $.ajax({
                        url : "<?php echo base_url();?>Admin/proses_beli",
                        method : "POST",
                        data : { id : id, tipe : 'gantistatus', status : status},
                        async : false,
                        dataType : 'json',
                        success: function(data){ 
                            $('#status').hide();
                            $('.modal-backdrop').hide();

                            Swal.fire({
                                                title: data,
                                                type: 'success',
                                                confirmButtonColor: '#3085d6',
                                                confirmButtonText: 'OK'
                                              }).then((result) => {
                                                if (result.value) {
                                                  location.reload();
                                                }
                                              })
                        }});
          });

          $('.lihat-tujuan').click(function(){ 
               $.ajax({
                        url : "<?php echo base_url();?>Admin/proses_beli",
                        method : "POST",
                        data : { id : this.id, tipe : 'tujuan'},
                        async : false,
                        dataType : 'json',
                        success: function(data){ 
                            $('#tujuanNama').val(data[0].nama_tujuan);
                            $('#tujuanHape').val(data[0].hape_tujuan);
                            $('#tujuanAlamat').val(data[0].alamat_tujuan);
                        }});
          });

      });
    </script>