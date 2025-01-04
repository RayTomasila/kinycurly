<section class="crud-container">
  <div class="container crud-wrapper">

    <div class="container-top ">
      <p class="section-title">Tambah Testimoni</p>
    </div>

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">
        
        <div class="form-wrapper-top">   
        <div class="form-top-left-foto">
            <div class="display-uploaded-foto">
              <img id="image-preview" src="<?php echo $this->config->item("url_testimoni") . "/default-pfp.jpg"; ?>" alt="Uploaded Image"/>
            </div>
          
            <div class="custom-file-upload-container">            
              <label for="foto_customer" class="custom-file-label">Masukan Foto Customer</label>
              <input type="file" id="foto-to-display" name="foto_customer" onchange="previewImage()">
            </div>
          </div>


          <div class="inputs-container">
           <div>
              <label>Nama Pelanggan</label>
              <input type="text" name="nama_customer" class="form-control" placeholder="Masukan Nama Pelanggan">
            </div>

            <div class="rating-container">
              <label>Rating</label>
              <select name="jumlah_rating" id="jumlah_rating" style="width: 100%; padding-right: 40px;">
                <option value="" selected disabled class="text-rating-testimoni">Pilih Rating</option>
                <?php for ($k = 1; $k <= 5; $k++): ?>
                  <option value="<?= $k ?>"><?= $k ?></option>
                <?php endfor; ?>
              </select>
              <span class="custom-arrow"></span>
            </div>


            <div class="inputs-container">
              <label>Komentar</label>
              <textarea type="text" name="isi_testimoni" class="form-control" placeholder="Masukan Komentar Pelanggan"></textarea>
            </div>
          </div>

        </div>
        
        <div class="crud-button-container">
          <button type="submit" class="btn-bg-yellow mt-3">Simpan</button>
        </div>
      </form>

    </div>
  </div>
</section>