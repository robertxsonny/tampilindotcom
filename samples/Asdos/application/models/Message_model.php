<?php
class Message_model extends CI_Model {
	public function __construct() {
		$this->load->database ();
	}
	public function create_message() {
		$this->load->helper ( 'url' );
		
		$data = array (
				'roomid' => $this->input->post ( 'roomid' ),
				'message' =>  $this->input->post ( 'message' ),
				'sender' => ( int ) $this->input->post ( 'sender' ),
				'time' => $this->input->post('time')
		);
		$this->db->insert ( 'messages', $data );
		$insert_id = $this->db->insert_id ();
		
		return $insert_id;
	}
	public function get_all_messages()	 {
		$this->load->helper ( 'url' );
		$this->db->where ( 'roomid', ( int ) $this->input->post ( 'roomid' ) );
		
		$query = $this->db->get ( 'messages' );
		$res = $query->result_array ();
		
		if ($res != null)
			return $res;
		else return -1;
	}
	public function delete_message($id) {
		$this->load->helper ( 'url' );
		$this->db->where ( 'id', $id );
		
		return $this->db->delete ( 'messages' );
	}
}

?>