<?php 
  class Mgaleri extends CI_Model {
    
    public function tampil() {
      $id_admin = $this->session->userdata("id_admin");

      $this->db->select('galeri.*');
      $this->db->from('galeri');
      $this->db->where('galeri.id_admin', $id_admin);
      $this->db->order_by('galeri.id_galeri', 'desc');

      $q = $this->db->get('');

      return $q->result_array();
    }

    function detail($id_galeri) {
      $this->db->where('galeri.id_admin', $this->session->userdata("id_admin"));
      $this->db->where('id_galeri', $id_galeri);
      
      $q = $this->db->get('galeri');
      $d = $q->row_array();
      return $d;
  }

    function tambah($inputan) {
      $config['upload_path'] = $this->config->item("assets_galeri");
      $config['allowed_types'] = 'jpeg|jpg|png'; 

      $this->load->library('upload', $config);

      $ngupload = $this->upload->do_upload("foto_galeri");        

      if ($ngupload) {
        $upload_data = $this->upload->data();
        $inputan['foto_galeri'] = $upload_data['file_name'];
      }

      $inputan['id_admin'] = $this->session->userdata("id_admin");

      $this->db->insert('galeri', $inputan);
    }

    function ubah($inputan, $id_galeri) {
      $config['upload_path'] = $this->config->item("assets_galeri");
      $config['allowed_types'] = 'jpeg|jpg|png';

      $this->load->library("upload", $config);
  
      $ngupload = $this->upload->do_upload("foto_galeri");
  
      if ($ngupload) {
          $upload_data = $this->upload->data();
          $inputan['foto_galeri'] = $upload_data['file_name'];
      }  
      $this->db->where('galeri.id_admin', $this->session->userdata("id_admin"));  
      $this->db->where('id_galeri', $id_galeri);
      $this->db->update('galeri', $inputan);
    }  

    function hapus($id_galeri) {
      $this->db->where('id_admin', $this->session->userdata("id_admin"));
      $this->db->where('id_galeri', $id_galeri);
      $this->db->delete('galeri');
    }
  }
?>