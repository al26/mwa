<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation','upload');
        $this->load->helper('text','form');
        $this->load->model('user_model');
        if($this->session->userdata('role')==false){
            redirect ('login');
        }elseif($this->session->userdata('role')!="user"){
            redirect ('admin');
        }
    }
	public function index()
	{  
        $data['sidebar'] = "admin/sidebar_user";
        $data['data'] = $this->user_model->getAllPosts();
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
     public function delete_post($id){
        $query = $this->post_model->deletePost($id);
        if($query==true){
            $msg['scss_msg'] = "Your Data Already Delete, Well Done..";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        }else{
            $msg['err_msg'] = "Sorry your Data Failed t Update,..";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        }
    }
    public function get_detail_post($id=null){
        $data['sidebar']="admin/sidebar_user";
        $data['data_post']=$this->post_model->getDetail($id);
        $this->load->view('user/detail_post',$data);
    }
    public function get_edit_post($id=null){
        $data['sidebar']="admin/sidebar_user";
        $data['data_post']=$this->post_model->postUpdate($id);
        $data['categories']=$this->category_model->getCategories();
        $this->load->view('user/edit_post',$data);
    }
    public function SettingUser(){
        $data['sidebar'] = "admin/sidebar_user";
        $data['user'] = $this->user_model->getPersonalia();
        $this->load->view('user/settinguser',$data);   
    }
}
