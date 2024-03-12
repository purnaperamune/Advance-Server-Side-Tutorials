<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {
	public function index()
	{
		$this->load->view('student_details');
	}

	public function bookInfo() {
		$this->load->view('book_info', array('title' => 'PHP for Experts','author' => 'Dr X'));
	}
}
