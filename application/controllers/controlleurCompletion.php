<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlleurCompletion extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('insert_Completion');
		
		// Récupérer les valeurs des champs
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('Prenom');
		$mail = $this->input->post('email');
		$pass = $this->input->post('mdp');

		if (!empty($nom)) {
			$data = array(
				'nom' => $nom,
				'prenom' => $prenom,
				'email' => $mail,
				'mdp' => $pass,
			);
			
			$this->InsertUtilisateur->insert_Utilisateur($data);
		}
		
		$this->load->view('index');
	}

}
