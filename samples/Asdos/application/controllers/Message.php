<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Message extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		
		$this->load->helper ( 'url_helper' );
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		
		$this->load->library ( 'session' );
		$this->load->model ( 'message_model' );
	}
	public function index() {
		$this->load->view ( 'welcome_message' );
	}
	public function get() {
		$result = $this->message_model->get_all_messages ();
		if ($result != - 1)
			echo json_encode ($result);
		else
			echo json_encode ( array (
					'status' => '1' 
			) );
		return;
	}
	public function create() {
		$result = $this->message_model->create_message ();
		echo json_encode ( array (
				'status' => '0',
				'messageid' => $result 
		) );
		return;
	}
	public function delete() {
		$id = $this->input->post ( 'id' );
		$result = $this->message_model->delete_message ( $id );
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