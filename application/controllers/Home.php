<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Beranda';
		// $data['view'] = 'beranda';
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/beranda', $data);
		$this->load->view('templates/footer', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */