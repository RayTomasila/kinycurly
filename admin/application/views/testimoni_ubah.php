<section class="crud-container">
  <div class="container crud-wrapper">

    <p class="section-title">Ubah testimoni</p>

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">

        <div class="form-wrapper-top">
          <div class="ubah-foto-container">
            <label>Foto </label>
            <div class="ubah-foto-border">
              <img src="<?php echo $this->config->item("url_testimoni") . $testimoni['foto_customer']; ?>">
            </div>

            <div class="custom-file-edit">
              <label for="foto_testimoni" class="btn-custom">Masukan Foto baru</label>
              <input type="file" id="foto_testimoni" name="foto_testimoni" class="form-control">
            </div>
          </div>

          <div class="inputs-container">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_customer" class="form-control" value="<?php echo $testimoni['nama_customer'] ?>"></input>

            <div class="rating-container">
              <label>Rating</label>
              <select name="jumlah_rating" id="jumlah_rating">
                <option value="" disabled selected class="text-rating-testimoni">Pilih Rating</option> 
                <?php for ($k = 1; $k <= 5; $k++): ?>
                  <option value="<?= $k ?>" <?php if ($testimoni['jumlah_rating'] == $k) echo 'selected'; ?>><?= $k ?></option>
                <?php endfor; ?>
              </select>
              <span class="custom-arrow"></span>
            </div>

            <div class="inputs-container">
              <label>Komentar</label>
              <textarea type="text" name="isi_testimoni" class="form-control"><?php echo $testimoni['isi_testimoni'] ?></textarea>
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