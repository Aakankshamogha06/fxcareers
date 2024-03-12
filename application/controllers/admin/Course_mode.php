<?php
defined('BASEPATH') or exit('No direct script access allowed');

class course_mode extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('email');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('admin/course_mode_model', 'course_mode_model');
        $this->load->helper('security');

        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_course_mode()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/course_mode/add_course_mode';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_mode_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->course_mode_model->course_mode_data_submit($data)) {
                    redirect("admin/course_mode/course_mode_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_mode_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['course_mode_view'] = $this->course_mode_model->course_mode_view();
            $data['view'] = 'admin/course_mode/view_course_mode';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_mode_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_course_mode'] = $this->course_mode_model->course_mode_edit($id);
            $data['view'] = 'admin/course_mode/edit_course_mode';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_mode_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->course_mode_model->course_mode_update_data($data)) {
                    redirect("admin/course_mode/course_mode_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_mode_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->course_mode_model->course_mode_delete($id)) {
                redirect("admin/course_mode/course_mode_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
?>
