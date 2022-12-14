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
$route['default_controller'] = 'main_controller';
$route['signup'] = 'main_controller/signup';
$route['login'] = 'main_controller';
$route['homepage'] = 'main_controller/homepage';
$route['history'] = 'main_controller/history';
$route['logout'] = 'main_controller/logout_action';

$route['order'] = 'order';
$route['order_action'] = 'order/order_action';
$route['confirmation'] = 'order/confirmation';
$route['confirmation_action'] = 'order/confirmation_action';
$route['delete_history'] = 'order/delete_history';


$route['detail_transaction'] = 'detail';

$route['login_admin'] = 'admin_controller';
$route['login_admin_action'] = 'admin_controller/login_admin_action';
$route['customer_data'] = 'admin_controller/customer_data';
$route['user_detail_transaction'] = 'admin_controller/detail_admin';
$route['update_action'] = 'admin_controller/update_action';
$route['admin_logout_action'] = 'admin_controller/admin_logout_action';
/* HAPUS ROUTE TESTDB SETELAH PROJECT SELESAI */
$route['testdb'] = 'main_controller/testdb';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
