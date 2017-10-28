<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function getCategories()
	{
		return $this->db->get('category')->result();
	}
	public function Delete_Kategori($id){
		$where = array(
			'id' => $id 
		);
		$query = $this->db->delete('category',$where);
		if($query == true){
			return true;
		}else{
			return false;
		}
	}
	public function addCategory($data){
		$query = $this->db->insert('category', $data);
		if ($query==true) {
			return true;
		} else {
			return false;
		}
	}
	public function updateCategory($id,$data){
		$where = array(
			'id' =>$id  
		);
		$query = $this->db->update('category',$data ,$where);
		if($query==true){
			return true;
		}else{
			return false;
		}
	}

}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */