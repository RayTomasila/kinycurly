<?php 
  class Landing extends CI_Controller {

    // public function __construct() {
    //   parent::__construct();
    //   $this->load->model('Mproduk'); 
    // }
  
    public function index() {
    
      $this->load->view('landing');
    }

  }

?>