<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation','image_lib');
        $this->load->model('admin_model');
        $this->load->helper('captcha');     

    }

    public function index(){
        if($this->session->role=="admin"){
            redirect('admin');
        }elseif($this->session->role=="user"){
            redirect('user');
        }
        $data = $this->create_captcha();
        $this->load->view('admin/login',$data);
    }

    public function auth_user(){
        $this->form_validation->set_rules('username','Username','trim|xss_clean|required');
        $this->form_validation->set_rules('password','Password','trim|xss_clean|required');
        $this->form_validation->set_rules('captcha','Captcha','trim|xss_clean|required|callback_check_captcha');
        
        if($this->form_validation->run()==false){
            $data = $this->create_captcha();
            $data['errorLogin']="sorry login error, password or username may wrong";
            $this->load->view('admin/login',$data);
        }else{
            $query = $this->admin_model->get_user();
            if($query == false){
                redirect('auth');
            }else{
                redirect('admin');
            }
        }
    }
    
    public function destroy(){
        $this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('id_personalia');
		$this->session->sess_destroy();

        redirect('login');
    }
    public function create_captcha(){

        $data = array(

        'img_path'=>'./assets/captcha/',
        'img_url'=> base_url('/assets/captcha/'),
        'img_width'=>248,
        'img_height'=>50,
        'expiration'=>7200,
        'word_length'=>3,
        'font_size'=>100,
        'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(204, 204, 204),
                'text' => array(150, 150, 150),
                'grid' => array(198, 198, 198)
        )
        );
        
        $data_captcha = create_captcha($data);

        $this->session->set_userdata('captchaword', $data_captcha['word']);
        
        $data = array(
        'image'=> $data_captcha['image'],
        'word'=> $data_captcha['word'],
        'captcha_time'  => $data_captcha['time'],
        'ip_address'    => $this->input->ip_address(),
        );

        return $data;

    }
    public function check_captcha($string)
    {
        if($string == $this->session->userdata('captchaword'))
        {
            return TRUE;
        }
        else
        {
        $this->form_validation->set_message('check_captcha', 'Wrong captcha code');
        return FALSE;
        }
    }
    
}