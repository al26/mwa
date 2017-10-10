<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Beranda';
		$data['recent_posts'] = $this->post_model->getPostPagination(10, 0, 'semua-berita');

		$this->load->view('templates/header', $data);
		$this->load->view('frontend/beranda', $data);
		$this->load->view('templates/footer', $data);
	}

	public function personalia()
	{
		$data['title'] = 'Personalia';
		$data['body'] = 'personalia';
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/personalia', $data);
		$this->load->view('templates/footer', $data);
	}


	public function saran()
	{
		$data['title'] = 'Kotak Saran';
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/saran', $data);
		$this->load->view('templates/footer', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */