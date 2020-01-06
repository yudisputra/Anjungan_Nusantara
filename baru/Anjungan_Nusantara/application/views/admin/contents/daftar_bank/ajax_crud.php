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
            $("#idBankUpdate")  .attr('value', '#000000');

            $("#namaBankUpdate").attr('value', '000000');

            $("#norekeningBankUpdate").val("Dolly Duck");

            $("#atasNamaUpdate").val("Dolly Duck");


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