<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personalia_model extends CI_Model {

	public function addPersonalia($data) 
	{
		$query = $this->db->insert('personalia', $data);
		return $query ? TRUE : FALSE;
	}	

	public function getAllPersonaliaMWA()
	{
		$this->db->where('is_ka', 'no');
		return $this->db->get('personalia')->result();
	}

	public function getAllPersonaliaKA()
	{
		$this->db->where('is_ka', 'yes');
		return $this->db->get('personalia')->result();
	}

	public function updatePersonalia($id, $data)
	{
		$query = $this->db->update('personalia', $data, array('id' => $id));
		return $query ? TRUE : FALSE;
	}

	public function deletePersonalia($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('personalia');
		return $query ? TRUE : FALSE;
	}

}

/* End of file Personalia_model.php */
/* Location: ./application/models/Personalia_model.php */