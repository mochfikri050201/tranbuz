<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct()
   {
      parent::__construct();   
      $this->load->helper('url');
   }

  public function index()
	{
    redirect(base_url('admin/dashboard'));
	}

  public function dashboard()
	{
    $this->loadView('admin/home');
	}

  private function loadView($view) {
    $this->load->view('layout/admin/header');
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/topbar');
		$this->load->view($view);
  }
}
