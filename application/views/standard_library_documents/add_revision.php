  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i> Add Revision</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?php echo base_url (); ?>parts/standard_documents_list" class="btn btn-success"><i class="fa fa-list"></i>Standard Library Documents list</a>
          </div>
        </div>

        <div class="card-body">
   
           <!-- For Messages -->
            <?php //$this->load->view('admin/includes/_messages.php') ?>

           

            <form method="post" id="submit" enctype="multipart/form-data" action="<?php echo base_url() ?>parts/add_revision">
             
            <?php 
            $records1 = $records[0];
           // print_r($records1['document_name']); die();  ?>
            
            <div class="form-group">
                <label for="Name" class="col-md-2 control-label"></label>

                <div class="form-group">
                <label for="Name" class="col-md-2 control-label"> Document Name</label>
                <div class="col-md-6">
                  <input type="text" name="document_name" class="form-control" required="" value="<?php echo $records1['document_name'];?> " id="document_name" placeholder="">
                </div>
              </div>

                <div class="form-group">
                <label for="Name" class="col-md-6 control-label">Upload Operation Drawing</label>
                <div class="col-md-6">
                  <input type="file" name="Name"  required="" class="form-control" id="Name" placeholder="">
                </div>
              </div>

              
              <div class="form-group">
                <label for="Name" class="col-md-2 control-label"> Revision Number</label>
                <div class="col-md-6">
                  <input type="text" name="revision_number"  required="" class="form-control" id="revision_number" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="Name" class="col-md-6 control-label"> Revision Remark</label>
                <div class="col-md-6">
                  <input type="text" name="revision_remark"  required="" class="form-control" id="revision_remark" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="Name" class="col-md-2 control-label"> Revision Date</label>
                <div class="col-md-6">
                  <input type="date" name="revision_date"  required="" class="form-control" id="revision_date" placeholder="">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" id = "meal_info_submit" onclick="return checkSubmit()" value="addd" class="btn btn-primary pull-right">
                </div>
              </div>
             
               
              </div>

            </form>

          <!-- /.box-body -->
      </div>
    </section> 
  </div>


  <script>
  function checkSubmit(){       
    if (validationCorrect()) {
         $('#form').submit();
    }
}  
</script>