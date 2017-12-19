<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	public function getPost($slug = FALSE)
	{	
		$this->db->where('post.slug', $slug);
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at');
		$this->db->group_by('post.id');
		$this->db->order_by('created_at', 'desc');
		return $this->db->get('post')->row();
	}

	public function getPostCount($category)
	{
		if ($category !== 'semua-berita') {	
			if ($category == 'tanpa-kategori') {			
				$this->db->where('category.name', null);
			} else {
				$this->db->where('category.name', $category);
			}
			
		} 
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at');
		$this->db->order_by('created_at', 'desc');
		$this->db->from('post');

		return $this->db->count_all_results();
	}

	public function getPostPagination($num, $page, $category) 
	{
		if($page > 1){
	      $offset = ($page-1)*$num;
	    } else{
	      $offset = 0;
	    }

	    if ($category !== 'semua-berita') {	
			if ($category == 'tanpa-kategori') {			
				$this->db->where('category.name', null);
			} else {
				$this->db->where('category.name', $category);
			}
			
		} 
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at');
		$this->db->group_by('post.id');
		$this->db->order_by('created_at', 'desc');
		return $this->db->get('post', $num, $offset)->result();
	}

	public function getAllPosts()
	{
		$this->db->select('post.id, post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at');
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->group_by('post.id');
		$this->db->order_by('created_at', 'desc');
		return $this->db->get('post')->result();	
	}

	public function createPost($data)
	{
		$query = $this->db->insert('post', $data);
		return $query ? TRUE : FALSE;
	}

	public function updatePost($id)
	{
		$this->db->where('post.id', $id);
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at');
		$this->db->group_by('post.id');
		$this->db->order_by('created_at', 'desc');
		return $this->db->get('post')->row();
	}

	public function deletePost($id)
	{	
		$this->db->where('post.id', $id);
		$query = $this->db->delete('post');
		return $query ? TRUE : FALSE;
	}
	// public function getHashPost($slug){
	// 	$where = array(
	// 		'slug'=>$slug
	// 	);
	// 	$this->db->select('hash');
	// 	$query = $this->db->get_where('post',$where);
	// 	if ($query->num_rows()>=0) {
	// 		return $query->result_array();
	// 	} else {
	// 		return false;
	// 	}
	//	}
	public function getCommentPosh($hash){
		
		$where = array(
			'hash_post' => $hash,
			'hapus'=>0
		);
		return $this->db->get_where('comment',$where)->result_array();
		
		// $this->db->where('comment.hash_post',$h);
		// $this->db->join('reply', 'reply.id_comment = comment.hash', 'left');
		
	}
	public function getReplyPost($hash){
		$where = array(
			'hash_post'=>$hash
		);
		$query = $this->db->get('comment',$where)->row();
		return $query->hash;
	}
	public function getReplyComment($hash2){
		$where = array(
			'id_comment' =>$hash2
		);
		return $this->db->get_where('reply', $where)->result_array();
	} 
}

/* End of file Post.php */
/* Location: ./application/models/Post.php */ ?>