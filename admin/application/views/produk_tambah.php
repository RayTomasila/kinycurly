<div class="container mt-4">

  <div class="container-top mb-4">
    <p class="page-title">Tambah Produk</p>
  </div>

    <form method="post" enctype="multipart/form-data">
      
    <div class="mb-3">
            <label>Kategori Produk</label>
            <select class="form-control form-select" name="id_kategori">
                <option value="">Pilih</option>

                <?php foreach ($kategori as $key => $value) : ?>
                
                    <option value="<?php echo $value['id_kategori'] ?>">
                        <?php echo $value['nama_kategori'] ?>
                    </option>
                
                <?php endforeach ?>
            </select>
        </div>


      <div class="mb-3">
        <label>Nama produk</label>
        <input type="text" name="nama_produk" class="form-control">
      </div>
            
      <div class="mb-3">
        <label>Foto Produk</label>
        <input type="file" name="foto_produk" class="form-control">
      </div>
      
      <button type="submit" class="btn-bg-green mt-3">Tambah produk</button>
    </form>

</div>