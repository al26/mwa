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
		$where = array(
			'hapus'=>0
		);
		$this->db->order_by('time_publish', 'DESC');
		return $this->db->get_where('comment',$where,10)->result();
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
		$this->db->join('comment', 'reply.id_comment = comment.hash', 'inner');
		return $this->db->get()->result();
	}
	public function goTrash($hash){
		$data = array(
			'hapus'=>1
		);
		$where = array(
			'hash'=>$hash
		);
		$update = $this->db->update('comment', $data ,$where);
		if($update == true){
			return true;
		}else{
			return false;
		}
			
	}
	public function getCommentTrash(){

		$where = array(
			'hapus'=>1
		);
		return $this->db->get_where('comment',$where, 10)->result();
	}
	public function goDeleteReply($id){
		$where = array(
			'id_reply'=>$id
		);
		$Delete = $this->db->delete('reply',$where);
		if($Delete==true){
			return true;
		}else{
			return false;
		}
	}
	public function getDataReplyComment($id){
		$where = array(
			'id_reply'=>$id
		);
		$this->db->join('comment', 'comment.hash = reply.id_comment', 'inner');
		return $this->db->get_where('reply',$where)->result();
	}
	public function getDataReplyUpdate($id){
		$where = array(
			'id_reply'=>$id
		);
		$this->db->join('comment', 'comment.hash = reply.id_comment', 'inner');
		return $this->db->get_where('reply',$where)->result();
	}
	public function UpdateReplyComment($data,$id){
		$where = array(
			'id_reply'=>$id
		);
		$update = $this->db->update('reply',$data,$where);
		if ($update==true) {
			return true;
		} else {
			return false;
		}
	}
	public function goDeleteComment($hash){
		$where = array(
			'hash' => $hash 
		);
		$delete = $this->db->delete('comment',$where);
		if ($delete == true) {
			return true;
		} else {
			return false;
		}	
	}
	public function goRestorageComment($data,$hash){
		$where = array(
			'hash'=>$hash
		);
		$delete = $this->db->update('comment',$data,$where);
		if($delete==true){
			return true;
		}else{
			return false;
		}
	}
	public function get_comment_user(){
		$where = array(
			'hapus'=>0,
			'belong_to'=>$this->session->userdata('user_id')
		);
		$this->db->order_by('time_publish', 'DESC');
		return $this->db->get_where('comment',$where,10)->result();
	}
	public function getCommentTrash_user(){
		$where = array(
			'hapus'=>1,
			'belong_to'=>$this->session->userdata('user_id')
		);
		return $this->db->get_where('comment',$where, 10)->result();
	}
}



