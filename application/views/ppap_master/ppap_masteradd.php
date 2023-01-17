  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i> Add PPAP Master</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?php echo base_url (); ?>main/ppap_masterlist" class="btn btn-success"><i class="fa fa-list"></i>PPAP Master  list</a>
          </div>
        </div>

        <div class="card-body">
   
           <!-- For Messages -->
            <?php //$this->load->view('admin/includes/_messages.php') ?>

           

            <form method="post" id="submit" action="<?php echo base_url() ?>main/ppap_masteradd">
              <div class="form-group">
                <label for="Name" class="col-md-2 control-label"></label>


                <div class="form-group">
                <label for="Name" class="col-md-2 control-label">Name</label>
                <div class="col-md-6">
                  <input type="text" name="Name" class="form-control" id="Name" placeholder="">
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