<?php
class Login_model extends CI_Model {
	public function __construct() {
		$this->load->database ();
	}
	public function get_all_users() {
		$this->db->order_by ( 'userid', 'asc' );
		$query = $this->db->get ( 'users_with_types' );
		$result = $query->result_array ();
		if (count ( $result ) > 0) {
			for($i = 0; $i < count ( $result ); $i ++) {
				unset ( $result [$i] ['password'] );
			}
		}
		return $result;
	}
	public function update_profile_picture($id, $base64){
		$this->db->where ( 'userid', $id );
		$query = $this->db->get ( 'users_with_types' );
		$result = $query->row_array ();
		if($result != null){
			$data = array(
					'lastupdate' => date ( 'Y-m-d H:i:s' )
			);
			if ($base64 != '') { // if there is profpict
				$fp = fopen ( $_SERVER ['DOCUMENT_ROOT'] . '/img/' . $id . '.txt', 'wb' );
				fwrite ( $fp, $base64 );
				fclose ( $fp );
			}
			$this->db->where ( 'id', $id );
			$this->db->update ( 'users', $data );
			
			return json_encode( array (
					'status' => '0'
			) );
		}
		else{
			return json_encode ( array (
					'status' => '1'
			) );
		}
		
	}
	public function get_profile_picture($id) {
		$this->db->where ( 'userid', $id );
		$query = $this->db->get ( 'users_with_types' );
		$result = $query->row_array ();
		if ($result != null) {
			try {
				if(!file_exists($_SERVER ['DOCUMENT_ROOT'] . '/img/' . $id . '.txt')){
					throw new Exception('File: ' . '/img/' . $id . '.txt' . ' does not exist');
				}
				$fp = fopen ( $_SERVER ['DOCUMENT_ROOT'] . '/img/' . $id . '.txt', 'r' );
				$result = array (
						'id' => $id,
						'base64' => fread ( $fp, filesize ( $_SERVER ['DOCUMENT_ROOT'] . '/img/' . $id . '.txt' ) ) 
				);
				return json_encode ( $result );
			} catch ( Exception $e ) {
				return json_encode ( array (
						'status' => '1' 
				) );
			}
		}
	}
    public function get_all_asdos() {
        $this->db->where('typeid', 1);
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
    public function get_all_student() {
        $this->db->where('typeid', 2);
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
				'fullname' => $this->input->post ( 'fullname' ),
				'username' => $this->input->post ( 'username' ),
				'password' => md5 ( $this->input->post ( 'password' ) ),
				'institution' => $this->input->post ( 'institusi' ),
				'field' => $this->input->post ( 'field' ),
				'type' => $this->input->post ( 'type' ),
				'lastupdate' => date ( 'Y-m-d H:i:s' ) 
		);
		$this->db->insert ( 'users', $data );
		$insert_id = $this->db->insert_id ();
		
		// image
		$base64 = $this->input->post ( 'image' );
		if ($base64 != '') { // if there is profpict
			$fp = fopen ( $_SERVER ['DOCUMENT_ROOT'] . '/img/' . $insert_id . '.txt', 'wb' );
			fwrite ( $fp, $base64 );
			fclose ( $fp );
		}
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
					'fullname' => $result ['fullname'],
					'username' => $result ['username'],
					'password' => $result ['password'],
					'typeid' => $result ['typeid'],
					'type' => $result ['type'],
					'institution' => $result ['institution'],
					'field' => $result ['field'] ,
					'lastupdate' => $result['lastupdate']
			);
			return $userdata;
		} else
			return false;
	}
}

?>
