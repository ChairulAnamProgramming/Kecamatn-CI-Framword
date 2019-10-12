<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-4">
        <div class="col-lg-8">
            <?= $this->session->userdata('message') ?>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="jenis_surat" class="col-sm-2 col-form-label">Jenis Surat</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $sp['id']; ?>">
                        <input type="text" class="form-control" id="jenis_surat" name="jenis_surat" onkeyup="myData()" value="<?= $sp['jenis_surat']; ?>">
                        <?= form_error('jenis_surat', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="banyaknya" class="col-sm-2 col-form-label">Banyaknya</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="banyaknya" name="banyaknya" value="<?= $sp['banyaknya']; ?>">
                        <?= form_error('banyaknya', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $sp['keterangan']; ?>">
                        <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>');  ?>
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