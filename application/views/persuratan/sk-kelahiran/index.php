<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-4">
        <div class="col-lg-8">
            <?= $this->session->userdata('message') ?>
            <form action="" method="post">
                <h4>Data Ibu</h4>
                <hr>
                <div class="form-group row">
                    <label for="nik_ibu" class="col-sm-2 col-form-label">Nik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" onkeyup="ibu()" value="<?= set_value('nik_ibu'); ?>">
                        <?= form_error('nik_ibu', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_ibu" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= set_value('nama_ibu'); ?>">
                        <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tmpt_ibu" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tmpt_ibu" name="tmpt_ibu" value="<?= set_value('tmpt_ibu'); ?>">
                        <?= form_error('tmpt_ibu', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="tgl_ibu" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tgl_ibu" name="tgl_ibu" value="<?= set_value('tgl_ibu'); ?>">
                        <?= form_error('tgl_ibu', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?= set_value('pekerjaan_ibu'); ?>">
                        <?= form_error('pekerjaan_ibu', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_ibu" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" value="<?= set_value('alamat_ibu'); ?>">
                        <?= form_error('alamat_ibu', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <br>

                <h4>Data Ayah</h4>
                <hr>
                <div class="form-group row">
                    <label for="nik_ayah" class="col-sm-2 col-form-label">Nik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" onkeyup="ayah()" value="<?= set_value('nik_ayah'); ?>">
                        <?= form_error('nik_ayah', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= set_value('nama_ayah'); ?>">
                        <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tmpt_ayah" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tmpt_ayah" name="tmpt_ayah" value="<?= set_value('tmpt_ayah'); ?>">
                        <?= form_error('tmpt_ayah', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="tgl_ayah" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tgl_ayah" name="tgl_ayah" value="<?= set_value('tgl_ayah'); ?>">
                        <?= form_error('tgl_ayah', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?= set_value('pekerjaan_ayah'); ?>">
                        <?= form_error('pekerjaan_ayah', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_ayah" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" value="<?= set_value('alamat_ayah'); ?>">
                        <?= form_error('alamat_ayah', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <br>

                <h4>Data Anak</h4>
                <hr>
                <div class="form-group row">
                    <label for="nik_anak" class="col-sm-2 col-form-label">Nik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik_anak" name="nik_anak" onkeyup="anak()" value="<?= set_value('nik_anak'); ?>">
                        <?= form_error('nik_anak', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_anak" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="<?= set_value('nama_anak'); ?>">
                        <?= form_error('nama_anak', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jk_anak" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jk_anak" name="jk_anak" value="<?= set_value('jk_anak'); ?>">
                        <?= form_error('jk_anak', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tmpt_anak" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tmpt_anak" name="tmpt_anak" value="<?= set_value('tmpt_anak'); ?>">
                        <?= form_error('tmpt_anak', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="tgl_anak" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tgl_anak" name="tgl_anak" value="<?= set_value('tgl_anak'); ?>">
                        <?= form_error('tgl_anak', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="hari" name="hari" value="<?= set_value('hari'); ?>">
                        <?= form_error('hari', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="jam" name="jam" value="<?= set_value('jam'); ?>">
                        <?= form_error('jam', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="berat" name="berat" value="<?= set_value('berat'); ?>">
                        <?= form_error('berat', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>

                    <label for="panjang" class="col-sm-2 col-form-label">Panjang</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="panjang" name="panjang" value="<?= set_value('panjang'); ?>">
                        <?= form_error('panjang', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke-</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="anak_ke" name="anak_ke" value="<?= set_value('anak_ke'); ?>">
                        <?= form_error('anak_ke', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_anak" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat_anak" name="alamat_anak" value="<?= set_value('alamat_anak'); ?>">
                        <?= form_error('alamat_anak', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>


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
    function ibu() {
        var nik = $('#nik_ibu').val();
        $.ajax({
            url: "<?php echo base_url() ?>/Autocomplit/skKelahiran",
            data: 'nik=' + nik,
        }).done(function(data) {

            var json = data,
                obj = JSON.parse(json);
            $("#nama_ibu").val(obj.nama_ibu);
            $("#tmpt_ibu").val(obj.tmpt_ibu);
            $("#tgl_ibu").val(obj.tgl_ibu);
            $("#pekerjaan_ibu").val(obj.pekerjaan_ibu);
            $("#alamat_ibu").val(obj.alamat_ibu);
        });
    }


    function ayah() {
        var nik = $('#nik_ayah').val();
        $.ajax({
            url: "<?php echo base_url() ?>/Autocomplit/skKelahiran",
            data: 'nik=' + nik,
        }).done(function(data) {

            var json = data,
                obj = JSON.parse(json);
            $("#nama_ayah").val(obj.nama_ayah);
            $("#tmpt_ayah").val(obj.tmpt_ayah);
            $("#tgl_ayah").val(obj.tgl_ayah);
            $("#pekerjaan_ayah").val(obj.pekerjaan_ayah);
            $("#alamat_ayah").val(obj.alamat_ayah);
        });
    }


    function anak() {
        var nik = $('#nik_anak').val();
        $.ajax({
            url: "<?php echo base_url() ?>/Autocomplit/skKelahiran",
            data: 'nik=' + nik,
        }).done(function(data) {

            var json = data,
                obj = JSON.parse(json);
            $("#nama_anak").val(obj.nama_anak);
            $("#tmpt_anak").val(obj.tmpt_anak);
            $("#tgl_anak").val(obj.tgl_anak);
            $("#jk_anak").val(obj.jk_anak);
            $("#pekerjaan_anak").val(obj.pekerjaan_anak);
            $("#alamat_anak").val(obj.alamat_anak);
        });
    }
</script>