<!-- Sidebar -->
<div class="sidebar">
  <ul class="sidebar-nav">
    <li class="nav-item">
      <a href="<?php echo base_url("akun") ?>" class="admin-akun">

        <img src="<?php echo $this->config->item('url_admin') . $admin['foto_admin']; ?>" alt="PP-admin" class="rounded-circle">

        <?php echo $this->session->userdata("nama") ?>

      </a>
    </li>

    <li class="nav-item">
      <a href="<?php echo base_url("produk") ?>" class="nav-link <?php echo (current_url() == base_url("produk") ? 'active' : ''); ?>">
        PRODUK
      </a>
    </li>

    <li class="nav-item">
      <a href="<?php echo base_url("galeri") ?>" class="nav-link <?php echo (current_url() == base_url("galeri") ? 'active' : ''); ?>">
        GALERI
      </a>
    </li>

    <li class="nav-item">
      <a href="<?php echo base_url("testimoni") ?>" class="nav-link <?php echo (current_url() == base_url("testimoni") ? 'active' : ''); ?>">
        TESTIMONI
      </a>
    </li>

    <li class="nav-item">
      <a href="<?php echo base_url("kontak") ?>" class="nav-link <?php echo (current_url() == base_url("kontak") ? 'active' : ''); ?>">
        KONTAK
      </a>
    </li>

  </ul>


    <li class="nav-item logout">
      <a href="<?php echo base_url("logout") ?>" class="nav-link <?php echo (current_url() == base_url("logout") ? 'active' : ''); ?>">
        LOGOUT
      </a>
    </li>


</div>
<!-- Sidebar -->
