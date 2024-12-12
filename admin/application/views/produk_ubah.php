<section class="produk-crud-container">
  <div class="container produk-crud-wrapper">

    <p class="section-title">Ubah Produk</p>

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">

        <div class="form-wrapper-top">    
          <div class="produk-foto">
            <label>Foto Produk</label>
            <div class="produk-ubah-foto-border">
              <img src="<?php echo $this->config->item("url_produk") . $produk['foto_produk']; ?>">
            </div>      

            <div class="custom-file-edit">
              <label for="foto_produk" class="btn-custom">Masukan Foto baru</label>
              <input type="file" id="foto_produk" name="foto_produk" class="form-control">
            </div>
          </div>

          <div class="produk-inputs-container">
            <div class="">
              <label>Kategori Produk</label>
              <select class="form-control form-select" name="id_kategori">
                <option value="<?php echo $produk['id_kategori']; ?>" selected disabled>
                  <?php echo $produk['nama_kategori']; ?>
                </option>

                <?php foreach ($kategori as $key => $value) : ?>
                  <?php if ($value['id_kategori'] !== $produk['id_kategori']) : ?>

                    <option value="<?php echo $value['id_kategori']; ?>">
                      <?php echo $value['nama_kategori']; ?>
                    </option>
                    
                  <?php endif; ?>
                <?php endforeach; ?>
                
              </select>
            </div>

            <div class="">
              <label>Nama Produk</label>
              <input type="text" name="nama_produk" class="form-control" value="<?php echo $produk['nama_produk'] ?>"></input>
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