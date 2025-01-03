<?php 
  class Landing extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('Mproduk'); 
      $this->load->model('Mgaleri'); 
      $this->load->model('Mtestimoni'); 
    }
  
    public function index() {
      $data['produk'] = $this->Mproduk->tampil();
      $data['galeri'] = $this->Mgaleri->tampil();
      $data['testimoni'] = $this->Mtestimoni->tampil();

      $this->load->view('landing', $data);
    }
  }
?>