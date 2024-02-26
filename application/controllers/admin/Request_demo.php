<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request_demo extends MY_Controller
{

	function __construct()
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
		$this->load->model('admin/Request_demo_model', 'Request_demo_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_request_demo()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/include/request_demo';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function request_demo_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->Request_demo_model->request_demo_data_submit($data) == true) {

					redirect("index");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function request_demo_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['request_demo_view'] = $this->Request_demo_model->request_demo_view();
					$data['view'] = 'admin/request_demo/view_request_demo';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function request_demo_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_request_demo'] = $this->Request_demo_model->request_demo_edit($id);
					$data['view'] = 'admin/request_demo/edit_request_demo';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function request_demo_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->Request_demo_model->request_demo_update_data($data) == true) {

							redirect("request_demo/view_request_demo");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function request_demo_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->Request_demo_model->request_demo_delete($id) == true) {

							redirect("request_demo/view_request_demo");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>