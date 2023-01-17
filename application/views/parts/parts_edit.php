  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>Parts Edit</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?php echo base_url (); ?>parts/parts_list" class="btn btn-success"><i class="fa fa-list"></i>  Parts List</a>
          </div>
        </div>

        <div class="card-body">
   
           <!-- For Messages -->
            <?php //$this->load->view('admin/includes/_messages.php') ?>

           
            <form method="post" id="submit" action="<?php echo base_url() ?>parts/parts_edit">
            <?php  

           
           $rec = $edit_records['0'];
           
      

           ?>
               <div class="form-group">
                <label for="Name" class="col-md-2 control-label"></label>
                <input type="hidden" name="part_id" class="form-control" value="<?php echo $rec['id']; ?>" id="part_id" required="" placeholder="">

<div class= "row">
                <div class="col-md-6">
                  <label for="Name" class="col-md-6 control-label">Part Number</label>
               
                  <input type="text" name="part_number" class="form-control" value="<?php echo $rec['part_number']; ?>" id="part_number" required="" placeholder="">

              </div>
              
              <div class="col-md-6">
                  <label for="Name" class="col-md-6 control-label">Part Description </label>
               
                  <input type="text" name="part_description" class="form-control" value="<?php echo $rec['part_description']; ?>" id="part_description" placeholder="">
              
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
                    { ?>
                    <option value="<?php echo $row['Name'] ?>" <?php if($row['Name'] == $rec['select_customer']) echo 'selected="selected"'; ?>><?php echo $row['Name'] ?></option>
                   <?php }

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
                { ?>
                    <option value="<?php echo $row['Name'] ?>" <?php if($row['Name'] == $rec['select_type']) echo 'selected="selected"'; ?>><?php echo $row['Name'] ?></option>
                   <?php }

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
                { ?>
                    <option value="<?php echo $row['Name'] ?>" <?php if($row['Name'] == $rec['select_part_family']) echo 'selected="selected"'; ?>><?php echo $row['Name'] ?></option>
                   <?php }

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
         $('#form').submit1();
    }
}  
</script>