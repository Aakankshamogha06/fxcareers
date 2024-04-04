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
        $data['detail_view'] = $this->detail_model->online_course(); 
        $data['offline_view'] = $this->detail_model->offline_course(); 
        $data['blog_detail_view'] = $this->blog_detail_model->blog_detail_view(); 
        $data['analysis_detail_view'] = $this->analysis_detail_model->analysis_detail_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index',$data);
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
        $data['analysis_detail_view'] = $this->analysis_detail_model->analysis_detail_view(); 
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/analysis',$data);
        $this->load->view('frontend/include/footer');
    }
    public function analysis_detail()
    {
        $data['analysis_detail'] = $this->analysis_detail_model->analysis_detail_data_nm();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/analysis-detail',$data);
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
    public function contact_submit_data()
    {
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Contact_model->contact_submit_data($data) == true) 
            {
                ?>
                <script type="text/javascript">
                alert("Submit Successfully");

                window.location.href = "<?php echo base_url(); ?>";
                </script>
                <?php
                exit; 
            }
        }
    }
    public function detail()
    {
        $id = $this->uri->segment(2);
        $data['detail_view'] = $this->detail_model->onlineBasic($id);
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/detail',$data);
        $this->load->view('frontend/include/footer');
    }

    public function offline_detail()
    {
        $id = $this->uri->segment(2);
        $data['detail_view'] = $this->detail_model->offlineBasic($id);
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/offline-detail',$data);
        $this->load->view('frontend/include/footer');
    }
    public function ebook()
    {
        $data['ebook_view'] = $this->ebook_model->ebook_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/ebook',$data);
        $this->load->view('frontend/include/footer');
    }
    public function franchise()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/franchise');
        $this->load->view('frontend/include/footer');
    }

    public function franchise_submit_data()
    {
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Franchise_model->franchise_submit_data($data) == true) {
                ?>
                <script type="text/javascript">
                alert("Submit Successfully");

                window.location.href = "<?php echo base_url(); ?>";
                </script>
                <?php
                exit; 
            }
        } 
    }


    public function gallery()
    {
        $data['gallery_view'] = $this->gallery_model->gallery_view(); 
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/gallery',$data);
        $this->load->view('frontend/include/footer');
    }
    public function offline_program()
    {
        $data['detail_view'] = $this->detail_model->offline_course(); 
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/offline-program',$data);
        $this->load->view('frontend/include/footer');
    }
    public function online_program()
    {
        $data['detail_view'] = $this->detail_model->online_course(); 
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/online-program',$data);
        $this->load->view('frontend/include/footer');
    }
    public function recorded_videos()
    {
        $data['detail_view'] = $this->detail_model->detail_view(); 
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/recorded-videos',$data);
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
    public function trade()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trade');
        $this->load->view('frontend/include/footer');
    }
}
?>