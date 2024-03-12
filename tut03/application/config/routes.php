<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['form'] = 'AgeCalculatorController/index';
$route['age'] = 'AgeCalculatorController/calculateAge';

$route['Dinosaurs/periods'] = 'DinosaursController/index';
$route['Dinosaurs/getinfo/(:any)'] = 'DinosaursController/getinfo/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
