<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->view('head');
        $this->load->model('Internships_model');
    }

	public function sports(){
        $this->load->view('sports');
    }

    public function sports_clients(){
        $this->load->view('sports_clients');
    }

    public function sports_admin(){
        $this->load->view('sports_admin');
    }

    public function ajouter(){
        $this->load->view('ajouter');
    }

    public function listeproduitmarque($m){

        public function reservations(){
		$this->load->view('header');
        $this->load->view('reservations');
    }

    public function listeproduitmarque($marque = '', $id = null) {
        if ($id !== null) {
            $produit = $this->Internships_model->get_produit_par_id($id);
        
            $this->load->view('header');
            $this->load->view('detailsproduit', array('produit' => $produit, 'produit_id' => $id));
        } else {
            $this->load->view('header');
            $data['produits'] = $this->Internships_model->get_models_by_marque($marque);
            $data['title'] = 'produits';
            $this->load->vars($data);
            $this->load->view('listeproduitmarque');
        }
    }
    
    public function ajout_resa_article() {
        $produit_id = $this->uri->segment(3);
        if ($this->input->post()) {
            // Récupération des données du formulaire
            $date_debut = $this->input->post('date_debut');
            $date_retour_prevue = $this->input->post('date_retour_prevue');
            $prix_total = $this->input->post('prix_total');
    
            // Affiche le produit_id pour vérification
            echo "Produit ID: " . $produit_id;
    
            // Vérification de l'existence du produit
            $produit = $this->Internships_model->get_produit_par_id($produit_id);
    
            // Affiche le contenu du produit pour vérification
            echo "<pre>";
            print_r($produit);
            echo "</pre>";
    
            if ($produit) {
                // Insertion des données dans la table "location"
                $data_location = array(
                    'date_debut' => $date_debut,
                    'date_retour_prevue' => $date_retour_prevue,
                    'prix_total' => $prix_total,
                    // 'utilisateur_id' => $this->session->userdata('user_id'),  // Temporairement supprimé
                    'produit_id' => $produit_id,
                );
    
                $this->db->insert('location', $data_location);
    
                // Rediriger ou charger une autre vue si nécessaire
                redirect('Welcome/accueil');  // Redirige vers la page d'accueil après l'ajout
            } else {
                // Produit non trouvé
                show_error('Produit non trouvé', 404);
            }
        } else {
            $this->load->view('reservations');
        }
    }
    
    
        


    public function index(){
        $data['produits']=$this->Internships_model->get_produits();
        $data['title']='accueil';
        $this->load->vars($data );
        $this->load->view('accueil');
    }
    
}


?>
