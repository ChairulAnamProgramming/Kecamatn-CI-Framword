
        <!-- Begin Page Content -->
        <div class="container-fluid">
    
            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
            
            <div class="row">
                <div class="col-lg-8">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="email" name="email" value="<?= $employee['id']?>" readonly>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $employee['email']?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $employee['name']?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $employee['nik']?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nip" name="nip" value="<?= $employee['nip']?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmpt_lhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr" value="<?= $employee['tmpt_lhr']?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?= $employee['tgl_lhr']?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telp" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="telp" name="telp" value="<?= $employee['telp']?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $employee['alamat']?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $employee['jabatan']?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <div class="form-check">
                            <div class="col-sm-2">
                                <input class="form-check-input" type="radio" value="1" id="role_id" name="role_id" <?php if ($employee['role_id'] == 1): ?> checked <?php else: ?> <?php endif ?>>
                                <label class="form-check-label" for="role_id">
                                Admin
                            </label>
                            </div>  
                            <div class="col-sm-2">
                                <input class="form-check-input" type="radio" value="2" id="role_id" name="role_id" <?php if ($employee['role_id'] == 2): ?> checked <?php else: ?><?php endif ?>>
                                <label class="form-check-label" for="role_id">
                                User
                            </label>
                            </div>  
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">Picture</div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('assets/img/profile/') . $employee['image'];?>" alt=""class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->