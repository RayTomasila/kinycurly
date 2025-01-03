<section class="crud-container">
  <div class="container crud-wrapper">

    <p class="section-title">Ubah galeri</p>

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">

        <div class="form-wrapper-top">    
          <div class="ubah-foto-container">
            <label>Foto </label>
            <div class="ubah-foto-border">
              <img src="<?php echo $this->config->item("url_galeri") . $galeri['foto_galeri']; ?>">
          </div>      

          <div class="custom-file-edit">
            <label for="foto_galeri" class="btn-custom">Masukan Foto baru</label>
            <input type="file" id="foto_galeri" name="foto_galeri" class="form-control">
          </div>
        </div>

        <div class="inputs-container">
          <label>Nama </label>
          <input type="text" name="nama_galeri" class="form-control" value="<?php echo $galeri['nama_galeri'] ?>"></input>
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