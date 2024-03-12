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

// gallery ****************
$route['gallery/add_gallery'] = 'admin/gallery/add_gallery';
$route['gallery/gallery_submit_data'] = 'admin/gallery/gallery_submit_data';
$route['gallery/view_gallery']        = 'admin/gallery/gallery_view';
$route['gallery/edit_gallery/(:any)'] = 'admin/gallery/gallery_edit/$1';
$route['gallery/gallery_update_data'] = 'admin/gallery/gallery_update_data';
$route['gallery/gallery_delete/(:any)'] = 'admin/gallery/gallery_delete/$1';

// sub_gallery ****************
$route['sub_gallery/add_sub_gallery'] = 'admin/sub_gallery/add_sub_gallery';
$route['sub_gallery/sub_gallery_submit_data'] = 'admin/sub_gallery/sub_gallery_submit_data';
$route['sub_gallery/view_sub_gallery']        = 'admin/sub_gallery/sub_gallery_view';
$route['sub_gallery/edit_sub_gallery/(:any)'] = 'admin/sub_gallery/sub_gallery_edit/$1';
$route['sub_gallery/sub_gallery_update_data'] = 'admin/sub_gallery/sub_gallery_update_data';
$route['sub_gallery/sub_gallery_delete/(:any)'] = 'admin/sub_gallery/sub_gallery_delete/$1';

// seo ****************
$route['seo/add_seo'] = 'admin/seo/add_seo';
$route['seo/seo_submit_data'] = 'admin/seo/seo_submit_data';
$route['seo/view_seo']        = 'admin/seo/seo_view';
$route['seo/edit_seo/(:any)'] = 'admin/seo/seo_edit/$1';
$route['seo/seo_update_data'] = 'admin/seo/seo_update_data';
$route['seo/seo_delete/(:any)'] = 'admin/seo/seo_delete/$1';

// course ****************
$route['course/add_course'] = 'admin/course/add_course';
$route['course/course_submit_data'] = 'admin/course/course_submit_data';
$route['course/view_course']        = 'admin/course/course_view';
$route['course/edit_course/(:any)'] = 'admin/course/course_edit/$1';
$route['course/course_update_data'] = 'admin/course/course_update_data';
$route['course/course_delete/(:any)'] = 'admin/course/course_delete/$1';

// curriculum ****************
$route['curriculum/add_curriculum'] = 'admin/curriculum/add_curriculum';
$route['curriculum/curriculum_submit_data'] = 'admin/curriculum/curriculum_submit_data';
$route['curriculum/view_curriculum']        = 'admin/curriculum/curriculum_view';
$route['curriculum/edit_curriculum/(:any)'] = 'admin/curriculum/curriculum_edit/$1';
$route['curriculum/curriculum_update_data'] = 'admin/curriculum/curriculum_update_data';
$route['curriculum/curriculum_delete/(:any)'] = 'admin/curriculum/curriculum_delete/$1';

// detail ****************
$route['detail/add_detail'] = 'admin/detail/add_detail';
$route['detail/detail_submit_data'] = 'admin/detail/detail_submit_data';
$route['detail/view_detail']        = 'admin/detail/detail_view';
$route['detail/edit_detail/(:any)'] = 'admin/detail/detail_edit/$1';
$route['detail/detail_update_data'] = 'admin/detail/detail_update_data';
$route['detail/detail_delete/(:any)'] = 'admin/detail/detail_delete/$1';

// ebook ****************
$route['ebook/add_ebook'] = 'admin/ebook/add_ebook';
$route['ebook/ebook_submit_data'] = 'admin/ebook/ebook_submit_data';
$route['ebook/view_ebook']        = 'admin/ebook/ebook_view';
$route['ebook/edit_ebook/(:any)'] = 'admin/ebook/ebook_edit/$1';
$route['ebook/ebook_update_data'] = 'admin/ebook/ebook_update_data';
$route['ebook/ebook_delete/(:any)'] = 'admin/ebook/ebook_delete/$1';

// topic ****************
$route['topic/add_topic'] = 'admin/topic/add_topic';
$route['topic/topic_submit_data'] = 'admin/topic/topic_submit_data';
$route['topic/view_topic']        = 'admin/topic/topic_view';
$route['topic/edit_topic/(:any)'] = 'admin/topic/topic_edit/$1';
$route['topic/topic_update_data'] = 'admin/topic/topic_update_data';
$route['topic/topic_delete/(:any)'] = 'admin/topic/topic_delete/$1';

  // course_category ****************
$route['course_category/add_course_category'] = 'admin/course_category/add_course_category';
$route['course_category/course_category_submit_data'] = 'admin/course_category/course_category_submit_data';
$route['course_category/view_course_category']        = 'admin/course_category/course_category_view';
$route['course_category/edit_course_category/(:any)'] = 'admin/course_category/course_category_edit/$1';
$route['course_category/course_category_update_data'] = 'admin/course_category/course_category_update_data';
$route['course_category/course_category_delete/(:any)'] = 'admin/course_category/course_category_delete/$1';

  // course_mode ****************
$route['course_mode/add_course_mode'] = 'admin/course_mode/add_course_mode';
$route['course_mode/course_mode_submit_data'] = 'admin/course_mode/course_mode_submit_data';
$route['course_mode/view_course_mode']        = 'admin/course_mode/course_mode_view';
$route['course_mode/edit_course_mode/(:any)'] = 'admin/course_mode/course_mode_edit/$1';
$route['course_mode/course_mode_update_data'] = 'admin/course_mode/course_mode_update_data';
$route['course_mode/course_mode_delete/(:any)'] = 'admin/course_mode/course_mode_delete/$1';

  // course_language ****************
$route['course_language/add_course_language'] = 'admin/course_language/add_course_language';
$route['course_language/course_language_submit_data'] = 'admin/course_language/course_language_submit_data';
$route['course_language/view_course_language']        = 'admin/course_language/course_language_view';
$route['course_language/edit_course_language/(:any)'] = 'admin/course_language/course_language_edit/$1';
$route['course_language/course_language_update_data'] = 'admin/course_language/course_language_update_data';
$route['course_language/course_language_delete/(:any)'] = 'admin/course_language/course_language_delete/$1';

  // course_category ****************
// $route['course_category/add_course_category'] = 'admin/course_category/add_course_category';
// $route['course_category/course_category_submit_data'] = 'admin/course_category/course_category_submit_data';
// $route['course_category/view_course_category']        = 'admin/course_category/course_category_view';
// $route['course_category/edit_course_category/(:any)'] = 'admin/course_category/course_category_edit/$1';
// $route['course_category/course_category_update_data'] = 'admin/course_category/course_category_update_data';
// $route['course_category/course_category_delete/(:any)'] = 'admin/course_category/course_category_delete/$1';



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
