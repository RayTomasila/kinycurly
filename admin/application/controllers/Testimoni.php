<?php 
  class Testimoni extends CI_Controller {
    public function __construct() {
     parent::__construct();       
      if (!$this->session->userdata("id_admin")) {
        $this->session->set_flashdata('pesan_gagal', 'Anda harus login');
        redirect('/', 'refresh'); 
      }

      $this->load->model('Madmin');
      $this->load->model('Mtestimoni');      
    }

    public function index() {
      $data['admin'] = $this->Madmin->tampil($this->session->userdata('id_admin'));
      $data['testimoni'] = $this->Mtestimoni->tampil();

      $this->load->view('header');
      $this->load->view('sidebar', $data);
      $this->load->view('testimoni_tampil', $data);
      $this->load->view('footer');
    }

    public function tambah() {    
      $inputan = $this->input->post();

      if ($inputan) {
        $this->Mtestimoni->tambah($inputan);
        $this->session->set_flashdata('pesan_sukses', 'Testimoni Berhasil Ditambah!');
        redirect('testimoni', 'refresh');     
      }

      $this->load->view('header');
      $this->load->view('testimoni_tambah');
      $this->load->view('footer');        
    }

    public function ubah($id_testimoni) {
      $data['testimoni'] = $this->Mtestimoni->detail($id_testimoni);

      $inputan = $this->input->post();

      if ($inputan) {
          $this->Mtestimoni->ubah($inputan, $id_testimoni);
          $this->session->set_flashdata('pesan_sukses', 'testimoni Berhasil Diubah!');
          redirect('testimoni', 'refresh');     
      }

      $this->load->view('header');
      $this->load->view('testimoni_ubah', $data);
      $this->load->view('footer');
    }

    public function hapus($id_testimoni) {
      $this->load->model('Mtestimoni');
      $this->Mtestimoni->hapus($id_testimoni);
      
      $this->session->set_flashdata('pesan_sukses', 'testimoni telah terhapus');
      redirect('testimoni', 'refresh');
    }
  }
?>