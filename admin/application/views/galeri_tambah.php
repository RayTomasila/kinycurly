<section class="crud-container">
  <div class="container crud-wrapper">

    <div class="container-top ">
      <p class="section-title">Tambah Galeri</p>
    </div>

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">
        
        <div class="form-wrapper-top">   
          <div class="form-top-left-foto">
            <div class="display-uploaded-foto-galeri">
              <img id="image-preview" src="" alt="Uploaded Image"/>
            </div>
          
            <div class="custom-file-upload-container">            
              <label for="foto_galeri" class="custom-file-label">Masukan Foto Produk</label>
              <input type="file" id="foto-to-display" name="foto_galeri" onchange="previewImage()">
            </div>
          </div>


          <div class="inputs-container">
           <div class="">
              <label>Nama Galeri</label>
              <input type="text" name="nama_galeri" class="form-control" placeholder="Masukan Nama Galeri">
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