<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Rute untuk halaman depan
$route['home'] = 'home/index';

// Rute untuk halaman admin
$route['admin'] = 'admin/dashboard';
$route['admin/login'] = 'admin/login';
$route['admin/authenticate'] = 'admin/authenticate';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/logout'] = 'admin/logout';

// Rute untuk CRUD Metode
$route['admin/method'] = 'admin/method';
$route['admin/method/add'] = 'admin/method/add';
$route['admin/method/edit/(:num)'] = 'admin/method/edit/$1';
$route['admin/method/delete/(:num)'] = 'admin/method/delete/$1';

// Rute untuk CRUD Pertanyaan
$route['admin/question/index'] = 'admin/question/index';
$route['admin/question/add'] = 'admin/question/add';
$route['admin/question/edit/(:num)'] = 'admin/question/edit/$1';
$route['admin/question/delete/(:num)'] = 'admin/question/delete/$1';

// Rute untuk Pengujian
$route['test/(:num)'] = 'test/index/$1';
$route['test/submit/(:num)'] = 'test/submit/$1';
$route['test/result/(:num)'] = 'test/result/$1';