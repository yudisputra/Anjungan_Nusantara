   <!-- Modal new data -->
   <div class="modal fade" id="exampleNew" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Tambah Kategori</h4>
                                </div>
                                <div class="modal-body">
                                    <h4 class="example-title">Nama Kategori</h4>
                                 <input type="text" class="form-control infoNama" id="namaKategori" placeholder="Nama">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" id="saveKategori">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->

                          <!-- Modal update data -->
                          <div class="modal fade" id="exampleUpdateKategori" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Update Kategori</h4>
                                </div>
                                <div class="modal-body">
                                    <h4 class="example-title">Nama Kategori</h4>
                                 <input type="text" class="form-control infoNama" id="namaUpdateKategori" placeholder="Nama">
                                  <input type="text" class="form-control" id="idUpdateKategori" placeholder="Nama" style="display: none;">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" id="updateKategori">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->

                          <!-- Modal New Subkategori data -->
                          <div class="modal fade" id="exampleNewSubKategori" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Tambah Sub-Kategori</h4>
                                </div>
                                <div class="modal-body">
                                    <h4 class="example-title">Nama Sub-Kategori</h4>
                                 <input type="text" class="form-control" id="newNamaSubKategori" placeholder="Nama SubKategori">
                                 <br>
                                 <h4 class="example-title">Jenis Kategori</h4>
                                 <div class="form-group">
                                  <select class="form-control" id="newIdSubKategori">
                                     <option>--Pilih--</option>
                                     <?php foreach ($kategori as $key) { ?>
                                       <option value="<?php echo $key->kategori_id?>"><?php echo $key->kategori_nama ?></option>
                                      <?php } ?>
                                  </select>
                                </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" id="saveSubKategori">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->

                           <!-- Modal update data -->
                           <div class="modal fade" id="exampleUpdateSubKategori" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Update Sub Kategori</h4>
                                </div>
                                <div class="modal-body">
                                    <h4 class="example-title">Nama Sub Kategori</h4>
                                 <input type="text" class="form-control infoNama" id="namaUpdateSubKategori" placeholder="Nama">
                                  <input type="text" class="form-control" id="idUpdateSubKategori" placeholder="Nama" style="display: none;">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" id="updateSubKategori">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->
                <!--batas-->
                        </div>
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
    <script type="text/javascript">
        $(document).ready( function () {

        $('#saveKategori').click(function(){ 
            var namaKategori = $('#namaKategori').val();

            var hasill = set_get_kategori(0,namaKategori, 'baru');
            // var tes = tes_halo();

             $('#exampleNew').hide();
             $('.modal-backdrop').hide();

             Swal.fire({
                title: hasill,
                type: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
                }).then((result) => {
               if (result.value) {
                location.reload();
                }
                })

            // console.log(hasill);
        });

         $('#saveSubKategori').click(function(){ 
            var idKategori = $('#newIdSubKategori').val();
            var namaSubKategori = $('#newNamaSubKategori').val();

            // console.log(idKategori);
            // console.log(namaSubKategori);

            var hasill = set_get_subkategori(0,idKategori,namaSubKategori, 'baru');
            // var tes = tes_halo();

             $('#exampleNewSubKategori').hide();
             $('.modal-backdrop').hide();

             Swal.fire({
                title: hasill,
                type: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
                }).then((result) => {
               if (result.value) {
                location.reload();
                }
                })

            // console.log(hasill);
        });

          $('.btnHapusKategori').click(function(){

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
                            var hasill = set_get_kategori(this.id,0,'hapus');

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
                   }
                 })


          });

            $('.btnHapusSubKategori').click(function(){

              // console.log(this.id);
              Swal.fire({
                   title: 'Apakah anda yakin ?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus'
                     }).then((result) => {
                      if (result.value) {
                            var hasill = set_get_subkategori(this.id,0, 0,'hapus');

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
                   }
                 })
          });

        $('.btnUpdateKategori').click(function(){ 
             $('#namaUpdateKategori').val(this.value);
             $('#idUpdateKategori').val(this.id);
        });

        $('.btnUpdateSubKategori').click(function(){ 
             $('#namaUpdateSubKategori').val(this.value);
             $('#idUpdateSubKategori').val(this.id);
            // console.log("Halo");
        });

         $('.btnGenerateKategori').click(function(){ 
            var idKategori = this.id;
            var namaKategori = this.value;

            var hasill = set_get_subkategori(0, idKategori,0,"ambil");

            // console.log(hasill);
            // console.log(namaKategori);

            $("#notifSubKategori").css("display", "none");
            $("#headerSubKategori").html("Sub-Kategori " + namaKategori);
            $("#headerSubKategori").css("display", "block");

            var table = $('#tabelsubkategori').DataTable();
 
            table
                .clear()
                .draw();
          
          var y = 1;
            jQuery.each( hasill, function( i, val ) { 
              table.row.add( [
                  y,
                  val.subkategori_nama,
                  "<button type='submit' class='btn btn-success btnUpdateSubKategori' data-target='#exampleUpdateSubKategori' data-toggle='modal' id='" +  val.subkategori_id+"' value='" +  val.subkategori_nama +"'>Update</button><button type='submit' class='btn btn-warning btnHapusSubKategori' id='" +  val.subkategori_id+"'>Hapus</button>"
              ] ).draw( false );
              y++;
            });

            
           
        });

        $('#updateKategori').click(function(){ 
             // console.log($('#idUpdateKategori').val());
            var idKategori = $('#idUpdateKategori').val();
            var namaKategori =  $('#namaUpdateKategori').val();

            var hasill = set_get_kategori(idKategori,namaKategori,'update');
            // var tes = tes_halo();

             $('#exampleUpdateKategori').hide();
             $('.modal-backdrop').hide();

             Swal.fire({
                title: hasill,
                type: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
                }).then((result) => {
               if (result.value) {
                location.reload();
                }
                })
        });

        $('#updateSubKategori').click(function(){ 
             // console.log($('#idUpdateKategori').val());
            var idSubKategori = $('#idUpdateSubKategori').val();
            var namaSubKategori =  $('#namaUpdateSubKategori').val();

            var hasill = set_get_subkategori(idSubKategori,' ',namaSubKategori,'update');
            // var tes = tes_halo();

             $('#exampleUpdateSubKategori').hide();
             $('.modal-backdrop').hide();

             Swal.fire({
                title: hasill,
                type: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
                }).then((result) => {
               if (result.value) {
                location.reload();
                }
                })
        });

        function tes_halo() {
          $.each({ name: "John", lang: "JS" }, function( k, v ) {
            alert( "Key: " + k + ", Value: " + v );
          });
        }

       function set_get_kategori(id, nama, tipe){

        var hasil = ''

             $.ajax({
                    url : "<?php echo base_url();?>Admin/proses_kategori",
                    method : "POST",
                    data : { id: id, nama : nama, tipe : tipe},
                    async : false,
                    dataType : 'json',
                    success: function(data){ 
                          hasil = data;
                    }});

           return hasil;  
        }

        function set_get_subkategori(id, idkategori, nama, tipe){

        var hasil = ''

             $.ajax({
                    url : "<?php echo base_url();?>Admin/proses_subkategori",
                    method : "POST",
                    data : { id: id, idkategori : idkategori, nama : nama, tipe : tipe},
                    async : false,
                    dataType : 'json',
                    success: function(data){ 
                          hasil = data;
                    }});

           return hasil;  
        }

      
        });
    </script>