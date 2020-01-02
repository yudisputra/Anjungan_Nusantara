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
            <h3 class="panel-title">Daftar Produk</h3>
          </header>
          <div class="panel-body">
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                  <a href="<?php echo base_url() ?>/Penjual/form_produk_baru">
                  <button class="btn btn-outline btn-primary" type="button" data-target="#exampleTabs" data-toggle="modal">
                    <i class="icon wb-plus" aria-hidden="true"></i>Tambah Data
                  </button>
                </a>
                </div>
              </div>
            </div>
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Stock</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($produk_data as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->produk_nama ?></td>
                      <td><?php echo $key->subkategori_nama ?></td>
                      <td><?php echo $key->produk_harga ?></td>
                      <td><?php echo $key->produk_stock ?></td>
                      <?php $status = $key->produk_status; if($status == "Disetujui") { ?>
                          <td><button  type="button" class="btn btn-info btnStatus"><?php echo $status ?></button></td>
                      <?php }else{  ?>
                         <td><button type="button" class="btn btn-danger btnStatus"><?php echo $status ?></button></td>
                        <?php } ?>
                      <td class="actions">
                         <a href="<?php echo base_url()?>Penjual/lihat_foto/<?php echo $key->produk_id ?>"><button type="submit" class="btn btn-info">Foto</button></a>
                         <button type="submit" class="btn btn-success" data-target="#exampleUpdate" data-toggle="modal" id="<?php echo $key->produk_id ?>">Update</button>
                         <button type="submit" class="btn btn-warning" id="<?php echo $key->produk_id ?>">Hapus</button>
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
     <!-- Modal update produk-->
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
    <!-- End Modal -->

    <script type="text/javascript">
      $(document).ready( function () {
        $('.btn-success').click(function(){ 
               $.ajax({
                                  url : "<?php echo base_url();?>Penjual/proses_produk",
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
                                  url : "<?php echo base_url();?>Penjual/proses_produk",
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