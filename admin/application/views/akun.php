<section class="crud-container">
  <div class="container crud-wrapper">
    <p class="section-title">Ubah Akun</p>

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">

        <div class="form-wrapper-top">    
          <div class="ubah-foto-container">
            <label>Foto </label>
            <div class="ubah-foto-border">
              <img src="<?php echo $this->config->item("url_admin") . $admin['foto_admin']; ?>"></img>
          </div>      

          <div class="custom-file-upload-container">
            <label for="foto_admin" class="btn-custom">Masukan Foto baru</label>
            <input type="file" id="foto_admin" name="foto_admin" class="form-control">
          </div>
         </div>

          <div class="inputs-container">
            <div>            
              <label for="username" class="form-label">Username</label>
              <input type="text" id="username" name="username" class="form-control" value="<?php echo set_value("username", $this->session->userdata("username")) ?>">
              <span class="text-danger small"><?php echo form_error("username") ?></span>
            </div>

            <div>
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Kosongkan jika Password tidak diubah">
            </div>

            <div>
              <label for="nama" class="form-label">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" value="<?php echo set_value("nama", $this->session->userdata("nama")) ?>">
              <span class="small text-danger"><?php echo form_error("nama") ?></span>
            </div>
          </div>
      </div>


        <div class="form-button">
          <button type="submit" class="btn-bg-yellow mt-3">Simpan</button>
        </div>
      </form>

    </div>
  </div>
</section>