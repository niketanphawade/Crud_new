  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i> Edit</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?php echo base_url (); ?>main/masterlist" class="btn btn-success"><i class="fa fa-list"></i>  list</a>
          </div>
        </div>

        <div class="card-body">
   
           <!-- For Messages -->
            <?php //$this->load->view('admin/includes/_messages.php') ?>

           

            <form method="post" id="submit" action="<?php echo base_url() ?>main/masteredit">
            <?php  
            
            foreach ($records as $rec) {  
            }

           if($records == NULL){

            $id = '';
            $set = '';
           }else{

            $id = $rec['id'];
            $set = $rec['Name'];
           }
            
       
         
       // print_r($id); die();

           ?>
              <div class="form-group">
                <label for="Name" class="col-md-2 control-label"></label>


                <div class="form-group">
                <label for="Name" class="col-md-2 control-label">Edit Name</label>
                <div class="col-md-6">
                
                <input type="text" name="editname" class="form-control" value="<?php  echo $set; ?>" id="editname" placeholder="">
                <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" id="editname" placeholder="">  
              </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-12">
              
                  <input type="submit" name="submit" id = "meal_info_submit"      onclick="return checkSubmit()" value="Editt" class="btn btn-primary pull-right">
        
                </div>
              </div>
             
               
              </div>

            </form>

          <!-- /.box-body -->
      </div>
    </section> 
  </div>
  
          </form>
  <script>
  function checkSubmit(){       
    if (validationCorrect()) {
         $('#form').submit1();
    }
}  
</script>