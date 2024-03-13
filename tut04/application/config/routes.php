<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['movie'] = 'MoviesController/index';
$route['movie/search'] = 'MoviesController/searchByGenre';
$route['movie/search-by-title'] = 'MoviesController/searchByTitle';
$route['movie/all'] = 'MoviesController/allmovies';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
