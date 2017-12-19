<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

	public function makeMessage($data)
	{
		$query = $this->db->insert('messages', $data);
		
		if ($query) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getAllMessage()
	{
		
		$where = array(
			'hapus'=>0
		);
		$this->db->order_by('status','DESC');
		$this->db->order_by('received_at', 'DESC');
		return $this->db->get_where('messages',$where,10)->result();
	}	
	public function getAllMessage_read($id)
	{
		$where = array(
			'id'=>$id
			);
		$data = array(
			'status'=>'read'
			);
		$this->db->order_by('received_at', 'desc');
		$this->db->update('messages',$data,$where);
		return $this->db->get_where('messages',$where)->result();

	}
	public function countMessage(){
		 $where = array(
            'status'=> "not read yet"
        );
        $this->db->where($where);
        $this->db->from('messages');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }

	}
	public function SentToDraft($id){
		$where = array(
			'id'=>$id
			);
		$data = array(
			'save'=>1,
			'hapus'=>0
			);
		$query = $this->db->update('messages',$data,$where);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	public function getAllDraftMessage(){
		$where = array(
			'save'=>1,
			'status'=>'read',
			'hapus'=>0
			);
		$this->db->order_by('received_at', 'desc');
		return $this->db->get_where('messages',$where)->result();
	}
	public function goTrash($id){
		$where = array(
			'id'=>$id
			);
		$data = array(
			'hapus'=>1
			);
		$query = $this->db->update('messages',$data,$where);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	public function getTrashMessage(){
		$where = array(
			'status'=>'read',
			'hapus'=>1
			);
		$this->db->order_by('received_at', 'desc');
		return $this->db->get_where('messages',$where)->result();
	}
	public function deleteTrash($id){
		$where = array(
			'id'=>$id
			);
			//$get = $this->db->get_where('messages',$where)->row();
			// $myfile = $get->attachments;
			// chmod(base_url('/assets/uploaded_files/attachments/'), 0755);
			// unlink(base_url('/assets/uploaded_files/attachments/').$myfile);
		$query = $this->db->delete('messages',$where);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	public function getMessage($hash)
	{
		return $this->db->get_where('messages', array('hash' => $hash))->row();
	}

	public function updateMessage($hash)
	{
		$this->db->set('status', 'read');
		$this->db->where('hash', $hash);
		$this->db->update('messages'); 
	}

	public function deleteMessage($hash)
	{
		$this->db->where('hash', $hash);
		$this->db->delete('messages');
	}
}

/* End of file Aspirasi_model.php */
/* Location: ./application/models/Aspirasi_model.php */