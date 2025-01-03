<section class="crud-container">
  <div class="container crud-wrapper">

    <div class="container-top ">
      <p class="section-title">Tambah Galeri</p>
    </div>

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">
        
        <div class="form-wrapper-top">   
          <div class="form-top-left-foto">
            <div class="display-uploaded-foto">
              
            </div>
          
            <div class="custom-file-upload-container">            
              <label for="foto_galeri" class="custom-file-label">Masukan Foto Galeri</label>
              <input type="file" id="foto_galeri" name="foto_galeri" class="">
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