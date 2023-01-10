<?php
	class Main_model extends CI_Model{

        public function masteradd($data){
			
			$this->db->insert('masteradd', $data);
			
		}

        public function masteredit(){
				// echo "model";
				// print_r($data); die();
            $id =$this->uri->segment('3');
			//print_r($data); die();
            $this->db->where('id', $id);
			//$record =$this->db->update('masteradd', $name);
            return $this->db->get('masteradd')->result_array();
			
		
		}
		public function masterupdate($id,$data){
		
		//print_r($id);
		$this->db->where('id', $id);
        $this->db->update('masteradd', $data);
		//die();
		
		
		}


		public function masterdelete(){
			$id =$this->uri->segment('3');
			$this->db->where('id', $id);
			$this -> db -> delete('masteradd');


		}
		


        public function get_masterlist(){
			
			$this->db->select('*');
			// $this->db->where('is_admin',0);
			return $this->db->get('masteradd')->result_array();
		}
        









    }
    ?>