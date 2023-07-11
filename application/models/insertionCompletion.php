<?php 
      class insertionCompletion extends CI_Model
      {
            public function __construct()
            {
                  parent::__construct();
                  $this->load->database();
            }

            public function insert_Completion($data)
            {
                  $this->db->insert('completion',$data);
            }
      }
?>