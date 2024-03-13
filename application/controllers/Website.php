<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/blog_detail_model', 'blog_detail_model');

        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index');
        $this->load->view('frontend/include/footer');
    }

    public function about()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/about');
        $this->load->view('frontend/include/footer');
    }
    public function analysis()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/analysis');
        $this->load->view('frontend/include/footer');
    }
    public function blog_detail()
    {
        $data['blog_detail'] = $this->blog_detail_model->blog_detail_data_nm();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog-detail',$data);
        $this->load->view('frontend/include/footer');
    }
    public function blog()
    {
        $data['blog_detail_view'] = $this->blog_detail_model->blog_detail_view();        
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog',$data);
        $this->load->view('frontend/include/footer');
    }
    public function contact()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/include/footer');
    }
    public function detail()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/detail');
        $this->load->view('frontend/include/footer');
    }
    public function ebook()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/ebook');
        $this->load->view('frontend/include/footer');
    }
    public function franchise()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/franchise');
        $this->load->view('frontend/include/footer');
    }
    public function gallery()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/gallery');
        $this->load->view('frontend/include/footer');
    }
    public function offline_program()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/offline-program');
        $this->load->view('frontend/include/footer');
    }
    public function online_program()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/online-program');
        $this->load->view('frontend/include/footer');
    }
    public function recorded_videos()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/recorded-videos');
        $this->load->view('frontend/include/footer');
    }
    public function team()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/team');
        $this->load->view('frontend/include/footer');
    }
    public function testimonial()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/testimonial');
        $this->load->view('frontend/include/footer');
    }
}
?>