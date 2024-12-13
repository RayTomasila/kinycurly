<?php 
  class Mgaleri extends CI_Model {
    function tampil() {
      $this->db->order_by('id_galeri', 'asc');
      
      $q = $this->db->get('galeri');

      return $q->result_array();
    }
  }
?>