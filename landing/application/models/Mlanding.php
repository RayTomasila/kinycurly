<?php 
  class Mlanding extends CI_Model {
    function tampil_produk() {
      $this->db->order_by('id_produk', 'desc');
      
      return $this->db->get('produk')->result_array();
    }

    function tampil_galeri() {
      $this->db->order_by('id_galeri', 'asc');
      
      return $this->db->get('galeri')->result_array();
    }

    function tampil_testimoni() {
      $this->db->order_by('id_testimoni', 'desc');
      
      return $this->db->get('testimoni')->result_array();
    }

    function tampil_kontak() {     
      return $this->db->get('kontak')->result_array();
    }

  }
  
?>