<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        // $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>', '</div>');
    }

	public function send_message()
	{
		$this->form_validation->set_rules('name','Nama','xss_clean|trim|required');
		$this->form_validation->set_rules('email','Email','xss_clean|trim|required|valid_email');
		$this->form_validation->set_rules('subject','Topik','xss_clean|trim|required');
		$this->form_validation->set_rules('message','Aspirasi','xss_clean|trim|required');

		$name 		= $this->input->post('name');
		$email 		= $this->input->post('email');
		$subject 	= $this->input->post('subject');
		$message 	= $this->input->post('message');
		$attachment = $this->input->post('attachment');
		
		if($this->form_validation->run() === FALSE) 
		{
			$msg['err_msg'] = validation_errors();
			$repopulate = array(
				'name' => $name,
				'email' => $email,
				'subject' => $subject,
				'message' => $message
			);
			$this->session->set_flashdata($repopulate);

		} 
		else
		{
			$hash = preg_replace('/[^0-9]+/', '', md5(uniqid(time(), true)), 10);
			$filename = url_title(date('dmy').'-'.$name, 'dash', TRUE);
			$file = array();
			if (!empty($_FILES['attachment']['name'])) {
       			$files = $_FILES['attachment'];
            	foreach($files['name'] as $k => $v) {
					$_FILES['attachment']['name']     = $files['name'][$k];
					$_FILES['attachment']['type']     = $files['type'][$k];
					$_FILES['attachment']['tmp_name'] = $files['tmp_name'][$k];
					$_FILES['attachment']['error']    = $files['error'][$k];
					$_FILES['attachment']['size']     = $files['size'][$k];
					// chmod($path = ,0755);
					$config['upload_path'] 		= './assets/uploaded_files/attachments';
					$config['allowed_types'] 	= 'jpg|jpeg|pdf|png|doc|docx|xls|xlsx|ppt|pptx|txt|rtf|rar|zip';
					$config['max_size'] 		= 2048;
					$config['overwrite']		= FALSE;
	                $config['file_name'] 		= $filename;
	                $config['max_filename_increment'] = 50;

					$this->upload->initialize($config);
					if ($this->upload->do_upload('attachment')) {
						$data = $this->upload->data();
						chmod($data['upload_data']['full_path'], 0755);
						$file[$k] =  $data['file_name'];
					} else {
						$msg['err_msg'] = $this->upload->display_errors();
					}
				}
			}

			$data = array(
				'name' => $name,
				'email' => $email,
				'subject' => $subject,
				'message' => $message,
				'attachments' => implode(",", $file),
				'hash' => $hash,
				'status' => 'not read yet'
			);
			$inserted = $this->messages_model->makeMessage($data);
			if ($inserted === TRUE) {
				$msg['scss_msg'] = "We've received your message. Thanks for participating actively to make better Undip.";
			} else {
				foreach ($file as $f) {
					$myfile = $f;
					unlink('./assets/uploaded_files/attachments/'.$myfile);
				}
				
				$msg['err_msg'] = "An error occurred. Please try again. If error still occurs, please contact us";
			}
		}
		
		$this->session->set_flashdata($msg);
		redirect('kotak-saran');
			
	}
	public function create_post(){

		$this->form_validation->set_rules('title','Title','xss_clean|trim|required');
		$this->form_validation->set_rules('body','Post Body','xss_clean|trim|required');

        $title = $this->input->post('title');
        $body = $this->input->post('body');
        $post_category = $this->input->post('category');
        $post_images = $this->input->post('user_file');

        if($this->form_validation->run() === FALSE) 
        {
            $msg['err_msg'] = validation_errors();
            $repopulate = array(
                'title' => $title,
                'body' => $body
            );
            $this->session->set_flashdata($repopulate);
        } 
        else
        {
            $hash = md5(uniqid(time(), true));
            $slug = url_title($title, 'dash', true);
            $images = array();
            $filename = date('dmy')."-".$slug;

            if (!empty($_FILES['user_file']['name'])) {
       			$files = $_FILES['user_file'];
            	foreach($files['name'] as $k => $v) {
					$_FILES['user_file']['name']     = $files['name'][$k];
					$_FILES['user_file']['type']     = $files['type'][$k];
					$_FILES['user_file']['tmp_name'] = $files['tmp_name'][$k];
					$_FILES['user_file']['error']    = $files['error'][$k];
					$_FILES['user_file']['size']     = $files['size'][$k];
					
					$config['upload_path']      = './assets/images/post';
	                $config['allowed_types']    = 'jpg|jpeg|png';
	                $config['max_size']         = 2048;
	                $config['overwrite']        = FALSE;
	                $config['file_name']        = $filename;
	                $config['max_filename_increment'] = 50;


					$this->upload->initialize($config);
					if ($this->upload->do_upload('user_file')) {
						$data = $this->upload->data();
						$images[$k] = $data['file_name'];
					} else {
						$msg['err_msg'] = $this->upload->display_errors();
					}
				}
            }

            $data = array(
                'title' => $title,
                'slug' => $slug,
                'body' => $body,
                'category' => implode(",",$post_category),
                'image' => implode(",",$images),
                'hash' => $hash
            );
            $inserted = $this->post_model->createPost($data);

            if ($inserted === TRUE) {
                $msg['scss_msg'] = "Success creating new post";
            } else {                
                foreach ($images as $ui) {
                    $img = $ui;
                    unlink('./assets/images/post/'.$img);
                }
                
                $msg['err_msg'] = "An error occurred. Please try again.";
            }
        }
        
        $this->session->set_flashdata($msg);
        redirect('new-post');
    }
    public function new_comment($slug,$id){
    	$this->form_validation->set_rules('nama','Nama','xss_clean|trim');
		$this->form_validation->set_rules('email','Email','xss_clean|trim|valid_email');
		$this->form_validation->set_rules('comment','comment','xss_clean|trim');
			
			if($this->form_validation->run()==false){
				$msg['err_msg'] = "An error occurred. Please try again.";
			}else{
				$hash = md5(uniqid(time(), true));
				$data = array(
					'nama'=>$this->input->post('nama'),
					'email'=>$this->input->post('email'),
					'comment'=>$this->input->post('comment'),
					'hash'=>$hash,
					'hash_post'=>$id,
					'hapus'=>0
					);
				$query = $this->comment_model->input_post($data);
				$msg['scss_msg'] = "Success add new comment";
				
			}
		$this->session->set_flashdata($msg);
		redirect('berita/'.$slug);
    }



    public function edit_beranda()
    {
    	$this->form_validation->set_rules('title','Title','xss_clean|trim|required');
		$this->form_validation->set_rules('desc','Description','xss_clean|trim|required');

        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $desc = $this->input->post('desc');
        
        if($this->form_validation->run() === FALSE) 
        {
            $msg['err_msg'] = validation_errors();
            $repopulate = array(
                'title' => $title,
                'desc' => $decs
            );
            $this->session->set_flashdata($repopulate);
        } 
        else
        {
        	$data = array(
                'title' => $title,
                'desc' => $desc
            );
            $inserted = $this->pages_model->updatePage($id, $data);

            if ($inserted === TRUE) {
                $msg['scss_msg'] = "Success update page Beranda";
            } else {                
                $msg['err_msg'] = "An error occurred. Please try again.";
            }
        }

        $this->session->set_flashdata($msg);
        redirect('page/edit/'.$id);
    }
















    public function reply_comment($hash){
    	$this->form_validation->set_rules('reply','Reply','xss_clean|trim');

    	if($this->form_validation->run() == FALSE)
    	{
            $msg['err_msg'] =  "An error disini. Please try again.";
	    } 
	    else
	    {			
			$idComment = $hash;
			$data = array(
				'id_comment'=>$idComment,
				'reply'=>$this->input->post('reply')
				);
			$inserted = $this->comment_model->ReplyComment($data);

			if ($inserted === TRUE) {
                $msg['scss_msg'] = "Success Reply Comment";
            } else {                
                $msg['err_msg'] = "An error occurred. Please try again.";
            }
			
		}
			$this->session->set_flashdata($msg);
			redirect('reply/'.$hash);
    }





























}

/* End of file validation.php */
/* Location: ./application/controllers/validation.php */