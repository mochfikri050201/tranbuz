<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// User
$route['default_controller'] = 'welcome';
$route['search'] = 'welcome/search';

// Admin
$route['admin'] = 'admin';
$route['admin/dashboard'] = 'admin/dashboard';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
