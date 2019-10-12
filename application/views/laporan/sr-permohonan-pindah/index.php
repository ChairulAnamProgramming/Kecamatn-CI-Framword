<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

    <div class="col-lg">
        <?php if ($this->session->userdata('message') == true) : ?>
            <div class="flash-data" data-flashdata="<?= $this->session->userdata('message') ?> "></div>
        <?php endif; ?>



        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                 <div class="row ">
                    <div class="col-sm-3 col-12 text-center">
                         <img src="<?= base_url('assets/img/logo-hss.png') ?>" class="img-fluid" style="width: 50px;">
                    </div>
                    <div class="col-sm-6 text-center">
                        <h5>PEMERINTAH KABUPATEN HULU SUNGAI SELATAN</h5>
                        <h3>KECAMATAN DAHA UTARA</h3>
                        <p class="font-weight-bold">Alamat: Jalan Tambak Bitin,Kode Pos 71253</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a href="<?= base_url('Print_pdf/srpp/') ?>" class="btn btn-xs btn-info my-1 "><i class="fas fa-print"></i>Print Laporan</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <?php foreach ($srppindah as $srpp) : ?>
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





    </div>
</div>