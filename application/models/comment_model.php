<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public function input_post($data){
		$query = $this->db->insert('comment', $data);
		if ($query==true) {
			return true;
		} else {
			return false;
		}
		
	}
	public function get_comment(){
		return $this->db->get('comment')->result();
	}
	public function getAllComment_read($id){
		$where =array(
			'hash'=>$id
		);
		return $this->db->get_where('comment',$where)->result_array();

	}

}
