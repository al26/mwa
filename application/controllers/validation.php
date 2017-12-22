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
						chmod($data['full_path'], 0755);
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

            if (!empty($post_category)) {
                $data = array(
                    'title' => $title,
                    'slug' => $slug,
                    'body' => $body,
                    'category' => implode(",",$post_category),
                    'image' => implode(",",$images),
                    'hash' => $hash
                );
            } else {
                $data = array(
                    'title' => $title,
                    'slug' => $slug,
                    'body' => $body,
                    'image' => implode(",",$images),
                    'hash' => $hash
                );
            } 
            
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
        redirect('post');
    }
    public function do_updatePost($id){
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

            if (!empty($post_category) && !empty($images)) {
                $data = array(
                    'title' => $title,
                    'slug' => $slug,
                    'body' => $body,
                    'category' => implode(",",$post_category),
                    'image' => implode(",",$images),
                    'hash' => $hash
                );
            } else if (!empty($post_category) && empty($images)) {
                $data = array(
                    'title' => $title,
                    'slug' => $slug,
                    'body' => $body,
                    'category' => implode(",",$post_category),
                );
            } else if (!empty($images) && empty($post_category)) {
                $data = array(
                    'title' => $title,
                    'slug' => $slug,
                    'body' => $body,
                    'image' => implode(",",$images)
                );
            } else{
                $data = array(
                    'title' => $title,
                    'slug' => $slug,
                    'body' => $body
                );
            }
            
            
            $inserted = $this->post_model->doUpdatePost($id,$data);

            if ($inserted === TRUE) {
                $msg['scss_msg'] = "Success Update post";
            } else {                
                foreach ($images as $ui) {
                    $img = $ui;
                    unlink('./assets/images/post/'.$img);
                }
                
                $msg['err_msg'] = "An error occurred. Please try again.";
            }
        }
        
        $this->session->set_flashdata($msg);
        redirect('post');
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



    public function update_page($id)
    {
    	$this->form_validation->set_rules('title','Title','xss_clean|trim');
		$this->form_validation->set_rules('desc','Description','xss_clean|trim');

        // $id = $this->input->post('id');
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
                'description' => $desc
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
            $msg['err_msg'] =  "An error occurred. Please try again.";
	    } 
	    else
	    {			
			$idComment = $hash;
			$data = array('id_comment'=>$idComment,'reply'=>$this->input->post('reply'));
			$inserted = $this->comment_model->ReplyComment($data);

			if ($inserted === TRUE) {$msg['scss_msg'] = "Success Reply Comment";} 
			else {$msg['err_msg'] = "An error occurred. Please try again.";}
		}
			$this->session->set_flashdata($msg);redirect('reply/'.$hash);
    }
  
    public function doUpdate_Reply($id){
      $this->form_validation->set_rules('reply', 'Content', 'trim|xss_clean');
      if($this->form_validation->run()==false){
        $msg['err_msg'] =  "An error occurred. Please try again.";
      }else{
        $data = array('reply'=>$this->input->post('reply'));
        $inserted = $this->comment_model->UpdateReplyComment($data,$id);
        if ($inserted === TRUE) {
          $msg['scss_msg'] = "Success Update Reply Comment";
        } 
        else {
          $msg['err_msg'] = "An error occurred. Please try again.";
        }
      }
      $this->session->set_flashdata($msg);redirect('AllReply/');
    }
    public function add_category(){
        
        $this->form_validation->set_rules('nama', 'Kategori', 'trim|xss_clean');
          if($this->form_validation->run()==false){
            $msg['err_msg'] =  "An error occurred. Please try again.";
          }else{
            $data = array('name'=>$this->input->post('nama'));
            $inserted = $this->category_model->addCategory($data);
            if ($inserted === TRUE) {
              $msg['scss_msg'] = "Success Update Reply Comment";
            } 
            else {
              $msg['err_msg'] = "An error occurred. Please try again.";
            }
          }
          $this->session->set_flashdata($msg);redirect('viewCategory');
    }
    public function Update_Kategori($id){
     
        $this->form_validation->set_rules('nama', 'Kategori', 'trim|xss_clean');
          if($this->form_validation->run()==false){
            $msg['err_msg'] =  "An error occurred. Please try again.";
          }else{
            $data = array('name'=>$this->input->post('nama'));
            $inserted = $this->category_model->updateCategory($id,$data);
            if ($inserted === TRUE) {
              $msg['scss_msg'] = "Success Update Reply Comment";
            } 
            else {
              $msg['err_msg'] = "An error occurred. Please try again.";
            }
          }
          $this->session->set_flashdata($msg);redirect('viewCategory');   
    }
    public function tambah_PK($id){
        $this->form_validation->set_rules('nomor', 'Kategori', 'trim|xss_clean');
        $this->form_validation->set_rules('jenis_kegiatan', 'Kategori', 'trim|xss_clean');
          if($this->form_validation->run()==false){
            $msg['err_msg'] =  "An error occurred. Please try again.";
          }else{
            $data = array('judul_program'=>$this->input->post('judul'),'jenis_kegiatan'=>$this->input->post('aspirasi'));
            $inserted = $this->proker_model->addProker($data);
            if ($inserted === TRUE) {
              $msg['scss_msg'] = "Success Add Proker";
            } 
            else {
              $msg['err_msg'] = "An error occurred. Please try again.";
            }
          }
          $this->session->set_flashdata($msg);
          redirect($this->input->server('HTTP_REFERER'));  
    }
    public function update_proker($id)
    {
        $this->form_validation->set_rules('judul_program', 'Judul', 'trim|xss_clean');
        $this->form_validation->set_rules('jenis_kegiatan', 'Jenis Kegiatan', 'trim|xss_clean');
          if($this->form_validation->run()==false){
            $msg['err_msg'] =  "An error occurred. Please try again.";
          }else{
            $data = array('judul_program'=>$this->input->post('judul_program'),'jenis_kegiatan'=>$this->input->post('jenis_kegiatan'));
            $inserted = $this->proker_model->UpdateProker($id,$data);
            if ($inserted === TRUE) {
              $msg['scss_msg'] = "Success Update Proker";
            } 
            else {
              $msg['err_msg'] = "An error occurred. Please try again.";
            }
          }
          $this->session->set_flashdata($msg);
          redirect($this->input->server('HTTP_REFERER')); 
    }





























    public function kelolaPersonalia($aksi,$ka)
    {
    	$this->form_validation->set_rules('nama','Nama','xss_clean|trim');
		$this->form_validation->set_rules('jabatan','Jabatan','xss_clean|trim');
		$this->form_validation->set_rules('unsur','Unsur','xss_clean|trim');
		$this->form_validation->set_rules('email','Email','xss_clean|trim');
		$this->form_validation->set_rules('telp','No. Telp','xss_clean|trim');
		$this->form_validation->set_rules('fb','Akun Facebook','xss_clean|trim');
		$this->form_validation->set_rules('twit','Akun Twitter','xss_clean|trim');
		$this->form_validation->set_rules('ig','Akun Instagram','xss_clean|trim');

        $id = $this->input->post('id') ;
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $unsur = $this->input->post('unsur');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $fb = $this->input->post('fb');
        $twit = $this->input->post('twit');
        $ig = $this->input->post('ig');
        $is_ka = ($ka == 1) ? 'yes' : 'no';

        if($this->form_validation->run() === FALSE) 
        {
            $msg['err_msg'] = validation_errors();
            $repopulate = array(
                'nama' => $nama,
                'jabatan' => $jabatan,
                'unsur' => $unsur,
                'email' => $email,
                'telp' => $telp,
                'fb' => $fb,
                'twit' => $twit,
                'ig' => $ig
            );
            $this->session->set_flashdata($repopulate);
        } 
        else
        {
			$filename = url_title(time().'-'.$nama, 'dash', TRUE);
			$foto = '';
			$full_path = '';
			if (!empty($_FILES['fotopersonalia']['name'])) {
				// chmod($path = ,0755);
				$config['upload_path'] 		= './assets/images/personalia';
				$config['allowed_types'] 	= 'jpg|jpeg|png';
				$config['max_size'] 		= 2048;
				$config['overwrite']		= FALSE;
                $config['file_name'] 		= $filename;
                $config['max_filename_increment'] = 50;

				$this->upload->initialize($config);
				if ($this->upload->do_upload('fotopersonalia')) {
					$data = $this->upload->data();
					chmod($data['full_path'], 0755);
					$foto .=  $data['file_name'];
					$full_path .= $data['full_path'];
				} else {
					unlink($full_path);
					$msg['err_msg'] = $this->upload->display_errors();
				}
			}
			
        	$dataAdd = array(
                'nama' => $nama,
                'jabatan' => $jabatan,
                'unsur' => $unsur,
                'email' => $email,
                'telp' => $telp,
                'facebook' => $fb,
                'twitter' => $twit,
                'instagram' => $ig,
                'is_ka' => $is_ka,
                'foto' => $foto
            );

            $dataUpdate = array(
                'nama' => $nama,
                'jabatan' => $jabatan,
                'unsur' => $unsur,
                'email' => $email,
                'telp' => $telp,
                'facebook' => $fb,
                'twitter' => $twit,
                'instagram' => $ig,
                'is_ka' => $is_ka
            );

            $data = (!empty($foto)) ? $dataAdd : $dataUpdate;

            $inserted = ($aksi === 'add') ? $this->personalia_model->addPersonalia($data) : $this->personalia_model->updatePersonalia($id, $data);

            if ($inserted === TRUE) {
            	$p = ($is_ka == 'yes') ? 'Komite Audit' : 'Personalia';
                $msg['scss_msg'] = "Success update page ".$p;
            } else {                
                $msg['err_msg'] = "An error occurred. Please try again.";
            }
        }

        $this->session->set_flashdata($msg);
        redirect($this->input->server('HTTP_REFERER'));
    }

    public function kelolaSKP($aksi, $kategori)
    {
    	$this->form_validation->set_rules('nomor','Nomor','xss_clean|trim');
		$this->form_validation->set_rules('tanggal','Tanggal','xss_clean|trim');
		$this->form_validation->set_rules('tentang','Tentang','xss_clean|trim');
		
        $id = $this->input->post('id') ;
        $nomor = $this->input->post('nomor');
        $tanggal = $this->input->post('tanggal');
        $tentang = $this->input->post('tentang');

        if($this->form_validation->run() === FALSE) 
        {
            $msg['err_msg'] = validation_errors();
            $repopulate = array(
                'nomor' => $nomor,
                'tanggal' => $tanggal,
                'tentang' => $tentang
            );
            $this->session->set_flashdata($repopulate);
        } 
        else
        {
			$filename = url_title($kategori.'-'.$nomor.'-'.$tentang, 'dash', TRUE);
			$file = '';
			$full_path = '';
			if (!empty($_FILES['fileskp']['name'])) {
				// chmod($path = ,0755);
				$config['upload_path'] 		= './assets/uploaded_files/skp';
				$config['allowed_types'] 	= 'pdf';
				$config['max_size'] 		= 1024 * 5;
				$config['overwrite']		= FALSE;
                $config['file_name'] 		= $filename;
                $config['max_filename_increment'] = 50;

				$this->upload->initialize($config);
				if ($this->upload->do_upload('fileskp')) {
					$data = $this->upload->data();
					chmod($data['full_path'], 0755);
					$file .=  $data['file_name'];
					$full_path .= $data['full_path'];
				} else {
					unlink($full_path);
					$msg['err_msg'] = $this->upload->display_errors();
				}
			}
			
        	$dataAdd = array(
                'nomor' => $nomor,
                'tanggal' => $tanggal,
                'tentang' => $tentang,
                'file' => $file,
                'kategori' => $kategori
            );

            $dataUpdate = array(
                'nomor' => $nomor,
                'tanggal' => $tanggal,
                'tentang' => $tentang,
                'kategori' => $kategori
            );

            $data = (!empty($file)) ? $dataAdd : $dataUpdate;

            $inserted = ($aksi === 'add') ? $this->skp_model->addSKP($data) : $this->skp_model->updateSKP($id, $data);

            if ($inserted === TRUE) {
                $msg['scss_msg'] = "Success update page $kategori";
            } else {                
                $msg['err_msg'] = "An error occurred. Please try again.";
            }
        }

        $this->session->set_flashdata($msg);
        redirect($this->input->server('HTTP_REFERER'));
    }

    public function kelolaProker($aksi)
    {
        $this->form_validation->set_rules('judul','Judul Program','xss_clean|trim');
        $this->form_validation->set_rules('jenis_kegiatan','Jenis Kegiatan','xss_clean|trim');

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $jenis_kegiatan = $this->input->post('jenis_kegiatan');

        if($this->form_validation->run() === FALSE) 
        {
            $msg['err_msg'] = validation_errors();
            $repopulate = array(
                'judul' => $judul,
                'jenis_kegiatan' => $jenis_kegiatan
            );
            $this->session->set_flashdata($repopulate);
        } 
        else
        {
            $data = array(
                'judul_program' => $judul,
                'jenis_kegiatan' => $jenis_kegiatan
            );

            $inserted = ($aksi === 'add') ? $this->proker_model->addProker($data) : $this->proker_model->updateProker($id, $data);

            if ($inserted === TRUE) {
                $msg['scss_msg'] = "Success update page";
            } else {                
                $msg['err_msg'] = "An error occurred. Please try again.";
            }
        }

        $this->session->set_flashdata($msg);
        redirect($this->input->server('HTTP_REFERER'));
    }

    public function kelolaFK()
    {
        $this->form_validation->set_rules('fungsi','Fungsi','xss_clean|trim');
        $this->form_validation->set_rules('kewenangan','Kewenangan','xss_clean|trim');

        $id = $this->input->post('id');
        $fungsi = $this->input->post('fungsi');
        $kewenangan = $this->input->post('kewenangan');

        if($this->form_validation->run() === FALSE) 
        {
            $msg['err_msg'] = validation_errors();
            $repopulate = array(
                'kewenangan' => $kewenangan,
                'fungsi' => $fungsi
            );
            $this->session->set_flashdata($repopulate);
        } 
        else
        {
            $data = array(
                'fungsi' => $fungsi,
                'kewenangan' => $kewenangan
            );

            $updated = $this->fk_model->update($id, $data);

            if ($updated === TRUE) {
                $msg['scss_msg'] = "Success update page Penjelasan Umum";
            } else {                
                $msg['err_msg'] = "An error occurred. Please try again.";
            }
        }

        $this->session->set_flashdata($msg);
        redirect($this->input->server('HTTP_REFERER'));
    }
    public function ValidationUser(){
        $this->form_validation->set_rules('username','Username','xss_clean|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password','Password','xss_clean|trim');
        $this->form_validation->set_rules('password2','Re-Type Password','xss_clean|trim|matches[password]');
        $this->form_validation->set_rules('role','Role','xss_clean|trim');


        if($this->form_validation->run() == false)
        {
            $msg['err_msg'] = validation_errors();
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        }
        else
        {   
            $return = $this->users_model->AddUser();
            if($return == true){
                $msg['err_msg'] = "Success Add New User";
                $this->session->set_flashdata($msg);
                redirect($this->input->server('HTTP_REFERER')); 
            }else{
                $msg['err_msg'] = "An error occurred. Please try again.";
                $this->session->set_flashdata($msg);
                redirect($this->input->server('HTTP_REFERER')); 
            }
            
        }
    }
    public function VUserUpdate($id){
        $this->form_validation->set_rules('username1','Old Username','xss_clean|trim');
        $this->form_validation->set_rules('username2','New Username','xss_clean|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password','Password','xss_clean|trim');

        if($this->form_validation->run() == false)
        {
            $msg['err_msg'] = validation_errors();
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        }
        else
        {   
            $return = $this->users_model->UserUpdate($id);
            if($return == true){
                $msg['err_msg'] = "Success Update User";
                $this->session->set_flashdata($msg);
                redirect($this->input->server('HTTP_REFERER')); 
            }else{
                $msg['err_msg'] = "An error occurred. Please try again.";
                $this->session->set_flashdata($msg);
                redirect($this->input->server('HTTP_REFERER')); 
            }
            
        }
    }
    public function VpassUpdate($id){
        $this->form_validation->set_rules('password1','Old Username','xss_clean|trim');
        $this->form_validation->set_rules('password2','New Username','xss_clean|trim|matches[password1]');
        
        if($this->form_validation->run()==false){
            $msg['err_msg'] = validation_errors();
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        }else{
            $return = $this->users_model->passUpdate($id);
            if($return == true){
                $msg['err_msg'] = "Success Update Password";
                $this->session->set_flashdata($msg);
                redirect($this->input->server('HTTP_REFERER')); 
            }else{
                $msg['err_msg'] = "An error occurred. Please try again.";
                $this->session->set_flashdata($msg);
                redirect($this->input->server('HTTP_REFERER')); 
            }
        }

    }
}