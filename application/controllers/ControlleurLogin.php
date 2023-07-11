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

	public function login() {
		$email = $this->input->post('email');
		$mdp = $this->input->post('mdp');

		$user = $this->ModelsLogin->get_user_by_username($email);

		if ($user != null) {
			$this->session->set_userdata('id_utilisateur', $user->id_utilisateur);
		}

		if ($this->session->userdata('id_utilisateur') == null) {
			$this->load->view('completion');
		} else {
			redirect('');
		}
	}
}
