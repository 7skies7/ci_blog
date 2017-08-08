<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

 	public function __construct()
    {
            parent::__construct();
            $this->load->model('Post_model');
            $this->load->model('User_model');
            $this->load->helper('url_helper');
            $this->load->helper('form');
    		$this->load->library('form_validation');
    		$this->load->library("pagination");
    	
    		$this->load->helper('custom_helper');
    }

	public function index()
	{
		
		$config = $this->paginationConfig();
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data['page'] = 'allposts';
        $data['posts'] = $this->Post_model->fetch_Post($config["per_page"], $page);
		$data['links'] = $this->pagination->create_links();
		$this->load->view('layouts/header',$data);
        $this->load->view('post/post',$data);
        $this->load->view('layouts/footer');
	}

	public function show($id)
	{
		
		$data['post'] = $this->Post_model->getPost($id);
		$data['comments'] = $this->Post_model->getPostComments($id);
		$data['title'] = $data['post']['post_title'];
		$this->load->view('layouts/header');
        $this->load->view('post/show',$data);
        $this->load->view('layouts/footer');
	}

	public function create()
	{

		$data['title'] = 'Create Post';
		
	    $this->form_validation->set_rules('post_title', 'Post Title', 'required');
	    $this->form_validation->set_rules('post_desc', 'Post Description', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('layouts/header');
	        $this->load->view('post/create',$data);
	        $this->load->view('layouts/footer');

	    }
	    else
	    {
	    	if(isset($_FILES) && $_FILES['post_image']['name'] != '')
	    	{
		    	$config['upload_path']          = './uploads/';
	            $config['allowed_types']        = 'gif|jpg|png';
	            $new_name = time().$_FILES["post_image"]['name'];
				$config['file_name'] = $new_name;

	            $this->load->library('upload', $config);
		     	
		     	if ( ! $this->upload->do_upload('post_image'))
	            {
	                    $error = array('error' => $this->upload->display_errors());
	                    $this->load->view('post/create', $error);
	            }
	            $imagename = $this->upload->data('file_name');
	        }else{
	        	$imagename = 'default.jpg';
	        }
       
	     	$insert_id = $this->Post_model->save_post($imagename);
	        redirect('post/show/'.$insert_id);

	    }
	}

	public function edit($id)
	{
		
    	$data['post'] = $this->Post_model->getPost($id);
		$data['title'] = 'Create Post';
		
		
	    $this->form_validation->set_rules('post_title', 'Post Title', 'required');
	    $this->form_validation->set_rules('post_desc', 'Post Description', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('layouts/header');
	        $this->load->view('post/edit',$data);
	        $this->load->view('layouts/footer');

	    }
	    else
	    {
	    	if(isset($_FILES) && $_FILES['post_image']['name'] != '')
	    	{
		    	$config['upload_path']          = './uploads/';
	            $config['allowed_types']        = 'gif|jpg|png';
	            $new_name = time().$_FILES["post_image"]['name'];
				$config['file_name'] = $new_name;

	            $this->load->library('upload', $config);
		     	
		     	if ( ! $this->upload->do_upload('post_image'))
	            {
	                    $error = array('error' => $this->upload->display_errors());
	                    $this->load->view('post/edit/'.$id, $error);
	            }
	            $imagename = $this->upload->data('file_name');
	        }else{
	        	$imagename = $this->input->post('post_image');
	        }

	     	$update = $this->Post_model->update_post($id,$imagename);
	        redirect('post/show/'.$id);

	    }
	}

	public function delete($id)
	{
		
		$this->Post_model->delete_post($id);
		redirect('posts');
	}

	public function myposts()
	{
		$data['posts'] = $this->Post_model->getMyPost($this->session->userdata('id'));
		$data['title'] = 'My Posts';
		$page['page'] = 'myposts';
		$this->load->view('layouts/header',$page);
        $this->load->view('post/ccreatorposts',$data);
        $this->load->view('layouts/footer',$page);
	}

	public function paginationConfig()
	{
		$posts = $this->Post_model->getPost();
		$config = array();
        $config["base_url"] = base_url().'/posts';
        $config["total_rows"] = count($posts);
        $config["per_page"] = 6;
        $config["uri_segment"] = 2;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';

        return $config;
	}


}
