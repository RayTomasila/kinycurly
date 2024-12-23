<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin KuKos</title>
    <!-- Bootstrap & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap & JS -->

    <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Fonts -->

    <!-- CSS Styles -->
      <link rel="stylesheet" type="text/css"      
        href="<?php echo base_url('../public/styles/admin/login.css') ?>">
      </link>
    <!-- CSS Styles -->

</head>
<body>
<section class="login-container">
    <div class="login-card">
      
      <form method="post">
        <h1>Login</h1>
        <div>    
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" name="username" class="form-control" 
                    value="<?php echo set_value('username'); ?>">
            <small class="text-danger"><?php echo form_error('username'); ?></small>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" 
                    value="<?php echo set_value('password'); ?>">
            <small class="text-danger"><?php echo form_error('password'); ?></small>
          </div>
        </div>

        <button type="submit" class="button-login w-100">Login</button>
      </form>
    </div>

    <div class="login-right">
      <img src="../public/assets/admin/loli-login.png" alt="">
    </div>
</section>

<!-- Footer -->
  <footer class="footer-bottom ">
    <div class="footer-container">
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
  </footer>
<!-- Footer -->


  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <?php if ($this->session->flashdata('pesan_sukses')): ?>
    <script>
      swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");
    </script>
  <?php endif; ?>

  <?php if ($this->session->flashdata('pesan_gagal')): ?>
    <script>
      swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");
    </script>
  <?php endif; ?>

</body>
</html>
