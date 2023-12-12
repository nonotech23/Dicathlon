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
		$this->load->view('header');
        $this->load->view('description');
    }

    public function verif_connexion(){
        $this->load->model("Utilisateur_model");
    
        $login = $this->input->post('login');
        $mdp= $this->input->post('password');
    
        $a = $this->Utilisateur_model->auth($login, $mdp);
        $type_utilisateur= $a['type_utilisateur'];
    
        if ($a != null) {
            if ($type_utilisateur == 'admin'){
                $this->load->view('header-admin');
            }
            else{
                $this->load->view('header');
            }
            $data['produits']=$this->Internships_model->get_produits();
            $this->load->vars($data);
            $this->load->view('accueil');
        } else {
            $this->load->view('header-co');
            $this->load->view('connexion', ['erreur' => 'Identifiants invalides']);
        }
    }

}
?>
