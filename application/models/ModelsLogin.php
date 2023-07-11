<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelsLogin extends CI_Model 
{
	public function getUserByEmail($email) {
		$this->db->where('email', $email);
		$query = $this->db->get('utilisateur');

		return $query->row();
        
        $this->db->where('email', $email);
		$query = $this->db->get('utilisateur');
		$utilisateur = $query->row();

		if ($utilisateur && password_verify($mdp, $utilisateur->mdp)) {
			return $utilisateur;
		} else {
            redirect('completion');
		}
        
	}


}
