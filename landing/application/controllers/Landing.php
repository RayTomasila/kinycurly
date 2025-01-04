<?php 
  class Landing extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('Mlanding'); 

    }
  
    public function index() {
      $data['produk'] = $this->Mlanding->tampil_produk();
      $data['galeri'] = $this->Mlanding->tampil_galeri();
      $data['testimoni'] = $this->Mlanding->tampil_testimoni();
      $data['kontak'] = $this->Mlanding->tampil_kontak();

      $this->load->view('landing', $data);
    }
  }
?>