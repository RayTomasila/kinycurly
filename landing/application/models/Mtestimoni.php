<?php 
  class Mtestimoni extends CI_Model {
    function tampil() {
      $this->db->order_by('id_testimoni', 'desc');
      
      $q = $this->db->get('testimoni');

      return $q->result_array();
    }
  }
?>