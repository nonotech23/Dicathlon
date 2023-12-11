<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->view('head');
        $this->load->model('Internships_model');
    }

	public function sports(){
		$this->load->view('header');
        $this->load->view('sports');
    }


        public function index(){
            $this->load->view('header');
            $data['produits']=$this->Internships_model->get_produits();
            // a title to display above the list
            $data['title']='accueil';
            // template will call 'task_list ' sub - view
            $this->load->vars($data );
            $this->load->view('accueil');
        }
}


?>
