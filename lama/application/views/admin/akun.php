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
            <h3 class="panel-title">Manajemen Akun <?php echo $judul?></h3>
          </header>
          <div class="panel-body">
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                  <button class="btn btn-outline btn-primary" type="button" data-target="#exampleTabs" data-toggle="modal">
                    <i class="icon wb-plus" aria-hidden="true"></i>Tambah Data
                  </button>
                </div>
              </div>
            </div>
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>E-mail</th>
                  <th>No Handphone</th>
                  <?php if($judul == "Penjual") { ?>
                     <th>Status</th>
                  <?php } ?>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($data_akun as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->profile_nama ?></td>
                      <td><?php echo $key->e_mail ?></td>
                      <td><?php echo $key->profile_no_hp ?></td>
                      <?php if($judul == "Penjual") { $status = $key->login_status ; if($status == "Terverifikasi") { ?>
                          <td><button id="<?php echo $key->login_id ?>" type="button" class="btn btn-info btnStatus"><?php echo $status ?></button></td>
                      <?php }else{  ?>
                         <td><button id="<?php echo $key->login_id ?>" type="button" class="btn btn-danger btnStatus"><?php echo $status ?></button></td>
                        <?php }} ?>
                      <td class="actions">
                         <button type="submit" class="btn btn-info" id="<?php echo $key->login_profile_id ?>" data-target="#exampleInfo" data-toggle="modal">Info</button>
                         <button type="submit" class="btn btn-success"data-target="#exampleUpdate" data-toggle="modal" id="<?php echo $key->login_profile_id ?>">Update</button>
                         <button type="submit" class="btn btn-warning" id="<?php echo $key->login_profile_id ?>">Hapus</button>
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

         <!--  modal new data -->
            <div class="modal fade" id="exampleTabs" aria-hidden="true" aria-labelledby="exampleModalTabs"
                      role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-simple">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="exampleModalTabs">Data Profil dan Login Baru</h4>
                          </div>
        
                          <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleLine1"
                                aria-controls="exampleLine1" role="tab">Data Profil</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleLine2"
                                aria-controls="exampleLine2" role="tab">Data Login</a></li>
                          </ul>

                          <div class="modal-body">
                            <div class="tab-content">
                              <div class="tab-pane active" id="exampleLine1" role="tabpanel">
                                  <div class="example-grid">
                              <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">Nama</h4>
                                  <p id="errorNewNama" style="color: red"></p>
                                 <input id="newNama" type="text" class="form-control" name="nama" placeholder="Nama">
                                </div>
                                <div class="col-lg-6">
                                 <h4 class="example-title">No Handphone</h4>
                                  <p id="errorNewHape" style="color: red"></p>
                                 <input id="newHape" type="text" class="form-control" name="no_hp" placeholder="No Handphone">
                                </div>
                              </div>

                              <br>

                               <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">Alamat</h4>
                                  <p id="errorNewAlamat" style="color: red"></p>
                                 <input id= "newAlamat" type="text" class="form-control" name="alamat" placeholder="Alamat">
                                </div>
                                <div class="col-lg-6">
                                <!--  untuk status di hidden -->
                                 <input type="text" class="form-control" name="status" value="<?php echo $judul?>" hidden>
                                </div>
                              </div>

                             
                            </div>
                              </div>

                              <div class="tab-pane" id="exampleLine2" role="tabpanel">
                                <div class="example-grid">
                                <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">E-mail</h4>
                                  <p id="errorNewEmail" style="color: red"></p>
                                 <input id="newEmail" type="text" class="form-control" name="email" placeholder="E-mail">
                                </div>
                                <div class="col-lg-6">
                                 <h4 class="example-title">Password</h4>
                                  <p id="errorNewPassword" style="color: red"></p>
                                 <input id="newPassword" type="text" class="form-control" name="password" placeholder="Password">
                                </div>
                              </div>
                                </div>
                              </div>

                            </div>
                            <br>
                           <button id="btnBaru" type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>

           <!--  modal data info -->
            <div class="modal fade" id="exampleInfo" aria-hidden="true" aria-labelledby="exampleInfo"
                      role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-simple">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="exampleInfo">Data Profil dan Login</h4>
                          </div>
        
                          <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleLine3"
                                aria-controls="exampleLine1" role="tab">Data Profil</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleLine4"
                                aria-controls="exampleLine2" role="tab">Data Login</a></li>
                          </ul>

                          <div class="modal-body">
                            <div class="tab-content">
                              <div class="tab-pane active" id="exampleLine3" role="tabpanel">
                                  <div class="example-grid">
                              <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">Nama</h4>
                                 <input id="infoNama" type="text" class="form-control infoNama" name="nama" placeholder="Nama" disabled>
                                </div>
                                <div class="col-lg-6">
                                 <h4 class="example-title">No Handphone</h4>
                                 <input id="infoHape" type="text" class="form-control infoHape" name="no_hp" placeholder="No Handphone" disabled>
                                </div>
                              </div>

                              <br>

                               <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">Alamat</h4>
                                 <input id="infoAlamat" type="text" class="form-control infoAlamat" name="alamat" placeholder="Alamat" disabled>
                                </div>
                                <div class="col-lg-6">
                                <!--  untuk status di hidden -->
                                 <input id="infoStatus" type="text" class="form-control infoStatus" name="status" value="<?php echo $judul?>" hidden>
                                  <input id="infoId" type="text" class="form-control infoId" name="status" value="<?php echo $judul?>" hidden>
                                </div>
                              </div>

                             
                            </div>
                              </div>

                              <div class="tab-pane" id="exampleLine4" role="tabpanel">
                                <div class="example-grid">
                                <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">E-mail</h4>
                                 <input id="infoEmail" type="text" class="form-control infoEmail" name="email" placeholder="E-mail" disabled>
                                </div>
                                <div class="col-lg-6">
                                 <h4 class="example-title">Password</h4>
                                 <input id="infoPassword" type="text" class="form-control infoPassword" name="password" placeholder="Password" disabled>
                                </div>
                              </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

              <!--  modal data update -->
            <div class="modal fade" id="exampleUpdate" aria-hidden="true" aria-labelledby="exampleUpdate"
                      role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-simple">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="exampleInfo">Update Profil dan Login</h4>
                          </div>
        
                          <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleLine5"
                                aria-controls="exampleLine1" role="tab">Data Profil</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleLine6"
                                aria-controls="exampleLine2" role="tab">Data Login</a></li>
                          </ul>

                          <div class="modal-body">
                            <div class="tab-content">
                              <div class="tab-pane active" id="exampleLine5" role="tabpanel">
                                  <div class="example-grid">
                              <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">Nama</h4>
                                 <p id="errorUpdateNama" style="color: red"></p>
                                 <input id="updateNama" type="text" class="form-control infoNama" name="nama" placeholder="Nama">
                                </div>
                                <div class="col-lg-6">
                                 <h4 class="example-title">No Handphone</h4>
                                 <p id="errorUpdateHape" style="color: red"></p>
                                 <input id="updateHape" type="text" class="form-control infoHape" name="no_hp" placeholder="No Handphone">
                                </div>
                              </div>

                              <br>

                               <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">Alamat</h4>
                                  <p id="errorUpdateAlamat" style="color: red"></p>
                                 <input id="updateAlamat" type="text" class="form-control infoAlamat" name="alamat" placeholder="Alamat">
                                </div>
                                <div class="col-lg-6">
                                <!--  untuk status di hidden -->
                                 <input id="updateStatus" type="text" class="form-control infoStatus" name="status" value="<?php echo $judul?>" hidden>
                                  <input id="updateId" type="text" class="form-control infoId" name="status" value="<?php echo $judul?>" hidden>
                                </div>
                              </div>

                             
                            </div>
                              </div>

                              <div class="tab-pane" id="exampleLine6" role="tabpanel">
                                <div class="example-grid">
                                <div class="row">
                                <div class="col-lg-6">
                                 <h4 class="example-title">E-mail</h4>
                                  <p id="errorUpdateEmail" style="color: red"></p>
                                 <input id="updateEmail" type="text" class="form-control infoEmail" name="email" placeholder="E-mail">
                                </div>
                                <div class="col-lg-6">
                                 <h4 class="example-title">Password</h4>
                                  <p id="errorUpdatePassword" style="color: red"></p>
                                 <input id="updatePassword" type="text" class="form-control infoPassword" name="password" placeholder="Password">
                                </div>
                              </div>
                                </div>
                              </div>
                              <br>
                              <button id="btnUpdate" type="submit" class="btn btn-primary">Update</button>
                            </div>
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
      </div>
    </div>
    <!-- End Page -->
    <script type="text/javascript">
      $(document).ready( function () {
          $('#table_id').DataTable();

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
                                  url : "<?php echo base_url();?>Admin/hapus_akun",
                                  method : "POST",
                                  data : { id: this.id},
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

           //ajax ambil untuk info
          $('.btn-info').click(function (){
             get_info(this.id);
          });

          $('.btn-success').click(function(){
            get_info(this.id);
          });

           $('#btnUpdate').click(function(){

             var updateNama = $('#updateNama').val();
             var updateHape = $('#updateHape').val();
             var updateAlamat = $('#updateAlamat').val();
             var updateEmail = $('#updateEmail').val();
             var updatePassword = $('#updatePassword').val();
             var updateId =  $('#updateId').val();


             if( updateNama== ""){
                 $('#errorUpdateNama').html("Nama tidak Boleh Kosong");
             }
             else if( updateHape == ""){
                 $('#errorUpdateHape').html("Nomor Handphone tidak Boleh Kosong");
             }
            else if(updateAlamat == ""){
                 $('#errorUpdateAlamat').html("Alamat tidak Boleh Kosong");
             }
            else if(updateEmail == ""){
                 $('#errorUpdateEmail').html("Email tidak Boleh Kosong");
             }
             else if( updatePassword == ""){
                 $('#errorUpdatePassword').html("Password tidak Boleh Kosong");
             }
             else{

                 $.ajax({
                                  url : "<?php echo base_url();?>Admin/update_akun",
                                  method : "POST",
                                  data : { id: updateId, nama : updateNama, hape : updateHape, alamat : updateAlamat, email : updateEmail, password : updatePassword},
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

             $('#btnBaru').click(function(){

             var newNama = $('#newNama').val();
             var newHape = $('#newHape').val();
             var newAlamat = $('#newAlamat').val();
             var newEmail = $('#newEmail').val();
             var newPassword = $('#newPassword').val();
             var tipe =  "<?php echo $judul ?>";

             
             if(tipe == "Penjual"){
                var newStatus = "Belum Verifikasi";
             }
             else{
              var newStatus = "Terverifikasi";
             }


             if( newNama== ""){
                 $('#errorNewNama').html("Nama tidak Boleh Kosong");
             }
             else if( newHape == ""){
                 $('#errorNewHape').html("Nomor Handphone tidak Boleh Kosong");
             }
            else if(newAlamat == ""){
                 $('#errorNewAlamat').html("Alamat tidak Boleh Kosong");
             }
            else if(newEmail == ""){
                 $('#errorNewEmail').html("Email tidak Boleh Kosong");
             }
             else if( newPassword == ""){
                 $('#errorNewPassword').html("Password tidak Boleh Kosong");
             }
             else if(newEmail != ""){

                 $.ajax({
                                  url : "<?php echo base_url();?>Admin/checkemail",
                                  method : "POST",
                                  data : { email : newEmail},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){

                                            if(data == "E-mail sudah dipakai."){
                                              $('#errorNewEmail').html(data);
                                             }
                                             else{
                                                  $.ajax({
                                  url : "<?php echo base_url();?>Admin/buat_akun",
                                  method : "POST",
                                  data : { nama : newNama, hape : newHape, alamat : newAlamat, email : newEmail, password : newPassword, status : newStatus, level : tipe},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){

                                            
                                             $('#exampleTabs').hide();
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
                                  }});
             }
          });

          $('.btnStatus').click(function(){ 
               $.ajax({
                                  url : "<?php echo base_url();?>Admin/ganti_status",
                                  method : "POST",
                                  data : { id : this.id},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){ 
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

          function get_info(id){
             $('.infoNama').val('');
             $('.infoHape').val('');
             $('.infoAlamat').val('');
             $('.infoEmail').val('');
             $('.infoPassword').val('');
             $('.infoId').val('');

                             $.ajax({
                                  url : "<?php echo base_url();?>Admin/get_info",
                                  method : "POST",
                                  data : { id: id},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){ 

                                        // console.log(data[0]);
                                        $('.infoNama').val(data[0].profile_nama);
                                        $('.infoHape').val(data[0].profile_no_hp);
                                        $('.infoAlamat').val(data[0].profile_alamat);
                                        $('.infoEmail').val(data[0].e_mail);
                                        $('.infoPassword').val(data[0].password);
                                        $('.infoId').val(data[0].profile_id);
                                  }});
          }
        });
    </script>