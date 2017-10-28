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
##############################For Post Only################################# 
    public function view_post(){
        $data['sidebar']="admin/sidebar";
        $data['data']=$this->post_model->getAllPosts();
        $this->load->view('admin/view_post',$data);
    }
    public function add_post(){
        $data['sidebar']="admin/sidebar";
        $data['categories'] = $this->category_model->getCategories();
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

    public function get_edit_post($id=null){
        $data['sidebar']="admin/sidebar";
        $data['data_post']=$this->post_model->postUpdate($id);
        $data['categories']=$this->category_model->getCategories();
        $this->load->view('admin/edit_post',$data);
    }
    public function verif_edit_post($id){
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
            $data['error_input']=validation_errors();
            $data['sidebar']="admin/sidebar";
            $data['data_post']=$this->admin_model->get_post_update($id);
            $data['data']=$this->admin_model->get_category();
            $this->load->view('admin/edit_post',$data);
        }else{
            $query = $this->admin_model->update_post($id,$data_post);
            if($query==true){
                
                $data['message']="post berhasil diupdate";
                $data['sidebar']="admin/sidebar";
                $data['data']=$this->admin_model->get_post();
                $this->load->view('admin/view_post',$data);
            }else{
                $data['message']="post Gagal diupdate";
                $data['sidebar']="admin/sidebar";
                $data['data']=$this->admin_model->get_post();
                $this->load->view('admin/view_post',$data);
            }
        }
    }
    public function get_detail_post($id=null){
        $data['sidebar']="admin/sidebar";
        $data['data_post']=$this->post_model->getDetail($id);
        $this->load->view('admin/detail_post',$data);
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
##################################################End OF Post######################################################################
##################################################Begin Category###################################################################
    public function view_Category(){
        $data['sidebar']="admin/sidebar";
        $data['data']=$this->category_model->getCategories();
        $this->load->view('admin/view_category',$data);
    }
    public function Delete_Kategori($id){
        $delete = $this->category_model->Delete_Kategori($id);
        if ($delete == true) {
            $msg['scss_msg'] = "Your Data Already Delete, Well Done..";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        
        } else {
            $msg['err_msg'] = "Sorry your Data Failed t Update,..";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        
        }
        
    }
    

##################################################End Category#####################################################################
    public function view_file(){}
    public function hapusSKPeraturan($id){
    $delete = $this->skp_model->deleteSKP($id);
        if($delete==true){
            $msg['scss_msg'] = "Your Data Already Updated, Well Done..";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        }else{
            $msg['err_msg'] = "Sorry your Data Failed t Update,..";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
        }
    }
    
        function seoUrl($string) {
            $string = preg_replace("/[\s_]/", "-", $string);
            return $string;
        }
    
   
#################################################Begin of Message#################################################################
public function message(){
    $data['count'] = $this->messages_model->countMessage();
    $data['sidebar']="admin/sidebar";
    $data['sidebar_email']="admin/sidebar-email";
    $data['tabel']="admin/message/inbox-messages";
    $data['data']=$this->messages_model->getAllMessage();
    $this->load->view('admin/mailbox',$data);
}
public function Drafts_message(){
    $data['count'] = $this->messages_model->countMessage();
    $data['sidebar']="admin/sidebar";
    $data['sidebar_email']="admin/sidebar-email";
    $data['tabel']="admin/message/draft-message";
    $data['data']=$this->messages_model->getAllDraftMessage();
    $this->load->view('admin/mailbox',$data);
}
public function Trash_message(){
    $data['count'] = $this->messages_model->countMessage();
    $data['sidebar']="admin/sidebar";
    $data['sidebar_email']="admin/sidebar-email";
    $data['tabel']="admin/message/trash-message";
    $data['data']=$this->messages_model->getTrashMessage();
    $this->load->view('admin/mailbox',$data);   
}
public function read_message($id){
    $data['count'] = $this->messages_model->countMessage();
    $data['sidebar']="admin/sidebar";
    $data['sidebar_email']="admin/sidebar-email";
    $data['tabel']="admin/message/read-mail";
    $data['data']=$this->messages_model->getAllMessage_read($id);
    $this->load->view('admin/mailbox',$data);  
}
public function read_message_hapus($id){
    $data['count'] = $this->messages_model->countMessage();
    $data['sidebar']="admin/sidebar";
    $data['sidebar_email']="admin/sidebar-email";
    $data['tabel']="admin/message/read-delete";
    $data['data']=$this->messages_model->getAllMessage_read($id);
    $this->load->view('admin/mailbox',$data);  
}
public function Save($id){
    $query = $this->messages_model->SentToDraft($id);
    if($query==true){
        redirect('Drafts');  
    }else{
        redirect('Inbox');
    }
}
public function sendTrash($id){
    $query = $this->messages_model->goTrash($id);
    if($query==true){
        redirect('Trash');  
    }else{
        redirect('Trash');
    }  
}
public function permanetDelete($id){
    
    $query = $this->messages_model->deleteTrash($id);
    if($query==true){
        redirect('Trash');  
    }else{
        redirect('Trash');
    } 
}
###################################################End of Message################################################################# 
###################################################Begin of Comment################################################################# 
public function comment(){
    $data['sidebar']="admin/sidebar";
    $data['sidebar_comment']="admin/sidebar-comment";
    $data['tabel']="admin/comment/inbox-comment";
    $this->load->view('admin/comment',$data);
}
public function inbox_comment(){
    $data['sidebar']="admin/sidebar";
    $data['sidebar_comment']="admin/sidebar-comment";
    $data['tabel']="admin/comment/inbox-comment";
    $data['data']=$this->comment_model->get_comment();
    $this->load->view('admin/comment',$data);
}
public function read_comment($id){
    $data['sidebar']="admin/sidebar";
    $data['sidebar_comment']="admin/sidebar-comment";
    $data['tabel']="admin/comment/read-comment";
    $data['data']=$this->comment_model->getAllComment_read($id);
    $this->load->view('admin/comment',$data); 
}
public function reply_comment($hash){
    $data['sidebar']="admin/sidebar";
    $data['sidebar_comment']="admin/sidebar-comment";
    $data['tabel']="admin/comment/reply-comment";
    $data['data']=$this->comment_model->getDataComment_reply($hash);
    $this->load->view('admin/comment',$data); 
}
public function AllReply(){
    $data['sidebar']="admin/sidebar";
    $data['sidebar_comment']="admin/sidebar-comment";
    $data['tabel']="admin/comment/All-Reply-comment";
    $data['data']=$this->comment_model->getCommentReply();
    // var_dump($data['data']);
    // die();
    $this->load->view('admin/comment',$data);   
}
public function ViewReply($id){
    $data['sidebar']="admin/sidebar";
    $data['sidebar_comment']="admin/sidebar-comment";
    $data['tabel']="admin/comment/view-Reply-comment";
    $data['data']=$this->comment_model->getDataReplyComment($id);
    $this->load->view('admin/comment',$data); 
}
public function Delete_comment($hash){
    $query = $this->comment_model->goTrash($hash);
    if($query==true){
        redirect('TrashComment');  
    }else{
        redirect('TrashComment');
    }  
}
public function Trash_Comment(){
    $data['sidebar']="admin/sidebar";
    $data['sidebar_comment']="admin/sidebar-comment";
    $data['tabel']="admin/comment/All-Trash-comment";
    $data['data']=$this->comment_model->getCommentTrash();
    $this->load->view('admin/comment',$data); 
}
public function DeleteReply($id){
    $query = $this->comment_model->goDeleteReply($id);
    if($query==true){
        redirect('AllReply');  
    }else{
        redirect('AllReply');
    }
}
public function UpdateReply($id){
    $data['sidebar']="admin/sidebar";
    $data['sidebar_comment']="admin/sidebar-comment";
    $data['tabel']="admin/comment/update-reply-comment";
    $data['data']=$this->comment_model->getDataReplyUpdate($id);
    $this->load->view('admin/comment',$data); 
}
public function Delete_Permanently($hash){
    $query = $this->comment_model->goDeleteComment($hash);
    if($query==true){
        redirect('TrashComment');  
    }else{
        redirect('TrashComment');
    }
}
public function Restorage_Comment($hash){
    $data = array(
        'hapus'=>0
    );
    $query = $this->comment_model->goRestorageComment($data,$hash);
    if($query==true){
        redirect('inbox-comment');  
    }else{
        redirect('inbox-comment');
    }
}

###################################################End of Comment################################################################# 
public function filesize(){
    $this->load->view('admin/filesize');
}

##### Begin Pages #####
public function edit_page($id)
{
    $data['sidebar']="admin/sidebar";
    $data['data'] = $this->pages_model->getPage($id); 
    $data['personalia'] = $this->personalia_model->getAllPersonaliaMWA();
    $data['ka'] = $this->personalia_model->getAllPersonaliaKA();
    $data['sk'] = $this->skp_model->getAllSK();
    $data['peraturan'] = $this->skp_model->getAllPeraturan();
    $data['proker'] = $this->proker_model->getAllProker();
    $data['fk'] = $this->fk_model->get();
    $this->load->view('admin/pages/h', $data);
    $this->load->view('admin/pages/'.$id, $data);
    $this->load->view('admin/pages/f', $data);
}
##########################Begin Hapus Proker###########################################
    public function Hapus_PK($id)
    {
        $query = $this->proker_model->Hapus_PK($id);
        if ($query == true) {
            $msg['scss_msg'] = "Success Delete Proker";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER'));  
        } else {
            $msg['err_msg'] = "An error occurred. Please try again.";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER'));  
        }
        
    }




















































    public function delete_personalia($id)
    {
        $deleted = $this->personalia_model->deletePersonalia($id);
        if ($deleted === TRUE) {
            $msg['scss_msg'] = "Success delete data";
        } else {                
            $msg['err_msg'] = "An error occurred. Please try again.";
        }

        $this->session->set_flashdata($msg);
        redirect($this->input->server('HTTP_REFERER'));
    }

}