<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skp_model extends CI_Model {

	public function addSKP($data)
	{
		$query = $this->db->insert('sk_peraturan', $data);
		return $query ? TRUE : FALSE;
	}	

	public function getAllSKP()
	{
		return $this->db->get('sk_peraturan')->result();
	}

	public function getSKYear()
	{
		$this->db->where('kategori', 'sk');
		$this->db->select('YEAR(tanggal) AS year');
		$this->db->distinct();
		return $this->db->get('sk_peraturan')->result();
	}

	public function getPeraturanYear()
	{
		$this->db->where('kategori', 'peraturan');
		$this->db->select('YEAR(tanggal) AS year');
		$this->db->distinct();
		return $this->db->get('sk_peraturan')->result();
	}

	public function getSKByYear($year)
	{
		$where = "kategori = 'sk' AND tanggal LIKE '$year%'";
		return $this->db->get_where('sk_peraturan', $where)->row();
	}

	public function getPeraturanByYear($year)
	{
		$where = "kategori = 'peraturan' AND tanggal LIKE '$year%'";
		return $this->db->get_where('sk_peraturan', $where)->row();
	}	

	public function updateSKP($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('sk_peraturan', $data);
		return $query ? TRUE : FALSE;
	}

	public function deleteSKP($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('sk_peraturan');
		return $query ? TRUE : FALSE;
	}
}

/* End of file skp_model.php */
/* Location: ./application/models/skp_model.php */