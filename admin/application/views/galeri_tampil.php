<!-- Galeri -->
<section class="tampil-container container">
  <p class="section-title-tampil">Galeri</p>
  
  <div class="card-container custom-scroll">
      <?php foreach ($galeri as $key => $value): ?>

      <div class="card-wrapper">
        
        <div class="card-left-section">
          <img src="<?php echo $this->config->item('url_galeri') .$value['foto_galeri']; ?>" alt="">
          
        </div>
        
        <div class="card-right-section">
          <p class="card-title"><?php echo $value['nama_galeri'] ?></p>
          <hr>

          <div class="card-buttons">
            <a href="<?php echo base_url("galeri/ubah/" . $value['id_galeri']) ?>">
              <button class="button-ubah-hapus">Ubah</button>
            </a>
            
            <a href="<?php echo base_url("galeri/hapus/" . $value['id_galeri']) ?>">
              <button class="button-ubah-hapus">Hapus</button>
            </a>
          </div>
        </div>
                  
      </div>
      <?php endforeach ?>

    </div>

    <div class="bottom-section"> 
      <a href="<?php echo base_url("galeri/tambah") ?>">
        <button class="button-ubah-hapus">TAMBAH</button>
      </a>
    </div>
</section>

