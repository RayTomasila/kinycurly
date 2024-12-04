<!-- Sidebar -->
<div class="sidebar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="<?php echo base_url("akun") ?>" class="admin-akun">
          
          <img src="<?php echo $this->config->item('url_admin') .$admin['foto_admin']; ?>" alt="PP-admin" class="rounded-circle">

          <?php echo $this->session->userdata("nama") ?>

        </a>
      </li>
        

      <li class="nav-item">
        <a href="<?php echo base_url("produk") ?>" class="nav-link active">PRODUK</a>
      </li>

      <li class="nav-item">
        <a href="<?php echo base_url("galeri") ?>" class="nav-link">GALERI</a>
      </li>

      <li class="nav-item">
        <a href="<?php echo base_url("testimoni") ?>" class="nav-link">TESTIMONI</a>
      </li>

      <li class="nav-item">
        <a href="<?php echo base_url("kontak") ?>" class="nav-link">KONTAK</a>
      </li>
      
      <li class="nav-item">
        <a href="<?php echo base_url("logout") ?>" class="nav-link">LOGOUT</a>
      </li>
    </ul>
  </div>
<!-- Sidebar -->
   