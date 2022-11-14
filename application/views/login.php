
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 mt-5 pt-5 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header"><h3>Login - Klinik Bahagia</h3></div>
              <div class="card-body">
                <form method="POST" action="auth/aksi_login">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>
                  <div class="form-group mt-3">
                  <input type="submit" class="btn btn-primary" value="Login">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url() ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
</html>