<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-4">
        <div class="col-lg-8">
            <?= $this->session->userdata('message') ?>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">Nik</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="kode_pengikut" name="kode_pengikut" value="<?= $srpp['kode_pengikut']; ?>">
                        <input type="text" class="form-control" id="nik" name="nik" onkeyup="data_nik()" value="<?= $srpp['nik']; ?>">
                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $srpp['nama']; ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tmpt_lhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr" value="<?= $srpp['tmpt_lhr']; ?>">
                        <?= form_error('tmpt_lhr', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?= $srpp['tgl_lhr']; ?>">
                        <?= form_error('tgl_lhr', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jk" name="jk" value="<?= $srpp['jk']; ?>">
                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="warganegara" class="col-sm-2 col-form-label">Warganegara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="warganegara" name="warganegara" value="<?= $srpp['warganegara']; ?>">
                        <?= form_error('warganegara', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="agama" name="agama" value="<?= $srpp['agama']; ?>">
                        <?= form_error('agama', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="status" value="<?= $srpp['status']; ?>">
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $srpp['pekerjaan']; ?>">
                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= $srpp['pendidikan']; ?>">
                        <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_asal" class="col-sm-2 col-form-label">Alamat Asal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" value="<?= $srpp['alamat_asal']; ?>">
                        <?= form_error('alamat_asal', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <br>
                <h4>Pindah Ke</h4>
                <hr>
                <div class="form-group row">
                    <label for="to_alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_alamat" name="to_alamat" value="<?= $srpp['to_alamat']; ?>">
                        <?= form_error('to_alamat', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_desa" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_desa" name="to_desa" value="<?= $srpp['to_desa']; ?>">
                        <?= form_error('to_desa', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_kecamatan" name="to_kecamatan" value="<?= $srpp['to_kecamatan']; ?>">
                        <?= form_error('to_kecamatan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_kab" class="col-sm-2 col-form-label">Kab/Kota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_kab" name="to_kab" value="<?= $srpp['to_kab']; ?>">
                        <?= form_error('to_kab', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_prov" class="col-sm-2 col-form-label">Prov</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_prov" name="to_prov" value="<?= $srpp['to_prov']; ?>">
                        <?= form_error('to_prov', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_tanggal" class="col-sm-2 col-form-label">Pada Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="to_tanggal" name="to_tanggal" value="<?= $srpp['to_tanggal']; ?>">
                        <?= form_error('to_tanggal', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alasan_pindah" class="col-sm-2 col-form-label">Alasan Pindah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alasan_pindah" name="alasan_pindah" value="<?= $srpp['alasan_pindah']; ?>">
                        <?= form_error('alasan_pindah', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <br>
                <h4>Pengikut</h4>
                <div class="form-group row">
                    <div class="form-group row">

                        <label for="nik_p1" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control nik_p1" id="nik_p1" name="nik_p1" value="<?= $srpp['nik_p1'] ?>">
                            <?= form_error('nik_p1', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>


                        <label for="nama_p1" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_p1" name="nama_p1" value="<?= $srpp['nama_p1'] ?>">
                            <?= form_error('nama_p1', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="jk_p1" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="jk_p1" name="jk_p1" value="<?= $srpp['jk_p1'] ?>">
                            <?= form_error('jk_p1', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="umur_p1" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="umur_p1" name="umur_p1" value="<?= $srpp['umur_p1'] ?>">
                            <?= form_error('umur_p1', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="status_p1" class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="status_p1" name="status_p1" value="<?= $srpp['status_p1'] ?>">
                            <?= form_error('status_p1', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="pendidikan_p1" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="pendidikan_p1" name="pendidikan_p1" value="<?= $srpp['pendidikan_p1'] ?>">
                            <?= form_error('pendidikan_p1', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>





                        <label for="nik_p2" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control nik_p2" id="nik_p2" name="nik_p2" value="<?= $srpp['nik_p2'] ?>">
                            <?= form_error('nik_p2', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>


                        <label for="nama_p2" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_p2" name="nama_p2" value="<?= $srpp['nama_p2'] ?>">
                            <?= form_error('nama_p2', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="jk_p2" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="jk_p2" name="jk_p2" value="<?= $srpp['jk_p2'] ?>">
                            <?= form_error('jk_p2', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="umur_p2" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="umur_p2" name="umur_p2" value="<?= $srpp['umur_p2'] ?>">
                            <?= form_error('umur_p2', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="status_p2" class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="status_p2" name="status_p2" value="<?= $srpp['status_p2'] ?>">
                            <?= form_error('status_p2', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="pendidikan_p2" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="pendidikan_p2" name="pendidikan_p2" value="<?= $srpp['pendidikan_p2'] ?>">
                            <?= form_error('pendidikan_p2', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>







                        <label for="nik_p3" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control nik_p3" id="nik_p3" name="nik_p3" value="<?= $srpp['nik_p3'] ?>">
                            <?= form_error('nik_p3', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>


                        <label for="nama_p3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_p3" name="nama_p3" value="<?= $srpp['nama_p3'] ?>">
                            <?= form_error('nama_p3', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="jk_p3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="jk_p3" name="jk_p3" value="<?= $srpp['jk_p3'] ?>">
                            <?= form_error('jk_p3', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="umur_p3" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="umur_p3" name="umur_p3" value="<?= $srpp['umur_p3'] ?>">
                            <?= form_error('umur_p3', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="status_p3" class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="status_p3" name="status_p3" value="<?= $srpp['status_p3'] ?>">
                            <?= form_error('status_p3', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="pendidikan_p3" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="pendidikan_p3" name="pendidikan_p3" value="<?= $srpp['pendidikan_p3'] ?>">
                            <?= form_error('pendidikan_p3', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>





                        <label for="nik_p4" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control nik_p4" id="nik_p4" name="nik_p4" value="<?= $srpp['nik_p4'] ?>">
                            <?= form_error('nik_p4', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>


                        <label for="nama_p4" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_p4" name="nama_p4" value="<?= $srpp['nama_p4'] ?>">
                            <?= form_error('nama_p4', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="jk_p4" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="jk_p4" name="jk_p4" value="<?= $srpp['jk_p4'] ?>">
                            <?= form_error('jk_p4', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="umur_p4" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="umur_p4" name="umur_p4" value="<?= $srpp['umur_p4'] ?>">
                            <?= form_error('umur_p4', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="status_p4" class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="status_p4" name="status_p4" value="<?= $srpp['status_p4'] ?>">
                            <?= form_error('status_p4', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="pendidikan_p4" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="pendidikan_p4" name="pendidikan_p4" value="<?= $srpp['pendidikan_p4'] ?>">
                            <?= form_error('pendidikan_p4', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>








                        <label for="nik_p5" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control nik_p5" id="nik_p5" name="nik_p5" value="<?= $srpp['nik_p5'] ?>">
                            <?= form_error('nik_p5', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>


                        <label for="nama_p5" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_p5" name="nama_p5" value="<?= $srpp['nama_p5'] ?>">
                            <?= form_error('nama_p5', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="jk_p5" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="jk_p5" name="jk_p5" value="<?= $srpp['jk_p5'] ?>">
                            <?= form_error('jk_p5', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="umur_p5" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="umur_p5" name="umur_p5" value="<?= $srpp['umur_p5'] ?>">
                            <?= form_error('umur_p5', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="status_p5" class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="status_p5" name="status_p5" value="<?= $srpp['status_p5'] ?>">
                            <?= form_error('status_p5', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="pendidikan_p5" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="pendidikan_p5" name="pendidikan_p5" value="<?= $srpp['pendidikan_p5'] ?>">
                            <?= form_error('pendidikan_p5', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>







                        <label for="nik_p6" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control nik_p6" id="nik_p6" name="nik_p6" value="<?= $srpp['nik_p6'] ?>">
                            <?= form_error('nik_p6', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>


                        <label for="nama_p6" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_p6" name="nama_p6" value="<?= $srpp['nama_p6'] ?>">
                            <?= form_error('nama_p6', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="jk_p6" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="jk_p6" name="jk_p6" value="<?= $srpp['jk_p6'] ?>">
                            <?= form_error('jk_p6', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="umur_p6" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="umur_p6" name="umur_p6" value="<?= $srpp['umur_p6'] ?>">
                            <?= form_error('umur_p6', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="status_p6" class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="status_p6" name="status_p6" value="<?= $srpp['status_p6'] ?>">
                            <?= form_error('status_p6', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>

                        <label for="pendidikan_p6" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="pendidikan_p6" name="pendidikan_p6" value="<?= $srpp['pendidikan_p6'] ?>">
                            <?= form_error('pendidikan_p6', '<small class="text-danger pl-3">', '</small>');  ?>
                        </div>


                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

<script type="text/javascript">
    function data_nik() {
        var nik = $('#nik').val();
        $.ajax({
            url: "<?php echo base_url() ?>/Autocomplit/srPermohonanPindah",
            data: 'nik=' + nik,
        }).done(function(data) {

            var json = data,
                obj = JSON.parse(json);
            $("#nama").val(obj.nama);
            $("#tmpt_lhr").val(obj.tmpt_lhr);
            $("#tgl_lhr").val(obj.tgl_lhr);
            $("#jk").val(obj.jk);
            $("#agama").val(obj.agama);
            $("#status").val(obj.status);
            $("#pekerjaan").val(obj.pekerjaan);
            $("#pendidikan").val(obj.pendidikan);
            $("#alamat_asal").val(obj.alamat_asal);
        });
    }

    function data_pengikut() {
        for (let i = 1; i <= $('#banyak').val(); i++) {
            var nik = $('#nik_p' + i).val();
            $.ajax({
                url: "<?php echo base_url() ?>/Autocomplit/pindahPengikut",
                data: 'nik=' + nik,
            }).done(function(data) {

                var json = data,
                    obj = JSON.parse(json);
                $("#nama_p" + i).val(obj.nama);
                $("#jk_p" + i).val(obj.jk);
                $("#status_p" + i).val(obj.status);
                $("#pendidikan_p" + i).val(obj.pendidikan);
            });
        }
    }

    $.when($.ready).then(function() {

        for (let i = 1; i <= $('#banyak').val(); i++) {


            const FormPengikut = `<div class="form-group row">

                    <label for="nik_p" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control nik_p` + i + `" id="nik_p` + i + `" name="nik_p-` + i + `" onkeyup="data_pengikut()" value="<?= $srpp['nik_p1'] ?>">
                        <?= form_error('nik_p', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>


                    <label for="nama_p" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama_p` + i + `" name="nama_p-` + i + `" value="<?= set_value('nama_p'); ?>">
                        <?= form_error('nama_p', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="jk_p" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="jk_p` + i + `" name="jk_p-` + i + `" value="<?= set_value('jk_p'); ?>">
                        <?= form_error('jk_p', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="umur_p" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="umur_p` + i + `" name="umur_p-` + i + `" value="<?= set_value('umur_p'); ?>">
                        <?= form_error('umur_p', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="status_p" class="col-sm-2 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="status_p` + i + `" name="status_p-` + i + `" value="<?= set_value('status_p'); ?>">
                        <?= form_error('status_p', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="pendidikan_p" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="pendidikan_p` + i + `" name="pendidikan_p-` + i + `" value="<?= set_value('pendidikan_p'); ?>">
                        <?= form_error('pendidikan_p', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                    </div>`;


            $('.form-pengikut').append(FormPengikut);



        }
    })
</script>