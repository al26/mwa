<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personalia_model extends CI_Model {

	public function addPersonalia($data) 
	{
		$this->db->insert('personalia', $data);
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
		$this->db->update('personalia', $data, array('id' => $id));
	}

	public function deletePersonalia($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('personalia');
	}

}

/* End of file Personalia_model.php */
/* Location: ./application/models/Personalia_model.php */