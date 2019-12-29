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
            <h3 class="panel-title">Daftar Bank</h3>
          </header>
          <div class="panel-body">
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                <button class="btn btn-outline btn-primary" type="button" data-target="#exampleNew" data-toggle="modal">
                        <i class="icon wb-plus" aria-hidden="true"></i>Tambah Rekening Bank
                </button>
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
                  <th>Nama Bank</th>
                  <th>No Rekening</th>
                  <th>Atas Nama</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($list_bank as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->bank_nama ?></td>
                      <td><?php echo $key->no_rekening ?></td>
                      <td><?php echo $key->atas_nama ?></td>
                      <td class="actions">
                         <button type="submit" class="btn btn-success" id="<?php echo $key->bank_id ?>" data-target="#exampleUpdate" data-toggle="modal">Update</button>
                         <button type="submit" class="btn btn-warning" id="<?php echo $key->bank_id ?>">Hapus</button>
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

    <div class="modal fade" id="exampleNew" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Tambah Bank</h4>
                                </div>
                                <div class="modal-body">
                                    <h4 class="example-title">Nama Bank</h4>
                                    <p id="errorNewNama" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="namaBankNew">

                                    <h4 class="example-title">No Rekening</h4>
                                    <p id="errorNewNoRekening" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="norekeningBankNew">

                                    <h4 class="example-title">Atas Nama Rekening</h4>
                                    <p id="errorNewAtasNama" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="atasNamaNew">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" id="saveBank">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>

    <!-- Modal update usaha -->
    <div class="modal fade" id="exampleUpdate" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Update Data Bank </h4>
                                </div>

                                <div class="modal-body">

                               
                                    <h4 class="example-title">Nama Bank</h4>
                                    <p id="errorUpdateNama" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="namaBankUpdate">

                                    <h4 class="example-title">No Rekening</h4>
                                    <p id="errorUpdateNoRekening" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="norekeningBankUpdate">

                                    <h4 class="example-title">Atas Nama Rekening</h4>
                                    <p id="errorUpdateAtasNama" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="atasNamaUpdate">

                                    <input type="text" class="form-control infoNama" id="idBankUpdate" style="display:none">
                                </div>
                                <div class="modal-footer">
                                  <button id="btnUpdate" type="submit" class="btn btn-primary">Update</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
    <!-- End Modal -->

    <script type="text/javascript">
      $(document).ready( function () {

          $('.btn-success').click(function(){ 
               $.ajax({
                                  url : "<?php echo base_url();?>Admin/proses_bank",
                                  method : "POST",
                                  data : { id : this.id, tipe : 'ambil'},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){ 
                                        // console.log(data.usaha_nama);
                                        $('#idBankUpdate').val(data.bank_id);
                                        $('#namaBankUpdate').val(data.bank_nama);
                                        $('#norekeningBankUpdate').val(data.no_rekening);
                                        $('#atasNamaUpdate').val(data.atas_nama);
                                  }});

          });

          $('#btnUpdate').click(function(){ 
             var updateId =  $('#idBankUpdate').val();
             var updateNama =  $('#namaBankUpdate').val();
             var updateNoRekening = $('#norekeningBankUpdate').val();
             var updateAtasNama = $('#atasNamaUpdate').val();

             if( updateNama== ""){
                 $('#errorUpdateNama').html("Nama tidak Boleh Kosong");
             }
             else if( updateNoRekening == ""){
                 $('#errorUpdateNoRekening').html("Nomor Rekening tidak Boleh Kosong");
             }
            else if(updateAtasNama == ""){
                 $('#errorUpdateAtasNama').html("Atas Nama tidak Boleh Kosong");
             }
             else{

                 $.ajax({
                                  url : "<?php echo base_url();?>Admin/proses_bank",
                                  method : "POST",
                                  data : { id: updateId, nama : updateNama,norekening : updateNoRekening, atasnama : updateAtasNama, tipe :"update"},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){

                                            
                                             $('#exampleUpdate').hide();
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
             }
          });

          $('#saveBank').click(function(){ 
             var updateNama =  $('#namaBankNew').val();
             var updateNoRekening = $('#norekeningBankNew').val();
             var updateAtasNama = $('#atasNamaNew').val();

             if( updateNama== ""){
                 $('#errorNewNama').html("Nama tidak Boleh Kosong");
             }
             else if( updateNoRekening == ""){
                 $('#errorNewNoRekening').html("Nomor Rekening tidak Boleh Kosong");
             }
            else if(updateAtasNama == ""){
                 $('#errorNewAtasNama').html("Atas Nama tidak Boleh Kosong");
             }
             else{

                 $.ajax({
                                  url : "<?php echo base_url();?>Admin/proses_bank",
                                  method : "POST",
                                  data : {nama : updateNama,norekening : updateNoRekening, atasnama : updateAtasNama, tipe :"baru"},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){

                                            
                                             $('#exampleNew').hide();
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
             }
          });

                                                             //ajax hapus
          $('.btn-warning').click(function(){

                // console.log(this.id);
                // alert(this.id);
                Swal.fire({
                    title: 'Apakah anda yakin ?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus'
                    }).then((result) => {
                        if (result.value) {

                            $.ajax({
                                    url : "<?php echo base_url();?>Admin/proses_bank",
                                    method : "POST",
                                    data : { id: this.id, tipe : "hapus"},
                                    async : false,
                                    dataType : 'json',
                                    success: function(data){ 

                                            Swal.fire({
                                                title: 'Terhapus',
                                                type: 'success',
                                                confirmButtonColor: '#3085d6',
                                                confirmButtonText: 'OK'
                                                }).then((result) => {
                                                if (result.value) {
                                                    location.reload();
                                                }
                                                })
                                    }});
                    
                    }
                })
        });

      });
    </script>