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
		$this->db->order_by('received_at', 'desc');
		return $this->db->get('messages')->result();
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