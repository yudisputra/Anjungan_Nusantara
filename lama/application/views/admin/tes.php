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
                    <button class="btn btn-outline btn-default" data-target="#exampleNiftySlideFromRight"
                      data-toggle="modal" type="button">Open</button>

                    <!-- Modal -->
                    <div class="modal fade modal-slide-in-right" id="exampleNiftySlideFromRight" aria-hidden="true"
                      aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-simple">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title">Modal Title</h4>
                          </div>
                          <div class="modal-body">
                            <form id="submit-button">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="bsubmit">Save changes</button>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal -->
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
   $(document).ready(function(){

    $('#bsubmit').click(function(){
      
          var x= $('#nama').val();
      
           //   $.ajax({
           //     url : "<?php echo base_url();?>Admin/tesmodal",
           //     method : "POST",
           //     data : { nama: x},
           //     async : false,
           //     dataType : 'json',
           //     success: function(data){
           //       $('#exampleNiftySlideFromRight').setAttribute('aria-hidden', 'true');
           // }});

           Swal.fire({
            title: 'Error!',
            text: x,
            type: 'error',
            confirmButtonText: 'Cool'
          })
        });
   // document.getElementById("status").innerHTML = "You wrote: " + x;
  });
  </script>