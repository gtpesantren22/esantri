<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                                <div
                                    class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                    <i class="fa fa-user opacity-10"></i>
                                </div>
                            </div>
                            <div class="card-body pt-0 p-3">
                                <h6 class="text-center mb-0">Profile Saya</h6>
                                <hr class="horizontal dark my-3">
                                <?php if ($this->session->flashdata('error')) { ?>
                                <span class="badge badge-sm bg-gradient-danger badge-block"><i class="fa fa-times"></i>
                                    <?= $this->session->flashdata('error'); ?></span>
                                <?php } elseif ($this->session->flashdata('ok')) { ?>
                                <span class="badge badge-sm bg-gradient-success badge-block"><i class="fa fa-check"></i>
                                    <?= $this->session->flashdata('ok'); ?></span>
                                <?php } ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>NIS</th>
                                            <th>:</th>
                                            <th><?= $dtsn->nis; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <th>:</th>
                                            <th><?= $dtsn->nama; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <th>:</th>
                                            <th><?= $dtsn->desa . ' - ' . $dtsn->kec . ' - ' . $dtsn->kab; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Kelas Formal</th>
                                            <th>:</th>
                                            <th><?= $dtsn->k_formal . ' - ' . $dtsn->jurusan . ' - ' . $dtsn->r_formal . ' - ' . $dtsn->t_formal; ?>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Kelas Madin</th>
                                            <th>:</th>
                                            <th><?= $dtsn->k_madin . ' ' . $dtsn->r_madin; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Kamar</th>
                                            <th>:</th>
                                            <th><?= $dtsn->kamar . ' - ' . $dtsn->komplek; ?></th>
                                        </tr>
                                        <tr>
                                            <th>No. HP</th>
                                            <th>:</th>
                                            <th>
                                                <form action="<?= base_url('profile/upHp') ?>" method="post">
                                                    <input type="hidden" name="nis" value="<?= $dtsn->nis ?>">
                                                    <input type="text" class="form-control" name="hp"
                                                        value="<?= $dtsn->hp ?>">
                                                    <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                                                </form>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Ganti Password</th>
                                            <th>:</th>
                                            <th>
                                                <form action="<?= base_url('profile/upPass') ?>" method="post">
                                                    <input type="hidden" name="nis" value="<?= $dtsn->nis ?>">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="Masukan password baru" required>
                                                    <input type="password" class="form-control" name="password2"
                                                        placeholder="Ulangi password baru" required>
                                                    <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                                                </form>
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>