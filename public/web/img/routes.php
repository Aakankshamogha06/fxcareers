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



// instrument ****************
$route['instrument/add_instrument'] = 'admin/instrument/add_instrument';
$route['instrument/instrument_submit_data'] = 'admin/instrument/instrument_submit_data';
$route['instrument/view_instrument']        = 'admin/instrument/instrument_view';
$route['instrument/edit_instrument/(:any)'] = 'admin/instrument/instrument_edit/$1';
$route['instrument/instrument_update_data'] = 'admin/instrument/instrument_update_data';
$route['instrument/instrument_delete/(:any)'] = 'admin/instrument/instrument_delete/$1';
/////////////////////website////////////////

$route['analysis'] = 'website/analysis';
$route['about'] = 'website/about';
$route['demo'] = 'website/demo';
$route['video'] = 'website/video';
$route['refund_app'] = 'website/refund_app';
$route['privacy_app'] = 'website/privacy_app';
$route['disclaimer_app'] = 'website/disclaimer_app';
$route['termsconditions_app'] = 'website/termsconditions_app';
$route['about_app'] = 'website/about_app';
$route['questions'] = 'website/questions';
$route['career'] = 'website/career';
$route['user_detail'] = 'website/user_detail';
$route['career_details/(:any)'] = 'website/career_details/$1';
$route['blog'] = 'website/blog';
$route['spin_otp'] = 'website/spin_otp';
$route['blog/(:any)'] = 'website/blog_detail/$1';
$route['team_detail/(:any)'] = 'website/team_detail/$1';
$route['event/(:any)'] = 'website/event/$1';
$route['contact'] = 'website/contact';
$route['disclaimer'] = 'website/disclaimer';
$route['refund_policy'] = 'website/refund_policy';
$route['courses'] = 'website/courses';
$route['spin'] = 'website/spin_view';
$route['e_book'] = 'website/e_book';
$route['franchise'] = 'website/franchise';
$route['gallery'] = 'website/gallery';
$route['index'] = 'website/index';
$route['login'] = 'website/login';
$route['offlineBasic/(:any)'] = 'website/offlineBasic/$1';
$route['offlinecourse'] = 'website/offlinecourse';
$route['onlineBasic/(:any)'] = 'website/onlineBasic/$1';
$route['onlinecourse'] = 'website/onlinecourse';
$route['recordedBasic/(:any)'] = 'website/recordedBasic/$1';
$route['recordedcourse'] = 'website/recordedcourse';
$route['ourteam'] = 'website/ourteam';
$route['profile'] = 'website/profile';
$route['booking'] = 'website/booking';
$route['privacy'] = 'website/privacy';
$route['sign'] = 'website/sign';
$route['feedback'] = 'website/feedback';
$route['purchase'] = 'website/purchase';
$route['inquiry'] = 'website/inquiry';
$route['terms'] = 'website/terms';
$route['market_primer'] = 'website/market_primer';
$route['testimonial'] = 'website/testimonial';
$route['Basic_Course'] = 'website/Basic_Course';
$route['Intermediate'] = 'website/Intermediate';
$route['Advance'] = 'website/Advance';
$route['message_view'] = 'website/add_message';
$route['sub_gallery/(:any)'] = 'website/sub_gallery/$1';
$route['student_quiz'] = 'website/student_quiz';
$route['otp'] = 'website/otp';
$route['enterPassword'] = 'website/enterPassword';
$route['change_password'] = 'website/change_password';

/* API */
$route['product'] = 'api/Product';
$route['product/(:any)'] = 'api/Product/$1';
$route['product/(:num)']['PUT'] = 'api/Product/$1';
$route['product/(:num)']['DELETE'] = 'api/Product/$1';
$route['api/register'] = 'api/User/register';
$route['api/login'] = 'api/User/login';
$route['api/logout'] = 'api/User/logout';
$route['reGenToken'] = 'api/Token/reGenToken';
$route['course_api/course_detail_data'] = 'course_api/course_detail_data_get';
$route['course_api/blog_data'] = 'course_api/blog_data_get';
$route['course_api/view_analysis_data'] = 'course_api/view_analysis_data_get';
$route['course_api/analysis_data/(:any)'] = 'course_api/analysis_data_get/$1';
$route['course_api/course_data'] = 'course_apicourse_data_get';
$route['course_api/videos_data'] = 'course_api/videos_data_get';
$route['course_api/ebook_data'] = 'course_api/ebook_data_get';
$route['course_api/batch_data'] = 'course_api/batch_data_get';
$route['course_api/gallery_data'] = 'course_api/gallery_data_get';
$route['course_api/subgallery_data'] = 'course_api/subgallery_data_get';
$route['course_api/video_upload_data'] = 'course_api/video_upload_data_get';
$route['course_api/purchase_course_data'] = 'course_api/purchase_course_data_get';
$route['course_api/topic_data'] = 'course_api/topic_data_get';
$route['course_api/curriculum_data'] = 'course_api/curriculum_data_get';
$route['course_api/purchase_data'] = 'course_api/purchase_data_get';
$route['course_api/study_material_data'] = 'course_api/study_material_data_get';
$route['course_api/webex/webex_data'] = 'course_api/webex_data_get';
$route['course_api/wallet_data'] = 'course_api/wallet_data_get';
$route['course_api/batchwise_data'] = 'course_api/batchwise_data_get';
$route['course_api/batchassigin_data'] = 'course_api/batchassigin_data_get';

$route['course_api/chat_support'] = 'course_api/chatsupport_get';
$route['course_api/chat_data'] = 'course_api/chat_data_get';
$route['course_api/mentorsupport_data'] = 'course_api/mentorsupport_data_get';
$route['course_api/insert_data'] = 'course_api/insert_data_post';
$route['course_api/insert_chat_data'] = 'course_api/insert_chat_data_post';
$route['course_api/insert_mentor_data'] = 'course_api/insert_mentor_data_post';
$route['course_api/insert_wallet_data'] = 'course_api/insert_wallet_data_post';
$route['course_api/update_profile'] = 'course_api/update_profile';
$route['course_api/slider_data'] = 'course_api/slider_data_get';
$route['course_api/analysis_filter'] = 'course_api/analysis_filter';
$route['course_api/language_data'] = 'course_api/language_data_get';
$route['course_api/market_primer_data'] = 'course_api/market_primer_data_get';
$route['course_api/webinar_data'] = 'course_api/webinar_data_get';
$route['course_api/knowledge_hub_data'] = 'course_api/knowledge_hub_data_get';
$route['course_api/filter_data_get_data'] = 'course_api/filter_data_get';
$route['course_api/langwisevideo_data/(:any)'] = 'course_api/langwisevideo_data_get/$1/$2';
$route['course_api/user_data/(:any)'] = 'course_api/user_data_get/$1';
$route['course_api/insert_spin_user_data'] = 'course_api/insert_spin_user_data_post';
$route['course_api/insert_spin_data'] = 'course_api/insert_spin_data_post';
$route['course_api/spin_data'] = 'course_api/spin_data_get';
$route['course_api/verify_otp'] = 'course_api/verify_otp_post';