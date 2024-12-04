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
        href="<?php echo base_url('../public/styles/general.css') ?>">
      </link>

      <link rel="stylesheet" type="text/css"      
        href="<?php echo base_url('../public/styles/admin/header.css') ?>">
      </link>

      <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url('../public/styles/admin/produk.css') ?>">
      </link>
      
      <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url('../public/styles/admin/testimoni.css') ?>">
      </link>

      <link rel="stylesheet" type="text/css" 
       href="<?php echo base_url('../public/styles/admin/kontak.css') ?>">
      </link>

    <!-- CSS Styles -->


    <style>
        body {
            background-color: #f6f9f6; 
        }
        .login-container {
            margin-top: 15vh;
        }
        .login-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2rem;
        }
        .button-login {
          background-color: var(--secondary-color);
          padding: 8px 80px;
          border-radius: 15px;
          font-weight: 700;
          font-size: 19px;
          color: white;
        }
        .form-control:focus {
            border-color: #93d56b;
            box-shadow: 0 0 0 0.2rem rgba(147, 213, 107, 0.25);
        }
        h1 {
            color: var(--primary-color);
            font-weight: bold;
        }
        label {
            color: #5a5a5a;
        }


    </style>
</head>
<body>

  <div class="container login-container">
    <h1 class="text-center">Login Admin</h1>
    <div class="row justify-content-center mt-5">
      <div class="col-md-4 login-card">

        <form method="post">
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

          <button type="submit" class="button-login w-100">Login</button>
        </form>

      </div>
    </div>
  </div>

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
