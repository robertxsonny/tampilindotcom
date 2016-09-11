<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		
		$this->load->helper ( 'url_helper' );
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		
		$this->load->library ( 'session' );
		$this->load->model ( 'login_model' );
	}
	public function index() {
		$this->load->view ( 'welcome_message' );
	}
	public function get(){
		echo json_encode($this->login_model->get_all_users());
		return;
	}
    public function get_asdos(){
		echo json_encode($this->login_model->get_all_asdos());
		return;
	}
    public function get_student(){
		echo json_encode($this->login_model->get_all_asdos());
		return;
	}
	public function login() {
		$this->trylogin($this->input->post ( 'username' ), md5($this->input->post ( 'password' )));
	}
	public function autologin(){
		$this->trylogin($this->input->post ( 'username' ), $this->input->post ( 'password' ));
	}
	public function register(){
		$result = $this->login_model->register_user();
		echo json_encode(array(
				'status' => '0',
				'userid' => $result
		));
		return;
	}
	private function trylogin($username, $password){
		$result = $this->login_model->sign_in ( $username, $password );
		if ($result != false) {
			echo json_encode ( $result );
			return;
		} else {
			echo json_encode ( array (
					'status' => '1'
			) );
			return;
		}
	}
}
?>
