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
		if($this->input->post('personalia') != NUll){
        	$data =array(
			'username'=>$this->input->post('username'),
			'password'=>md5(md5($this->input->post('password'))),
			'role'=>$this->input->post('role'),
			'id_personalia'=>$this->input->post('personalia')
			);
        }else{
        	$data2 = array(
			'nama'=>$this->input->post('nama')
			);
			$this->db->insert('personalia', $data2);
			$insert_id = $this->db->insert_id();

        	$data =array(
			'username'=>$this->input->post('username'),
			'password'=>md5(md5($this->input->post('password'))),
			'role'=>$this->input->post('role'),
			'id_personalia'=>$insert_id
			);
			
        }
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
	public function getPersonalia(){
		return $this->db->query('SELECT A.* FROM personalia A where !EXISTS (SELECT id_personalia FROM user B WHERE B.id_personalia=A.id) AND lower(A.unsur)=lower("MaHasISwa")')->result();
	}
	public function get_update($id){
		$where = array(
			'id'=>$id
		);
		return $this->db->get_where('personalia',$where)->result();
	}
	public function UpdateStatus($id){
		$where = array(
			'id'=>$id
		);
		$data = array(
			'status'=>$this->input->post('status')
		);
		$query = $this->db->update('personalia',$data,$where);	
		return $query ? True : false;
	}

}

/* End of file Users_Model.php */
/* Location: ./application/models/Users_Model.php */