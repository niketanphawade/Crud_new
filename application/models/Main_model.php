<?php
	class Main_model extends CI_Model{


		public function sign_in($data){
			//$this->db->insert('sign_in', $data);
			
		}

		public function get_erp_users_list(){
			
			$this->db->select('*');
			// $this->db->where('is_admin',0);
			return $this->db->get('sign_in')->result_array();
		}
		
        public function erp_users($data){
			
			$this->db->insert('sign_in', $data);
			
		}

		public function erp_users_edit(){
			$id =$this->uri->segment('3');
			  //print_r($data); die();
			  $this->db->where('id', $id);
			  //$record =$this->db->update('masteradd', $name);
			  return $this->db->get('sign_in')->result_array();
		  }
  
		  public function erp_users_update($id,$data){
	  
		  $this->db->where('id', $id);
		  $this->db->update('sign_in', $data);
		  }

		public function get_sign_in($data){
			//print_r($data['Email_id']); die();
			$this->db->select('Email_id');
		  $this->db->select('Pass');
			$this->db->where('Email_id', $data['Email_id']);
			$this->db->where('Pass', $data['Pass']);
			return $this->db->get('sign_in')->result_array();

		}
		
		public function erp_users_delete(){
			$id =$this->uri->segment('3');
			$this->db->where('id', $id);
			$this -> db -> delete('sign_in');
	}
		

        public function masteradd($data){
			
			$this->db->insert('masteradd', $data);
			
		}

        public function masteredit(){
		  $id =$this->uri->segment('3');
			//print_r($data); die();
            $this->db->where('id', $id);
			//$record =$this->db->update('masteradd', $name);
            return $this->db->get('masteradd')->result_array();
		}

		public function masterupdate($id,$data){
	
		$this->db->where('id', $id);
        $this->db->update('masteradd', $data);
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
        
//PPAP Index Master

public function ppap_masteradd($data){
			
	$this->db->insert('ppap_master', $data);
	
}


public function get_ppap_masterlist(){
			
	$this->db->select('*');
	// $this->db->where('is_admin',0);
	return $this->db->get('ppap_master')->result_array();
}

public function ppap_masteredit(){
	$id =$this->uri->segment('3');
	 
	  $this->db->where('id', $id);
	  return $this->db->get('ppap_master')->result_array();
  }


  public function ppap_masterupdate($id,$data){
	
	$this->db->where('id', $id);
	$this->db->update('ppap_master', $data);
	}


	public function ppap_masterdelete(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('ppap_master');
}

//Part family

public function part_familyadd($data){
			
	$this->db->insert('part_family', $data);
	
}

public function get_part_family(){
			
	$this->db->select('*');
	// $this->db->where('is_admin',0);
	return $this->db->get('part_family')->result_array();
}


public function part_familyedit(){
	$id =$this->uri->segment('3');
	 
	  $this->db->where('id', $id);
	  return $this->db->get('part_family')->result_array();
  }

  public function part_familyupdate($id,$data){
	
	$this->db->where('id', $id);
	$this->db->update('part_family', $data);
	}



	public function part_familydelete(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('part_family');
}

//customers

public function customer_add($data){
			
	$this->db->insert('customers', $data);
	
}

public function get_customer_list(){
			
	$this->db->select('*');
	// $this->db->where('is_admin',0);
	return $this->db->get('customers')->result_array();
}


public function customer_edit(){
	$id =$this->uri->segment('3');
	 
	  $this->db->where('id', $id);
	  return $this->db->get('customers')->result_array();
  }

  public function customer_update($id,$data){
	
	$this->db->where('id', $id);
	$this->db->update('customers', $data);
	}

	

	public function customer_delete(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('customers');
}
//Operation Number

public function operation_number_add($data){
			
	$this->db->insert('operation_number', $data);
	
}


public function get_operation_number_list(){
			
	$this->db->select('*');
	// $this->db->where('is_admin',0);
	return $this->db->get('operation_number')->result_array();
}


public function operation_number_edit(){
	$id =$this->uri->segment('3');
	 
	  $this->db->where('id', $id);
	  return $this->db->get('operation_number')->result_array();
  }

  public function operation_number_update($id,$data){
	
	$this->db->where('id', $id);
	$this->db->update('operation_number', $data);
	}

	public function operation_number_delete(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('operation_number');
}

//Part Type
public function part_type_add($data){
			
	$this->db->insert('part_type', $data);
	
}

public function get_part_type_list(){
			
	$this->db->select('*');
	// $this->db->where('is_admin',0);
	return $this->db->get('part_type')->result_array();
}

public function part_type_edit(){
	$id =$this->uri->segment('3');
	 
	  $this->db->where('id', $id);
	  return $this->db->get('part_type')->result_array();
  }

  public function part_type_update($id,$data){
	
	$this->db->where('id', $id);
	$this->db->update('part_type', $data);
	}

	public function part_type_delete(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('part_type');
}

public function email_master_add($data){
			
	$this->db->insert('email_master', $data);
	
}

public function get_email_master_list(){
			
	$this->db->select('*');
	// $this->db->where('is_admin',0);
	return $this->db->get('email_master')->result_array();
}

public function email_master_edit(){
	$id =$this->uri->segment('3');
	 
	  $this->db->where('id', $id);
	  return $this->db->get('email_master')->result_array();
  }

  public function email_master_update($id,$data){
	
	$this->db->where('id', $id);
	$this->db->update('email_master', $data);
	}

	public function email_master_delete(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('email_master');
}
    }
    ?>