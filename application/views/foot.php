<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    by Admin PPDWK
                    @ <script>
                        document.write(new Date().getFullYear())
                    </script>
                </div>
            </div>

        </div>
    </div>
</footer>
</div>
</main>

<!--   Core JS Files   -->
<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/chartjs.min.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url(); ?>assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>

<script src="<?= base_url(); ?>assets/sw/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    <?php if ($this->session->flashdata('success')) { ?>
        var isi = <?= json_encode($this->session->flashdata('success')) ?>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: isi
        })
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
        var isi = <?= json_encode($this->session->flashdata('error')) ?>
        Swal.fire({
            icon: 'error',
            title: 'Berhasil',
            text: isi
        })
    <?php } ?>

    function updateUserStatus() {
        jQuery.ajax({
            url: '<?= base_url('home/updateLog') ?>',
            success: function() {

            }
        });
    }
    setInterval(function() {
        updateUserStatus();
    }, 1000);
</script>

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