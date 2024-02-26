<?php
	class User_model extends CI_Model{

		public function add_user($data){
			$this->db->insert('users', $data);
			return true;
		}

		public function get_all_users(){
			$query = $this->db->query("SELECT *,(SELECT role_name FROM `role` where id=is_admin) as role_name  FROM `users`;");
			return $result = $query->result_array();
		}

		public function get_user_by_id($id){
			$query = $this->db->get_where('users', array('id' => $id));
			return $result = $query->row_array();
		}

		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('users', $data);
			return true;
		}


		public function role_fetch()
    {
        
        $role_data = $this->db->query("SELECT * FROM `role`");

        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
			
        } else {
            return false;
        }
    }

	}

?>