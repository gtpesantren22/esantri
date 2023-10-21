<!--
=========================================================
* Soft UI Dashboard - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/dpontren-ico.png">
  <link rel="icon" type="image/png" href="assets/img/dpontren-ico.png">
  <title>
    e-Santri
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />

  <style>
    #loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .loading-spinner {
      border: 4px solid rgba(255, 255, 255, 0.3);
      border-top: 4px solid #ffffff;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>
</head>

<body class="">
  <div id="loading-overlay">
    <div class="loading-spinner"></div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-0">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">e-Santri PPDWK</h3>
                  <p class="mb-0">Silahkan masukan username dan password anda!</p>
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('pesan')) { ?>
                    <span class="badge badge-sm bg-gradient-danger badge-block" style="width: 100%;"><i class="fa fa-times"></i> <?= $this->session->flashdata('pesan'); ?></span>
                  <?php } elseif ($this->session->flashdata('berhasil')) { ?>
                    <span class="badge badge-sm bg-gradient-success badge-block" style="width: 100%;"><i class="fa fa-check"></i> <?= $this->session->flashdata('berhasil'); ?></span>
                  <?php } ?>
                  <?php echo form_open('login/user_login_process'); ?>

                  <label>Username</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="NIS Santri" name="username" required aria-label="Email">
                  </div>
                  <label>Password</label>
                  <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" nae="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                  </div>
                  <?php echo form_close(); ?>

                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Belum punya akun?
                    <a href="<?= base_url('register'); ?>" class="text-info text-gradient font-weight-bold">Daftar disini !</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> by Admin PPDWK.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/sw/sweetalert2.all.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var loadingOverlay = document.getElementById("loading-overlay");

      // Fungsi untuk menampilkan loading
      function showLoading() {
        loadingOverlay.style.display = "flex";
      }

      // Fungsi untuk menyembunyikan loading
      function hideLoading() {
        loadingOverlay.style.display = "none";
      }

      // Menambahkan event listener untuk mengatur tampilan loading saat halaman sedang dimuat
      window.addEventListener("beforeunload", function() {
        showLoading();
      });

      // Menambahkan event listener untuk menyembunyikan loading setelah halaman selesai dimuat
      window.addEventListener("load", function() {
        hideLoading();
      });
    });
  </script>
</body>

</html>