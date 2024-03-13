<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ToDoController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('ToDoModel');
    
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    
        if (!isset($_SESSION['user_id'])) {
            $_SESSION['user_id'] = uniqid();
            log_message('debug', 'Generated and stored user ID: ' . $_SESSION['user_id']);
        } else {
            log_message('debug', 'User ID already exists in session: ' . $_SESSION['user_id']);
        }
    }

    public function index() {
        $user_id = $_SESSION['user_id'];
        $data['actions'] = $this->ToDoModel->getToDos($user_id);
        $this->load->view('todo', $data);
    }

    public function add() {
        $action_title = $this->input->post('action_title');
        $user_id = $_SESSION['user_id'];
        $this->ToDoModel->add($action_title, $user_id);
        redirect('todo'); 
    }

}
