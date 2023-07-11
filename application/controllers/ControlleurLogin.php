<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlleurLogin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('ModelsLogin');
	}

	public function index() {
		$this->load->view('login_view');
	}

	public function login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$user = $this->ModelsLogin->getUserByEmail($email);
		if ($user && password_verify($password, $user->password)) {
			$this->session->set_userdata('user_id', $user->id);
			redirect('dashboard');
		} else {
			$data['error'] = 'Email ou mot de passe incorrect.';
			$this->load->view('Login', $data);
		}
	}

	public function logout() {
		$this->session->unset_userdata('user_id');
		redirect('login');
	}

}




?>
