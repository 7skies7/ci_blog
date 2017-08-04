<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 	public function __construct()
    {
            parent::__construct();
            $this->load->model('news_model');
            $this->load->helper('url_helper');
    }

	public function index()
	{
		$this->load->model('Welcome_model');
		$news = $this->Welcome_model->getNews();
		print_r($news);
	}
}
