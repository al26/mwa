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
		$where = array(
			'is_ka' => 'no',
			'status' => 'aktif'
		);
		$this->db->where($where);
		return $this->db->get('personalia')->result();
	}

	public function getAllPersonaliaKA()
	{
		$where = array(
			'is_ka' => 'yes',
			'status' => 'aktif'
		);
		$this->db->where($where);
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

	public function getAllPersonaliaUM()
	{
		$where = array(
			"LOWER(unsur)" => "LOWER('mahasiswa')"
		);
		$this->db->where($where, NULL, FALSE);
		return $this->db->get('personalia')->result();
	}

	public function getPersonaliaUMbyYear($tahun)
	{
		$this->db->where("LOWER(unsur) = LOWER('mahasiswa') AND tahun = '$tahun'");
		return $this->db->get('personalia')->row();
	}

	public function getCurrentUM()
	{
		$where = array(
			"LOWER(unsur)" => "LOWER('mahasiswa')",
			"status" => "'aktif'"
		);
		$this->db->where($where, NULL, FALSE);
		$this->db->select('tahun');
		return $this->db->get('personalia')->row();
	}

	public function getPersonaliaById($id)
	{
		return $this->db->get_where('personalia', array('id' => $id))->row();	
	}

}

/* End of file Personalia_model.php */
/* Location: ./application/models/Personalia_model.php */