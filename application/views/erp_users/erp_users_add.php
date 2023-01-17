  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i> Add Erp Users</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?php echo base_url (); ?>main/erp_users_list" class="btn btn-success"><i class="fa fa-list"></i>Erp Users list</a>
          </div>
        </div>

        <div class="card-body">
   
           <!-- For Messages -->
            <?php //$this->load->view('admin/includes/_messages.php') ?>

           

            <form method="post" name="form1" id="submit" action="<?php echo base_url() ?>main/erp_users">
              <div class="form-group">

<div class="row">

             <div  class="col-md-3" >
                  <label for="Name" >User Name<span style="color: red;">*</span></label>
                  <input type="text" name="user_name" class="form-control" id="user_name"  required="" placeholder="">
              </div>

              <div  class="col-md-3" >
                  <label for="Name" >User Email<span style="color: red;">*</span></label>
                 
                   <input type="email" name="email_id" class="form-control" id="email_id"  required="" placeholder="">
              </div>

              <div  class="col-md-3" >
                  <label for="Name" >User Password<span style="color: red;">*</span></label>
                 
                   <input type="text" name="pass" class="form-control" id="pass"  required="" placeholder="">
              </div>
              <div  class="col-md-3" >
                  <label for="Name" >Select Roll<span style="color: red;">*</span></label>
                  <!-- <input  name="Name" class="form-control" id="Name"  required="" placeholder=""> -->
                  <div  class="col-md-8" >
                  <select name="roll" class="form-control" id="roll">

                    <option value="Super Admin">Super Admin</option>
                    <option value="Design Admin">Design Admin</option>
                    <option value="Ppap Admin">Ppap Admin</option>

                  </select>
                </div>
                  
              </div>

              </div></br>
         <div class="row">


             <div  class="col-md-2" >
                  <label for="Name" >	&nbsp;	&nbsp; Plant<span style="color: red;">*</span></label>
               
                  <select name="plant" class="form-control" id="plant">

                    <option value="P1">P1</option>
                    <option value="P2">P2</option>
                    <option value="P3">P3</option>
                 </select>
             
              </div>

              
             <div  class="col-md-2" >
                  <label for="Name" >Department<span style="color: red;">*</span></label>
                 
                  <select name="department" class="form-control" id="department">
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                  </select>
               
              </div>

              
             <div  class="col-md-2" >
                  <label for="Name" >Plant Head<span style="color: red;">*</span></label>
                
                  <select name="plant_head" class="form-control" id="plant_head">

                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
              
              </div>

              
             <div  class="col-md-2" >
                  <label for="Name" >Drawing Upload <span style="color: red;">*</span></label>
                 
                  <select name="drawing_upload" class="form-control" id="drawing_upload">
                  <option value="Yes">Yes</option>
                    <option value="No">No</option>

                  </select>
              
              </div> 

                 
             <div  class="col-md-3" >
                  <label for="Name" >Drawing Download <span style="color: red;">*</span></label>
                 
                  <select name="drawing_download" class="form-control" id="drawing_download">
                  <option value="Yes">Yes</option>
                    <option value="No">No</option>
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
         $('#form').submit();
    }
}  


function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
alert("Valid email address!");
document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}





</script>