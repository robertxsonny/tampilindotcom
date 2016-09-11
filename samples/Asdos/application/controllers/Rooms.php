<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Rooms extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		
		$this->load->helper ( 'url_helper' );
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		
		$this->load->library ( 'session' );
		$this->load->model ( 'room_model' );
	}
	public function index() {
		$this->load->view ( 'welcome_message' );
	}
	public function get(){
		$id = $this->input->post('userid');
		$result = $this->room_model->get_rooms($id);
		if($result != -1){
			echo json_encode($result);
		}
		else{
			echo json_encode ( array (
					'status' => '1'
			) );
		}
		
		return;
	}
	public function search() {
		$result = $this->room_model->search_room ();
		if ($result != - 1){
			$result['status'] = '0';
			echo json_encode ($result);
		}
			
		else
			echo json_encode ( array (
					'status' => '1' 
			) );
		return;
	}
	public function create() {
		$result = $this->room_model->create_room ();
		echo json_encode ( array (
				'status' => '0',
				'roomid' => $result 
		) );
		return;
	}
	public function delete() {
		$id = $this->input->post ( 'id' );
		$result = $this->room_model->delete_room ( $id );
		if ($result === true) {
			echo json_encode ( array (
					'status' => '0' 
			) );
		} else {
			echo json_encode ( array (
					'status' => '1' 
			) );
		}
		
		return;
	}
}
?>