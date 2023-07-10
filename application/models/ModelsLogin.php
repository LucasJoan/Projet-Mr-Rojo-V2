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
      class utilisateur extends CI_Model
      {
          private $id_utilisateur;
          private $email;
          private $mdp;

          public function login()
          {
            //   $this->db->where('email', $this->getEmail());
            //   $this->db->where('mdp', $this->getMotDePasse());
            //   $query = $this->db->get('user');
      
            //   foreach ($query->result() as $row) {
            //       $user = new utilisateur();
            //       $user->setIdUser($row->id_utilisateur);
            //       $user->setEmail($row->email);
            //       $user->setMdp($row->mdp);
            //       return $utilisateur;
            //   }
            //   return null;
            if($mdp == $data['mdp'])
        {
            if($this->isEmailUnique()){
                if($this->isNomUnique()){
                    $this->insertDonne();
                    return true;
                }else{
                    return "Nom deja utiliser";
                }
            }else{
                return "Email deja utiliser";
            }
        }else{
            return "mot de passe non identique";
        }
    }
          }
      

?>
