<link rel="stylesheet" href="<?php echo base_url() ?>plugins/datatables/dataTables.bootstrap4.css"> 
<div class="content-wrapper">
  <section class="content">

 

  <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp;PPAP Status</h3>
        </div>
        <div class="d-inline-block float-right">
          <?php //if($this->rbac->check_operation_permission('add')): ?>
            <!-- <a href="<?php echo base_url (); ?>parts/parts_add" class="btn btn-success"> Add Parts <i class="fa fa-plus"></i> </a> -->
         
        </div>
      </div>
    </div>


<div class="card">
      <div class="card-body table-responsive">
        <table id="na_datatable" class="table table-bordered table-striped" width="50%">
          <thead>
            <tr>
              <th>sr.no</th>
              <th>Part Number </th>
              <th>Part Description </th>
              

              <!-- <th width="200" class="text-left">ACtion</th> -->
            </tr>
            <?php  foreach ($records as $rec) {  
             
          ?>
          
          <?php// print_r($records); die();  ?>
            <tr>
             <th > <?php echo "{$rec['id']}"; ?>  </th>
              <th> <?php echo "{$rec['part_number']}"; ?></th>
              <th> <?php echo "{$rec['part_description']}"; ?></th>
             
              <!-- <th width="200" class="text-right"><?php echo "{$rec['Name']}"; ?> </th> -->
              <!-- <th  width="200" class="text-left"> -->
           <!-- <a font-size:50%; title="View" class="view btn btn-sm btn-info" href="<?php echo base_url()?>parts/parts_list"> <i class="fa fa-eye"></i></a >
            <a title="Edit" class="update btn btn-sm btn-warning"  href="<?php echo base_url()?>parts/parts_edit/<?php echo  "{$rec['id']}"; ?>"> <i class="fa fa-edit"></i></a>
            <a title="Delete" class="delete btn btn-sm btn-danger" href="<?php echo base_url()?>main/customer_delete/<?php echo  "{$rec['id']}"; ?>" title="Delete" onclick="return confirm(\'Do you want to delete ?\')"> <i class="fa fa-trash"></i></a>
       -->
        <!-- </th> -->
            </tr>

            <?php  }
              ?>
        
          </thead>
        </table>
      </div>
    </div>
    </section>  
</div>


<script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap4.js"></script> 
   
   
   <script>
  //---------------------------------------------------
  var table = $('#na_datatable').DataTable( {
    "processing": true,
    "serverSide": false,
    "ajax": "<?=base_url('main/masterlist')?>",
    "order": [[4,'desc']],
    "columnDefs": [
    { "targets": 0, "name": "id", 'searchable':true, 'orderable':true},
    { "targets": 1, "name": "Name", 'searchable':true, 'orderable':true},
  
    { "targets": 3, "name": "Action", 'searchable':false, 'orderable':false,'width':'50px'}
    ]
  });
</script>


<script type="text/javascript">
  $("body").on("change",".tgl_checkbox",function(){
    console.log('checked');
    $.post('<?=base_url("admin/users/change_status")?>',
    {
      '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
      id : $(this).data('id'),
      status : $(this).is(':checked') == true?1:0
    },
    function(data){
      $.notify("Status Changed Successfully", "success");
    });
  });
</script>