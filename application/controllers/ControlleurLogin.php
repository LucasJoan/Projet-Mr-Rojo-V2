<?php
class ControlleurLogin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelsLogin');
    }

    public function login() {
        $this->load->view('Login');
    }

    public function process_login() {
        $username = $this->input->post('email');
        $password = $this->input->post('mdp');
    
        $user = $this->ModelsLogin->check_login($username, $password);
    
        if ($user) {
            // Connexion réussie
            $this->session->set_userdata('id_utilisateur', $user->id);
            redirect('completion');
        } else {
            // Identifiants incorrects
            $this->session->set_flashdata('error', 'Identifiants incorrects');
            redirect('login');
        }
    }
    

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('login');
    }
}
