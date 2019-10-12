
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
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $skk['id'] ?>">
                            <input type="text" class="form-control" id="nik" name="nik" onkeyup="myData()"  value="<?= $skk['nik'] ?>">
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $skk['nama'] ?>">
                            <?= form_error('nama','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmpt_lhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr" value="<?= $skk['tmpt_lhr'] ?>">
                            <?= form_error('tmpt_lhr','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?= $skk['tgl_lhr'] ?>">
                            <?= form_error('tgl_lhr','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jk" name="jk" value="<?= $skk['jk'] ?>">
                            <?= form_error('jk','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $skk['pekerjaan'] ?>">
                            <?= form_error('pekerjaan','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $skk['alamat'] ?>">
                            <?= form_error('alamat','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pada_hari" class="col-sm-2 col-form-label">Pada Hari</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pada_hari" name="pada_hari" value="<?= $skk['pada_hari'] ?>">
                            <?= form_error('pada_hari','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pukul" class="col-sm-2 col-form-label">Pukul</label>
                            <div class="col-sm-10">
                            <input type="time" class="form-control" id="pukul" name="pukul" value="<?= $skk['pukul'] ?>">
                            <?= form_error('pukul','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meninggal_di" class="col-sm-2 col-form-label">Meninggal di</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="meninggal_di" name="meninggal_di" value="<?= $skk['meninggal_di'] ?>">
                            <?= form_error('meninggal_di','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sebab" class="col-sm-2 col-form-label">Sebab</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="sebab" name="sebab" value="<?= $skk['sebab'] ?>">
                            <?= form_error('sebab','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rt" class="col-sm-2 col-form-label">RT</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $skk['rt'] ?>">
                            <?= form_error('rt','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rw" class="col-sm-2 col-form-label">RW</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $skk['rw'] ?>">
                            <?= form_error('rw','<small class="text-danger pl-3">','</small>');  ?>
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
     function myData(){
         var nik = $('#nik').val();
         $.ajax({
             url: "<?php echo base_url() ?>/Autocomplit/skKematian",
             data : 'nik='+nik,
         }).done( function(data){

            var json = data,
            obj = JSON.parse(json);
            $("#nama").val(obj.nama);
            $("#tmpt_lhr").val(obj.tmpt_lhr);
            $("#tgl_lhr").val(obj.tgl_lhr);
            $("#jk").val(obj.jk);
            $("#pekerjaan").val(obj.pekerjaan);
            $("#alamat").val(obj.alamat);
            $("#rt").val(obj.rt);
            $("#rw").val(obj.rw);
     } );
     }
 </script>