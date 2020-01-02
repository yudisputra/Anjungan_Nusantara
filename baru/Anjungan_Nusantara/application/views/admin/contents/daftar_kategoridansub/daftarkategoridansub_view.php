<div class="page-header page-header-bordered">
  <h1 class="page-title">Manajemen Kategori dan Subkategori</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Produk</a></li>
    <li class="breadcrumb-item active">Manajemen Kategori dan Subkategori</li>
  </ol>
</div>

<div class="page-content">
	<div class="panel">
    <header class="panel-heading">
      <div class="panel-actions"></div>
      <h3 class="panel-title">Kategori dan Subkategori</h3>
    </header>
    <div class="panel-body">
      <div class="nav-tabs-vertical" data-plugin="tabs">
        <ul class="nav nav-tabs nav-tabs-line mr-25" role="tablist">
          <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLineLeftOne" aria-controls="exampleTabsLineLeftOne" role="tab" aria-selected="true">Kategori</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineLeftTwo" aria-controls="exampleTabsLineLeftTwo" role="tab" aria-selected="false">Subkategori</a></li>
        </ul>
        <div class="tab-content py-15">
          <div class="tab-pane active" id="exampleTabsLineLeftOne" role="tabpanel">
            <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal2"><i class="icon md-plus-circle"></i>Tambah Subkategori</button>
            <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal1"><i class="icon md-plus-circle"></i>Tambah Kategori</button>
            <table id="table-data1"class="table table-hover dataTable table-striped w-full" data-url="<?php echo base_url($ctrlname.'/get_list_position') ?>"></table>
          </div>
          <div class="tab-pane" id="exampleTabsLineLeftTwo" role="tabpanel">
            <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal2"><i class="icon md-plus-circle"></i>Tambah Subkategori</button>
            <button type="button" class=" btn btn-raised btn-primary waves-effect waves-classic float-right" id="insertModalBtn" data-toggle="modal" data-target="#insertModal1"><i class="icon md-plus-circle"></i>Tambah Kategori</button>
            <table id="table-data2"class="table table-hover dataTable table-striped w-full" data-url="<?php echo base_url($ctrlname.'/get_list_position') ?>"></table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // var url_register = '<?php echo base_url($ctrlname.'/check') ?>'
  $(document).ready(function(){
    var table_url = $('#table-data1').data('url');
    var table_url = $('#table-data2').data('url');
    $('#table-data1').DataTable({
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
    $('#table-data2').DataTable({
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