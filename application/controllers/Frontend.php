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

	public function penjelasan_umum()
	{
		$data['title'] = 'Penjelasan Umum';
		$data['body'] = 'profil';
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/penjelasan_umum', $data);
		$this->load->view('templates/footer', $data);
	}

	public function personalia()
	{
		$data['title'] = 'Personalia';
		$data['body'] = 'profil';
		$data['personalia'] = $this->personalia_model->getAllPersonaliaMWA();
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/personalia', $data);
		$this->load->view('templates/footer', $data);
	}

	public function komite_audit()
	{
		$data['title'] = 'Komite Audit';
		$data['body'] = 'profil';
		$data['ka'] = $this->personalia_model->getAllPersonaliaKA();
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/komite-audit', $data);
		$this->load->view('templates/footer', $data);
	}

	public function skp()
	{
		$data['title'] = 'SK & Peraturan';
		$data['body'] = 'skp';
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/skperaturan', $data);
		$this->load->view('templates/footer', $data);
	}

	public function saran()
	{
		$data['title'] = 'Kotak Saran';
		$data['body'] = 'aspirasi';
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/saran', $data);
		$this->load->view('templates/footer', $data);
	}

	

}