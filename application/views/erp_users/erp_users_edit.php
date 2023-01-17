  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>Customer Edit</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?php echo base_url (); ?>main/erp_users_list" class="btn btn-success"><i class="fa fa-list"></i>  Customer List</a>
          </div>
        </div>

        <div class="card-body">
   
           <!-- For Messages -->
            <?php //$this->load->view('admin/includes/_messages.php') ?>

           
            <form method="post" id="submit" action="<?php echo base_url() ?>main/erp_users_edit">
            <?php  

           
          $rec = $records['0'];
          
          //print_r($rec); die();
          //  $id = $rec['id'];
           // $set = $rec['Name'];
       
            
      

           ?>
              <div class="form-group">

<div class="row">

             <div  class="col-md-3" >
                  <label for="Name" >User Name<span style="color: red;">*</span></label>
                  <input type="text" name="user_name" class="form-control" value="<?php echo $rec['user_name']; ?>" id="user_name"  required="" placeholder="">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $rec['id']; ?>" id="id"  required="" placeholder="">

            
                </div>

              <div  class="col-md-3" >
                  <label for="Name" >User Email<span style="color: red;">*</span></label>
                 
                   <input type="email" name="email_id" class="form-control" value="<?php echo $rec['Email_id']; ?>" id="email_id"  required="" placeholder="">
              </div>

              <div  class="col-md-3" >
                  <label for="Name" >User Password<span style="color: red;">*</span></label>
                 
                   <input type="text" name="pass" class="form-control" value="<?php echo $rec['Pass']; ?>" id="pass"  required="" placeholder="">
              </div>
              <div  class="col-md-3" >
                  <label for="Name" >Select Roll<span style="color: red;">*</span></label>
                  <!-- <input  name="Name" class="form-control" id="Name"  required="" placeholder=""> -->
                  <div  class="col-md-8" >
                  <select name="roll" class="form-control" value="<?php echo $rec['roll']; ?>" id="roll">

                    <option value="Super Admin" <?=$rec['roll'] == 'Super Admin' ? ' selected="selected"' : '';?>>Super Admin</option>
                    <option value="Design Admin" <?=$rec['roll'] == 'Design Admin' ? ' selected="selected"' : '';?>>Design Admin</option>
                    <option value="Ppap Admin" <?=$rec['roll'] == 'Ppap Admin' ? ' selected="selected"' : '';?>>Ppap Admin</option>

                  </select>
                </div>
                  
              </div>

              </div></br>
         <div class="row">


             <div  class="col-md-2" >
                  <label for="Name" >	&nbsp;	&nbsp; Plant<span style="color: red;">*</span></label>
               
                  <select name="plant" class="form-control" value="<?php echo $rec['plant']; ?>" id="plant">

                    <option value="P1" <?=$rec['plant'] == 'P1' ? ' selected="selected"' : '';?>>P1</option>
                    <option value="P2" <?=$rec['plant'] == 'P2' ? ' selected="selected"' : '';?>>P2</option>
                    <option value="P3" <?=$rec['plant'] == 'P3' ? ' selected="selected"' : '';?>>P3</option>
                 </select>
             
              </div>

              
             <div  class="col-md-2" >
                  <label for="Name" >Department<span style="color: red;">*</span></label>
                 
                  <select name="department" class="form-control" value="<?php echo $rec['department']; ?>" id="department">
                    <option value="D1" <?=$rec['department'] == 'D1' ? ' selected="selected"' : '';?>>D1</option>
                    <option value="D2"  <?=$rec['department'] == 'D2' ? ' selected="selected"' : '';?>>D2</option>
                    <option value="D3"  <?=$rec['department'] == 'D3' ? ' selected="selected"' : '';?>>D3</option>
                  </select>
               
              </div>

              
             <div  class="col-md-2" >
                  <label for="Name" >Plant Head<span style="color: red;">*</span></label>
                
                  <select name="plant_head" class="form-control" value="<?php echo $rec['plant_head']; ?>" id="plant_head">

                    <option value="Yes"  <?=$rec['plant_head'] == 'Yes' ? ' selected="selected"' : '';?>>Yes</option>
                    <option value="No"  <?=$rec['plant_head'] == 'No' ? ' selected="selected"' : '';?>>No</option>
                  </select>
              
              </div>

              
             <div  class="col-md-2" >
                  <label for="Name" >Drawing Upload <span style="color: red;">*</span></label>
                 
                  <select name="drawing_upload" class="form-control" value="<?php echo $rec['drawing_upload']; ?>" id="drawing_upload">
                  <option value="Yes"  <?=$rec['drawing_upload'] == 'Yes' ? ' selected="selected"' : '';?>>Yes</option>
                    <option value="No"  <?=$rec['drawing_upload'] == 'No' ? ' selected="selected"' : '';?>>No</option>

                  </select>
              
              </div> 

                 
             <div  class="col-md-3" >
                  <label for="Name" >Drawing Download <span style="color: red;">*</span></label>
                 
                  <select name="drawing_download" class="form-control" value="<?php echo $rec['drawing_download']; ?>" id="drawing_download">
                  <option value="Yes" <?=$rec['drawing_download'] == 'Yes' ? ' selected="selected"' : '';?>>Yes</option>
                    <option value="No" <?=$rec['drawing_download'] == 'No' ? ' selected="selected"' : '';?>>No</option>
                  </select>
             
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