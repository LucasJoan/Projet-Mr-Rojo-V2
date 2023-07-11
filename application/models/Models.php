<?php 

    class Models extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function getGenre()
        {
            $query=$this->db->get('genre');
            return $query->result();
        }
    }

?>