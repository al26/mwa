<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {

	public function getPage($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('pages')->row();
	}	

	public function updatePage($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('pages', $data);
	}
}

/* End of file pages_model.php */
/* Location: ./application/models/pages_model.php */