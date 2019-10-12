
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
            
            <div class="row">
                <div class="col-lg-8">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="no_surat" class="col-sm-2 col-form-label">No Surat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= set_value('no_surat');?>">
                            <?= form_error('no_surat','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dari" class="col-sm-2 col-form-label">Dari</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="dari" name="dari" value="<?= set_value('dari');?>">
                            <?= form_error('dari','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="<?= set_value('tgl_masuk');?>">
                            <?= form_error('tgl_masuk','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="perihal" name="perihal" value="<?= set_value('perihal');?>">
                            <?= form_error('perihal','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="scan" class="col-sm-2 col-form-label">Scan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="scan" name="scan" value="<?= set_value('scan');?>">
                            <?= form_error('scan','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->