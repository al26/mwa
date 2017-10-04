<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Beranda';
		$this->load->view('templates/frontend', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */