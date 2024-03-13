<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ToDoModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function add($action_title, $user_id = 0) {
        $data = array(
            'user_id' => $user_id,
            'action_title' => $action_title
        );

        $this->db->insert('todo_actions', $data);
        return $this->db->insert_id(); // Return the ID of the inserted record
    }

    // Add other methods for fetching To-Do actions from the database as needed
}
