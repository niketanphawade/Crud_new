
<?php
	class Parts_model extends CI_Model{

	public function get_parts_add(){
			//print_r($data['Email_id']); die();
			$this->db->select('Name');
		 
			// $this->db->where('Email_id', $data['Email_id']);
			
			return $this->db->get('customers')->result_array();

		}


        public function get_part_type(){
			
            $this->db->select('Name');
            // $this->db->where('is_admin',0);
            return $this->db->get('part_type')->result_array();
        }

        public function get_data_part_family(){
			
            $this->db->select('Name');
            // $this->db->where('is_admin',0);
            return $this->db->get('part_family')->result_array();
        }
        
        public function parts_add($data1){
		//echo "dk" ;print_r($data1); die();
			$this->db->select('*');
		 
			$this->db->insert('parts', $data1);

		}

        public function get_parts_list(){
			
            $this->db->select('*');
            // $this->db->where('is_admin',0);
            return $this->db->get('parts')->result_array();
        }

        public function parts_edit(){
			$id =$this->uri->segment('3');
			  //print_r($data); die();
			  $this->db->where('id', $id);
			  //$record =$this->db->update('masteradd', $name);
			  return $this->db->get('parts')->result_array();
		  }
  
		  public function parts_update($id,$data){
	  
		  $this->db->where('id', $id);
		  $this->db->update('parts', $data);
		  }

          public function standard_documents_add($data){
            //echo "dk" ;print_r($data1); die();
                $this->db->select('*');
             
                $this->db->insert('document', $data);
    
            }


            public function get_standard_documents_list(){
			
                $this->db->select('*');
                // $this->db->where('is_admin',0);
                return $this->db->get('document')->result_array();
            }

            public function download(){
                $id =$this->uri->segment('3');
              
                 // print_r($id); die();
                  $this->db->where('id', $id);
                  //$record =$this->db->update('masteradd', $name);
                  return $this->db->get('document')->result_array();
              }
              public function add_revision($data){
                //echo "dk" ;print_r($data1); die();
                    $this->db->select('*');
                 
                    $this->db->insert('add_revision', $data);
        
                }
                public function revision_history(){
                    $document_name =$this->uri->segment('3');
                   
                    $this->db->select('*');
                     $this->db->where('document_name',$document_name);
                    return $this->db->get('document')->result_array();
                }
                public function revision_history1(){
                    $document_name =$this->uri->segment('3');
                   
                    $this->db->select('*');
                     $this->db->where('document_name',$document_name);
                    return $this->db->get('add_revision')->result_array();
                }

                public function drawing_history(){
                    $document_name =$this->uri->segment('3');
                   $this->db->select('*');
                    return $this->db->get('document')->result_array();
                }


    }
