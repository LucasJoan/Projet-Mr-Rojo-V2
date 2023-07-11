<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlleurLogin extends CI_Controller {

	// public function logview()
	// {

	// }

	public function login() // Renommez la méthode en minuscules pour correspondre à la convention de CodeIgniter
	{

	    $this->load->library('session');
	    $this->load->helper('url');
	    $email = $this->input->post('email');
	    $mdp = $this->input->post('mdp');
	    $user = new ModelsLogin($email, $mdp); // Assurez-vous que la classe user est correctement incluse et nommée
	    $user = $user->login();
	    if($Utilisateur != null){
		  $this->session->set_userdata('id_utilisateur', $user->getId_utilisateur());
	    }
	    if($this->session->userdata('id_utilisateur') == null){
		  $this->load->view('completion');
	    }else
	    {
		  redirect('');
	    }
		$this->load->view('Login'); // Assurez-vous que le nom de la vue est correct (login_view.php)

	}
}


?>
