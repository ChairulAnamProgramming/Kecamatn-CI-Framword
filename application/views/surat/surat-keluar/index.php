 
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
          
            <div class="col-lg">
            <?php if ($this->session->userdata('message') == true) :?>
              <div class="flash-data" data-flashdata="<?= $this->session->userdata('message')?> "></div>
            <?php endif; ?>
           
          <div class="card shadow mb-4 mt-4">
              <a href="<?= base_url('persuratan/tambahSuratKeluar'); ?>"class="badge badge-info"><i class="fas fa-plus"></i> Tambah</a>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Karyawan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Surat</th>
                      <th>Dari</th>
                      <th>Tanggal Masuk</th>
                      <th>Perihal</th>
                      <th>Scan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1?>
                    <?php foreach ($surat as $mes):?>
                    <tr>
                      <td><?= $i;$i++;?></td>
                      <td><?= $mes['no_surat'];?></td>
                      <td><?= $mes['dari'];?></td>
                      <td><?= $mes['tgl_masuk'];?></td>
                      <td><?= $mes['perihal'];?></td>
                      <td><?= $mes['scan'];?></td>
                      <td>
                      <a href="<?= base_url('persuratan/edite_suratKeluar/').$mes['id']; ?>" class="badge badge-success px-2 py-2"><i class="far fa-edit"></i></a>
                      <a href="<?= base_url('persuratan/delete_suratKeluar/').$mes['id']; ?>" class="badge badge-danger px-2 py-2 tombol-hapus"><i class="far fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>  
  </div>







      
        