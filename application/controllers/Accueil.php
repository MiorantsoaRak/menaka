<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Accueil extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "accueil";
        $this->load->view('default',$data);
    }

    public function preparer(){

        $data['contents'] = 'PreparerSejour.php';
        $this->load->view('default',$data);
    }
    public function nosMondes(){
        $data['contents'] = "NosMondes";
        $this->load->view('default',$data);
    }
    public function vote(){
        $data['contents'] = "vote";
        $this->load->view('default',$data);
    }
}