<!--MODAL-->
<!--Modal Add period -->
<div class="modal fade" id="insertModal" aria-hidden="true" aria-labelledby="insertModal" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content form-horizontal" id="insertDataForm">
      <div class="modal-header">
        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
        <h4 class="modal-title">Data Profil dan Login Baru</h4>
      </div>
      <ul class="nav nav-tabs nav-tabs-line" role="tablist">
        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleLine1"
          aria-controls="exampleLine1" role="tab">Data Profil</a>
        </li>
        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleLine2"
          aria-controls="exampleLine2" role="tab">Data Login</a>
        </li>
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
                  <input id="newAlamat" type="text" class="form-control" name="alamat" placeholder="Alamat">
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
        <button id="btnBaru" type="submit" class="btn btn-primary float-right">Simpan</button>
      </div>
    </form>
  </div>
</div>

<!--Modal update-->
<div class="modal fade" id="updateModal" aria-hidden="true" aria-labelledby="updateModal" role="dialog" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content form-horizontal">
      <div class="modal-header">
        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
        <h4 class="modal-title">Update Profil dan Login</h4>
      </div>
      <ul class="nav nav-tabs nav-tabs-line" role="tablist">
        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleLine5" aria-controls="exampleLine1" role="tab">Data Profil</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleLine6" aria-controls="exampleLine2" role="tab">Data Login</a></li>
      </ul>
      <div class="modal-body">
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

<script>
$(document).ready(function () {
  //insert
  $('#insertDataForm').on('submit',function(){
    var position_name = $('#position_name').val();

    $.ajax({
      type: "post",
      url: "<?php echo base_url($ctrlname.'/position_insert') ?>",
      beforeSend :function (){
        swal({
          title: 'Waiting',
          html: 'Proccessing data',
          onOpen: ()=>{
            swal.showLoading()
          }
        })
      },
      data: {position_name:position_name},
      dataType: "JSON",
      success: function(data){
        $('#table-data').DataTable().ajax.reload(null,false);
        swal({
          type:'success',
          title: 'Data Added',
          text: 'Succesfully added item'
        })
        $('#insertModal').modal('hide');
        $('#position_name').val('');
      }
    })
    return false;
  });

  // fungsi untuk edit data
  //pilih selector dari table id datamahasiswa dengan class .ubah-mahasiswa
  $('#table-data').on('click','.update-class', function () {
  // ambil element id pada saat klik ubah
  var id =  $(this).data('id');
          
     $.ajax({
      type: "post",
      url: "<?php echo base_url($ctrlname.'/form_update_position')?>",
      beforeSend :function () {
        swal({
          title: 'Processing',
          html: 'Processing data',
          onOpen: () => {
            swal.showLoading()
          }
        })      
      },
      data: {id:id},
      success: function (data) {
        swal.close();
        $('#updateModal').modal('show');
        $('#formData').html(data);
        
        // proses untuk mengubah data
        $('#formUpdate').on('submit', function () {
            var edit_position_name = $('#edit_position_name').val(); // diambil dari id nama yang ada diform modal
            var edit_id = $('#edit_id').val(); //diambil dari id yang ada di form modal
            $.ajax({
              type: "POST",
              url: "<?php echo base_url($ctrlname.'/position_update')?>",
              beforeSend :function () {
                swal({
                  title: 'Waiting',
                  html: 'Processing data',
                  onOpen: () => {
                    swal.showLoading()
                  }
                })      
              },
              data: {edit_position_name:edit_position_name, id:id}, // ambil datanya dari form yang ada di variabel
              
              success: function (data) {
                $('#table-data').DataTable().ajax.reload(null,false);
                swal({
                  type: 'success',
                  title: 'Data Updated',
                  text: 'Succesfully updated data'
                })
                  // bersihkan form pada modal
                  $('#updateModal').modal('hide');
                }
            })
          return false;
        });
      }
    });
  });
  
  //delete
  // fungsi untuk hapus data
  //pilih selector dari table id datamahasiswa dengan class .hapus-mahasiswa
  $('#table-data').on('click','.delete-class', function () {
    var id =  $(this).data('id');
    swal({
        title: 'Confirmation',
        text: "Do you want to delete? ",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        cancelButtonText: 'Cancel',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url:"<?=base_url($ctrlname.'/position_delete')?>",  
            method:"post",
            beforeSend :function () {
            swal({
                title: 'Waiting',
                html: 'Processing Data',
                onOpen: () => {
                  swal.showLoading()
                }
              })      
            },    
            data:{id:id},
            success:function(data){
              swal(
                'Delete',
                'Success Delete',
                'success'
              )
              $('#table-data').DataTable().ajax.reload(null, false)
            }
          })
      } else if (result.dismiss === swal.DismissReason.cancel) {
          swal(
            'Cancel',
            'You Canceled Delete',
            'error'
          )
        }
      })
    });
});
</script>