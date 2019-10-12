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
                        <input type="text" class="form-control" id="nik" name="nik" onkeyup="data_nik()" value="<?= set_value('nik'); ?>">
                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tmpt_lhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr" value="<?= set_value('tmpt_lhr'); ?>">
                        <?= form_error('tmpt_lhr', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?= set_value('tgl_lhr'); ?>">
                        <?= form_error('tgl_lhr', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jk" name="jk" value="<?= set_value('jk'); ?>">
                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="warganegara" class="col-sm-2 col-form-label">Warganegara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="warganegara" name="warganegara" value="Indonesia">
                        <?= form_error('warganegara', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="agama" name="agama" value="<?= set_value('agama'); ?>">
                        <?= form_error('agama', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="status" value="<?= set_value('status'); ?>">
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= set_value('pekerjaan'); ?>">
                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= set_value('pendidikan'); ?>">
                        <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_asal" class="col-sm-2 col-form-label">Alamat Asal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat_asal" name="alamat_asal">
                        <?= form_error('alamat_asal', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <br>
                <h4>Pindah Ke</h4>
                <hr>
                <div class="form-group row">
                    <label for="to_alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_alamat" name="to_alamat" value="<?= set_value('to_alamat'); ?>">
                        <?= form_error('to_alamat', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_desa" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_desa" name="to_desa" value="<?= set_value('to_desa'); ?>">
                        <?= form_error('to_desa', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_kecamatan" name="to_kecamatan" value="<?= set_value('to_kecamatan'); ?>">
                        <?= form_error('to_kecamatan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_kab" class="col-sm-2 col-form-label">Kab/Kota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_kab" name="to_kab" value="<?= set_value('to_kab'); ?>">
                        <?= form_error('to_kab', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_prov" class="col-sm-2 col-form-label">Prov</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="to_prov" name="to_prov" value="<?= set_value('to_prov'); ?>">
                        <?= form_error('to_prov', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="to_tanggal" class="col-sm-2 col-form-label">Pada Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="to_tanggal" name="to_tanggal" value="<?= set_value('to_tanggal'); ?>">
                        <?= form_error('to_tanggal', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alasan_pindah" class="col-sm-2 col-form-label">Alasan Pindah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alasan_pindah" name="alasan_pindah" value="<?= set_value('alasan_pindah'); ?>">
                        <?= form_error('alasan_pindah', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <br>
                <h4>Pengikut</h4>

                <div class="form-group row">
                    <label for="banyak" class="col-sm-3 col-form-label">Banyak Pengikut</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="banyak" name="banyak" max="6" min="0">

                    </div>
                    <button type="button" id="tambah-pengikut" class="btn btn-info btn-sm col-sm-1"><i class="fa fa-plus fa-xs"></i></button>
                </div>

                <div class="form-group row form-pengikut"></div>


                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Create</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<!-- /.container-fluid -->
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

    $('#tambah-pengikut').on('click', function() {

        for (let i = 1; i <= $('#banyak').val(); i++) {


            const FormPengikut = `<div class="form-group row">

                    <label for="nik_p" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control nik_p` + i + `" id="nik_p` + i + `" name="nik_p-` + i + `" onkeyup="data_pengikut()" value="<?= set_value('nik_p'); ?>">
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