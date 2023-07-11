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
        // Récupérez les données du formulaire de connexion
        $email = $this->input->post('email');
        $password = $this->input->post('mdp');

        // Vérifiez les informations d'identification de l'utilisateur
        $user = $this->ModelsLogin->getUserByEmail($email);

        if ($user && password_verify($mdp, $user->mdp)) {
            // Les informations d'identification sont valides, connectez l'utilisateur
            $this->session->set_userdata('user_id', $user->id);
            redirect('Completion'); // Redirigez vers la page de tableau de bord ou une autre page appropriée
        } else {
            // Les informations d'identification sont invalides, affichez un message d'erreur
            $data['error'] = 'Email ou mot de passe incorrect.';
            $this->load->view('login', $data);

        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('login'); // Redirigez vers la page de connexion après la déconnexion
    }

}

?>
