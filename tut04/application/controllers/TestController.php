<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {
	public function index()
	{
		$this->load->view('test');
	}

	public function check(){
		$this->load->view('welcome_message');
	}
}
