<?php 
  class Galeri extends CI_Controller {
    public function __construct() {
     parent::__construct();       
      if (!$this->session->userdata("id_admin")) {
        $this->session->set_flashdata('pesan_gagal', 'Anda harus login');
        redirect('/', 'refresh'); 
      }

      $this->load->model('Madmin');
      $this->load->model('Mgaleri');      
    }

    public function index() {
      $data['admin'] = $this->Madmin->tampil($this->session->userdata('id_admin'));
      $data['galeri'] = $this->Mgaleri->tampil();

      $this->load->view('header');
      $this->load->view('sidebar', $data);
      $this->load->view('galeri_tampil', $data);
      $this->load->view('footer');
    }

    public function tambah() {    
      $inputan = $this->input->post();

      if ($inputan) {
        $this->Mgaleri->tambah($inputan);
        $this->session->set_flashdata('pesan_sukses', 'galeri Berhasil Ditambah!');
        redirect('galeri', 'refresh');     
      }

      $this->load->view('header');
      $this->load->view('galeri_tambah');
      $this->load->view('footer');        
    }

    public function ubah($id_galeri) {
      $data['galeri'] = $this->Mgaleri->detail($id_galeri);

      $inputan = $this->input->post();

      if ($inputan) {
          $this->Mgaleri->ubah($inputan, $id_galeri);
          $this->session->set_flashdata('pesan_sukses', 'galeri Berhasil Diubah!');
          redirect('galeri', 'refresh');     
      }

      $this->load->view('header');
      $this->load->view('galeri_ubah', $data);
      $this->load->view('footer');
    }

    public function hapus($id_galeri) {
      $this->load->model('Mgaleri');
      $this->Mgaleri->hapus($id_galeri);
      
      $this->session->set_flashdata('pesan_sukses', 'galeri telah terhapus');
      redirect('galeri', 'refresh');
    }
  }
?>