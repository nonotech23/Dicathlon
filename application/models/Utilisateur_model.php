<?php
class Utilisateur_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function auth($login, $mdp){
        $query = $this->db->get_where('utilisateur', array('login' => $login, 'password' => $mdp));

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return null;
        }
    }
}
?>