<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation','upload');
        $this->load->model('admin_model');
        $this->load->helper('text','form');
        if($this->session->user_id == false){
            redirect('login');
        }
    }
    public function index(){
        $data['sidebar']="admin/sidebar";
        $this->load->view('admin/layout',$data);
    }

    public function view_post(){
        $data['sidebar']="admin/sidebar";
        $data['data']=$this->admin_model->get_post();
        $this->load->view('admin/view_post',$data);
    }
    public function add_post(){
        $data['sidebar']="admin/sidebar";
        $data['data']=$this->admin_model->get_category();
        $this->load->view('admin/new_post',$data);
    }
    public function verif_post(){
        $this->form_validation->set_rules('judul','Judul','trim|xss_clean|required');
        $this->form_validation->set_rules('isi','Isi','trim|xss_clean|required');
        $this->form_validation->set_rules('kategori','Kategori','trim|xss_clean|required');
        
            $judul=$this->input->post('judul');
            $isi=$this->input->post('isi');
            $kategori=$this->input->post('kategori');

            
            $config['upload_path']      = './assets/img/';
            $config['allowed_types']    = 'jpg|jpeg|png|PNG';
            $config['max_size']         = 2000048;
            $config['overwrite']        = TRUE;

            $config['file_name'] = url_title($judul);
            $this->upload->initialize($config);

                if($this->upload->do_upload('foto')){
                    $upload_data = $this->upload->data(); 
                    $file_name = $upload_data['file_name'];
                    
                    $config2['image_library'] = 'gd2';
                    $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                    $config2['maintain_ratio'] = TRUE;
                    $config2['width'] = 200;
                    $config2['height'] = 350;
                    
                    $this->load->library('image_lib',$config2);
                    $this->image_lib->clear();
                    $this->image_lib->initialize($config2);
                    $this->image_lib->resize();

                }else{
                    $data['sidebar']="admin/sidebar";
                    $data['error_input']="Foto Gagal diUpload";
                    $data['data']=$this->admin_model->get_category();
                    $this->load->view('admin/new_post',$data);
                }
            $slug = $this->seoUrl($judul);
            $data_post =array (
                'title'=>$judul,
                'body'=>$isi,
                'slug'=>$slug,
                'category'=>$kategori,
                'image'=>$file_name
                );

        if($this->form_validation->run()==false){
            $data['sidebar']="admin/sidebar";
            $data['error_input']=validation_errors();
            $data['data']=$this->admin_model->get_category();
            $this->load->view('admin/new_post',$data);
        }else{

            $query = $this->admin_model->input_post($data_post);
            
            if($query==true){
                $data['sidebar']="admin/sidebar";
                $data['error_input']="post berhasil ditambahkan";
                $data['data']=$this->admin_model->get_category();
                $this->load->view('admin/new_post',$data);
            }else{
                $data['sidebar']="admin/sidebar";
                $data['error_input']="post gagal ditambahkan masalah di databasenya";
                $data['data']=$this->admin_model->get_category();
                $this->load->view('admin/new_post',$data);
            }
        }
    }
        function seoUrl($string) {
            //Lower case everything
            // $string = strtolower($string);
            //Make alphanumeric (removes all other characters)
            // $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
            //Clean up multiple dashes or whitespaces
            // $string = preg_replace("/[\s-]+/", " ", $string);
            //Convert whitespaces and underscore to dash
            $string = preg_replace("/[\s_]/", "-", $string);
            return $string;
        }
    
    public function new_file(){}
    public function view_file(){}
    public function add_category(){}
    public function new_category(){}
    
}