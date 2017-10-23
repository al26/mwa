<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{
		$data['page'] = $this->pages_model->getPage(1);
		$data['recent_posts'] = $this->post_model->getPostPagination(10, 0, 'semua-berita');

		$this->load->view('templates/header', $data);
		$this->load->view('frontend/beranda', $data);
		$this->load->view('templates/footer', $data);
	}

	public function penjelasan_umum()
	{
		$data['page'] = $this->pages_model->getPage(2);
		$data['body'] = 'profil';
	    $data['fk'] = $this->fk_model->get();
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/penjelasan_umum', $data);
		$this->load->view('templates/footer', $data);
	}

	public function personalia()
	{
		$data['page'] = $this->pages_model->getPage(3);
		$data['body'] = 'profil';
		$data['personalia'] = $this->personalia_model->getAllPersonaliaMWA();
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/personalia', $data);
		$this->load->view('templates/footer', $data);
	}

	public function komite_audit()
	{
		$data['page'] = $this->pages_model->getPage(4);
		$data['body'] = 'profil';
		$data['ka'] = $this->personalia_model->getAllPersonaliaKA();
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/komite-audit', $data);
		$this->load->view('templates/footer', $data);
	}

	public function mwa_um()
	{
		$data['page'] = $this->pages_model->getPage(5);
		$data['body'] = 'profil';
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/mwaum', $data);
		$this->load->view('templates/footer', $data);	
	}

	public function skp()
	{
		$data['page'] = $this->pages_model->getPage(6);
		$data['body'] = 'skp';
		$data['sk'] = $this->skp_model->getSKYear();
		$data['peraturan'] = $this->skp_model->getPeraturanYear();
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/skperaturan', $data);
		$this->load->view('templates/footer', $data);
	}

	public function proker()
	{
		$data['page'] = $this->pages_model->getPage(7);
		$data['body'] = 'pk';
		$data['proker'] = $this->proker_model->getAllProker();
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/program-kerja', $data);
		$this->load->view('templates/footer', $data);
	}

	public function saran()
	{

		$data['page'] = (object)array('title' => 'Kotak Saran');
		$data['body'] = 'aspirasi';
		$this->load->view('templates/header', $data);
		$this->load->view('frontend/saran', $data);
		$this->load->view('templates/footer', $data);
	}

	

}