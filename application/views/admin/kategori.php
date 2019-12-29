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
                          <h3 class="panel-title">Kategori dan Subkategori</h3>
                        </header>
                        <div class="panel-body">
                <!-- Example Tabs Left -->
                <div class="example-wrap">
                   <div class="mb-15">
                      <button class="btn btn-outline btn-primary" type="button" data-target="#exampleNew" data-toggle="modal">
                        <i class="icon wb-plus" aria-hidden="true"></i>Tambah Kategori
                      </button>
                       <button class="btn btn-outline btn-primary" type="button" data-target="#exampleNewSubKategori" data-toggle="modal">
                        <i class="icon wb-plus" aria-hidden="true"></i>Tambah Subkategori
                      </button>
                  </div>
                  <div class="nav-tabs-vertical nav-tabs-inverse" data-plugin="tabs">
                    <ul class="nav nav-tabs mr-25" role="tablist">
                      <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLeftOne" aria-controls="exampleTabsLeftOne" role="tab" aria-selected="true">Kategori</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftTwo" aria-controls="exampleTabsLeftTwo" role="tab" aria-selected="false">Subkategori</a></li>
                    </ul>
                    <div class="tab-content py-15">
                      <div class="tab-pane active" id="exampleTabsLeftOne" role="tabpanel">
                      <br>  
                      <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($kategori as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->kategori_nama ?></td>
                      <td class="actions">
                         <!-- <button type="submit" class="btn btn-info btnGenerateKategori" id="<?php echo $key->kategori_id ?>" value="<?php echo $key->kategori_nama ?>">Sub-Kategori</button> -->
                         <button type="submit" class="btn btn-success btnUpdateKategori" data-target="#exampleUpdateKategori" data-toggle="modal" id="<?php echo $key->kategori_id ?>" value="<?php echo $key->kategori_nama ?>">Update</button>
                         <button type="submit" class="btn btn-warning btnHapusKategori" id="<?php echo $key->kategori_id ?>">Hapus</button>
                      </td>
                    </tr>
                <?php $i++ ;} ?>
                <!-- <tr>
                  <td>Damon</td>
                  <td>5516 Adolfo Green</td>
                  <td>Littelhaven</td>
                </tr> -->
              </tbody>
            </table>
                      </div>
                      <div class="tab-pane" id="exampleTabsLeftTwo" role="tabpanel">
                        <table id="tabelsubkategori" class="table table-hover dataTable table-striped w-full" data-plugin="dataTable" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Sub Kategori</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="bodysubkategori">
              <?php $i = 1; foreach ($subkategori as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->subkategori_nama ?></td>
                      <td><?php echo $key->kategori_nama ?></td>
                      <td class="actions">
                         <button type="submit" class="btn btn-success btnUpdateSubKategori" data-target="#exampleUpdateSubKategori" data-toggle="modal" id="<?php echo $key->subkategori_id ?>" value="<?php echo $key->subkategori_nama ?>">Update</button>
                         <button type="submit" class="btn btn-warning btnHapusSubKategori" id="<?php echo $key->subkategori_id ?>">Hapus</button>
                      </td>
                    </tr>
                <?php $i++ ;} ?>
              </tbody>
            </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Example Tabs Left -->
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