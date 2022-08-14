<div class="row ">
  <div class="col-md-12 mt-2">
    <a href="<?= base_url('absen'); ?>" class="btn bg-gradient-success">Absen Formal</a>
    <a href="<?= base_url('absen/madin'); ?>" class="btn">Absen Madin</a>
  </div>
  <div class="col-md-12 mt-4">
    <div class="card h-100 mb-4">
      <div class="card-header pb-0 px-3">
        <div class="row">
          <div class="col-md-12">
            <h6 class="mb-0">Absensi Kehadiran Santri (Formal) </h6>
          </div>
        </div>
      </div>
      <div class="card-body pt-4 p-3">
        <?php
        $bn = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        foreach ($abs as $abse) : ?>
          <h3 class="text-uppercase text-body text-xs font-weight-bolder mb-3">
            <i class="far fa-calendar-alt me-2"></i>
            Absen Terakhir : Bulan <?= $bn[$abse->bulan]; ?>, Minggu ke-<?= $abse->minggu; ?> (<?= $abse->rentang; ?>)
          </h3>
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-primary mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fa fa-warning"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Izin - I</h6>
                </div>
              </div>
              <div class="d-flex align-items-center text-primary text-gradient text-sm font-weight-bold">
                <?= $abse->izin; ?> kali
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-warning mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fa fa-hospital"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Sakti - S</h6>
                </div>
              </div>
              <div class="d-flex align-items-center text-warning text-gradient text-sm font-weight-bold">
                <?= $abse->sakit; ?> kali
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-times"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Alpha - A</h6>
                </div>
              </div>
              <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                <?= $abse->alpha; ?> kali
              </div>
            </li>

          </ul>
          <hr>
          <h3 class="text-uppercase text-body text-xs font-weight-bolder mb-3">
            Ket : <?= $abse->ket; ?>
          </h3>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="col-md-12 mt-4">
    <div class="card h-100 mb-4">
      <div class="card-header pb-0 px-3">
        <div class="row">
          <div class="col-md-12">
            <h6 class="mb-0"><i class="fa fa-search"></i> Data Absensi Kehadiran Santri (Formal) </h6>
          </div>
        </div>
      </div>
      <div class="card-body pt-4 p-3">
        <div class="table-responsive p-0">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class=" text-sm  ">Bulan</th>
                <th class="text-sm  ">Izin</th>
                <th class="text-sm  ">Sakit</th>
                <th class="text-sm  ">Alpha</th>
                <th class="text-sm  ">Ket</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $bn = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
              foreach ($abs_all as $abs_allOk) : ?>
                <tr>
                  <td>
                    <span class="badge badge-sm bg-gradient-success"><?= $bn[$abs_allOk->bulan]; ?></span>
                    <span class="badge badge-sm bg-gradient-primary"><?= 'Minggu ke-' . $abs_allOk->minggu; ?></span>
                  </td>
                  <td>
                    <h6 class="mb-0 text-sm"><?= $abs_allOk->izin; ?> kali</h6>
                  </td>
                  <td>
                    <h6 class="mb-0 text-sm"><?= $abs_allOk->sakit; ?> kali</h6>
                  </td>
                  <td>
                    <h6 class="mb-0 text-sm"><?= $abs_allOk->alpha; ?> kali</h6>
                  </td>
                  <td>
                    <h6 class="mb-0 text-sm"><?= $abs_allOk->ket; ?></h6>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>