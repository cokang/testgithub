<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login Extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url'); 

	}

	public function index() {

		//$this->load->view('login');
		$this->load->view('login');

	}

	public function login() {

		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url'); 
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|md5');
		if($this->form_validation->run()==false){
			$this->index();
		}else{
			$user_session=array(
				'Username'      => $this->input->post('username'),
				'Password'      => $this->input->post('password'),
				'is_logged_in'  => 1
			);
			$this->session->set_userdata('userlogin',$user_session);
			$this->admin();
		}

	}

	public function admin() {
		$this->load->view('admin');

	}

}
?>