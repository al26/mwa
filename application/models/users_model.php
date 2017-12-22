<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {

	public function getUsers(){
		return $this->db->get('user')->result();
	}
	public function hapusUser($id){
		$where = array(
			'id'=>$id
		);
		$return = $this->db->delete('user',$where);	
		return $return ? TRUE : FALSE;
	}
	public function AddUser(){
		$data =array(
			'username'=>$this->input->post('username'),
			'password'=>md5(md5($this->input->post('password'))),
			'role'=>$this->input->post('role')
		);
		$query = $this->db->insert('user', $data);
		return $query ? TRUE : FALSE;
	}
	public function get_username($id){
		$where = array(
			'id'=>$id
		);
		return $this->db->get_where('user',$where)->result();	
	}
	public function UserUpdate($id){
		$where = array(
			'id'=>$id,
			'password'=>md5(md5($this->input->post('password')))
		);
		// die(var_dump($where));
		$data = array(
			'username'=>$this->input->post('username2')
		);
		$query = $this->db->update('user',$data,$where);
		return $query ? TRUE : FALSE;
	}
	public function passUpdate($id){
		$where = array(
			'id'=>$id
		);
		$data = array(
			'password'=>md5(md5($this->input->post('password1')))
		);
		//die(var_dump($data));
		$query = $this->db->update('user',$data,$where);
		return $query ? TRUE : FALSE;
	}

}

/* End of file Users_Model.php */
/* Location: ./application/models/Users_Model.php */