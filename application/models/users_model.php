<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {

	public function getUsers(){
		return $this->db->get('user')->result();
	}
	public function hapusUser($id){
		$where = array(
			'id'=>$id
		);
		$return = $this->db->delete('user',$where);	
		return $return ? TRUE : FALSE;
	}

}

/* End of file Users_Model.php */
/* Location: ./application/models/Users_Model.php */