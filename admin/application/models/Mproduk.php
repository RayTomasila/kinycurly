<?php 
  class Mproduk extends CI_Model {

    public function tampil() {
      $id_admin = $this->session->userdata("id_admin");

      $this->db->select('produk.*');
      $this->db->from('produk');
      $this->db->where('produk.id_admin', $id_admin);
      
      $query = $this->db->get();
      $data = $query->result_array();
      
      return $data;
    }

    function tambah($inputan) {
      $config['upload_path'] = $this->config->item("assets_produk");
      $config['allowed_types'] = 'jpeg|jpg|png'; 

      $this->load->library('upload', $config);

      $ngupload = $this->upload->do_upload("foto_produk");        

      if ($ngupload) {
        $upload_data = $this->upload->data();
        $inputan['foto_produk'] = $upload_data['file_name'];
      }

      $inputan['id_admin'] = $this->session->userdata("id_admin");

      $this->db->insert('produk', $inputan);
    }

    function hapus($id_produk) {
      $this->db->where('id_admin', $this->session->userdata("id_admin"));
      $this->db->where('id_produk', $id_produk);
      $this->db->delete('produk');
    }
  }
?>