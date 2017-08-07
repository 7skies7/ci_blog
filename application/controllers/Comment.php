<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

 	public function __construct()
    {
            parent::__construct();
            $this->load->model('Post_model');
            $this->load->model('User_model');
            $this->load->model('Comment_model');
            $this->load->helper('url_helper');
            $this->load->helper('form');
    		$this->load->library('form_validation');
    		$this->load->library("pagination");
    	
    		$this->load->helper('custom_helper');
    }

	public function addcomment()
	{
		
		$insert_id = $this->Comment_model->save_comment();
	    $this->session->set_flashdata('success','Comment was added successfully');
	    redirect('post/'.$this->input->post('post_id'));

	}

	


}
