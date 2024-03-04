<div class="row">
    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Saku Saya</p>
                            <h5 class="font-weight-bolder mb-0">
                                Rp. 0
                                <span class="text-success text-sm font-weight-bolder">kiriman</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Tanggungan Saya</p>
                            <h5 class="font-weight-bolder mb-0">
                                <?php if ($tangg === 'Tidak Ada Tanggungan Biaya Pendidikan') {
                                    echo $tangg;
                                } else {
                                    echo "Rp. " . number_format(($tangg->ju_ap * 10) + ($tangg->me_ju * 2), 0, ',', '.');
                                } ?>
                                <span class="text-danger text-sm font-weight-bolder"> (setahun)</span>

                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                            <p class="mb-1 pt-2 text-bold">Selamat Datang</p>
                            <h5 class="font-weight-bolder"><?= $dtsn->nama; ?></h5>
                            <p class="mb-1"><?= $dtsn->desa . ' - ' . $dtsn->kec . ' - ' . $dtsn->kab; ?></p>
                            <p class="mb-1">
                                <?= $dtsn->k_formal . ' ' . $dtsn->r_formal . ' ' . $dtsn->jurusan . ' - ' . $dtsn->t_formal; ?>
                            </p>
                            <p class="mb-1"><?= $dtsn->k_madin . ' ' . $dtsn->r_madin; ?></p>
                            <p class="mb-1"><?= $dtsn->kamar . ' / ' . $dtsn->komplek; ?></p>
                            <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                Read More
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                        <div class="bg-gradient-primary border-radius-lg h-100">
                            <img src="assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                            <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                <img class="w-100 position-relative z-index-2 pt-4" src="assets/img/illustrations/rocket-white.png" alt="rocket">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex flex-column h-100">
                            <p class="mb-1 pt-2 text-bold">Tanggungan Peryaratan Pulang</p>
                            <div class="table-responsive-sm">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tindakan</th>
                                            <th scope="col">Nominal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($syarat as $sy) : ?>
                                            <tr>
                                                <td style="width: 60%;"><b class="text-primary"><?= $no++ ?>. <?= $sy->tindakan ?></b><br>: <?= $sy->ket ?></td>
                                                <td style="width: 40%;"><?= number_format($sy->nominal) ?> <?= $sy->status == 'lunas' ? "<span class='badge bg-success'><i class='fa fa-check'></i></span>" : "<span class='badge bg-danger'><i class='fa fa-times'></i></span>" ?></td>
                                                <!-- <td width="20%"></td> -->
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>TOTAL</th>
                                            <th><?= number_format($total->jml) ?></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>