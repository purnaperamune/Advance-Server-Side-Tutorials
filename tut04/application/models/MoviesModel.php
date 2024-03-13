<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MoviesModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getMoviesByGenre($genre) {
        $this->db->select('*');
        $this->db->from('films');
        $this->db->where('genre', $genre);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function getMoviesByTitle($title) {
        $this->db->select('*');
        $this->db->from('films');
        $this->db->like('title', $title);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function getAllMovies() {
        $query = $this->db->get('films');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
}
