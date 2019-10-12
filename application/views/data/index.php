<style>
  .card-body a {
    color: rgb(0, 128, 255);
    text-decoration: none;
    font-weight: bold;
  }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-2 text-gray-800 "><?= $title; ?></h1>

  <?php if ($this->session->userdata('message') == true) : ?>
    <div class="flash-data" data-flashdata="<?= $this->session->userdata('message') ?> "></div>
  <?php endif; ?>

  <div class="col-lg">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">BIP <?= date('Y') ?></h6>
      </div>
      <a href=" <?= base_url('Data/importBip') ?> " class="btn btn-primary col-lg-3 ml-3 mt-2">Import Data</a>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Status</th>
                <th>Kepala Keluarga</th>
                <th>Agama</th>
                <th>Rt</th>
                <th>Rw</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($bip as $b) : ?>

                <?php if ($b['jk'] == "L") {
                  $jk = "Laki-Laki";
                } else if ($b['jk'] == "P") {
                  $jk = "Perempuan";
                } ?>
                <tr>
                  <td><a href="<?= base_url('Data/profile/') . $b['nik'] ?>"><?= $b['nama']; ?></a></td>
                  <td><?= $b['nik']; ?></td>
                  <td><?= $b['status']; ?></td>
                  <td><?= $b['nama_kep_kel']; ?></td>
                  <td><?= $b['agama']; ?></td>
                  <td><?= $b['rt']; ?></td>
                  <td><?= $b['rw']; ?></td>
                  <td><?= $jk; ?></td>
                  <td><a href="<?= base_url('Data/deleteBip/') . $b['nik']; ?>" class="badge badge-danger tombol-hapus" style="color:blanchedalmond"><i class="fas fa-trash"></i></a></td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>


</div>