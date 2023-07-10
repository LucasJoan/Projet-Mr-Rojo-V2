<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlleurLogin extends CI_Controller {

	public function logview()
	{
		$this->load->view('Login');
	}
	public function Login()
        {
            $this->load->library('session');
            $this->load->helper('url');
            $mdp = $this->input->post('mdp');
            $utilisateur = new utilisateur(null,$email,$mdp);
            $utilisateur = $user->login();
            if($utilisateur != null){
                $this->session->set_userdata('id_utilisateur',$user->getId_utilisateur());
            }
            if($this->session->userdata('id_utilisateur') == null){
                $this->load->view('completion');
            }else{
                redirect('');
            }
        }
	
}
