<?php 
  class Landing extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('Mproduk'); 
      $this->load->model('Mgaleri'); 
    }
  
    public function index() {
      $data['produk'] = $this->Mproduk->tampil();
      $data['galeri'] = $this->Mgaleri->tampil();

      $this->load->view('landing', $data);
    }

  }

?>