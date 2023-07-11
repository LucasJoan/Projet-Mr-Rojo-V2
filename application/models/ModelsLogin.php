<?php
    class ModelsLogin extends CI_Model 
    {
        public function check_login($mail, $pass) {
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            $query = $this->db->get_where('utilisateur', array('nom' => $mail));
            $user = $query->row();

            if ($user && password_verify($pass, $user->pass)) {
                return $user;
            } else {
                return false;
            }
        }
    }
?>
