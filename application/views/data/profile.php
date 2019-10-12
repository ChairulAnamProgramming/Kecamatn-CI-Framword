<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-9">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>
  <div class="card mb-3 mt-3">
    <div class="row no-gutters">
      <div class="col-md-12">
        <div class="card-body  bg-transparent">
          <img src="<?= base_url('assets/img/profile/default.jpg') ?>" width="100" height="100" class="img-fluid rounded-circle
" alt="Responsive image">
          <hr>
          <marquee> <?= $bip['alamat'] . " / " . $bip['nama_prop'] . " / " . $bip['nama_kab'] . " / " . $bip['nama_kec']; ?></marquee>
          <div class="row">
            <table class="table table-borderless col-md-6">
              <tr>
                <td>Nama </td>
                <td> : </td>
                <td> <?= $bip['nama'] ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin </td>
                <td> : </td>
                <td> <?php if ($bip['jk'] == "L") {
                        echo "Laki-Laki";
                      } elseif ($bip['jk'] == "P") {
                        echo "Perempuan";
                      } ?></td>
              </tr>
              <tr>
                <td>Nik </td>
                <td> : </td>
                <td> <?= $bip['nik'] ?></td>
              </tr>
              <tr>
                <td>TTL </td>
                <td> : </td>
                <td> <?= $bip['tmpt_lhr'] . "-" . $bip['tgl_lhr'] ?></td>
              </tr>
              <tr>
                <td>Status </td>
                <td> : </td>
                <?php if ($bip['status'] == "Kawin") : ?>
                  <td id="stts" class="badge badge-successbadge badge-pill badge-success"> <?= $bip['status']; ?></td>
                <?php elseif ($bip['status'] == "Belum Kawin") : ?>
                  <td id="stts" class="badge badge-successbadge badge-pill badge-warning"> <?= $bip['status']; ?></td>
                <?php elseif ($bip['status'] == "Cerai Hidup") : ?>
                  <td id="stts" class="badge badge-successbadge badge-pill badge-danger"> <?= $bip['status']; ?></td>
                <?php elseif ($bip['status'] == "Cerai Mati") : ?>
                  <td id="stts" class="badge badge-successbadge badge-pill badge-secondary"> <?= $bip['status']; ?></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td>Golongan Darah </td>
                <td> : </td>
                <td> <?= $bip['gdr']; ?></td>
              </tr>

              <tr>
                <td>Agama </td>
                <td> : </td>
                <td> <?= $bip['agama']; ?></td>
              </tr>

              <tr>
                <td>Pekerjaan </td>
                <td> : </td>
                <td> <?= $bip['pekerjaan']; ?></td>
              </tr>
            </table>


            <table class="table table-borderless col-md-6">
              <tr>
                <td>Shdk </td>
                <td> : </td>
                <td> <?= $bip['shdk'] ?></td>
              </tr>
              <tr>
                <td>Shdrt </td>
                <td> : </td>
                <td> <?= $bip['shdrt'] ?></td>
              </tr>
              <tr>
                <td>Pendidikan Akhir </td>
                <td> : </td>
                <td> <?= $bip['pddk_akhir'] ?></td>
              </tr>
              <tr>
                <td>Kepala Keluarga </td>
                <td> : </td>
                <td> <?= $bip['nama_kep_kel']; ?></td>
              </tr>
              <tr>
                <td>Nama Ayah </td>
                <td> : </td>
                <td> <?= $bip['nama_ayah']; ?></td>
              </tr>

              <tr>
                <td>Nama Ibu </td>
                <td> : </td>
                <td> <?= $bip['nama_ibu']; ?></td>
              </tr>

              <tr>
                <td>No.Kk </td>
                <td> : </td>
                <td> <?= $bip['no_kk']; ?></td>
              </tr>

            </table>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->