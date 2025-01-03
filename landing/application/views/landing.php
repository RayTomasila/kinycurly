<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kinycurly</title>

  <!-- Bootstrap & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Bootstrap & JS -->

  <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Fonts -->

  <!-- CSS Styles -->
    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/general.css') ?>">
    </link>
    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/landing-navbar.css') ?>">
    </link>

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/beranda.css') ?>">
    </link>

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/about.css') ?>">
    </link>

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/produk.css') ?>">
    </link>

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/galeri.css') ?>">
    </link>

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/testimoni.css') ?>">
    </link>

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/footer.css') ?>">
    </link>

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url('../public/styles/admin/produk-galeri.css') ?>">
    </link>
  <!-- CSS Styles -->

</head>

<body>

  <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top">
      <div class="container">
        <a href="#beranda" class="navbar-brand">KINICURLY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#produk">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimoni">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Navbar Section -->

  <!-- Beranda Section -->
    <section class="beranda" id="beranda">
      <div class="container">

        <div class="left-section">
          <p class="beranda-title">Temukan gaya terbaik <span></span></p>
          <p class="beranda-sub-title">Si kecil bersama <span>KINYCURLY</span></p>
          <p class="beranda-text mt-3">Kami berisaha menyajikan koleksi fashion anak yang trendi, nyaman, dan berkualitas tinggi. Setiap pakaian dirancang dengan perhatian penuh pada detail, memastikan si kecil tampil modis dan percaya diri dalam berbagai momen, dari bermain hingga acara spesial. </p>

          <a href="#produk"><button class="btn-bg-yellow-landing mt-4"><span>Lihat Produk</span></button></a>
        </div>

        <div class="right-section">
          <img src="../public/assets/landing/beranda-image.png" alt="">
        </div>
      </div>

    </section>
  <!-- Beranda Section -->

  <!-- About Section -->
    <section class="about" id="about">
      <div class="container">
        <div class="about-top-section">
          <img src="../public/assets/landing/about-image.png" alt="">

          <div class="about-top-right-section">
            <p class="about-title-tentang">Tentang Kami</p>
            <p class="about-text mt-3">Di Kinycurly Jogja, kami berkomitmen untuk menghadirkan fashion anak yang tidak hanya stylish, tetapi juga nyaman dan berkualitas tinggi. Setiap koleksi kami dirancang dengan cinta, penuh perhatian terhadap detail, dan mengikuti tren terbaru, untuk memastikan si kecil selalu tampil percaya diri dan ceria. Kami percaya bahwa setiap anak berhak mendapatkan pakaian yang mencerminkan kepribadian unik mereka, sambil tetap memberikan kenyamanan sepanjang hari. Kinycurly hadir untuk menjadi pilihan utama para orang tua yang ingin memberikan yang terbaik bagi buah hati mereka.</p>
          </div>
        </div>


        <div class="about-bottom-section">
          <div class="about-bottom-left-section">
            <p class="about-title">Visi</p>
            <p class="about-text mt-3">Kami memiliki tujuan untuk menjadi brand fashion anak terkemuka yang dikenal luas berkat inovasi, kualitas unggul, dan desain yang selalu mengikuti tren terbaru, sambil memberikan kenyamanan dan meningkatkan kepercayaan diri setiap anak yang mengenakannya.</p>
          </div>

          <div class="about-bottom-right-section">
            <p class="about-title">Misi</p>
            <p class="about-text mt-3">Misi kami adalah menyediakan koleksi fashion anak yang stylish, nyaman, dan berkualitas tinggi dengan mengutamakan kepuasan pelanggan melalui desain yang fungsional dan aman, memberikan layanan yang ramah serta profesional.</p>
          </div>
        </div>

      </div>
    </section>
  <!-- About Section -->

  <!-- Produk Section -->
    <section class="produk" id="produk">
      <div class="container">
        <p class="section-title-landing">Produk</p>

        <div class="produk-grid-container custom-scroll">
          <?php foreach ($produk as $items): ?>
            <div class="produk-img-container">
              <img src="<?php echo $this->config->item("url_produk") . $items['foto_produk'] ?>" alt="">
              <div class="produk-name">
                <p><?php echo $items['nama_produk'] ?></p>
              </div>
            </div>
          <?php endforeach ?>
        </div>

      </div>
    </section>
  <!-- Produk Section -->

  <!-- Galeri Section -->
    <section class="galeri" id="galeri">
      <div class="container">
        <p class="section-title-landing">Galeri</p>

        <p class="galeri-text my-5">Di Kinycurly Jogja, kami berkomitmen untuk menghadirkan fashion anak yang tidak hanya stylish, tetapi juga nyaman dan berkualitas tinggi. Setiap koleksi kami dirancang dengan cinta, penuh perhatian terhadap detail, dan mengikuti tren terbaru, untuk memastikan si kecil selalu tampil percaya diri dan ceria. Kami percaya bahwa setiap anak berhak mendapatkan pakaian yang mencerminkan kepribadian unik mereka, sambil tetap memberikan kenyamanan sepanjang hari. Kinycurly hadir untuk menjadi pilihan utama para orang tua yang ingin memberikan yang terbaik bagi buah hati mereka.</p>

        <div class="galeri-image-container">
          <?php foreach ($galeri as $key => $value): ?>
            <div class="galeri-img-wrapper">
              <img src="<?php echo $this->config->item('url_galeri') . $value['foto_galeri'] ?>" alt="">
            </div>
          <?php endforeach ?>
        </div>

      </div>
    </section>
  <!-- Galeri Section -->

  <!-- Testimoni Section -->
    <section class="testimoni" id="testimoni">
      <div class="container">
        <p class="section-title-landing">Testimoni</p>

        <div class="card-container custom-scroll">
          <?php foreach ($testimoni as $key => $value): ?>
            <div class="card-wrapper-testimoni">        
              <div class="card-testimoni">

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
              </div>
            </div>
          <?php endforeach ?>

        </div>
      </div>
    </section>
  <!-- Testimoni Section -->

  <!-- Footer Section -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">

          <div class="footer-top-left">
            <a class="footer-brand" href="#beranda">KINICURLY</a>

          </div>

          <div class="footer-top-mid">
            <p class="footer-section-title-landing">Ikuti Kami</p>
            <ul class="social-media">
              <li>
                <a href=""><img src="../public/assets/landing/fb.png" alt="facebook">@KiniCurly</a>
              </li>
              <li>
                <a href=""><img src="../public/assets/landing/gmail.png" alt="Gmail">kiny@gmail.com</a>
              </li>
              <li>
                <a href=""><img src="../public/assets/landing/ig.png" alt="">@kinycurly</a>
              </li>
              <li>
                <a href=""><img src="../public/assets/landing/path.png" alt="">Kinycurly</a>
              </li>
              <li>
                <a href=""><img src="../public/assets/landing/tiktok.png" alt="">kiny_curly</a>
              </li>
              <li>
                <a href=""><img src="../public/assets/landing/wa.png" alt="">085342618391</a>
              </li>
            </ul>
          </div>

          <div class="footer-top-right">
            <p class="footer-section-title-landing">Alamat</p>
            <p class="footer-section-content">jl. Gito gati Ds. Tambakrejo Sariharjo, Ngaglik, Sleman</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.9311276288813!2d110.32377299999999!3d-7.6905408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f05882a520b%3A0x89eff82d75a7d6ac!2sKinycurly!5e0!3m2!1sen!2sid!4v1733279406072!5m2!1sen!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-3"></iframe>
          </div>

        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">

          <div class="footer-bottom-left">
            <p>Copyright NETRA.ID</p>
          </div>

          <div class="footer-bottom-right">
            <ul class="footer-bottom-links">
              <li>
                <a href="#">TERMS</a>
              </li>
              <li>
                <a href="#">PRIVACY</a>
              </li>
              <li>
                <a href="#">SITEMAP</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </footer>
  <!-- Footer Section -->

</body>

<!-- Bootstrap CDN -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
<!-- Bootstrap CDN -->

</html>