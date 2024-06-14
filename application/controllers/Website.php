<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/blog_detail_model', 'blog_detail_model');
        $this->load->model('admin/gallery_model', 'gallery_model');
        $this->load->model('admin/sub_gallery_model', 'sub_gallery_model');
        $this->load->model('admin/Franchise_model', 'Franchise_model');
        $this->load->model('admin/Contact_model', 'Contact_model');
        $this->load->model('admin/curriculum_model', 'curriculum_model');
        $this->load->model('admin/topic_model', 'topic_model');
        $this->load->model('admin/detail_model','detail_model');
        $this->load->model('admin/ebook_model','ebook_model');
        $this->load->model('admin/analysis_detail_model','analysis_detail_model');
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
        $this->load->view('frontend/about-us');
        $this->load->view('frontend/include/footer');
    }
    public function courses()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/courses');
        $this->load->view('frontend/include/footer');
    }
    public function one_to_one_session()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/one-to-one-session');
        $this->load->view('frontend/include/footer');
    }
    public function become_partner()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/become-partner');
        $this->load->view('frontend/include/footer');
    }
    public function trade_idea()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trade-idea');
        $this->load->view('frontend/include/footer');
    }
    public function e_books()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/e-books');
        $this->load->view('frontend/include/footer');
    }
    public function login()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/login');
        $this->load->view('frontend/include/footer');
    }
    public function register()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/register');
        $this->load->view('frontend/include/footer');
    }
    public function course_details()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/course-details');
        $this->load->view('frontend/include/footer');
    }
    public function gallery()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/gallery');
        $this->load->view('frontend/include/footer');
    }
    public function contact()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/include/footer');
    }
    public function blog()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog');
        $this->load->view('frontend/include/footer');
    }
    public function teacher_details()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/teacher-details');
        $this->load->view('frontend/include/footer');
    }
}
?>