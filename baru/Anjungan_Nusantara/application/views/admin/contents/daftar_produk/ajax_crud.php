<!--MODAL-->
<!--Modal Add period -->
<div class="modal fade" id="exampleUpdate" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Informasi Produk</h4>
                                </div>

                                <div class="modal-body">

                                <div class="example-grid">
                                <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="example-title">Nama Produk</h4>
                                    <p id="errorUpdateNama" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="namaProduk">

                                    <h4 class="example-title">Harga Produk</h4>
                                    <p id="errorUpdateHarga" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="hargaProduk">

                                    <h4 class="example-title">Stok Produk</h4>
                                    <p id="errorUpdateStok" style="color: red"></p>
                                    <input type="text" class="form-control infoNama" id="stokProduk">

                                    <input type="text" class="form-control infoNama" id="idProduk" style="display:none">
                                </div>
                                <div class="col-lg-6">
                                   
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button id="btnUpdate" type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <script type="text/javascript">
      $(document).ready( function () {
        $('.btnStatus').click(function(){ 
               $.ajax({
                                  url : "<?php echo base_url();?>Admin/ganti_status_produk",
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

          $('.btn-success').click(function(){ 
               $.ajax({
                                  url : "<?php echo base_url();?>Admin/proses_produk",
                                  method : "POST",
                                  data : { id : this.id, tipe : 'ambil'},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){ 
                                       
                                        $('#idProduk').val(data.produk_id);
                                        $('#namaProduk').val(data.produk_nama);
                                        $('#hargaProduk').val(data.produk_harga);
                                        $('#stokProduk').val(data.produk_stock);
                                      
                                  }});

          });

          $('#btnUpdate').click(function(){ 
             var updateNama = $('#namaProduk').val();
             var updateHarga = $('#hargaProduk').val();
             var updateStok = $('#stokProduk').val();
             var updateId =  $('#idProduk').val();


             if( updateNama== ""){
                 $('#errorUpdateNama').html("Nama tidak Boleh Kosong");
             }
             else if( updateHarga == ""){
                 $('#errorUpdateHarga').html("Harga tidak Boleh Kosong");
             }
            else if(updateStok == ""){
                 $('#errorUpdateStok').html("Stok tidak Boleh Kosong");
             }
             else{

                 $.ajax({
                                  url : "<?php echo base_url();?>Admin/proses_produk",
                                  method : "POST",
                                  data : { id: updateId, nama : updateNama, harga : updateHarga, stok : updateStok, tipe :"update"},
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
                    url : "<?php echo base_url();?>Penjual/proses_produk",
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