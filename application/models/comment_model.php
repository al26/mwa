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
	public function getDataComment_reply($hash){
		$where =array(
			'hash'=>$hash
		);
		return $this->db->get_where('comment',$where)->result_array();
	}
	public function ReplyComment($data){
		$query = $this->db->insert('reply', $data);
		if($query==true){
			return true;
		}else{
			return false;
		}

	}
	public function getCommentReply(){
		$this->db->select('*');
		$this->db->from('reply');
		$this->db->join('comment', 'reply.id_comment = comment.hash', 'right');
		return $this->db->get()->result();
	}

}
