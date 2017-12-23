<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function getAllPosts()
	{
		$where = array(
			'id_user'=>$this->session->userdata('user_id')
		);
		$this->db->select('post.id, post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at');
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->group_by('post.id');
		$this->db->order_by('created_at', 'desc');
		return $this->db->get_where('post',$where)->result();
	}
	public function getCategories()
	{
		// $return = $this->db->get('category')->result();
		
		 return $this->db->get('category')->result();
	}

}

