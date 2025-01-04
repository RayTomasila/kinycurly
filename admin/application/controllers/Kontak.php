<?php
  class Kontak extends CI_Controller {

    public function __construct() {
      parent::__construct();
      if (!$this->session->userdata("id_admin")) {
          $this->session->set_flashdata('pesan_gagal', 'Anda harus login');
          redirect('/', 'refresh'); 
        }

        $this->load->model('Madmin');
        $this->load->model('Mkontak');
      }
      
      function index() {
        $id_admin = $this->session->userdata('id_admin');
        $data['admin'] = $this->Madmin->tampil($id_admin);    
        $data['kontak'] = $this->Mkontak->tampil();

        $inputan = $this->input->post();

        if ($inputan) {
            $this->Mkontak->ubah($inputan);
            $this->session->set_flashdata('pesan_sukses', 'kontak Berhasil Diubah!');
            redirect('kontak', 'refresh');     
        }

        $this->load->view('header');
        $this->load->view('sidebar', $data);
        $this->load->view('kontak_tampil', $data);
        $this->load->view('footer');
      }

      public function tambah() {      
        $inputan = $this->input->post();

        if ($inputan) {
          $this->Mkontak->tambah($inputan);
          $this->session->set_flashdata('pesan_sukses', 'kontak Berhasil Ditambah!');
          redirect('kontak', 'refresh');     
        }

        $this->load->view('header');
        $this->load->view('kontak_tambah');
        $this->load->view('footer');        
      }

      public function ubah() {
        $inputan = $this->input->post('kontak');
      
        if ($inputan) {
          foreach ($inputan as $kontak) {
            $this->Mkontak->ubah($kontak, $kontak['id_kontak']);
          }
          $this->session->set_flashdata('pesan_sukses', 'Semua kontak berhasil diubah!');
          redirect('kontak', 'refresh');
        } else {
          $this->session->set_flashdata('pesan_gagal', 'Tidak ada perubahan yang dilakukan.');
          redirect('kontak', 'refresh');
        }
      }
}
