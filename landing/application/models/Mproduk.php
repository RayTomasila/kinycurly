<?php 
  class Mproduk extends CI_Model {
    function tampil() {
      $this->db->order_by('id_produk', 'asc');
      
      $q = $this->db->get('produk');

      return $q->result_array();
    }
  }
?>