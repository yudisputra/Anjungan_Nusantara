<div class="page-header page-header-bordered">
  <h1 class="page-title">Manajemen Data UKM</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Produk</a></li>
    <li class="breadcrumb-item active">Manajemen Data UKM</li>
  </ol>
</div>

<div class="page-content">
	<div class="panel">
    <header class="panel-heading">
      <div class="panel-actions"></div>
      <h3 class="panel-title">Daftar UKM</h3>
    </header>
    <div class="panel-body">
      <table id="table-data"class="table table-hover dataTable table-striped w-full" data-url="<?php echo base_url($ctrlname.'/get_list_position') ?>">
        
      </table>
    </div>
  </div>
</div>

<script>
  // var url_register = '<?php echo base_url($ctrlname.'/check') ?>'
  $(document).ready(function(){
    var table_url = $('#table-data').data('url');
    $('#table-data').DataTable({
      "ajax":{
        'url' : table_url,
      },
      "columns":[{
        "title" : "#",
        "width": "5%",
        "data": null,
        "visible": true,
        "class": "text-center",
        render:(data,type,row, meta)=>{
          return meta.row + meta.settings._iDisplayStart+1;
        }
      },{
        "title" : "Position Name",
        "width" : "200px",
        "data" : "applicator_position"
      },{
        "title" : "Actions",
        "width" : "15%",
        "class" : "text-center",
        "data": (data, type, row) => {
          let _return = "";
          _return += '<a href="javascript:void(0)" class="btn btn-icon btn-success waves-effect waves-classic update-class"data-id="'+data.id+'"> <i class="icon md-edit"></i></a> &nbsp;'+''+'<a href="javascript:void(0)" data-id="'+data.id+'"" class="btn btn-icon btn-danger waves-effect waves-classic delete-class"> <i class="icon md-delete"></i></a>';
          
          return _return;
        }
      }]
    });

  });

  function reload_table() {
    $('#table-data').DataTable().ajax.reload(null,false);
  }

</script>