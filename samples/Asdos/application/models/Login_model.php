<?php
class Login_model extends CI_Model {
	public function __construct() {
		$this->load->database ();
	}
	public function get_all_users() {
		$this->db->order_by ( 'userid', 'asc' );
		$query = $this->db->get ( 'users_with_types' );
		$result = $query->result_array ();
		if(count($result) > 0){
			for ($i = 0; $i < count($result); $i++) {
				unset($result[$i]['password']);
			}
		}
		return $result;
	}
	public function register_user() {
		$this->load->helper ( 'url' );
		
		$data = array (
				'fullname' => $this->input->post('fullname'),
				'username' => $this->input->post ( 'username' ),
				'password' => md5 ( $this->input->post ( 'password' ) ),
				'institution' => $this->input->post ( 'institusi' ),
				'field' => $this->input->post ( 'field' ),
				'type' => $this->input->post ( 'type' ) 
		);
		$this->db->insert ( 'users', $data );
		$insert_id = $this->db->insert_id ();
		
		return $insert_id;
	}
	public function sign_in($username, $md5) {
		$this->db->where ( 'username', $username );
		$this->db->where ( 'password', $md5 );
		$query = $this->db->get ( 'users_with_types' );
		$result = $query->row_array ();
		if ($result != null) {
			$userdata = array (
					'status' => '0',
					'userid' => $result ['userid'],
					'fullname' => $result['fullname'],
					'username' => $result ['username'],
					'password' => $result ['password'],
					'typeid' => $result ['typeid'],
					'type' => $result ['type'],
					'institution' => $result ['institution'],
					'field' => $result ['field'] 
			);
			return $userdata;
		} else
			return false;
	}
}

?>