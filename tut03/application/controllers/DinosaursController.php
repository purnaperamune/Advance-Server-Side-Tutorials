<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DinosaursController extends CI_Controller {
    public function index() {
        // Load the view containing links to geological periods
        $this->load->view('periods');
    }

    public function getinfo($period) {
        // Load the model to retrieve information about the specified period
        $this->load->model('Dinosaurs');
        
        // Retrieve information about the specified period from the model
        $period_info = $this->Dinosaurs->get_period_info($period);
        
        // Pass the retrieved information to the view
        $data['period_info'] = $period_info;
        
        // Load the view to display information about the specified period
        $this->load->view('period_info', $data);
    }
}
?>
