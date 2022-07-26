<div class="row">
  <div class="col-lg-7">
    <div class="row">
      <div class="col-xl-6">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header mx-4 p-3 text-center">
                <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                  <i class="fas fa-landmark opacity-10"></i>
                </div>
              </div>
              <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">Jumlah Tanggungan</h6>
                <span class="text-xs">Tahun ajaran 2022/2023</span>
                <hr class="horizontal dark my-3">
                <h5 class="mb-0"><?= "Rp. " . number_format(($tangg->ju_ap * 10) + ($tangg->me_ju * 2), 0, ',', '.'); ?></h5>
                <br>
                <h6 class="mb-0"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;No. BRIVA : <?= $tangg->briva; ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Informasi pembayaran</h6>
              </div>
              <div class="col-6 text-end">
                <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;No. BRIVA : <?= $tangg->briva; ?></a>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <div class="row">
              <div class="col-md-6 mb-md-0 mb-4">
                <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                  <h6 class="mb-0">Masuk : </h6>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                  <h6 class="mb-0">Sisa : </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card h-100">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-0">Riwayat pembayaran</h6>
          </div>
        </div>
      </div>
      <div class="card-body p-3 pb-0">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex flex-column">
              <h6 class="mb-1 text-dark font-weight-bold text-sm">20 Juli 2022</h6>
              <span class="text-xs">#No Transaksi</span>
            </div>
            <div class="d-flex align-items-center text-sm">
              Rp. 1.200.000
            </div>
          </li>

          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex flex-column">
              <h6 class="mb-1 text-dark font-weight-bold text-sm">20 Juli 2022</h6>
              <span class="text-xs">#No Transaksi</span>
            </div>
            <div class="d-flex align-items-center text-sm">
              Rp. 1.200.000
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>