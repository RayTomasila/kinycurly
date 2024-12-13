<?php 
  class Mproduk extends CI_Model {

    public function tampil() {
      $id_admin = $this->session->userdata("id_admin");

      $this->db->select('produk.*');
      $this->db->from('produk');
      $this->db->where('produk.id_admin', $id_admin);
      $this->db->order_by('produk.id_produk', 'desc');
      
      $query = $this->db->get();
      $data = $query->result_array();
      
      return $data;
    }

    function detail($id_produk) {
      $this->db->where('produk.id_admin', $this->session->userdata("id_admin"));
      $this->db->where('produk.id_produk', $id_produk);
      $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');

      $q = $this->db->get('produk');
      $d = $q->row_array();
      return $d;
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

    function ubah($inputan, $id) {
      $config['upload_path'] = $this->config->item("assets_produk");
      $config['allowed_types'] = 'jpeg|jpg|png';

      $this->load->library("upload", $config);
  
      $ngupload = $this->upload->do_upload("foto_produk");
  
      if ($ngupload) {
          $upload_data = $this->upload->data();
          $inputan['foto_produk'] = $upload_data['file_name'];
      }  
      $this->db->where('produk.id_admin', $this->session->userdata("id_admin"));
      $this->db->where('produk.id_produk', $id);      
      $this->db->update('produk', $inputan);
    }
  

    function hapus($id_produk) {
      $this->db->where('id_admin', $this->session->userdata("id_admin"));
      $this->db->where('id_produk', $id_produk);
      $this->db->delete('produk');
    }
  }
?>