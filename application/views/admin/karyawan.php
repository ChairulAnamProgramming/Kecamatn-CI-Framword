<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

  <div class="col-lg">
    <?php if ($this->session->userdata('message') == true) : ?>
      <div class="flash-data" data-flashdata="<?= $this->session->userdata('message') ?> "></div>
    <?php endif; ?>

    <div class="card shadow mb-4 mt-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Karyawan</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Nip</th>
                <th>Handphone</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($employee as $emp) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $emp['name']; ?></td>
                  <td><?= $emp['nik']; ?></td>
                  <td><?= $emp['nip']; ?></td>
                  <td><?= $emp['telp']; ?></td>
                  <td><?= $emp['jabatan']; ?></td>
                  <td><?= $emp['email']; ?></td>
                  <td>
                    <a href="<?= base_url('Admin/edite_employee/') . $emp['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Admin/delete_employee/') . $emp['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
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