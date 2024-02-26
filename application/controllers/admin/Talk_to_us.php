<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Talk_to_us extends MY_Controller
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
		$this->load->model('admin/Talk_to_us_model', 'Talk_to_us_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_talk_to_us()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/include/talk_to_us';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function talk_to_us_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->Talk_to_us_model->talk_to_us_data_submit($data) == true) {

					redirect("index");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function talk_to_us_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['talk_to_us_view'] = $this->Talk_to_us_model->talk_to_us_view();
					$data['view'] = 'admin/talk_to_us/view_talk_to_us';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function talk_to_us_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_talk_to_us'] = $this->Talk_to_us_model->talk_to_us_edit($id);
					$data['view'] = 'admin/talk_to_us/edit_talk_to_us';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function talk_to_us_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->Talk_to_us_model->talk_to_us_update_data($data) == true) {

							redirect("talk_to_us/view_talk_to_us");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function talk_to_us_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->Talk_to_us_model->talk_to_us_delete($id) == true) {

							redirect("talk_to_us/view_talk_to_us");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>