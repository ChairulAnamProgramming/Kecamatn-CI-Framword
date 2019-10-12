


    
        <!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <div class="row">
            <div class="col-lg-5">
            <form method="post">
                <div class="modal-body">
                <div class="form-group">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $suratId['id'];?>"> 
                <input type="text" class="form-control" id="nama_surat" name="nama_surat" placeholder="Nama Surat" value="<?= $suratId['nama_surat'];?>"> 
                    <?= form_error('nama_surat','<small class="text-danger pl-3">','</small>');  ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="url" name="url" placeholder="Url" value="<?= $suratId['url'];?>">
                    <?= form_error('url','<small class="text-danger pl-3">','</small>');  ?>
                </div>

                </div>      
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>        
        </div>
    </div>     
</div>
        <!-- /.container-fluid -->