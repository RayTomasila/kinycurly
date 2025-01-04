<?php 
  class Mkontak extends CI_Model {
    
    public function tampil() {
      $q = $this->db->get('kontak');

      return $q->result_array();
    }

    function tambah($inputan) {
      $inputan['id_admin'] = $this->session->userdata("id_admin");
      $this->db->insert('kontak', $inputan);
    }

    function ubah($inputan, $id_kontak) {
      $this->db->where('id_admin', $this->session->userdata("id_admin"));
      $this->db->where('id_kontak', $id_kontak);
      $this->db->update('kontak', $inputan);
    }    
  }
?>