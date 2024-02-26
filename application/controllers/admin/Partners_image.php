<?php
defined('BASEPATH') or exit('No direct script access allowed');

class partners_image extends MY_Controller
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
		$this->load->model('admin/partners_image_model', 'partners_image_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_partners_image()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/partners_image/add_partners_image';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function partners_image_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('partners_image')) {
					$uploadData = $this->upload->data();
					$partners_image = $uploadData['file_name'];
				} else {
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->partners_image_model->partners_image_data_submit($data, $partners_image) == true) {

					redirect("admin/partners_image/partners_image_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}



			public function partners_image_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['partners_image_view'] = $this->partners_image_model->partners_image_view();
					$data['view'] = 'admin/partners_image/view_partners_image';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function partners_image_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_partners_image'] = $this->partners_image_model->partners_image_edit($id);
					$data['view'] = 'admin/partners_image/edit_partners_image';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function partners_image_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->partners_image_model->partners_image_update_data($data) == true) {

							redirect("partners_image/view_partners_image");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function partners_image_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {
						$id = $this->uri->segment(4);
						if ($this->partners_image_model->partners_image_delete($id) == true) {
							redirect("partners_image/view_partners_image");
						}
					} else {
						redirect('admin/auth/login');
					}
				}
			}
							?>