<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->view('head');
        $this->load->model('Internships_model');
    }

    public function connexion(){
		$this->load->view('header-co');
        $this->load->view('connexion');
    }

    public function description(){
        $this->load->view('description');
    }

    public function creercompte(){
		$this->load->view('header-co');
        $this->load->view('creercompte');
    }

    public function verif_connexion(){
        $this->load->model("Utilisateur_model");
    
        $login = $this->input->post('login');
        $mdp= $this->input->post('password');
    
        $a = $this->Utilisateur_model->auth($login, $mdp);
        $type_utilisateur= $a['type_utilisateur'];
    
        if ($a != null) {
            if ($type_utilisateur == 'admin'){
                $this->load->view('accueil_admin');
            }
            else{
                $this->load->view('accueil_client');
            }
            $data['produits']=$this->Internships_model->get_produits();
            $this->load->vars($data);
        } else {
            $this->load->view('header-co');
            $this->load->view('connexion', ['erreur' => 'Identifiants invalides']);
        }
    }

    public function creer_lecompte() {
        if ($this->input->post()) {
            $data = array(
                'prenom' => $this->input->post('prenom'),
                'nom' => $this->input->post('nom'),
                'email' => $this->input->post('email'),
                'login' => $this->input->post('login'),
                'password' => $this->input->post('password'),
                'ddn' => $this->input->post('ddn'),
                'type_utilisateur' => 'client',
            );

            $this->db->insert('utilisateur', $data);
            
            $data['produits']=$this->Internships_model->get_produits();
            $this->load->vars($data);

            $this->load->view('accueil_clients');

        } else {
            $this->load->view('creercompte');
        }
    }
    

    public function ajouter_article() {
        if ($this->input->post()) {
            $data = array(
                'type' => $this->input->post('type'),
                'description' => $this->input->post('description'),
                'marque' => $this->input->post('marque'),
                'modele' => $this->input->post('modele'),
                'prix_location' => $this->input->post('prix_location'),
                'etat' => $this->input->post('etat'),
            );

            $this->db->insert('produit', $data);
            $this->load->view('ajouter');
        }
    }

}
?>
