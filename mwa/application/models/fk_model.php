<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fk_model extends CI_Model {

	public function get()
	{
		return $this->db->get('fungsi_kewenangan')->row();
		
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('fungsi_kewenangan', $data);
		return $query ? TRUE : FALSE;
	}
}

/* End of file fk_model.php */
/* Location: ./application/models/fk_model.php */