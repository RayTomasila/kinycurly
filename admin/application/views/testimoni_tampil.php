<!-- testimoni -->
<section class="tampil-container container">
  <p class="section-title">Testimoni</p>
  
  <div class="card-container custom-scroll">
      <?php foreach ($testimoni as $key => $value): ?>

      <div class="card-wrapper-testimoni">

        <div class="testimoni-top-section">
          <div class="testimoni-tampil-img">
            <?php if (!empty($value['foto_customer'])) : ?>
              <img src="<?php echo $this->config->item("url_testimoni") . $value['foto_customer']; ?>" alt="">
            <?php else : ?>
              <img src="<?php echo $this->config->item("url_testimoni") . "/default-pfp.jpg"; ?>" alt="">
            <?php endif; ?>
          </div>

          <div class="testimoni-right-section">
            <div class="testimoni-right-top">
              <div class="stars">
                <?php 
                    $rating = $value['jumlah_rating'];
                    $max_rating = 5;
                    
                    foreach (range(1, $rating) as $key) {
                        echo '<i class="bi bi-star-fill"></i>';
                    }
                    
                    if ($rating < $max_rating) {
                        foreach (range($rating + 1, $max_rating) as $key) {
                            echo '<i class="bi bi-star"></i>';
                        }
                    }
                ?>
              </div>          
              <p class="testimoni-name"><?php echo $value['nama_customer']; ?></p>
            </div>

            <p class="testimoni-isi">"<?php echo $value['isi_testimoni']; ?>"</p>
        </div>



        </div>
      
          <div class="card-buttons card-buttons-testimoni">
            <a href="<?php echo base_url("testimoni/ubah/" . $value['id_testimoni']) ?>">
              <button class="button-ubah-hapus">Ubah</button>
            </a>
            
            <a href="<?php echo base_url("testimoni/hapus/" . $value['id_testimoni']) ?>">
              <button class="button-ubah-hapus">Hapus</button>
            </a>
          </div>
                  
      </div>
      <?php endforeach ?>

    </div>

    <div class="bottom-section"> 
      <a href="<?php echo base_url("testimoni/tambah") ?>">
        <button class="button-ubah-hapus">TAMBAH</button>
      </a>
    </div>
</section>
