<?php 
  class Mproduk extends CI_Model {
    function tampil() {
      $this->db->order_by('id_produk', 'desc');
      
      $q = $this->db->get('produk');

      return $q->result_array();
    }
  }
?>