<?php 



class Main extends CI_Controller {
  
public function index(){
    
    $this->load->view('middash');
    $this->load->view('index');

}

public function masterlist(){


     
    $this->load->model('Main_model'); 

    //echo "hdhd"; die();			   					   
    $data['records'] = $this->Main_model->get_masterlist();
   
   
   // print_r($data);  die();
  
  
 
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
 //$this->load->view('index');
 //$this->load->view('masterlist');

   }

   public function masteredit(){

    $this->load->library('form_validation');
   
    $tt = $_POST;
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
   }

    $this->load->view('index');

   

   }




   public function masteredit12(){

    die();
    $id =$this->uri->segment('3');
    $this->load->model('Main_model'); 
  $this->Main_model->masteredit($id);

    $data= $this->Main_model->masteredit();
    foreach($data as $key => $value){
    }
    $this->load->view('masteredit');
  //  // $dataname= $value['Name'] ;
  //   $ = array(
  //       'Name' => $this->input->post($value['Name']),
  //       );
 
        print_r($data); die();

$data = $this->input->post('Name');

    
   




    
    $this->load->view('index');
  

   
  
   }
  




  
}





