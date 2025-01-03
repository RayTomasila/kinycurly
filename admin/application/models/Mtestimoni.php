<?php 
  class Mtestimoni extends CI_Model {
    
    public function tampil() {
      $id_admin = $this->session->userdata("id_admin");

      $this->db->select('testimoni.*');
      $this->db->from('testimoni');
      $this->db->where('testimoni.id_admin', $id_admin);
      $this->db->order_by('testimoni.id_testimoni', 'desc');

      $q = $this->db->get('');

      return $q->result_array();
    }

    function detail($id_testimoni) {
      $this->db->where('testimoni.id_admin', $this->session->userdata("id_admin"));
      $this->db->where('id_testimoni', $id_testimoni);
      
      $q = $this->db->get('testimoni');
      $d = $q->row_array();
      return $d;
  }

    function tambah($inputan) {
      $config['upload_path'] = $this->config->item("assets_testimoni");
      $config['allowed_types'] = 'jpeg|jpg|png'; 

      $this->load->library('upload', $config);

      $ngupload = $this->upload->do_upload("foto_testimoni");        

      if ($ngupload) {
        $upload_data = $this->upload->data();
        $inputan['foto_testimoni'] = $upload_data['file_name'];
      }

      $inputan['id_admin'] = $this->session->userdata("id_admin");

      $this->db->insert('testimoni', $inputan);
    }

    function ubah($inputan, $id_testimoni) {
      $config['upload_path'] = $this->config->item("assets_testimoni");
      $config['allowed_types'] = 'jpeg|jpg|png';

      $this->load->library("upload", $config);
  
      $ngupload = $this->upload->do_upload("foto_testimoni");
  
      if ($ngupload) {
          $upload_data = $this->upload->data();
          $inputan['foto_testimoni'] = $upload_data['file_name'];
      }  
      $this->db->where('testimoni.id_admin', $this->session->userdata("id_admin"));  
      $this->db->where('id_testimoni', $id_testimoni);
      $this->db->update('testimoni', $inputan);
    }  

    function hapus($id_testimoni) {
      $this->db->where('id_admin', $this->session->userdata("id_admin"));
      $this->db->where('id_testimoni', $id_testimoni);
      $this->db->delete('testimoni');
    }
  }
?>