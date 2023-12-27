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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] =Blog::class."/login";
$route['checklogin'] =Blog::class."/checklogin";
$route['logout'] =Blog::class."/logout";
$route['change_pass'] = Blog::class."/change_pass";

#USER
$route['save_usr'] =Blog::class."/save_usr";
$route['editusr/(:any)'] =Blog::class."/editusr/$1";
$route['update_usr/(:any)'] =Blog::class."/update_usr/$1";
$route['delete_usr/(:any)'] =Blog::class."/delete_usr/$1";

#ADMIN
$route['dashboard_admin'] =Blog::class."/dashboard_admin";
$route['data_user'] =Blog::class."/data_user";

#BELMAWA
$route['event_belmawa'] =Blog::class."/event_belmawa";
$route['save_bel'] =Blog::class."/save_bel";
$route['update_bel/(:any)'] =Blog::class."/update_bel/$1";
$route['delete_bel/(:any)'] =Blog::class."/delete_bel/$1";
$route['report_belmawa'] =Blog::class."/report_belmawa";
$route['pendaftar_bel/(:any)'] =Blog::class."/pendaftar_bel/$1";
$route['print_bel/(:any)'] =Blog::class."/print_bel/$1";
$route['pdf_bel/(:any)'] =Blog::class."/pdf_bel/$1";

#KOMUNITAS
$route['event_komunitas'] =Blog::class."/event_komunitas";
$route['save_kom'] =Blog::class."/save_kom";
$route['update_kom/(:any)'] =Blog::class."/update_kom/$1";
$route['delete_kom/(:any)'] =Blog::class."/delete_kom/$1";
$route['report_komunitas'] =Blog::class."/report_komunitas";
$route['pendaftar_kom/(:any)'] =Blog::class."/pendaftar_kom/$1";
$route['print_kom/(:any)'] =Blog::class."/print_kom/$1";
$route['pdf_kom/(:any)'] =Blog::class."/pdf_kom/$1";

#WEBINAR
$route['event_webinar'] =Blog::class."/event_webinar";
$route['save_web'] =Blog::class."/save_web";
$route['update_web/(:any)'] =Blog::class."/update_web/$1";
$route['delete_web/(:any)'] =Blog::class."/delete_web/$1";
$route['pendaftar_web/(:any)'] =Blog::class."/pendaftar_web/$1";
$route['print_web/(:any)'] =Blog::class."/print_web/$1";
$route['pdf_web/(:any)'] =Blog::class."/pdf_web/$1";
//$route['countRegistration/(:any)'] =Blog::class."/countRegistration/$1";

#MITRA
$route['data_mitra'] =Blog::class."/data_mitra";
$route['save_mit'] =Blog::class."/save_mit";
$route['update_mit/(:any)'] =Blog::class."/update_mit/$1";
$route['delete_mit/(:any)'] =Blog::class."/delete_mit/$1";

#REPORT 
$route['report_webinar'] =Blog::class."/report_webinar";

$route['coba'] =Blog::class."/coba";

//========================================================================//
$route['dashboard_user'] =Blog::class."/dashboard_user";

$route['belmawa'] =Blog::class."/belmawa";
$route['detail_bel/(:any)'] =Blog::class."/detail_bel/$1";
$route['daftar_bel'] =Blog::class."/daftar_bel";

$route['komunitas'] =Blog::class."/komunitas";
$route['detail_kom/(:any)'] =Blog::class."/detail_kom/$1";
$route['daftar_kom'] =Blog::class."/daftar_kom";

$route['webinar'] =Blog::class."/webinar";
$route['detail_web/(:any)'] =Blog::class."/detail_web/$1";
$route['daftar_web'] =Blog::class."/daftar_web";

$route['webinar_gagal'] =Blog::class."/webinar_gagal";
$route['event_bel'] =Blog::class."/event_bel";
$route['event_kom'] =Blog::class."/event_kom";
$route['event_web'] =Blog::class."/event_web";
$route['profile'] =Blog::class."/profile";

