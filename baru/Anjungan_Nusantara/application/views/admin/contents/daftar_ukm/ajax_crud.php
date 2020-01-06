<!-- Modal informasi usaha -->
<div class="modal fade" id="exampleInfo" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Informasi Usaha </h4>
                                </div>

                                <div class="modal-body">

                                <div class="example-grid">
                                <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="example-title">Nama Usaha</h4>
                                    <input type="text" class="form-control infoNama" id="namaUsahaInfo" disabled>

                                    <h4 class="example-title">Alamat Usaha</h4>
                                    <input type="text" class="form-control infoNama" id="alamatUsahaInfo" disabled>

                                    <h4 class="example-title">No Telpon Usaha</h4>
                                    <input type="text" class="form-control infoNama" id="telponUsahaInfo" disabled>
                                
                                    <h4 class="example-title">E-mail Usaha</h4>
                                    <input type="text" class="form-control infoNama" id="emailUsahaInfo" disabled>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="example-title">Foto Usaha</h4>
                                    <img id="fotoUsahaInfo" height="100" width="100">

                                    <h4 class="example-title">Deskripsi Usaha</h4>
                                    <textarea class="form-control infoNama" rows="3" id="deksripsiUsahaInfo" disabled></textarea>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
    <!-- End Modal -->

    <!-- Modal update usaha -->
    <div class="modal fade" id="exampleUpdate" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Informasi Usaha </h4>
                                </div>

                                <div class="modal-body">

                               
                                    <h4 class="example-title">Nama Usaha</h4>
                                    <p id="errorUpdateNama" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="namaUsahaUpdate">

                                    <h4 class="example-title">Alamat Usaha</h4>
                                    <p id="errorUpdateAlamat" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="alamatUsahaUpdate">

                                    <h4 class="example-title">No Telpon Usaha</h4>
                                    <p id="errorUpdateTelpon" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="telponUsahaUpdate">
                                
                                    <h4 class="example-title">E-mail Usaha</h4>
                                    <p id="errorUpdateEmail" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="emailUsahaUpdate">

                                    <input type="text" class="form-control infoNama" id="idUsahaUpdate" style="display:none">
                                </div>
                                <div class="modal-footer">
                                  <button id="btnUpdate" type="submit" class="btn btn-primary">Simpan</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
    <!-- End Modal -->

    <script type="text/javascript">
      $(document).ready( function () {
        $('.btn-info').click(function(){ 
               $.ajax({
                                  url : "<?php echo base_url();?>Admin/proses_usaha",
                                  method : "POST",
                                  data : { id : this.id, tipe : 'ambil'},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){ 
                                        // console.log(data.usaha_nama);
                                        $('#namaUsahaInfo').val(data.usaha_nama);
                                        $('#alamatUsahaInfo').val(data.usaha_alamat);
                                        $('#telponUsahaInfo').val(data.usaha_no_telp);
                                        $('#emailUsahaInfo').val(data.usaha_email);
                                        $("#fotoUsahaInfo").attr("src","<?php echo base_url()?>assets/foto/foto_usaha/"+data.usaha_foto);
                                        $('#deksripsiUsahaInfo').val(data.usaha_keterangan);
                                  }});

          });

          $('.btn-success').click(function(){ 
               $.ajax({
                                  url : "<?php echo base_url();?>Admin/proses_usaha",
                                  method : "POST",
                                  data : { id : this.id, tipe : 'ambil'},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){ 
                                        // console.log(data.usaha_nama);
                                        $('#idUsahaUpdate').val(data.usaha_id);
                                        $('#namaUsahaUpdate').val(data.usaha_nama);
                                        $('#alamatUsahaUpdate').val(data.usaha_alamat);
                                        $('#telponUsahaUpdate').val(data.usaha_no_telp);
                                        $('#emailUsahaUpdate').val(data.usaha_email);
                                  }});

          });

          $('#btnUpdate').click(function(){ 
             var updateNama = $('#namaUsahaUpdate').val();
             var updateHape = $('#telponUsahaUpdate').val();
             var updateAlamat = $('#alamatUsahaUpdate').val();
             var updateEmail = $('#emailUsahaUpdate').val();
             var updateId =  $('#idUsahaUpdate').val();


             if( updateNama== ""){
                 $('#errorUpdateNama').html("Nama tidak Boleh Kosong");
             }
             else if( updateHape == ""){
                 $('#errorUpdateTelpon').html("Nomor Handphone tidak Boleh Kosong");
             }
            else if(updateAlamat == ""){
                 $('#errorUpdateAlamat').html("Alamat tidak Boleh Kosong");
             }
            else if(updateEmail == ""){
                 $('#errorUpdateEmail').html("Email tidak Boleh Kosong");
             }
             else{

                 $.ajax({
                                  url : "<?php echo base_url();?>Admin/proses_usaha",
                                  method : "POST",
                                  data : { id: updateId, nama : updateNama, hape : updateHape, alamat : updateAlamat, email : updateEmail, tipe :"update"},
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
                                    url : "<?php echo base_url();?>Admin/proses_usaha",
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