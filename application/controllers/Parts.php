<?php 



class Parts extends CI_Controller {


    public function index(){
return view('imege');
    }

    public function parts_list(){

 
        $this->load->model('Parts_model'); 
        $data['records'] = $this->Parts_model->get_parts_list();
     // print_r($data); die();
       $this->load->view('parts/parts_list',$data);
         $this->load->view('index');
      }

    

    public function parts_add(){
       // echo "fjbuttonfj"; die();
        $this->load->model('Parts_model'); 

        $data_parts = $this->Parts_model->get_parts_add();
       $data['record'] = $data_parts;
        $data_part_type = $this->Parts_model->get_part_type();
        $data['record_part_type'] = $data_part_type;
        $data_part_family = $this->Parts_model->get_data_part_family();
        $data['record_part_family'] = $data_part_family;

        
       // $this->load->view('parts/parts_add');
     $this->load->view('parts/parts_add',$data);
        //die();
      $data2 = array(
        'part_number' => $this->input->post('part_number'),
        'part_description	' => $this->input->post('part_description'),
        'select_customer' => $this->input->post('select_customer'),
        'select_type' => $this->input->post('select_type'),
       'select_part_family' => $this->input->post('select_part_family'),
       
        );

       $part_number = $data2['part_number']; 

       //  print_r($part_number); die();
         if($part_number == NULL){
            $this->load->view('parts/parts_add'); 
            $this->load->view('index');

         }else{

            
      $data1 = array(
        'part_number' => $this->input->post('part_number'),
        'part_description	' => $this->input->post('part_description'),
        'select_customer' => $this->input->post('select_customer'),
        'select_type' => $this->input->post('select_type'),
       'select_part_family' => $this->input->post('select_part_family'),
       
        );
       // print_r($data1); die();
        $this->Parts_model->parts_add($data1);
        redirect(base_url('parts/parts_list'));

         }
     
      }

      
      


      public function parts_edit(){

      //  echo "dkdk"; die();
        $this->load->model('Parts_model'); 
        $data_parts = $this->Parts_model->get_parts_add();
        $data['record'] = $data_parts;
         $data_part_type = $this->Parts_model->get_part_type();
         $data['record_part_type'] = $data_part_type;
         $data_part_family = $this->Parts_model->get_data_part_family();
         $data['record_part_family'] = $data_part_family;
         $data['edit_records'] = $this->Parts_model->parts_edit();

        $this->load->view('parts/parts_edit',$data); 

        $tt = $_POST;
      // print_r( $tt['part_id']); die();
            if($tt == NULL){
        echo "";
            }else{
              $id  = $tt['part_id'];
            }
     
        
          $data2 = array(
            'part_number' => $this->input->post('part_number'),
            'part_description	' => $this->input->post('part_description'),
            'select_customer' => $this->input->post('select_customer'),
            'select_type' => $this->input->post('select_type'),
           'select_part_family' => $this->input->post('select_part_family'),
           
            );
    
          $part_number = $data2['part_number']; 
    
           // print_r($data2); die();
             if($part_number == NULL){
                $this->load->view('parts/parts_add'); 
    
             }else{
    
                
          $data1 = array(
            'part_number' => $this->input->post('part_number'),
            'part_description	' => $this->input->post('part_description'),
            'select_customer' => $this->input->post('select_customer'),
            'select_type' => $this->input->post('select_type'),
           'select_part_family' => $this->input->post('select_part_family'),
           
            );
          // print_r($data1); die();

           
           // print_r($data1); die();
            $this->Parts_model->parts_update($id,$data1);
            redirect(base_url('parts/parts_list'));
    
             }
          $this->load->view('index');


      }



      public function standard_documents_add(){
   //echo "fjfj"; die();
        $this->load->model('Parts_model'); 
        $document_name = $this->input->post('document_name');
       if($document_name == NULL){
       // $this->load->view('index');

        $this->load->view('standard_library_documents/standard_documents_add');
       }else{


       $config['upload_path'] = 'uploads/image/';
       $config['allowed_types'] = 'jpg|jpeg|png|gif';

       $this->load->library('upload',$config);
   
       if($this->upload->do_upload('Name') == NULL){
        echo "please upload documents";
        $this->load->view('index');
       $this->load->view('standard_library_documents/standard_documents_add');
          // print_r($file_name); die();
       
       }else{
       
        $file_data = $this->upload->data();
        $file_name= $file_data['file_name'];
      
       }
     

    $data = array(
        'document_name' => $this->input->post('document_name'),
        'upload_file' => $file_name,
        'revision_number' => $this->input->post('revision_number'),
        'revision_remark' => $this->input->post('revision_remark'),
        'revision_date' => $this->input->post('revision_date'),
        );
     //   print_r($data); die();
      
      $this->Parts_model->standard_documents_add($data);

       }
       $this->load->view('standard_library_documents/standard_documents_add');
$this->load->view('index');
       
 
      }


 public function standard_documents_list(){

 
        $this->load->model('Parts_model'); 
     $data['records'] = $this->Parts_model->get_standard_documents_list();
      //print_r($data); die();
     //  $this->load->view('parts/parts_list',$data);
     $this->load->view('standard_library_documents/standard_documents_list',$data);
         $this->load->view('index');
      }

      public function download($id){

        $this->load->model('Parts_model'); 

        $this->load->helper('download');

        $fileinfo = $this->Parts_model->download($id);
       // print_r($fileinfo['0']['upload_file']); die();
        $file = 'uploads/image/'.$fileinfo['0']['upload_file'];
       // print_r($file); die();
        force_download($file, NULL);
        redirect(base_url('parts/standard_documents_list'));
	}



    public function add_revision(){
        //print_r($id); die();
    $this->load->model('Parts_model'); 

    $data['records'] = $this->Parts_model->download();
    // print_r($data); die();
     $this->load->view('standard_library_documents/add_revision',$data);
     $revision_number = $this->input->post('revision_number');
     if($revision_number == NULL){
        $this->load->view('standard_library_documents/add_revision');

     }else{

     
    $config['upload_path'] = 'uploads/image/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';

    $this->load->library('upload',$config);

    if($this->upload->do_upload('Name') == NULL){
     echo "please upload documents";
     $this->load->view('index');
    $this->load->view('standard_library_documents/standard_documents_add');
       // print_r($file_name); die();
    
    }else{
    
     $file_data = $this->upload->data();
     $file_name= $file_data['file_name'];
   
    }

    
    $data = array(
        'document_name' => $this->input->post('document_name'),
        'upload_file' => $file_name,
        'revision_number' => $this->input->post('revision_number'),
        'revision_remark' => $this->input->post('revision_remark'),
        'revision_date' => $this->input->post('revision_date'),
        );

       // print_r($data); die();
     $this->Parts_model->add_revision($data);
     redirect(base_url('parts/standard_documents_list'));

    }
        $this->load->view('index');
      //  $this->load->view('standard_library_documents/add_revision');
   
    }



    public function revision_history(){
  // echo "yeee"; die();
        $this->load->model('Parts_model'); 
        $data = $this->Parts_model->revision_history();
       // print_r($data); die();
       $data1 = $this->Parts_model->revision_history1();
       $merge_data['records']= array_merge($data,$data1);
   //$merge_data= $mdata['records'];
      // print_r($mdata); die();
        $this->load->view('standard_library_documents/revision_history',$merge_data);
        $this->load->view('index');
   
   
    }



    public function ppap_status(){

 
        $this->load->model('Parts_model'); 
        $data['records'] = $this->Parts_model->get_parts_list();
     // print_r($data); die();
       $this->load->view('ppap_status/ppap_status',$data);
         $this->load->view('index');
      }

      public function drawing_history(){
       
              $this->load->model('Parts_model'); 
           
             $data['records'] = $this->Parts_model->drawing_history();
             
        
              $this->load->view('drawing_history/drawing_history',$data);
              $this->load->view('index');
         
         
          }













}