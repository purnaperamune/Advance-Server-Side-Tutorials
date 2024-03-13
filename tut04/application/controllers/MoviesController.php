<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MoviesController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MoviesModel');
    }

    public function index()
    {
        $this->load->view('search_movie');
    }

    public function search()
    {
        $genre = $this->input->post('genre');
        $data['movies'] = $this->MoviesModel->getMoviesByGenre($genre);
        $this->load->view('movie_result', $data);
    }

    public function allmovies()
    {
        $data['movies'] = $this->MoviesModel->getAllMovies();
        $this->load->view('movie_result', $data);
    }
}
