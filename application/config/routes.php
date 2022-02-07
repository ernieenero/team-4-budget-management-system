<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['(:any)'] = 'user/$1';
// $route['subok'] = 'user/subok'; 
$route['translate_uri_dashes'] = FALSE;
