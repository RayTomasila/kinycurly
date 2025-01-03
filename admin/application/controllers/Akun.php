<?php

	class Akun extends CI_Controller {

		function __construct()
		{
			parent::__construct();

			if (!$this->session->userdata("id_admin")) {
					redirect('/','refresh');
			}	

      $this->load->model('Madmin');
		}

		public function index() {
      $data['admin'] = $this->Madmin->tampil($this->session->userdata('id_admin'));

			$inputan = $this->input->post();

			$this->form_validation->set_rules("username","Username","required");
			$this->form_validation->set_rules("nama","Nama Lengkap","required");

			$this->form_validation->set_message("required","%s Wajib Diisi");

			if ($this->form_validation->run()==TRUE) {

				$id_admin = $this->session->userdata("id_admin");
				$this->Madmin->ubah($inputan,$id_admin);

				$this->session->set_flashdata('pesan_sukses','Akun Berhasil Diubah');
				redirect('produk','refresh');
			}
			$this->load->view('header');
			$this->load->view('akun', $data);
			$this->load->view('footer');
		}
	}
?>