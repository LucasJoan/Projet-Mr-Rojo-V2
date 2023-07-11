<?php 
class ModelsLogin extends CI_Model {
    private $id_utilisateur;
    private $email;
    private $mdp;

    public function get_user_by_username($username) {
        $this->db->where('email', $username);
        $query = $this->db->get('utilisateur');
        return $query->row();
    }

    public function verify_password($user_id, $password) {
        $this->db->where('id_utilisateur', $user_id);
        $this->db->where('mdp', $password);
        $query = $this->db->get('utilisateur');
        return ($query->num_rows() == 1);
    }
}

?>
