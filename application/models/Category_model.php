<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function getCategories()
	{
		return $this->db->get('category')->result();
	}

}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */