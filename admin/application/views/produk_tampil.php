<!-- Produk -->
<section class="produk-fak container">

    <p class="section-title">Produk</p>
    
    <div class="card-container custom-scroll">
        <?php foreach ($produk as $key => $value): ?>

        <div class="card-wrapper">
          
          <div class="card-left-section">
            <img src="<?php echo $this->config->item('url_produk') .$value['foto_produk']; ?>" alt="">
            
          </div>
          
          <div class="card-right-section">
            <p class="nama-produk"><?php echo $value['nama_produk'] ?></p>
            <hr>

            <div class="card-buttons">
              <a href="<?php echo base_url("produk/ubah/" . $value['id_produk']) ?>">
                <button class="button-ubah-hapus">Ubah</button>
              </a>
              
              <a href="<?php echo base_url("produk/hapus/" . $value['id_produk']) ?>">
                <button class="button-ubah-hapus">Hapus</button>
              </a>
            </div>
          </div>
                    
        </div>
        <?php endforeach ?>

      </div>

      <div class="produk-bottom-section"> 
        <a href="<?php echo base_url("produk/tambah") ?>">
          <button class="button-ubah-hapus">TAMBAH</button>
        </a>
      </div>
</section>

