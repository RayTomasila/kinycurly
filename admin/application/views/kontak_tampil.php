<!-- Galeri -->
<section class="tampil-container container">
  <p class="section-title">Kontak</p>
  
  <div class="card-container custom-scroll">
      <?php foreach ($kontak as $key => $value): ?>

      <div class="inputs-container kontak-container">        
        <div class="">
          <label class="label-kontak"><?php echo $value['nama_kontak'] ?></label>
          <input type="text" name="link_kontak" class="form-control link-kontak" value="<?php echo $value['link_kontak'] ?>">
        </div>                  
      </div>
      <?php endforeach ?>

    </div>

    <div class="bottom-section"> 
      <a href="<?php ("kontak/ubah") ?>">
        <button class="button-ubah-hapus mx-4">SIMPAN</button>
      </a>
      <a href="<?php echo base_url("kontak/tambah") ?>">
        <button class="button-ubah-hapus">TAMBAH</button>
      </a>
    </div>
</section>

