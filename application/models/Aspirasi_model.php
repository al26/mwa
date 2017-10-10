<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi_model extends CI_Model {

	public function makeAspirasi($data)
	{
		$data['hash'] = preg_replace('/[^0-9]+/', '', md5(uniqid(time(), true)), 10);
		$data['status_baca'] = 'belum';
		$this->db->insert('aspirasi', $data);
	}

	public function getAllAspirasi()
	{
		$this->db->order_by('received_at', 'desc');
		return $this->db->get('aspirasi')->result();
	}	

	public function getAspirasi($hash)
	{
		return $this->db->get_where('aspirasi', array('hash' => $hash))->row();
	}

	public function updateAspirasi($hash)
	{
		$this->db->set('status_baca', 'sudah');
		$this->db->where('hash', $hash);
		$this->db->update('aspirasi'); 
	}

	public function deleteAspirasi($hash)
	{
		$this->db->where('hash', $hash);
		$this->db->delete('aspirasi');
	}
}

/* End of file Aspirasi_model.php */
/* Location: ./application/models/Aspirasi_model.php */