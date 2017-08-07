<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

 	public function __construct()
    {
            parent::__construct();
            $this->load->model('User_model');
            $this->load->helper('url_helper');
            $this->load->helper('form');
    		$this->load->library('form_validation');
    		$this->load->library("pagination");
    		$this->load->library('session');

    }

	public function register()
	{
		

		$this->load->view('layouts/header');
        $this->load->view('users/register');
        $this->load->view('layouts/footer');
	}

	public function login()
	{
		

		$this->load->view('layouts/header');
        $this->load->view('users/login');
        $this->load->view('layouts/footer');
	}

	public function create()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('email', 'Email address', 'required|is_unique[ci_users.email]',
        array(
                'is_unique'     => 'This %s already exists.'
        ));
	    $this->form_validation->set_rules('password', 'Password', 'required');
	    $this->form_validation->set_rules('role', 'Role', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('layouts/header');
	        $this->load->view('users/register');
	        $this->load->view('layouts/footer');

	    }
	    else
	    {
       		
	     	$insert_id = $this->User_model->save_user();
	     	$this->session->set_flashdata('success','You have been successfully registered.Pleas log in to check your account');
	        redirect('register');

	    }
	}

	public function store()
	{

	    $this->form_validation->set_rules('email', 'Email address', 'required|is_unique[ci_users.email]');
	    $this->form_validation->set_rules('password', 'Password', 'required');


	    if ($this->form_validation->run() === FALSE)
	    {
	        if ($user = $this->User_model->login())
	        {
	        	foreach ($user as $key => $value)
	        	{	

	        		if ($key == 'id' || $key == 'name' || $key == 'email' || $key == 'role_id' || $key == 'content_activate')
	        		{
	        			$data[$key] = $value;
	        		}
	        	}
	        	$data['logged_in'] = TRUE;
	        	$this->session->set_userdata($data);
	        	if($this->session->userdata('role_id') == 1)
	        	{
	        		redirect('dashboard');
	        	}
	        	redirect('posts');
	        }

	    }
	    else
	    {
	     	
	     	$this->session->set_flashdata('error','Please enter correct credentials.');
	        redirect('login');

	    }
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('login');
	}

	public function delete($id)
	{
		
		$this->User_model->delete_user($id);
		redirect('dashboard');
	}
	
	public function access($id)
	{
		$this->session->set_flashdata('success','User has been assigned the content creator role successfully.');
		$this->User_model->access_user($id);
		redirect('dashboard');
	}

}
