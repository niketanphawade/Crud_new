  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i> Add Parts</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?php echo base_url (); ?>parts/parts_list" class="btn btn-success"><i class="fa fa-list"></i>Parts list</a>
          </div>
        </div>

        <div class="card-body">
   
           <!-- For Messages -->
            <?php //$this->load->view('admin/includes/_messages.php') ?>

           

            <form method="post" id="submit" action="<?php echo base_url() ?>parts/parts_add">

            <?php 
            // echo "ck"; print_r($record_part_type); die();?>
              <div class="form-group">
                <label for="Name" class="col-md-2 control-label"></label>

<div class= "row">
                <div class="col-md-6">
                  <label for="Name" class="col-md-6 control-label">Part Number</label>
               
                  <input type="text" name="part_number" class="form-control" id="part_number" required="" placeholder="">
              
              </div>
              
              <div class="col-md-6">
                  <label for="Name" class="col-md-6 control-label">Part Description </label>
               
                  <input type="text" name="part_description" class="form-control" id="part_description" placeholder="">
              
              </div>


</div> </br>
<?php //  echo "ddj"; print_r($data_parts);  die();  ?>
<div class="row">
<div  class="col-md-4" >
                  <label for="Name"  >Select Customer<span style="color: red;">*</span></label>
                  <!-- <input  name="Name" class="form-control" id="Name"  required="" placeholder=""> -->
                  <div   >
                  <select name="select_customer" class="form-control" id="select_customer">
                 <?php 

                foreach($record as $row)
                    { 
                    echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
                    }

                    ?>
                  </select>
                </div>
                  
              </div>

              <div  class="col-md-4" >
                  <label for="Name"  >Select Type <span style="color: red;">*</span></label>
                  <!-- <input  name="Name" class="form-control" id="Name"  required="" placeholder=""> -->
                  <div   >
                  <select name="select_type" class="form-control" id="select_type">
                  <?php 

                foreach($record_part_type as $row)
                    { 
                    echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
                    }

                     ?>

                  </select>
                </div>
                  
              </div>

              <div  class="col-md-4" >
                  <label for="Name"  >Select Part family<span style="color: red;">*</span></label>
                  <!-- <input  name="Name" class="form-control" id="Name"  required="" placeholder=""> -->
                  <div   >
                  <select name="select_part_family" class="form-control" id="select_part_family">
                  <?php 

                foreach($record_part_family as $row)
                    { 
                    echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
                    }

                    ?>

                  </select>
                </div>
                  
              </div>
</div></br>
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