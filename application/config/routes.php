<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'website';

// setting route for admin
$route['admin'] = 'admin/auth';

$route['admin/dashboard2'] = 'admin/dashboard/index2';

$route['adminlte'] = 'admin/auth';
$route['adminlte/(:any)'] = 'admin/adminlte/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// news ****************
$route['news/add_news'] = 'admin/news/add_news';
$route['news/news_submit_data'] = 'admin/news/news_submit_data';
$route['news/view_news']        = 'admin/news/news_view';
$route['news/edit_news/(:any)'] = 'admin/news/news_edit/$1';
$route['news/news_update_data'] = 'admin/news/news_update_data';
$route['news/news_delete/(:any)'] = 'admin/news/news_delete/$1';






//website
$route['index']  = "website/index";
$route['about']  = "website/about";
$route['blog']  = "website/blog";
$route['analysis']  = "website/analysis";
$route['contact']  = "website/contact";
$route['ebook']  = "website/ebook";
$route['contact']  = "website/contact";
$route['detail']  = "website/detail";
$route['blog-detail']  = "website/blog_detail";
$route['gallery']  = "website/gallery";
$route['offline-program']  = "website/offline_program";
$route['online-program']  = "website/online_program";
$route['recorded-videos']  = "website/recorded_videos";
$route['team']  = "website/team";
$route['testimonial']  = "website/testimonial";
