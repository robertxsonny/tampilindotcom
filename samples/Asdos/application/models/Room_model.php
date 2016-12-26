<?php
class Room_model extends CI_Model {
	public function __construct() {
		$this->load->database ();
	}
	public function create_room() {
		$this->load->helper ( 'url' );
		
		$data = array (
				'name' => $this->input->post ( 'name' ),
				'user1id' => ( int ) $this->input->post ( 'user1id' ),
				'user2id' => ( int ) $this->input->post ( 'user2id' ) 
		);
		$this->db->insert ( 'rooms', $data );
		$insert_id = $this->db->insert_id ();
		
		return $insert_id;
	}
	public function get_rooms($userid) {
		$this->load->helper ( 'url' );
		$this->db->where ( "`user1id` = " . $userid . " OR `user2id` = " . $userid );
		$query = $this->db->get ( 'rooms_with_users' );
		$res = $query->result_array ();
		
		if ($res != null) {
			if (count ( $res ) > 0) {
				for($i = 0; $i < count ( $res ); $i ++) {
					$item = $res [$i];
					$this->db->where ( 'roomid', $item ['roomid'] );
					$query2 = $this->db->get ( 'messages' );
					$res2 = $query2->result_array ();
					if (count ( $res2 ) > 0)
						$res [$i] ['lastchat'] = $res2 [count ( $res2 ) - 1];
					else
						$res [$i] ['lastchat'] = new stdClass ();
				}
				;
			}
			return $res;
		} else
			return - 1;
	}
	public function search_room() {
		$this->load->helper ( 'url' );
		$user1id = ( int ) $this->input->post ( 'user1id' );
		$user2id = ( int ) $this->input->post ( 'user2id' );
		$this->db->where ( "(`user1id` = " . $user1id . " AND `user2id` = " . $user2id . ") OR (`user1id` = " . $user2id . " AND `user2id` = " . $user1id . ")" );
		
		$query = $this->db->get ( 'rooms_with_users' );
		$res = $query->row_array ();
		$this->db->where ( 'roomid', $res ['roomid'] );
		
		if ($res != null) {
			$query2 = $this->db->get ( 'messages' );
			$res2 = $query2->result_array ();
			if (count ( $res2 ) > 0)
				$res ['lastchat'] = $res2 [count ( $res2 ) - 1];
			else
				$res ['lastchat'] = new stdClass ();
			return $res;
		} 

		else
			return - 1;
	}
	public function delete_room($id) {
		$this->load->helper ( 'url' );
		$this->db->where ( 'id', $id );
		
		return $this->db->delete ( 'rooms' );
	}
}

?>