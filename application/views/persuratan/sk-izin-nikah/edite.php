
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
            
            <div class="row mt-4">
                <div class="col-lg-8">
            <?= $this->session->userdata('message')?>
                    <form method="post">
                        <div class="form-group row">
                            <label for="nik_suami" class="col-sm-2 col-form-label">Nik Suami</label>
                            <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $skin['id']; ?>">
                            <input type="text" class="form-control" id="nik_suami" name="nik_suami" onkeyup="data_suami()" value="<?= $skin['nik_suami']; ?>">
                            <?= form_error('nik_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik_istri" class="col-sm-2 col-form-label">Nik Istri</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik_istri" name="nik_istri" onkeyup="data_istri()" value="<?= $skin['nik_istri']; ?>">
                            <?= form_error('nik_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik_ayah" class="col-sm-2 col-form-label">Nik Ayah</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" onkeyup="data_ayah()" value="<?= $skin['nik_ayah']; ?>" >
                            <?= form_error('nik_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik_ibu" class="col-sm-2 col-form-label">Nik Ibu</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" onkeyup="data_ibu()" value="<?= $skin['nik_ibu']; ?>">
                            <?= form_error('nik_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="custom-control custom-checkbox mr-2">
<input type="checkbox" class="custom-control-input" id="jejaka" name="stts_pria" value="Jejaka" <?php if ($skin['stts_pria'] == 'Jejaka'): ?>                                               
                                            checked<?php endif ?>>
                            <label class="custom-control-label" for="jejaka">Jejaka</label>
                            </div>

                            <div class="custom-control custom-checkbox mr-2">
                            <input type="checkbox" class="custom-control-input" id="duda" name="stts_pria" value="Duda" <?php if ($skin['stts_pria'] == 'Duda'): ?>                                               
                                            checked<?php endif ?>>
                            <label class="custom-control-label" for="duda">Duda</label>
                            </div>

                            <div class="custom-control custom-checkbox mr-2">
                            <input type="checkbox" class="custom-control-input" id="beristri" name="stts_pria" value="Beristri" <?php if ($skin['stts_pria'] == 'beristri'): ?>                                               
                                            checked<?php endif ?>>
                            <label class="custom-control-label" for="beristri">Beristri</label> 
                            </div>

                            ||

                            <div class="custom-control custom-checkbox mr-2 ml-2">
                            <input type="checkbox" class="custom-control-input" id="perawan" name="stts_wanita" value="Perawan" <?php if ($skin['stts_wanita'] == 'Perawan'): ?>                                               
                                            checked<?php endif ?>>
                            <label class="custom-control-label" for="perawan">Perawan</label> 
                            </div>

                            <div class="custom-control custom-checkbox mr-2">
                            <input type="checkbox" class="custom-control-input" id="janda" name="stts_wanita" value="Janda" <?php if ($skin['stts_wanita'] == 'Janda'): ?>                                               
                                            checked<?php endif ?>>
                            <label class="custom-control-label" for="janda">Janda</label> 
                            </div>

                        </div>
                        <div class="form-group row">
                        <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_istri_suami" placeholder="Nama istri/ Suami terdahulu" name="nama_istri_suami" value="<?= $skin['nama_istri_suami']; ?>">
                            <?= form_error('nama_istri_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        
                        <br>
                        <h4>Data Suami</h4>
                        <hr>
                        <div class="form-group row">
                            <label for="nama_suami" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_suami" name="nama_suami" value="<?= $skin['nama_suami']; ?>">
                            <?= form_error('nama_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jk_suami" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jk_suami" name="jk_suami" value="<?= $skin['jk_suami']; ?>">
                            <?= form_error('jk_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmpt_lhr_suami" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tmpt_lhr_suami" name="tmpt_lhr_suami" value="<?= $skin['tmpt_lhr_suami']; ?>">
                            <?= form_error('tmpt_lhr_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lhr_suami" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lhr_suami" name="tgl_lhr_suami" value="<?= $skin['tgl_lhr_suami']; ?>">
                            <?= form_error('tgl_lhr_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama_suami" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="agama_suami" name="agama_suami" value="<?= $skin['agama_suami']; ?>">
                            <?= form_error('agama_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan_suami" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan_suami" name="pekerjaan_suami" value="<?= $skin['pekerjaan_suami']; ?>">
                            <?= form_error('pekerjaan_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_suami" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_suami" name="alamat_suami" value="<?= $skin['alamat_suami']; ?>">
                            <?= form_error('alamat_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desa_suami" class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="desa_suami" name="desa_suami" value="<?= $skin['desa_suami']; ?>">
                            <?= form_error('desa_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan_suami" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan_suami" name="kecamatan_suami" value="<?= $skin['kecamatan_suami']; ?>">
                            <?= form_error('kecamatan_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kabupaten_suami" class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kabupaten_suami" name="kabupaten_suami" value="<?= $skin['kabupaten_suami']; ?>">
                            <?= form_error('kabupaten_suami','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>

                        <br>
                        <h4>Data Istri</h4>
                        <hr>
                        <div class="form-group row">
                            <label for="nama_istri" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_istri" name="nama_istri" value="<?= $skin['nama_istri']; ?>">
                            <?= form_error('nama_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_ayah_istri" class="col-sm-2 col-form-label">Nama Ayah</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ayah_istri" name="nama_ayah_istri" value="<?= $skin['nama_ayah_istri']; ?>">
                            <?= form_error('nama_ayah_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jk_istri" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jk_istri" name="jk_istri" value="<?= $skin['jk_istri']; ?>">
                            <?= form_error('jk_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmpt_lhr_istri" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tmpt_lhr_istri" name="tmpt_lhr_istri" value="<?= $skin['tmpt_lhr_istri']; ?>">
                            <?= form_error('tmpt_lhr_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lhr_istri" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lhr_istri" name="tgl_lhr_istri" value="<?= $skin['tgl_lhr_istri']; ?>">
                            <?= form_error('tgl_lhr_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama_istri" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="agama_istri" name="agama_istri" value="<?= $skin['agama_istri']; ?>">
                            <?= form_error('agama_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan_istri" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan_istri" name="pekerjaan_istri" value="<?= $skin['pekerjaan_istri']; ?>">
                            <?= form_error('pekerjaan_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_istri" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_istri" name="alamat_istri" value="<?= $skin['alamat_istri']; ?>">
                            <?= form_error('alamat_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desa_istri" class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="desa_istri" name="desa_istri" value="<?= $skin['desa_istri']; ?>">
                            <?= form_error('desa_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan_istri" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan_istri" name="kecamatan_istri" value="<?= $skin['kecamatan_istri']; ?>">
                            <?= form_error('kecamatan_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kabupaten_istri" class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kabupaten_istri" name="kabupaten_istri" value="<?= $skin['kabupaten_istri']; ?>">
                            <?= form_error('kabupaten_istri','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>

                        <br>
                        <h4>Data Ayah</h4>
                        <hr>
                        <div class="form-group row">
                            <label for="nama_ayah" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $skin['nama_ayah']; ?>">
                            <?= form_error('nama_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jk_ayah" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jk_ayah" name="jk_ayah" value="<?= $skin['jk_ayah']; ?>">
                            <?= form_error('jk_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmpt_lhr_ayah" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tmpt_lhr_ayah" name="tmpt_lhr_ayah" value="<?= $skin['tmpt_lhr_ayah']; ?>">
                            <?= form_error('tmpt_lhr_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lhr_ayah" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lhr_ayah" name="tgl_lhr_ayah" value="<?= $skin['tgl_lhr_ayah']; ?>">
                            <?= form_error('tgl_lhr_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama_ayah" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="agama_ayah" name="agama_ayah" value="<?= $skin['agama_ayah']; ?>">
                            <?= form_error('agama_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?= $skin['pekerjaan_ayah']; ?>">
                            <?= form_error('pekerjaan_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_ayah" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" value="<?= $skin['alamat_ayah']; ?>">
                            <?= form_error('alamat_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desa_ayah" class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="desa_ayah" name="desa_ayah" value="<?= $skin['desa_ayah']; ?>">
                            <?= form_error('desa_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan_ayah" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan_ayah" name="kecamatan_ayah" value="<?= $skin['kecamatan_ayah']; ?>">
                            <?= form_error('kecamatan_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kabupaten_ayah" class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kabupaten_ayah" name="kabupaten_ayah" value="<?= $skin['kabupaten_ayah']; ?>">
                            <?= form_error('kabupaten_ayah','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        

                        <br>
                        <h4>Data Ibu</h4>
                        <hr>
                        <div class="form-group row">
                            <label for="nama_ibu" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $skin['nama_ibu']; ?>">
                            <?= form_error('nama_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jk_ibu" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jk_ibu" name="jk_ibu" value="<?= $skin['jk_ibu']; ?>">
                            <?= form_error('jk_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmpt_lhr_ibu" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tmpt_lhr_ibu" name="tmpt_lhr_ibu" value="<?= $skin['tmpt_lhr_ibu']; ?>">
                            <?= form_error('tmpt_lhr_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lhr_ibu" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lhr_ibu" name="tgl_lhr_ibu" value="<?= $skin['tgl_lhr_ibu']; ?>">
                            <?= form_error('tgl_lhr_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama_ibu" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="agama_ibu" name="agama_ibu" value="<?= $skin['agama_ibu']; ?>">
                            <?= form_error('agama_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?= $skin['pekerjaan_ibu']; ?>">
                            <?= form_error('pekerjaan_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_ibu" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" value="<?= $skin['alamat_ibu']; ?>">
                            <?= form_error('alamat_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desa_ibu" class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="desa_ibu" name="desa_ibu" value="<?= $skin['desa_ibu']; ?>">
                            <?= form_error('desa_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan_ibu" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan_ibu" name="kecamatan_ibu" value="<?= $skin['kecamatan_ibu']; ?>">
                            <?= form_error('kecamatan_ibu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kabupaten_ibu" class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kabupaten_ibu" name="kabupaten_ibu" value="<?= $skin['kabupaten_ibu']; ?>">
                            <?= form_error('kabupaten_ibu','<small class="text-danger pl-3">','</small>');  ?>
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
        <script type="text/javascript">
     function data_suami(){
         var nik_suami = $('#nik_suami').val();
         $.ajax({
             url: "<?php echo base_url() ?>/Autocomplit/skizinnikah",
             data : 'nik='+nik_suami,
         }).done( function(data){

            var json = data,
            obj = JSON.parse(json);
            $("#nama_suami").val(obj.nama_suami);
            $("#jk_suami").val(obj.jk_suami);
            $("#tmpt_lhr_suami").val(obj.tmpt_lhr_suami);
            $("#tgl_lhr_suami").val(obj.tgl_lhr_suami);
            $("#agama_suami").val(obj.agama_suami);
            $("#pekerjaan_suami").val(obj.pekerjaan_suami);
            $("#alamat_suami").val(obj.alamat_suami);
            $("#desa_suami").val(obj.desa_suami);
            $("#kecamatan_suami").val(obj.kecamatan_suami);
            $("#kabupaten_suami").val(obj.kabupaten_suami);
     } );
     }

     function data_istri(){
         var nik_istri = $('#nik_istri').val();
         $.ajax({
             url: "<?php echo base_url() ?>/Autocomplit/skizinnikah",
             data : 'nik='+nik_istri,
         }).done( function(data){

            var json = data,
            obj = JSON.parse(json);
            $("#nama_istri").val(obj.nama_istri);
            $("#jk_istri").val(obj.jk_istri);
            $("#tmpt_lhr_istri").val(obj.tmpt_lhr_istri);
            $("#tgl_lhr_istri").val(obj.tgl_lhr_istri);
            $("#agama_istri").val(obj.agama_istri);
            $("#pekerjaan_istri").val(obj.pekerjaan_istri);
            $("#alamat_istri").val(obj.alamat_istri);
            $("#desa_istri").val(obj.desa_istri);
            $("#kecamatan_istri").val(obj.kecamatan_istri);
            $("#kabupaten_istri").val(obj.kabupaten_istri);
     } );
     }

     function data_ayah(){
         var nik_ayah = $('#nik_ayah').val();
         $.ajax({
             url: "<?php echo base_url() ?>/Autocomplit/skizinnikah",
             data : 'nik='+nik_ayah,
         }).done( function(data){

            var json = data,
            obj = JSON.parse(json);
            $("#nama_ayah").val(obj.nama_ayah);
            $("#jk_ayah").val(obj.jk_ayah);
            $("#tmpt_lhr_ayah").val(obj.tmpt_lhr_ayah);
            $("#tgl_lhr_ayah").val(obj.tgl_lhr_ayah);
            $("#agama_ayah").val(obj.agama_ayah);
            $("#pekerjaan_ayah").val(obj.pekerjaan_ayah);
            $("#alamat_ayah").val(obj.alamat_ayah);
            $("#desa_ayah").val(obj.desa_ayah);
            $("#kecamatan_ayah").val(obj.kecamatan_ayah);
            $("#kabupaten_ayah").val(obj.kabupaten_ayah);
     } );
     }


     function data_ibu(){
         var nik_ibu = $('#nik_ibu').val();
         $.ajax({
             url: "<?php echo base_url() ?>/Autocomplit/skizinnikah",
             data : 'nik='+nik_ibu,
         }).done( function(data){

            var json = data,
            obj = JSON.parse(json);
            $("#nama_ibu").val(obj.nama_ibu);
            $("#jk_ibu").val(obj.jk_ibu);
            $("#tmpt_lhr_ibu").val(obj.tmpt_lhr_ibu);
            $("#tgl_lhr_ibu").val(obj.tgl_lhr_ibu);
            $("#agama_ibu").val(obj.agama_ibu);
            $("#pekerjaan_ibu").val(obj.pekerjaan_ibu);
            $("#alamat_ibu").val(obj.alamat_ibu);
            $("#desa_ibu").val(obj.desa_ibu);
            $("#kecamatan_ibu").val(obj.kecamatan_ibu);
            $("#kabupaten_ibu").val(obj.kabupaten_ibu);
     } );
     }
 </script>