<?php 
  class Mkategori extends CI_Model {
    
    public function tampil() {
      $q = $this->db->get('kategori');

      return $q->result_array();
    }
  }
?>