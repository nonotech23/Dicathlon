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

    public function description(){
        $this->load->view('description');
    }

    public function description_clients(){
        $this->load->view('description_clients');
    }

    public function description_admin(){
        $this->load->view('description_admin');
    }

    public function ajouter(){
        $this->load->view('ajouter');
    }

    public function listeproduitmarque($m){
		$this->load->view('header');
        $data['produits']=$this->Internships_model->get_models_by_marque($m);
        $data['title']='produits';
        $this->load->vars($data );
        $this->load->view('listeproduitmarque');
        
    }
    
    public function index(){
        $data['produits']=$this->Internships_model->get_produits();
        // a title to display above the list
        $data['title']='accueil';
        // template will call 'task_list ' sub - view
        $this->load->vars($data );
        $this->load->view('accueil');
    }
    
}


?>
