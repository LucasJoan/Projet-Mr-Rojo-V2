<?php 
      class InsertUtilisateur extends CI_Model
      {
            public function __construct()
            {
                  parent::__construct();
                  $this->load->database();
            }

            public function insert_Utilisateur($data)
            {
                  $this->db->insert('user',$data);
            }
      }
?>