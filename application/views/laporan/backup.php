<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

  <div class="col-lg">
    <?php if ($this->session->userdata('message') == true) : ?>
      <div class="flash-data" data-flashdata="<?= $this->session->userdata('message') ?> "></div>
    <?php endif; ?>

    <div class="card shadow mb-4 mt-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sk.Hilang</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Surat</th>
                <th>Nik</th>
                <th>Yang Hilang</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($skHilang as $h) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $h['nama']; ?></td>
                  <td><?= $h['nik']; ?></td>
                  <td><?= $h['hilang']; ?></td>
                  <td><?= $h['tgl_hilang']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/skhilang/') . $h['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_SkHilang/') . $h['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_SkHilang/') . $h['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sk.Izin Nikah</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Suami</th>
                <th>Nik Suami</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Nama Istri</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($skIzinNikah as $in) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $in['nama_suami']; ?></td>
                  <td><?= $in['nik_suami']; ?></td>
                  <td><?= $in['nama_istri']; ?></td>
                  <td><?= $in['nama_ayah']; ?></td>
                  <td><?= $in['nama_ibu']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/skIzinNikah/') . $in['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_skIzinNikah/') . $in['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_skIzinNikah/') . $in['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>



    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sk.Izin Ramai</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Perihal</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($skIzinRamai as $ir) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $ir['perihal']; ?></td>
                  <td><?= $ir['nama']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/skIzinRamai/') . $ir['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_skIzinRamai/') . $ir['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_skIzinRamai/') . $ir['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sk.Usaha</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($skUsaha as $u) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $u['nama']; ?></td>
                  <td><?= $u['nik']; ?></td>
                  <td><?= $u['alamat']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/skUsaha/') . $u['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_skUsaha/') . $u['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_skUsaha/') . $u['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sk.Tidak Mampu</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable5" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Pembuatan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($skTidakMampu as $tm) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $tm['nama']; ?></td>
                  <td><?= $tm['nik']; ?></td>
                  <td><?= $tm['pembuatan']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/skTidakMampu/') . $tm['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_skTidakMampu/') . $tm['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_skTidakMampu/') . $tm['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sk.Kematian</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable6" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Pada Hari</th>
                <th>Meninggal di</th>
                <th>Sebab</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($kematian as $kem) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $kem['nama']; ?></td>
                  <td><?= $kem['nik']; ?></td>
                  <td><?= $kem['pada_hari']; ?></td>
                  <td><?= $kem['meninggal_di']; ?></td>
                  <td><?= $kem['sebab']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/skKematian/') . $kem['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_skKematian/') . $kem['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_skKematian/') . $kem['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">SS.Kematian</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable8" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($Skematian as $sK) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $sK['nama']; ?></td>
                  <td><?= $sK['nik']; ?></td>
                  <td><?= $sK['alamat']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/ssKematian/') . $sK['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_ssKematian/') . $sK['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_ssKematian/') . $sK['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">S.Rekomendasi Permohonan Pindah</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable9" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($srPermohonanPindah as $srpp) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $srpp['nama']; ?></td>
                  <td><?= $srpp['nik']; ?></td>
                  <td><?= $srpp['alamat_asal']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/srPermohonanPindah/') . $srpp['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_srpermohonanPindah/') . $srpp['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_srpermohonanPindah/') . $srpp['kode_pengikut']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sk.Kelahiran</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable11" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Nama Anak</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($skKelahiran as $skk) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $skk['nama_ayah']; ?></td>
                  <td><?= $skk['nama_ibu']; ?></td>
                  <td><?= $skk['nama_anak']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/skKelahiran/') . $skk['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_skKelahiran/') . $skk['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_skKelahiran/') . $skk['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Surat Perintah Perjalanan Tugas</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable10" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Pangkat Golongan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($sppd as $spd) : ?>
                <tr>
                  <td><?= $i;
                      $i++; ?></td>
                  <td><?= $spd['nama_pegawai']; ?></td>
                  <td><?= $spd['pangkat_golongan']; ?></td>
                  <td>
                    <a href="<?= base_url('Word/sppd/') . $spd['id']; ?>" class="badge badge-info px-2 py-2 tombol-word"><i class="far fa-file-word"></i></i></a>
                    <a href="<?= base_url('Persuratan/edite_sppd/') . $spd['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                    <a href="<?= base_url('Persuratan/delete_sppd/') . $spd['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
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