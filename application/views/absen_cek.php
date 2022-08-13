<div class="row ">
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
        <h3 class="text-uppercase text-body text-xs font-weight-bolder mb-3">
          <i class="far fa-calendar-alt me-2"></i>
          Hari ini, <?= date('d M Y'); ?>
        </h3>
        <?php foreach ($abs as $abse) : ?>
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fa fa-check"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Hadir - (H)</h6>
                </div>
              </div>
              <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                <?= $abse->H; ?> jam pelajaran
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-primary mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fa fa-warning"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Izin - I</h6>
                </div>
              </div>
              <div class="d-flex align-items-center text-primary text-gradient text-sm font-weight-bold">
                <?= $abse->izin; ?> jam pelajaran
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
                <?= $abse->sakit; ?> jam pelajaran
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
                <?= $abse->sakit; ?> jam pelajaran
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
            <h6 class="mb-0"><i class="fa fa-search"></i> Cek Absensi Kehadiran Santri berdasarkan tanggal </h6>
          </div>
        </div>
      </div>
      <div class="card-body pt-4 p-3">
        <?= form_open('absen/cek'); ?>
        <div class="form-group">
          <label for="">Pilih Tanggal</label>
          <div class="row">
            <div class="col-sm-8">
              <input type="date" class="form-control" name="tanggal" required>
            </div>
            <div class="col-sm-4">
              <button class="btn btn-danger btn-sm" type="submit">Cek</button>
            </div>
          </div>
        </div>
        <?= form_close(); ?>
        <hr>

        <h3 class="text-uppercase text-body text-xs font-weight-bolder mb-3">
          <i class="far fa-calendar-alt me-2"></i>
          Absensi tanggal : <?= date('d-M-Y', strtotime($tgl)); ?>
        </h3>
        <?php foreach ($cek_abs->result() as $abse_cek) : ?>
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fa fa-check"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Hadir - (H)</h6>
                </div>
              </div>
              <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                <?= $abse_cek->H; ?> jam pelajaran
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-primary mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fa fa-warning"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Izin - I</h6>
                </div>
              </div>
              <div class="d-flex align-items-center text-primary text-gradient text-sm font-weight-bold">
                <?= $abse_cek->izin; ?> jam pelajaran
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
                <?= $abse_cek->sakit; ?> jam pelajaran
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
                <?= $abse_cek->sakit; ?> jam pelajaran
              </div>
            </li>

          </ul>
          <hr>
          <h3 class="text-uppercase text-body text-xs font-weight-bolder mb-3">
            Ket : <?= $abse_cek->ket; ?>
          </h3>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>