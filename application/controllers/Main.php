<?php 



class Main extends CI_Controller {

  public function index(){
    $this->load->view('sign_in');

  }

public function erp_users_list(){

 
  $this->load->model('Main_model'); 
  $data['records'] = $this->Main_model->get_erp_users_list();

  $this->load->view('erp_users/erp_users_list',$data);
   $this->load->view('index');
}



  public function erp_users(){
   // echo "controller"; die();
    $this->load->model('Main_model'); 
   
    $data1 = array(
      'user_name' => $this->input->post('user_name'),
      'Email_id' => $this->input->post('email_id'),
      'Pass' => $this->input->post('pass'),
      'roll' => $this->input->post('roll'),
    
      'plant' => $this->input->post('plant'),
      'department' => $this->input->post('department'),
      'plant_head' => $this->input->post('plant_head'),
      'drawing_upload' => $this->input->post('drawing_upload'),
      'drawing_download' => $this->input->post('drawing_download'),
    
      );
   
     $user_name = $data1['user_name'];
   
    if ($user_name == NULL){

        echo "Please fill Name";
      
    $this->load->view('erp_users/erp_users_add');
    }
     else{

      $data = array(
        'user_name' => $this->input->post('user_name'),
        'Email_id' => $this->input->post('email_id'),
        'Pass' => $this->input->post('pass'),
        'roll' => $this->input->post('roll'),
      
        'plant' => $this->input->post('plant'),
        'department' => $this->input->post('department'),
        'plant_head' => $this->input->post('plant_head'),
        'drawing_upload' => $this->input->post('drawing_upload'),
        'drawing_download' => $this->input->post('drawing_download'),
      
        );
     
        $this->Main_model->erp_users($data);
        redirect(base_url('main/erp_users_list'));
     }

   $this->load->view('index');

  }
   


  public function erp_users_edit(){
//echo "dkdkk"; die();
    $this->load->library('form_validation');
   
    $tt = $_POST;
   // echo "dffffffffff";
   // print_r($tt['id']);die();
    if($tt == NULL){

    }else{
      $id  = $tt['id'];
    }

    $this->load->model('Main_model');
   // $id =$this->uri->segment('3');
    $data['records'] = $this->Main_model->erp_users_edit();
   // print_r($data['records']);die();
    $this->load->view('erp_users/erp_users_edit',$data);
   
    $data1 = array(
      'user_name' => $this->input->post('user_name'),
      'Email_id' => $this->input->post('email_id'),
      'Pass' => $this->input->post('pass'),
      'roll' => $this->input->post('roll'),
    
      'plant' => $this->input->post('plant'),
      'department' => $this->input->post('department'),
      'plant_head' => $this->input->post('plant_head'),
      'drawing_upload' => $this->input->post('drawing_upload'),
      'drawing_download' => $this->input->post('drawing_download'),
    
      );
   
     $user_name = $data1['user_name'];
   // print_r($name);die();
    if ($user_name == NULL){
      
      echo " ";
  }
   else{
    
    $data = array(
      'user_name' => $this->input->post('user_name'),
      'Email_id' => $this->input->post('email_id'),
      'Pass' => $this->input->post('pass'),
      'roll' => $this->input->post('roll'),
    
      'plant' => $this->input->post('plant'),
      'department' => $this->input->post('department'),
      'plant_head' => $this->input->post('plant_head'),
      'drawing_upload' => $this->input->post('drawing_upload'),
      'drawing_download' => $this->input->post('drawing_download'),
    
      );

      //print_r($data);die();
    // $this->Main_model->masteradd($data);
   
    $data['tradisi'] = $this->Main_model->erp_users_update($id,$data);
    redirect('/main/erp_users_list', 'refresh');
   }

   $this->load->view('index');

   }

   public function erp_users_delete(){

    $this->load->model('Main_model');
    $this->Main_model->erp_users_delete();
   // echo "jdjsjd"; die();
    redirect(base_url('main/erp_users_list'));
   }







   public function dashbord(){
    
    $this->load->view('middash');
   $this->load->view('index');

}





public function sign_in(){
  $this->load->model('Main_model'); 
 
   $data = array(
    'Email_id' => $this->input->post('Email_id'),
    'Pass' =>$this->input->post('Pass'),

     );
   
    if ($data  == NULL){
      $this->load->view('sign_in');

    }else{

      $get_data1= $this->Main_model->get_sign_in($data);
    
     $get_data2 = isset($get_data1['0']);
   
    if($get_data2 == NULL){
      echo "";
      $this->load->view('sign_in');
    }else{

     if ($data == $get_data2){
      
      redirect(base_url('main/dashbord'));
   
    } else{
     $this->load->view('sign_in');
     
    }

    }
      
    }


}

public function masterlist(){

   $this->load->model('Main_model'); 

   $data['records'] = $this->Main_model->get_masterlist();
 
    $this->load->view('masterlist',$data);

 $this->load->view('index');
  
  
}

public function masteradd(){
    $this->load->model('Main_model'); 
    $data = $this->input->post('Name');

    if ($data == NULL){

        echo "Please fill Name";
    }
     else{

           $data = array(
            'Name' => $this->input->post('Name'),
            );
     
       $this->Main_model->masteradd($data);
     }
   $this->load->view('index');
   $this->load->view('masteradd');
     
   }

   public function masterdelete(){

    $this->load->model('Main_model');
    $this->Main_model->masterdelete();
   // echo "jdjsjd"; die();
    redirect(base_url('main/masterlist'));
   }

   public function masteredit(){

    $this->load->library('form_validation');
   
    $tt = $_POST;
    //print_r($tt);die();
    if($tt == NULL){

    }else{
      $id  = $tt['id'];
    }

    $this->load->model('Main_model');
   // $id =$this->uri->segment('3');
    $data['records'] = $this->Main_model->masteredit();
   
    $this->load->view('masteredit',$data);
   
    $name = $this->input->post('editname');
   // print_r($name);die();
    if ($name == NULL){
      
      echo " ";
  }
   else{
    
    $data = array(
      'Name' => $this->input->post('editname'),
      );

      //print_r($data);die();
    // $this->Main_model->masteradd($data);
   
    $data['tradisi'] = $this->Main_model->masterupdate($id,$data);
    redirect('/main/masterlist', 'refresh');
   }

   $this->load->view('index');

   }

//PPAP Index Master 

   public function ppap_masterlist(){

    $this->load->model('Main_model'); 
 			   
     $data['records'] = $this->Main_model->get_ppap_masterlist();
     $this->load->view('ppap_master/ppap_masterlist',$data);
   
  $this->load->view('index');
   
 }


 public function ppap_masteradd(){
  $this->load->model('Main_model'); 
  $data = $this->input->post('Name');

  if ($data == NULL){

      echo "Please fill Name";
  }
   else{

         $data = array(
          'Name' => $this->input->post('Name'),
          );
 // print_r($data); die();
     $this->Main_model->ppap_masteradd($data);
   }
 $this->load->view('index');
 $this->load->view('ppap_master/ppap_masteradd');
   
 }


 public function ppap_masteredit(){
  $this->load->model('Main_model'); 

  $this->load->library('form_validation');
   
  $tt = $_POST;
  //print_r($tt);die();
  if($tt == NULL){

  }else{
    $id  = $tt['id'];
  }
  $data['records'] = $this->Main_model->ppap_masteredit();
  //print_r($data); die();
  $this->load->view('ppap_master/ppap_masteredit',$data);
 
  $name = $this->input->post('editname');

   if ($name == NULL){
     
     echo " ";
 }
  else{
   
   $data = array(
     'Name' => $this->input->post('editname'),
     );

   $data['tradisi'] = $this->Main_model->ppap_masterupdate($id,$data);
  
   redirect('/main/ppap_masterlist', 'refresh');
  }

  $this->load->view('index');
 }

 public function ppap_masterdelete(){
 
  $this->load->model('Main_model');
  $this->Main_model->ppap_masterdelete();
 // echo "jdjsjd"; die();
  redirect(base_url('main/ppap_masterlist'));
 }

//Part Family


public function part_familylist(){

  $this->load->model('Main_model'); 
        
   $data['records'] = $this->Main_model->get_part_family();
   //$this->load->view('part_family/part_familylist');

   $this->load->view('part_family/part_familylist',$data);
 
$this->load->view('index');
 
}



public function part_familyadd(){
  $this->load->model('Main_model'); 
  $data = $this->input->post('Name');

  if ($data == NULL){

      echo "Please fill Name";
  }
   else{

         $data = array(
          'Name' => $this->input->post('Name'),
          );
 // print_r($data); die();
     $this->Main_model->part_familyadd($data);
   }
 $this->load->view('index');
 $this->load->view('part_family/part_familyadd');
   
 }




 public function part_familyedit(){
  $this->load->model('Main_model'); 

  $this->load->library('form_validation');
   
  $tt = $_POST;
  //print_r($tt);die();
  if($tt == NULL){

  }else{
    $id  = $tt['id'];
  }
  $data['records'] = $this->Main_model->part_familyedit();
  //print_r($data); die();
  $this->load->view('part_family/part_familyedit',$data);
 
  $name = $this->input->post('editname');

   if ($name == NULL){
     
     echo " ";
 }
  else{
   
   $data = array(
     'Name' => $this->input->post('editname'),
     );

   $data['tradisi'] = $this->Main_model->part_familyupdate($id,$data);
  
   redirect('/main/part_familylist', 'refresh');
  }

  $this->load->view('index');
 }

 public function part_familydelete(){
 
  $this->load->model('Main_model');
  $this->Main_model->part_familydelete();
 // echo "jdjsjd"; die();
  redirect(base_url('main/part_familylist'));
 }

//Customers

public function customer_add(){
  $this->load->model('Main_model'); 
  $data = $this->input->post('Name');

  if ($data == NULL){

      echo "Please fill Name";
  }
   else{

         $data = array(
          'Name' => $this->input->post('Name'),
          );
 // print_r($data); die();
     $this->Main_model->customer_add($data);
   }
 $this->load->view('index');
 $this->load->view('customer/customer_add');
   
 }

 public function customer_list(){

  $this->load->model('Main_model'); 
        
   $data['records'] = $this->Main_model->get_customer_list();
   //$this->load->view('part_family/part_familylist');

   $this->load->view('customer/customer_list',$data);
 
$this->load->view('index');
 
}




public function customer_edit(){
  $this->load->model('Main_model'); 

  $this->load->library('form_validation');
   
  $tt = $_POST;
  //print_r($tt);die();
  if($tt == NULL){

  }else{
    $id  = $tt['id'];
  }
  $data['records'] = $this->Main_model->customer_edit();
  //print_r($data); die();
  $this->load->view('customer/customer_edit',$data);
 
  $name = $this->input->post('editname');

   if ($name == NULL){
     
     echo " ";
 }
  else{
   
   $data = array(
     'Name' => $this->input->post('editname'),
     );

   $data['tradisi'] = $this->Main_model->customer_update($id,$data);
  
   redirect('/main/customer_list', 'refresh');
  }

  $this->load->view('index');
 }

 public function customer_delete(){
 
  $this->load->model('Main_model');
  $this->Main_model->customer_delete();
 // echo "jdjsjd"; die();
  redirect(base_url('main/customer_list'));
 }
//OPeration Number

public function operation_number_add(){
 // echo "fhhhhh"; die();
  $this->load->model('Main_model'); 
 $data = $this->input->post('Name');

  if ($data == NULL){

      echo "Please fill Name";
  }
   else{

         $data = array(
          'Name' => $this->input->post('Name'),
          );
 // print_r($data); die();
     $this->Main_model->operation_number_add($data);
   }
 $this->load->view('index');
 $this->load->view('operation_number/operation_number_add');
   
 }

 public function operation_number_list(){

  $this->load->model('Main_model'); 
        
   $data['records'] = $this->Main_model->get_operation_number_list();
   //$this->load->view('part_family/part_familylist');

   $this->load->view('operation_number/operation_number_list',$data);
 
$this->load->view('index');
 
}

public function operation_number_edit(){
  $this->load->model('Main_model'); 

  $this->load->library('form_validation');
   
  $tt = $_POST;
  //print_r($tt);die();
  if($tt == NULL){

  }else{
    $id  = $tt['id'];
  }
  $data['records'] = $this->Main_model->operation_number_edit();
  //print_r($data); die();
  $this->load->view('operation_number/operation_number_edit',$data);
 
  $name = $this->input->post('editname');

   if ($name == NULL){
     
     echo " ";
 }
  else{
   
   $data = array(
     'Name' => $this->input->post('editname'),
     );

   $data['tradisi'] = $this->Main_model->operation_number_update($id,$data);
  
   redirect('/main/operation_number_list', 'refresh');
  }

  $this->load->view('index');
 }
 public function operation_number_delete(){
 
  $this->load->model('Main_model');
  $this->Main_model->operation_number_delete();
 // echo "jdjsjd"; die();
  redirect(base_url('main/operation_number_list'));
 }
//Part Type
public function part_type_add(){
 
   $this->load->model('Main_model'); 
  $data = $this->input->post('Name');
 
   if ($data == NULL){
 
       echo "Please fill Name";
   }
    else{
 
          $data = array(
           'Name' => $this->input->post('Name'),
           );
  // print_r($data); die();
      $this->Main_model->part_type_add($data);
    }
  $this->load->view('index');
  $this->load->view('part_type/part_type_add');
    
  }

  public function part_type_list(){

    $this->load->model('Main_model'); 
          
     $data['records'] = $this->Main_model->get_part_type_list();
     //$this->load->view('part_family/part_familylist');
  
     $this->load->view('part_type/part_type_list',$data);
   
  $this->load->view('index');
   
  }
  public function part_type_edit(){
    $this->load->model('Main_model'); 
  
    $this->load->library('form_validation');
     
    $tt = $_POST;
    //print_r($tt);die();
    if($tt == NULL){
  
    }else{
      $id  = $tt['id'];
    }
    $data['records'] = $this->Main_model->part_type_edit();
    //print_r($data); die();
    $this->load->view('part_type/part_type_edit',$data);
   
    $name = $this->input->post('editname');
  
     if ($name == NULL){
       
       echo " ";
   }
    else{
     
     $data = array(
       'Name' => $this->input->post('editname'),
       );
  
     $data['tradisi'] = $this->Main_model->part_type_update($id,$data);
    
     redirect('/main/part_type_list', 'refresh');
    }
  
    $this->load->view('index');
   }


   public function part_type_delete(){
 
    $this->load->model('Main_model');
    $this->Main_model->part_type_delete();
   // echo "jdjsjd"; die();
    redirect(base_url('main/part_type_list'));
   }
//Email Masters

public function email_master_add(){
 
  $this->load->model('Main_model'); 
 $data = $this->input->post('Name');
 //print_r($data);die();

  if ($data == NULL){

      echo "Please fill Name";
  }
   else{

         $data = array(
          'email_id' => $this->input->post('Name'),
          );
 // print_r($data); die();
     $this->Main_model->email_master_add($data);
   }
 $this->load->view('index');
 $this->load->view('email_master/email_master_add');
   
 }

 public function email_master_list(){

  $this->load->model('Main_model'); 
        
   $data['records'] = $this->Main_model->get_email_master_list();
   //$this->load->view('part_family/part_familylist');

   $this->load->view('email_master/email_master_list',$data);
 
$this->load->view('index');
 
}


public function email_master_edit(){
  $this->load->model('Main_model'); 

  $this->load->library('form_validation');
   
  $tt = $_POST;
  //print_r($tt);die();
  if($tt == NULL){

  }else{
    $id  = $tt['id'];
  }
  $data['records'] = $this->Main_model->email_master_edit();
  //print_r($data); die();
  $this->load->view('email_master/email_master_edit',$data);
 
  $name = $this->input->post('editname');

   if ($name == NULL){
     
     echo " ";
 }
  else{
   
   $data = array(
     'email_id' => $this->input->post('editname'),
     );

   $data['tradisi'] = $this->Main_model->email_master_update($id,$data);
  
   redirect('/main/email_master_list', 'refresh');
  }

  $this->load->view('index');
 }

 public function email_master_delete(){
 
  $this->load->model('Main_model');
  $this->Main_model->email_master_delete();
 // echo "jdjsjd"; die();
  redirect(base_url('main/email_master_list'));
 }
}





