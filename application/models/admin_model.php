<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function get_user(){
        $data = array(
            'username'=>$this->input->post('username'),
            'password'=>md5(md5($this->input->post('password')))
        );
        $query = $this->db->get_where('user',$data);
        if($query->num_rows()>0){
            
            $data = array(
                    'user_id' => $query->row(0)->id,
                    'username'=>  $query->row(0)->username                   
            );
            
            $this->session->set_userdata($data);
            return $query->result();
        }else{
            return false;
        }
    }
    public function is_logged_in(){
        return $this->session->userdata('user_id') != False;
    }
    public function get_post(){
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('category', 'post.category = category.id_category');
        $query = $this->db->get();
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function get_category(){
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();
        if($query->num_rows()>=0)
        {
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function input_post($data){
        $query = $this->db->insert('post',$data);
        if($query==true){
            return true;
        }else{
            return false;
        }
    }
    public function get_post_update($id){
        $where = array(
            'id'=>$id
            );
        $query = $this->db->get_where('post',$where);
        if($query->num_rows()>0)
        {
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function update_post($id,$data){
        $where = array(
            'id'=>$id
            );
        $query = $this->db->update('post',$data,$where);
        if($query==true){
            return true;
        }else{
            return false;
        }
    }
    public function delete_post($id){
        $where = array(
            'id' => $id
            );
        $query = $this->db->delete('post',$where);
        if($query==true){
            return true;
        }else{
            return false;
        }
    }
    
    
}