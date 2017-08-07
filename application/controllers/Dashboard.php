<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

 	public function __construct()
    {
            parent::__construct();
            $this->load->model('Post_model');
            $this->load->model('User_model');
            $this->load->helper('url_helper');
            $this->load->helper('form');
    		$this->load->library('form_validation');
    		$this->load->library("pagination");
    }

	public function index()
	{
		$data['posts'] = $this->Post_model->getPost();
		$data['users'] = $this->User_model->getUser();
		$data['requests'] = $this->User_model->getRequests();
		$data['cposts'] = count($data['posts']);
		$data['cusers'] = count($data['users']);
		$data['crequests'] = count($data['requests']);
		$page['page'] = 'myposts';
		$this->load->view('layouts/header',$page);
        $this->load->view('Dashboard/dashboard',$data);
        $this->load->view('layouts/footer');
	}


}
