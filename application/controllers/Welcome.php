<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
  public function index()
	{
		$this->load->view('layout/header', ['title' => 'Home', 'scroll' => true]);
		$this->load->view('welcome_message');
		$this->load->view('layout/footer');
	}
	
	public function search()
	{
		$this->load->view('layout/header', ['title' => 'Search']);
		$this->load->view('search');
		$this->load->view('layout/footer');
	}
}
