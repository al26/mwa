<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	public function getPost($slug = FALSE, $author)
	{	
		$where = array(
			'post.slug' => $slug,
			'user.role' => $author
		);
		$this->db->where($where);
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->join('user', 'post.author = user.id', 'inner');
		$this->db->join('personalia', 'user.id_personalia = personalia.id', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at, post.author,user.role, personalia.nama');
		$this->db->group_by('post.id');
		$this->db->order_by('created_at', 'desc');
		return $this->db->get('post')->row();
	}

	public function getPostCount($category, $author)
	{
		$where = array(
			'category.name' => $category,
			'user.role' => $author
		);

		if ($category !== 'semua berita') {	
			$this->db->where($where);
		} else {
			$this->db->where('user.role', $author);
		}
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->join('user', 'post.author = user.id', 'inner');
		$this->db->join('personalia', 'user.id_personalia = personalia.id', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at, user.role, personalia.nama');
		$this->db->order_by('created_at', 'desc');
		$this->db->from('post');

		return $this->db->count_all_results();
	}

	public function getPostPagination($num, $page, $category, $author) 
	{
		if($page > 1){
	      $offset = ($page-1)*$num;
	    } else{
	      $offset = 0;
	    }

	    $where = array(
			'category.name' => $category,
			'user.role' => $author
		);

		if ($category !== 'semua berita') {	
			$this->db->where($where);
		} else {
			$this->db->where('user.role', $author);
		}
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->join('user', 'post.author = user.id', 'inner');
		$this->db->join('personalia', 'user.id_personalia = personalia.id', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at, user.role, personalia.nama');
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
	public function doUpdatePost($id,$data){
		$where = array(
			'id'=>$id
		);
		$query = $this->db->update('post',$data,$where);
		return $query;
	}
	public function postUpdate($id){
		$where = array(
			'id'=>$id
		);
		return $this->db->get_where('post',$where)->row();
	}
	public function getDetail($id){
		$where = array(
			'id'=>$id
		);
		return $this->db->get_where('post',$where)->row();
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

	public function getPostCountCari($key, $role)
	{ 
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->join('user', 'post.author = user.id', 'inner');
		$this->db->join('personalia', 'user.id_personalia = personalia.id', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at, user.role, personalia.nama');
		$this->db->order_by('created_at', 'desc');
		$this->db->from('post');
		$this->db->where("(user.role = '$role' AND title LIKE '%$key%')");
		return $this->db->count_all_results();
	}

	public function getPostPaginationCari($num, $page, $key, $role) 
	{
		if($page > 1){
	      $offset = ($page-1)*$num;
	    } else{
	      $offset = 0;
	    }

	    $this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->join('user', 'post.author = user.id', 'inner');
		$this->db->join('personalia', 'user.id_personalia = personalia.id', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at, user.role, personalia.nama');
		$this->db->order_by('created_at', 'desc');
		$this->db->where("(user.role = '$role' AND title LIKE '%$key%')");
		return $this->db->get('post', $num, $offset)->result();
	}

	public function getPostCountByAuthor($author)
	{ 
		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->join('user', 'post.author = user.id', 'left');
		$this->db->join('personalia', 'user.id_personalia = personalia.id', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at');
		$this->db->order_by('created_at', 'desc');
		$this->db->from('post');
		$this->db->where("personalia.nama", $author);
		return $this->db->count_all_results();
	}

	public function getPostByAuthor($author, $page, $num){
		if($page > 1){
	      $offset = ($page-1)*$num;
	    } else{
	      $offset = 0;
	    }

		$this->db->join('category', 'FIND_IN_SET(category.id, category) != 0', 'left');
		$this->db->join('user', 'post.author = user.id', 'left');
		$this->db->join('personalia', 'user.id_personalia = personalia.id', 'left');
		$this->db->select('post.hash, post.title, post.slug, post.body, GROUP_CONCAT(category.name) AS category, post.image, post.created_at, personalia.nama AS author');
		$this->db->group_by('post.id');
		$this->db->order_by('created_at', 'desc');
		$this->db->where("personalia.nama", $author);
		return $this->db->get('post', $num, $offset)->result();
	}
}

/* End of file Post.php */
/* Location: ./application/models/Post.php */ ?>