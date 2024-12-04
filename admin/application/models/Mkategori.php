<?php 
  class Mkategori extends CI_Model {
    
    function tampil() {
      $query = $this->db->get('kategori');
      $data = $query->result_array();

      return $data;
      
    }
  }
?>