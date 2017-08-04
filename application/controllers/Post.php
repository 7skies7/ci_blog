<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

 	public function __construct()
    {
            parent::__construct();
            $this->load->model('Post_model');
            $this->load->helper('url_helper');
    }

	public function index()
	{
		
		$data['posts'] = $this->Post_model->getPost();
		
		$this->load->view('layouts/header');
        $this->load->view('post/index',$data);
        $this->load->view('layouts/footer');
	}

	public function show($id)
	{
		
		$data['post'] = $this->Post_model->getPost($id);
		$data['title'] = $data['post']['post_title'];
		$this->load->view('layouts/header');
        $this->load->view('post/show',$data);
        $this->load->view('layouts/footer');
	}

	public function create()
	{
		$this->load->helper('form');
    	$this->load->library('form_validation');
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
	     	$insert_id = $this->Post_model->save_post();
	        redirect('post/show/'.$insert_id);

	    }
	}

	public function edit($id)
	{
		$this->load->helper('form');
    	$this->load->library('form_validation');
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
	     	$update = $this->Post_model->update_post($id);
	        redirect('post/show/'.$id);

	    }
	}

	public function delete($id)
	{
		
		$this->Post_model->delete_post($id);
		redirect('posts');
	}

}
