<div class="row ">
  <div class="col-md-12 mt-4">
    <div class="card">
      <div class="card-header pb-0 px-3">
        <h6 class="mb-0">Informasi Pelanggaran Santri</h6>
      </div>
      <div class="card-body pt-4 p-3">
        <ul class="list-group">
          <?php
          foreach ($crs as $dd) : ?>
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm"><?= $dd->kasus ?></h6>
                <span class="mb-2 text-xs">Tanggal Kejadian : <span class="text-dark font-weight-bold ms-sm-2"><?= $dd->tanggal ?></span></span>
                <span class="mb-2 text-xs">Tempat Kejadian : <span class="text-dark ms-sm-2 font-weight-bold"><?= $dd->tempat ?></span></span>
                <span class="mb-2 text-xs">Ket : <span class="text-dark ms-sm-2 font-weight-bold"><?= $dd->stts ?></span></span>
              </div>
              <div class="ms-auto text-end">
                <a class="btn btn-link text-success text-gradient px-3 mb-0" href="<?= base_url('crash/detail/') . $dd->id ?>"><i class="far fa-edit me-2"></i>Lihat Detail</a>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

</div>