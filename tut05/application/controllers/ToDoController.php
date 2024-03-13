<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ToDoController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('ToDoModel');
    }

    public function index() {
        $this->load->view('todo');
    }

    public function add() {
        $action_title = $this->input->post('action_title');

        $this->ToDoModel->add($action_title);

        redirect('todo'); 
    }

}
