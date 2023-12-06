<?php
class Internships_model extends CI_Model{
public function __construct(){
    parent::__construct();
    $this->load->database();
}
public function get_produits(){
    $query=$this->db->get('produit');
    return $query->result_array();
    }
}
?>