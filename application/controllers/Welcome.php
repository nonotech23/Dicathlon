<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->view('head');
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('accueil');
    }

    public function connexion(){
		$this->load->view('header-co');
        $this->load->view('connexion');
    }

	public function sports(){
		$this->load->view('header');
        $this->load->view('sports');
    }
}
?>
