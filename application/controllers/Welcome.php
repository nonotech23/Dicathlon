<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();


    }

    public function index(){
		$this->load->view('head');
        $this->load->view('header');
        $this->load->view('accueil');
    }

    public function connexion(){
        $this->load->view('connexion');
    }
}
?>
