<?php 
  class Landing extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('Mproduk'); 
    }
  
    public function index() {
      $data['produk'] = $this->Mproduk->tampil();

      $this->load->view('landing', $data);
    }

  }

?>