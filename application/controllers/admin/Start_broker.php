<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Start_broker extends MY_Controller
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
		$this->load->model('admin/Start_broker_model', 'Start_broker_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_start_broker()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/include/start_broker';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function start_broker_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->Start_broker_model->start_broker_data_submit($data) == true) {

					redirect("index");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function start_broker_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['start_broker_view'] = $this->Start_broker_model->start_broker_view();
					$data['view'] = 'admin/start_broker/view_start_broker';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function start_broker_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_start_broker'] = $this->Start_broker_model->start_broker_edit($id);
					$data['view'] = 'admin/start_broker/edit_start_broker';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function start_broker_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->Start_broker_model->start_broker_update_data($data) == true) {

							redirect("start_broker/view_start_broker");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function start_broker_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->Start_broker_model->start_broker_delete($id) == true) {

							redirect("start_broker/view_start_broker");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>