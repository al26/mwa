<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Blog extends CI_Controller {

		public function makePagination($url, $per_page, $total)
		{
			$this->load->library('pagination');
			$config['base_url'] = $url;
	        $config['per_page'] = $per_page;
	        $config['total_rows'] = $total;
	        $config['uri_segment'] = 4;
	        $config['num_links'] = 3;
	        $config['use_page_numbers'] = TRUE;
	        $config['full_tag_open'] = "<div class=\"ct-pagination\"><ul class=\"pagination\">";
	        $config['full_tag_close'] = '</ul></div>';
	        $config['first_link'] = "<span aria-hidden=\"true\">First</span>";
	        $config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
	        $config['last_link'] = "<span aria-hidden=\"true\">Last</span>";
	        $config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
	        $config['next_link'] = "<span aria-hidden=\"true\">»</span>";
	        $config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
	        $config['prev_link'] = "<span aria-hidden=\"true\">«</span>";
	        $config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = "<li class=\"active\"><a href=\"#\">";
	        $config['cur_tag_close'] = '</a></li>';
	        $this->pagination->initialize($config);
	        return $this->pagination->create_links();
		}
	
		public function index($category, $page = NULL)
		{
			$data['profil'] = $this->personalia_model->getCurrentUM();

			// for pagination
			//$category_url = url_title($category,'dash',true);
			$url = base_url('berita/kategori/').$category;
			$per_page = 5;
			$total = $this->post_model->getPostCount(str_replace("-", " ", $category));

	        $data['pagination'] = $this->makePagination($url, $per_page, $total);
	        $data['recent_posts'] = $this->post_model->getPostPagination($per_page, $page, str_replace("-", " ", $category));
	        $data['body'] = 'berita';
			//$page['title'] = "Berita | ".ucwords(str_replace("-", " ", $category));
			$data['page'] = (object)array("title"=> "Berita | ".ucwords(str_replace("-", " ", $category)));
			$data['view'] = 'blog_all';
			$data['categories'] = $this->category_model->getCategories();
			$this->load->view('templates/header', $data);	
			$this->load->view('frontend/blog/blog_layout', $data);	
			$this->load->view('templates/footer', $data);	
		}

		public function view($slug)
		{
			$data['profil'] = $this->personalia_model->getCurrentUM();

			$data['categories'] = $this->category_model->getCategories();
			$data['single_post'] = $this->post_model->getPost($slug);
			$data['view'] = 'blog_single';
	  		$page['title'] = ucwords(preg_replace("/-/"," ", $slug));
	  		$data['page'] = (object)$page;
	  		$data['body'] = 'berita';
	  		

			 $this->load->view('templates/header', $data);	
			 $this->load->view('frontend/blog/blog_layout', $data);	
			 $this->load->view('templates/footer', $data);
		}
		
		public function showSearchResult($key, $page=NULL)
		{
			$data['profil'] = $this->personalia_model->getCurrentUM();

			// for pagination
			// $category = 'semua-berita';
			$url = base_url('berita/cari/').$key;
			$per_page = 5;
			$total = $this->post_model->getPostCountCari(str_replace("-", " ", $key));

	        $data['pagination'] = $this->makePagination($url, $per_page, $total);
	        $data['recent_posts'] = $this->post_model->getPostPaginationCari($per_page, $page, str_replace("-", " ", $key));
	        $data['body'] = 'berita';
			//$page['title'] = "Berita | ".ucwords(str_replace("-", " ", $category));
			$data['page'] = (object)array("title"=> "Berita | Cari Berita");
			$data['view'] = 'blog_all';
			$data['categories'] = $this->category_model->getCategories();
			$this->load->view('templates/header', $data);	
			$this->load->view('frontend/blog/blog_layout', $data);	
			$this->load->view('templates/footer', $data);
		}

		public function proses_cari()
		{
			$data['profil'] = $this->personalia_model->getCurrentUM();
			
			$key = $this->input->post('cari');
			$key = url_title($key,'dash',TRUE);
			if(empty($key)){
				redirect('berita/kategori/semua-berita');
			}
			redirect('berita/cari/'.$key);
		}

	}
	
	/* End of file Blog.php */
	/* Location: ./application/controllers/Blog.php */