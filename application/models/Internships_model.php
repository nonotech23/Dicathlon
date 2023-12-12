<?php
class Internships_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_produits() {
        $query = $this->db->get('produit');
        return $query->result_array();
    }

    public function get_marques() {
        $query = $this->db->query("SELECT DISTINCT marque FROM produit ORDER BY marque");
        
        // Vérifier si la requête a réussi
        if ($query) {
            // Renvoyer les résultats sous forme de tableau associatif
            return $query->result_array();
        } else {
            // Gérer les erreurs si la requête échoue
            return array();
        }
    }

    public function get_models_by_marque($marque) {
        $query = $this->db->get_where('produit', array('marque' => $marque));

        if ($query) {
            return $query->result_array();
        } else {
            return array();
        }
    }
}
?>
