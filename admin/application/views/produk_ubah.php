<section class="produk-tambah-container">
  <div class="produk-tambah-content container">

    <div class="container-top mb-5">
      <p class="section-title">Ubah Produk</p>
    </div>

    

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">

      <div class="mb-3 ubah-foto-produk">
        <label>Foto Produk Lama</label>      
        <img style="max-height: 240px;" class="mb-3" src="<?php echo $this->config->item("url_produk") . $produk['foto_produk']; ?>">
        <div class="custom-file-upload">
          <label for="foto_produk" class="btn-custom">Masukan Foto baru</label>
          <input type="file" id="foto_produk" name="foto_produk" class="form-control">
      </div>

        <div class="tambah-produk-top-right">
          <div class="mb-3">
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

          <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="<?php echo $produk['nama_produk'] ?>"></input>
          </div>
        </div>


        <button type="submit" class="btn-bg-yellow mt-3">Simpan</button>
      </form>

    </div>
  </div>
</section>