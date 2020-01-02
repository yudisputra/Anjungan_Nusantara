<!--MODAL-->
<!--Modal Add period -->
<div class="modal fade" id="insertModal" aria-hidden="true" aria-labelledby="insertModal" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content form-horizontal" id="insertDataForm">
      <div class="modal-header">
        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
        <h4 class="modal-title">Data Profil dan Login Baru</h4>
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
    </form>
  </div>
</div>

<!--Modal update-->
<div class="modal fade" id="updateModal" aria-hidden="true" aria-labelledby="updateModal" role="dialog" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content form-horizontal">
      <div class="modal-header">
        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
        <h4 class="modal-title">Edit position</h4>
      </div>
      <div class="modal-body">
        <div id="formData">

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