<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation','upload');
        $this->load->helper('text','form');
        $this->load->model('Category_model');

        if($this->session->userdata('role')==false){
            redirect ('login');
        }elseif($this->session->userdata('role')!="user"){
            redirect ('admin');
        }
    }
	public function index()
	{  
        $data['sidebar'] = "admin/sidebar_user";
        $data['data']=$this->user_model->getAllPosts();
        $this->load->view('user/view_post',$data);
	}
     public function view_post(){
        $data['sidebar']="admin/sidebar_user";
        $data['data']=$this->user_model->getAllPosts();
        $this->load->view('user/view_post',$data);
    }
    public function add_post(){
        $data['sidebar']="admin/sidebar_user";
        $data['categories'] = $this->user_model->getCategories();
        $this->load->view('user/new_post',$data);
    }
}
