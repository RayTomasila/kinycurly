<section class="tampil-container container">
  <p class="section-title-tampil">Kontak</p>

  <div class="card-container custom-scroll">
      <form method="post" action="<?php echo base_url("kontak/ubah"); ?>">
      <?php foreach ($kontak as $key => $value): ?>
        <div class="inputs-container kontak-container">        
          <div class="mb-3">
            <label class="label-kontak"><?php echo $value['nama_kontak']; ?></label>
            <input type="hidden" name="kontak[<?php echo $key; ?>][id_kontak]" value="<?php echo $value['id_kontak']; ?>">
            <input type="text" name="kontak[<?php echo $key; ?>][link_kontak]" class="form-control link-kontak" value="<?php echo $value['link_kontak']; ?>">
          </div>                  
        </div>
      <?php endforeach; ?>
    </div>
    
    <div class="bottom-section"> 
      <div class="form-button">
        <button type="submit" class="button-ubah-hapus mx-4">SIMPAN</button>
      </div>
    </form>

      <a href="<?php echo base_url("kontak/tambah") ?>">
        <button class="button-ubah-hapus">TAMBAH</button>
      </a>
    </div>
</section>
