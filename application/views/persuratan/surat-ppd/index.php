<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-4">
        <div class="col-lg-8">
            <?= $this->session->userdata('message') ?>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="nama_pegawai" class="col-sm-3 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" onkeyup="data_suami()" value="<?= set_value('nama_pegawai'); ?>">
                        <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pangkat_golongan" class="col-sm-3 col-form-label">Pangkat dan Golongan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pangkat_golongan" name="pangkat_golongan" onkeyup="data_istri()" value="<?= set_value('pangkat_golongan'); ?>">
                        <?= form_error('pangkat_golongan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" onkeyup="data_ayah()" value="<?= set_value('jabatan'); ?>">
                        <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tingkat_penurut_peraturan_perjalanan" class="col-sm-3 col-form-label">Tingkat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tingkat_penurut_peraturan_perjalanan" name="tingkat_penurut_peraturan_perjalanan" onkeyup="data_ibu()" value="<?= set_value('tingkat_penurut_peraturan_perjalanan'); ?>">
                        <?= form_error('tingkat_penurut_peraturan_perjalanan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="maksud_perjalanan_dinas" class="col-sm-3 col-form-label">Maksud perjalanan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="maksud_perjalanan_dinas" name="maksud_perjalanan_dinas" onkeyup="data_ibu()" value="<?= set_value('maksud_perjalanan_dinas'); ?>">
                        <?= form_error('maksud_perjalanan_dinas', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alat_angkut" class="col-sm-3 col-form-label">Angkutan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alat_angkut" name="alat_angkut" onkeyup="data_ibu()" value="<?= set_value('alat_angkut'); ?>">
                        <?= form_error('alat_angkut', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="berangkat" class="col-sm-3 col-form-label">Tempat Berangkat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="berangkat" name="berangkat" onkeyup="data_ibu()" value="<?= set_value('berangkat'); ?>">
                        <?= form_error('berangkat', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tujuan" class="col-sm-3 col-form-label">Tempat Tujuan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tujuan" name="tujuan" onkeyup="data_ibu()" value="<?= set_value('tujuan'); ?>">
                        <?= form_error('tujuan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lama_perjalanan" class="col-sm-3 col-form-label">Lama Perjalanan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lama_perjalanan" name="lama_perjalanan" onkeyup="data_ibu()" value="<?= set_value('lama_perjalanan'); ?>">
                        <?= form_error('lama_perjalanan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_perjalanan" class="col-sm-3 col-form-label">Tanggal Berangkat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tanggal_perjalanan" name="tanggal_perjalanan" onkeyup="data_ibu()" value="<?= set_value('tanggal_perjalanan'); ?>">
                        <?= form_error('tanggal_perjalanan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_kembali" class="col-sm-3 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tanggal_kembali" name="tanggal_kembali" onkeyup="data_ibu()" value="<?= set_value('tanggal_kembali'); ?>">
                        <?= form_error('tanggal_kembali', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pengikut" class="col-sm-3 col-form-label">Pengikut</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pengikut" name="pengikut" onkeyup="data_ibu()" value="<?= set_value('pengikut'); ?>">
                        <?= form_error('pengikut', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pembebanan_anggaran" class="col-sm-3 col-form-label">Pembebanan Anggarang</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pembebanan_anggaran" name="pembebanan_anggaran" onkeyup="data_ibu()" value="<?= set_value('pembebanan_anggaran'); ?>">
                        <?= form_error('pembebanan_anggaran', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="instansi" class="col-sm-3 col-form-label">Instansi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="instansi" name="instansi" onkeyup="data_ibu()" value="<?= set_value('instansi'); ?>">
                        <?= form_error('instansi', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="mata_anggaran" class="col-sm-3 col-form-label">Mata Anggaran</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="mata_anggaran" name="mata_anggaran" onkeyup="data_ibu()" value="<?= set_value('mata_anggaran'); ?>">
                        <?= form_error('mata_anggaran', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="keterangan_lain" class="col-sm-3 col-form-label">Ket.Lainnya</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="keterangan_lain" name="keterangan_lain" onkeyup="data_ibu()" value="<?= set_value('keterangan_lain'); ?>">
                        <?= form_error('keterangan_lain', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_sppd" class="col-sm-3 col-form-label">Nomor Sppd</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_sppd" name="no_sppd" onkeyup="data_ibu()" value="<?= set_value('no_sppd'); ?>">
                        <?= form_error('no_sppd', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tempat_kedudukan" class="col-sm-3 col-form-label">Kedudukan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tempat_kedudukan" name="tempat_kedudukan" onkeyup="data_ibu()" value="<?= set_value('tempat_kedudukan'); ?>">
                        <?= form_error('tempat_kedudukan', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rt" class="col-sm-3 col-form-label">Rt</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="rt" name="rt" onkeyup="data_ibu()" value="<?= set_value('rt'); ?>">
                        <?= form_error('rt', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rw" class="col-sm-3 col-form-label">Rw</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="rw" name="rw" onkeyup="data_ibu()" value="<?= set_value('rw'); ?>">
                        <?= form_error('rw', '<small class="text-danger pl-3">', '</small>');  ?>
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
<!-- /.container-fluid -->