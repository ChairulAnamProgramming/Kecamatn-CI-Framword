<!DOCTYPE html>
<html><head>
	<title></title>

   <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
	<style type="text/css">

		body{
			font-family: arial;
		}
	</style>
</head><body>
				 <div class="card  mb-4 mt-4">
            <div class="card-header py-3 ">
               
                <div class="row ">
                    <div class="col-sm-3 col-12 text-center">
                         <img src="<?= base_url('assets/img/logo-hss.png') ?>" class="img-fluid" style="width: 50px;">
                    </div>
                    <div class="col-sm-6 text-center">
                        <h5>PEMERINTAH KABUPATEN HULU SUNGAI SELATAN</h5>
                        <h3>KECAMATAN DAHA UTARA</h3>
                        <p class="font-weight-bold m-0">Alamat: Jalan Tambak Bitin,Kode Pos 71253</p>
                        <p class="font-weight-bold m-0"><?= $title; ?></p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nik</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($surat as $srpp) : ?>
                                <tr>
                                    <td><?= $srpp['nama']; ?></td>
                                    <td><?= $srpp['nik']; ?></td>
                                    <td><?= $srpp['alamat']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <table style="text-align: center; margin-left: auto;margin-right: 20px;" >
      <tr style="margin-bottom: 30px;">
        <th style="">Camat Daha Utara</th>
      </tr>
      <tr>
        <td>
          <img src="<?= base_url('assets/img/ttd.gif'); ?>" class="img-fluid" style="width: 200px;">
        </td>
      </tr>
      <tr><td>LOTHVIE RAHMANIE,S.STP,M.Si</td></tr>
      <tr><td>NIP:19811217879813989</td></tr>
    </table>
<script type="text/javascript">
  window.print()
</script>
</body></html>

