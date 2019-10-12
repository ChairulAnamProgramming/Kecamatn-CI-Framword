
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
            
            <div class="row mt-4">
                <div class="col-lg-8">
            <?= $this->session->userdata('message')?>
                    <form method="post">
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik" onkeyup="myData()"  value="<?= set_value('nik'); ?>">
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmpt_lhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_lhr" name="tmpt_lhr" value="<?= set_value('tmpt_lhr'); ?>">
                            <?= form_error('tmpt_lhr','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal_lhr" name="tgl_lhr" value="<?= set_value('tgl_lhr'); ?>">
                            <?= form_error('tgl_lhr','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= set_value('pekerjaan'); ?>">
                            <?= form_error('pekerjaan','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jk" name="jk" value="<?= set_value('jk'); ?>">
                            <?= form_error('jk','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="agama" name="agama" value="<?= set_value('agama'); ?>">
                            <?= form_error('agama','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status Kawin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value="<?= set_value('status'); ?>">
                            <?= form_error('status','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="warganegara" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="warganegara" name="warganegara" value="WNI">
                            <?= form_error('warganegara','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                            <?= form_error('alamat','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pembuatan" class="col-sm-2 col-form-label">Persyaratan Pembuatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pembuatan" name="pembuatan" value="<?= set_value('pembuatan'); ?>">
                            <?= form_error('pembuatan','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rt" class="col-sm-2 col-form-label">Rt</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="rt" name="rt" value="<?= set_value('rt'); ?>">
                            <?= form_error('rt','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rw" class="col-sm-2 col-form-label">Rw</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="rw" name="rw" value="<?= set_value('rw'); ?>">
                            <?= form_error('rw','<small class="text-danger pl-3">','</small>');  ?>
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
        <script type="text/javascript">
     function myData(){
         var nik = $('#nik').val();
         $.ajax({
             url: "<?php echo base_url() ?>/Autocomplit/skTidakMampu",
             data : 'nik='+nik,
         }).done( function(data){

            var json = data,
            obj = JSON.parse(json);
            $("#nama").val(obj.nama);
            $("#tempat_lhr").val(obj.tmpt_lhr);
            $("#tanggal_lhr").val(obj.tgl_lhr);
            $("#pekerjaan").val(obj.pekerjaan);
            $("#jk").val(obj.jk);
            $("#agama").val(obj.agama);
            $("#status").val(obj.status);
            $("#alamat").val(obj.alamat);
            $("#rt").val(obj.rt);
            $("#rw").val(obj.rw);
     } );
     }
 </script>