<?php
class menu_model extends CI_Model
{


	public function menu_data_submit($data)
	{
		$data = [
			'menu_name' => $data['menu_name'],
		];
		if ($this->db->insert('menu', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function menu_view()
	{
		$result = $this->db->query("SELECT * FROM `menu`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function menu_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('menu');
	}


	public function menu_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'menu_name' => $data['menu_name'],

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('menu', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function menu_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `menu` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `roles`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}
	public function header_data()
	{
		$this->load->model('menu_model');
		$this->load->model('sub_menu_model');
	
		$data['menus'] = $this->menu_model->menu_view();
		$data['submenus'] = $this->sub_menu_model->sub_menu_view();
	
		return $data;
	}
	
	
}
?>