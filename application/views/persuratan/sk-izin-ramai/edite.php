
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
            
            <div class="row mt-4">
                <div class="col-lg-8">
            <?= $this->session->userdata('message')?>
                    <form method="post">
                        <div class="form-group row">
                            <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                            <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $skir['id']; ?>">
                            <input type="text" class="form-control" id="perihal" name="perihal" value="<?= $skir['id']; ?>">
                            <?= form_error('perihal','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kepada" class="col-sm-2 col-form-label">Kepada</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kepada" name="kepada" value="<?= $skir['kepada']; ?>">
                            <?= form_error('kepada','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="di" class="col-sm-2 col-form-label">Di</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="di" name="di" value="<?= $skir['di']; ?>">
                            <?= form_error('di','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik" onkeyup="myData()"  value="<?= $skir['nik']; ?>">
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $skir['nama']; ?>">
                            <?= form_error('nama','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmpt_lhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_lhr" name="tmpt_lhr" value="<?= $skir['tmpt_lhr']; ?>">
                            <?= form_error('tmpt_lhr','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal_lhr" name="tgl_lhr" value="<?= $skir['tgl_lhr']; ?>">
                            <?= form_error('tgl_lhr','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $skir['alamat']; ?>">
                            <?= form_error('alamat','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="hari" name="hari" value="<?= $skir['hari']; ?>">
                            <?= form_error('hari','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $skir['tanggal']; ?>">
                            <?= form_error('tanggal','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                            <div class="col-sm-10">
                            <input type="time" class="form-control" id="waktu" name="waktu" value="<?= $skir['waktu']; ?>">
                            <?= form_error('waktu','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat" name="tempat" value="<?= $skir['tempat']; ?>">
                            <?= form_error('tempat','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="<?= $skir['kegiatan']; ?>">
                            <?= form_error('kegiatan','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rt" class="col-sm-2 col-form-label">Rt</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $skir['rt']; ?>">
                            <?= form_error('rt','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rw" class="col-sm-2 col-form-label">Rw</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $skir['rw']; ?>">
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
             url: "<?php echo base_url() ?>/Autocomplit/skizinramai",
             data : 'nik='+nik,
         }).done( function(data){

            var json = data,
            obj = JSON.parse(json);
            $("#nama").val(obj.nama);
            $("#tempat_lhr").val(obj.tmpt_lhr);
            $("#tanggal_lhr").val(obj.tgl_lhr);
            $("#alamat").val(obj.alamat);
            $("#rt").val(obj.rt);
            $("#rw").val(obj.rw);
     } );
     }
 </script>