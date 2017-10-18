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
			'status'=>'not read yet'
			);
		$this->db->order_by('received_at', 'desc');
		return $this->db->get_where('messages',$where)->result();
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