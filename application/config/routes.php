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


// blog ****************
$route['blog/add_blog'] = 'admin/blog/add_blog';
$route['blog/blog_submit_data'] = 'admin/blog/blog_submit_data';
$route['blog/view_blog']        = 'admin/blog/blog_view';
$route['blog/edit_blog/(:any)'] = 'admin/blog/blog_edit/$1';
$route['blog/blog_update_data'] = 'admin/blog/blog_update_data';
$route['blog/blog_delete/(:any)'] = 'admin/blog/blog_delete/$1';

// blog_category ****************
$route['blog_category/add_blog_category'] = 'admin/blog_category/add_blog_category';
$route['blog_category/blog_category_submit_data'] = 'admin/blog_category/blog_category_submit_data';
$route['blog_category/view_blog_category']        = 'admin/blog_category/blog_category_view';
$route['blog_category/edit_blog_category/(:any)'] = 'admin/blog_category/blog_category_edit/$1';
$route['blog_category/blog_category_update_data'] = 'admin/blog_category/blog_category_update_data';
$route['blog_category/blog_category_delete/(:any)'] = 'admin/blog_category/blog_category_delete/$1';

// blog_detail ****************
$route['blog_detail/add_blog_detail'] = 'admin/blog_detail/add_blog_detail';
$route['blog_detail/blog_detail_submit_data'] = 'admin/blog_detail/blog_detail_submit_data';
$route['blog_detail/view_blog_detail']        = 'admin/blog_detail/blog_detail_view';
$route['blog_detail/edit_blog_detail/(:any)'] = 'admin/blog_detail/blog_detail_edit/$1';
$route['blog_detail/blog_detail_update_data'] = 'admin/blog_detail/blog_detail_update_data';
$route['blog_detail/blog_detail_delete/(:any)'] = 'admin/blog_detail/blog_detail_delete/$1';

// slider ****************
$route['slider/add_slider'] = 'admin/slider/add_slider';
$route['slider/slider_submit_data'] = 'admin/slider/slider_submit_data';
$route['slider/view_slider']        = 'admin/slider/slider_view';
$route['slider/edit_slider/(:any)'] = 'admin/slider/slider_edit/$1';
$route['slider/slider_update_data'] = 'admin/slider/slider_update_data';
$route['slider/slider_delete/(:any)'] = 'admin/slider/slider_delete/$1';

// talk_to_us ****************
$route['talk_to_us/add_talk_to_us'] = 'admin/talk_to_us/add_talk_to_us';
$route['talk_to_us/talk_to_us_submit_data'] = 'admin/talk_to_us/talk_to_us_submit_data';
$route['talk_to_us/view_talk_to_us']        = 'admin/talk_to_us/talk_to_us_view';
$route['talk_to_us/edit_talk_to_us/(:any)'] = 'admin/talk_to_us/talk_to_us_edit/$1';
$route['talk_to_us/talk_to_us_update_data'] = 'admin/talk_to_us/talk_to_us_update_data';
$route['talk_to_us/talk_to_us_delete/(:any)'] = 'admin/talk_to_us/talk_to_us_delete/$1';

// menu ****************
$route['menu/add_menu'] = 'admin/menu/add_menu';
$route['menu/menu_submit_data'] = 'admin/menu/menu_submit_data';
$route['menu/view_menu']        = 'admin/menu/menu_view';
$route['menu/edit_menu/(:any)'] = 'admin/menu/menu_edit/$1';
$route['menu/menu_update_data'] = 'admin/menu/menu_update_data';
$route['menu/menu_delete/(:any)'] = 'admin/menu/menu_delete/$1';

// sub_menu ****************
$route['sub_menu/add_sub_menu'] = 'admin/sub_menu/add_sub_menu';
$route['sub_menu/sub_menu_submit_data'] = 'admin/sub_menu/sub_menu_submit_data';
$route['sub_menu/view_sub_menu']        = 'admin/sub_menu/sub_menu_view';
$route['sub_menu/edit_sub_menu/(:any)'] = 'admin/sub_menu/sub_menu_edit/$1';
$route['sub_menu/sub_menu_update_data'] = 'admin/sub_menu/sub_menu_update_data';
$route['sub_menu/sub_menu_delete/(:any)'] = 'admin/sub_menu/sub_menu_delete/$1';

// partners ****************
$route['partners/add_partners'] = 'admin/partners/add_partners';
$route['partners/partners_submit_data'] = 'admin/partners/partners_submit_data';
$route['partners/view_partners']        = 'admin/partners/partners_view';
$route['partners/edit_partners/(:any)'] = 'admin/partners/partners_edit/$1';
$route['partners/partners_update_data'] = 'admin/partners/partners_update_data';
$route['partners/partners_delete/(:any)'] = 'admin/partners/partners_delete/$1';

// partners_image ****************
$route['partners_image/add_partners_image'] = 'admin/partners_image/add_partners_image';
$route['partners_image/partners_image_submit_data'] = 'admin/partners_image/partners_image_submit_data';
$route['partners_image/view_partners_image']        = 'admin/partners_image/partners_image_view';
$route['partners_image/edit_partners_image/(:any)'] = 'admin/partners_image/partners_image_edit/$1';
$route['partners_image/partners_image_update_data'] = 'admin/partners_image/partners_image_update_data';
$route['partners_image/partners_image_delete/(:any)'] = 'admin/partners_image/partners_image_delete/$1';

// start_broker ****************
$route['start_broker/add_start_broker'] = 'admin/start_broker/add_start_broker';
$route['start_broker/start_broker_submit_data'] = 'admin/start_broker/start_broker_submit_data';
$route['start_broker/view_start_broker']        = 'admin/start_broker/start_broker_view';
$route['start_broker/edit_start_broker/(:any)'] = 'admin/start_broker/start_broker_edit/$1';
$route['start_broker/start_broker_update_data'] = 'admin/start_broker/start_broker_update_data';
$route['start_broker/start_broker_delete/(:any)'] = 'admin/start_broker/start_broker_delete/$1';

// contact_us ****************
$route['contact_us/add_contact_us'] = 'admin/contact_us/add_contact_us';
$route['contact_us/contact_us_submit_data'] = 'admin/contact_us/contact_us_submit_data';
$route['contact_us/view_contact_us']        = 'admin/contact_us/contact_us_view';
$route['contact_us/edit_contact_us/(:any)'] = 'admin/contact_us/contact_us_edit/$1';
$route['contact_us/contact_us_update_data'] = 'admin/contact_us/contact_us_update_data';
$route['contact_us/contact_us_delete/(:any)'] = 'admin/contact_us/contact_us_delete/$1';

// seo ****************
$route['seo/add_seo'] = 'admin/seo/add_seo';
$route['seo/seo_submit_data'] = 'admin/seo/seo_submit_data';
$route['seo/view_seo']        = 'admin/seo/seo_view';
$route['seo/edit_seo/(:any)'] = 'admin/seo/seo_edit/$1';
$route['seo/seo_update_data'] = 'admin/seo/seo_update_data';
$route['seo/seo_delete/(:any)'] = 'admin/seo/seo_delete/$1';

// page ****************
$route['page/add_page'] = 'admin/page/add_page';
$route['page/page_submit_data'] = 'admin/page/page_submit_data';
$route['page/view_page']        = 'admin/page/page_view';
$route['page/edit_page/(:any)'] = 'admin/page/page_edit/$1';
$route['page/page_update_data'] = 'admin/page/page_update_data';
$route['page/page_delete/(:any)'] = 'admin/page/page_delete/$1';















//website
$route['index'] = 'website/index';
$route['about'] = 'website/about';
$route['analysis'] = 'website/analysis';



//api
$route['api/register'] = 'api/User/register';
$route['api/login'] = 'api/User/login';
$route['api/logout'] = 'api/User/logout';