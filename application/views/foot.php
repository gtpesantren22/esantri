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
</script>
</body>

</html>