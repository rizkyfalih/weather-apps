<?php
    class M_City extends CI_Model {

        public function save_city($city){
            $this->db->query("INSERT INTO history_search(city) VALUES ('$city')");

            return true;
        }
        
        public function get_all_city(){
            $query = $this->db->query("SELECT * FROM history_search ORDER BY id DESC LIMIT 5");

            return $query->result();
        }

    }

?>