<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlleurLogin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('ModelsLogin');
	}

	public function index() {
		$this->load->view('login_view');
	}

	public function login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$utilisateur = $this->ModelsLogin->getUserByEmail($email);
		if ($utilisateur && password_verify($mdp, $utilisateur->mdp)) {
			$this->session->set_userdata('id_utilisateur', $utilisateur->id_utilisateur);
			redirect('Login');
		  } else {
			$data['error'] = 'Email ou mot de passe incorrect.';
			$this->load->view('Login', $data);
		  }
		  
	}

	public function logout() {
		$this->session->unset_userdata('id_utilisateur');
		redirect('login');
	}

}

?>
