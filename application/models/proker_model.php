<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proker_model extends CI_Model {

	public function addProker($data)
	{
		$query = $this->db->insert('proker', $data);
		return $query ? TRUE : FALSE;
	}	

	public function getAllProker()
	{
		return $this->db->get('proker')->result();
	}

	public function updateProker($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('proker', $data);
		return $query ? TRUE : FALSE;
	}

	public function deleteProker($id)
	{
		$this->db->where('proker', $id);
		$query = $this->db->delete('proker');
		return $query ? TRUE : FALSE;
	}

}

/* End of file proker_model.php */
/* Location: ./application/models/proker_model.php */