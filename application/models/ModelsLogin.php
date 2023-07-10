<?php 


      class ModelsLogin extends CI_Model 
      {
            public function get_user_by_username($username) 
            {
                  $this->db->where('username', $username);
                  $query = $this->db->get('users');
                  return $query->row();
            }

            public function verify_password($user_id, $password) 
            {
                  $this->db->where('id', $user_id);
                  $this->db->where('password', $password);
                  $query = $this->db->get('users');
                  return ($query->num_rows() == 1);
            }

      }
      class User extends CI_Model
      {
          private $idUser;
          private $nom;
          private $email;
          private $motDePasse;
          private $identification;
      }

?>
