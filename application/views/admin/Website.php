<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/Blog_detail_model', 'Blog_detail_model');
        $this->load->model('admin/Blog_category_model', 'Blog_category_model');
        $this->load->model('admin/Blog_model', 'Blog_model');
        $this->load->model('admin/User_model', 'User_model');
        $this->load->model('admin/Slider_model','Slider_model');
        $this->load->model('admin/Talk_to_us_model','Talk_to_us_model');
        $this->load->model('admin/Pricing_model','Pricing_model');
        $this->load->model('admin/Pricing_features_model','Pricing_features_model');


        $this->load->helper('url');
    }

    public function index()
    {
        // $data['header_data'] = $this->Menu_model->header_data();
        $data['slider_view'] = $this->Slider_model->slider_view();
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header',$data);
        $this->load->view('frontend/index',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    public function about_us()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/about-us');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }

    public function careers()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/careers');
        $this->load->view('frontend/includes/footer');
    }

    public function careers_detail()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/careers_detail');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    
    public function admin_consultation()
    {
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/admin-consultation');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/footer');
    }

    public function contact_us()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/contact_us');
        $this->load->view('frontend/includes/footer');
    }

    public function why_choose_us()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/why_choose_us');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    public function our_teams()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/our-teams');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }

    public function blog_details()
    {
        $data['blog_detail_view'] = $this->Blog_detail_model->blog_detail_data_nm();
        // $data['blog_detail_view'] = $this->Blog_detail_model->blog_detail_view();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/blog_details',$data);
        $this->load->view('frontend/includes/footer');
    }

    public function portfolio()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/portfolio');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    
    public function blog()
    {
        $data['blog_detail_view'] = $this->Blog_detail_model->blog_detail_view();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/blog',$data);
        $this->load->view('frontend/includes/footer');
    }
    
    public function liquidity_solution()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/liquidity-solution');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    public function start_broker()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/start-broker');
        $this->load->view('frontend/includes/footer');
    }

    public function app_development()
    {
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/app-development');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/footer');
    }

    public function crm_api()
    {
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/crm-api');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }

    public function digital_marketing()
    {
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/digital-marketing');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }

    public function disclaimer()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/disclaimer');
        $this->load->view('frontend/includes/footer');
    }

    public function free_service()
    {
        // $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/free-service');
        // ]$this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    public function graphic_design()
    {
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/graphic-design');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }

    public function personal_advisory()
    {
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/personal-advisory');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }

    public function prime_special()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/prime-special');
        $this->load->view('frontend/includes/footer');
    }
    public function prime_vip()
    {
        // $this->load->view('frontend/includes/header');
        $this->load->view('frontend/prime-vip');
        
        // $this->load->view('frontend/includes/footer');
    }
    public function prime_vvip()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/prime-vvip');
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    public function privacy_policy()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/privacy-policy');
        $this->load->view('frontend/includes/footer');
    }
    public function refund_cancellation()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/refund-cancellation');
        $this->load->view('frontend/includes/footer');
    }
    public function terms_conditions()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/terms-conditions');
        $this->load->view('frontend/includes/footer');
    }
    public function ui_ux()
    {
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/ui-ux');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    public function web_development()
    {
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/web-development');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    public function white_label()
    {   
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/white-label');
        $this->load->view('frontend/includes/dark_pricing',$data);
        $this->load->view('frontend/includes/talk_to_us');
        $this->load->view('frontend/includes/footer');
    }
    public function ya_wealth()
    {
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/ya-wealth');
        $this->load->view('frontend/includes/footer');
    }
    public function dark_pricing()
    {   
        $data['header_data'] = $this->Pricing_model->header_data();
        $this->load->view('frontend/includes/dark_pricing',$data);  
    }
}
?>