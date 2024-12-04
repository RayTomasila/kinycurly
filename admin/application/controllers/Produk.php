<?php
  class Produk extends CI_Controller {

    public function __construct() {
      parent::__construct();
      if (!$this->session->userdata("id_admin")) {
          $this->session->set_flashdata('pesan_gagal', 'Anda harus login');
          redirect('/', 'refresh'); 
        }

        $this->load->model('Madmin');
        $this->load->model('Mproduk');
        $this->load->model('Mkategori');
      }
      
      
      function index() {
        $id_admin = $this->session->userdata('id_admin');
        $data['admin'] = $this->Madmin->tampil($id_admin);    
        $data['produk'] = $this->Mproduk->tampil();

        $this->load->view('header');
        $this->load->view('navbar', $data);
        $this->load->view('produk', $data);
        $this->load->view('footer');
    }

    public function tambah() {
      $this->load->model('Mproduk');

      $data['kategori'] = $this->Mkategori->tampil();    
    
      $inputan = $this->input->post();

      if ($inputan) {
        $this->Mproduk->tambah($inputan);
        $this->session->set_flashdata('pesan_sukses', 'Produk Berhasil Ditambah!');
        redirect('produk', 'refresh');     
      }

      $this->load->view('header');
      $this->load->view('produk_tambah', $data);
      $this->load->view('footer');
      
  }

    public function hapus($id_produk) {
      $this->load->model('Mproduk');
      $this->Mproduk->hapus($id_produk);
      
      $this->session->set_flashdata('pesan_sukses', 'Produk telah terhapus');
      redirect('produk', 'refresh');
  }

}
