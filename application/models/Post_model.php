<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	public function getPost($slug = FALSE)
	{	
		$this->db->join('category', 'post.category = category.id', 'left');
		return $this->db->get_where('post', array('slug' => $slug ))->row();
	}

	public function getPostCount($category)
	{
		if ($category !== 'semua-berita') {
			$this->db->where('category', $category);
			$this->db->from('post');
		} else {
			$this->db->from('post');
		}
		
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
	    	$this->db->order_by('created_at', 'desc');
			$this->db->join('category', 'post.category = category.id', 'left');
			$this->db->where('category.name', $category);
		} else {
			$this->db->order_by('created_at', 'desc');
			$this->db->join('category', 'post.category = category.id', 'left');
		}

		return $this->db->get('post', $num, $offset)->result();
	}

	public function createPost()
	{

	}
}

/* End of file Post.php */
/* Location: ./application/models/Post.php */ ?>