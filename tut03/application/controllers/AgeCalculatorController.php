<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgeCalculatorController extends CI_Controller {
	public function index() {
        $this->load->view('birthday_form');
    }

    public function calculateAge() {
        $dob = $this->input->post('dob');
        
        $today = new DateTime();
        $birthdate = new DateTime($dob);
        $age = $birthdate->diff($today)->y;
        
        $data['age'] = $age;
        $this->load->view('age_result', $data);
    }
}
