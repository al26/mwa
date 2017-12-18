<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attachments_model extends CI_Model {

	public function uploadFiles($data)
	{
		$query = $this->db->insert_batch('attachments', $data);
		return $query ? TRUE : FALSE;
	}	

	public function getAttachments($hash)
	{
		return $this->db->get_where('attachments', array('owner_hash' => $hash ))->result();
	}

	public function removeAttachments($hash)
	{
		$this->db->where('owner_hash', $hash);
		$query = $this->db->delete('attachments');
		return $query ? TRUE : FALSE;
	}

}

/* End of file attachments_model.php */
/* Location: ./application/models/attachments_model.php */