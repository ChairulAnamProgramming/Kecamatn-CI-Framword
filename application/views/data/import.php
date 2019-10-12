<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7 ">

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h3 mb-2 text-gray-800 "><?= $title; ?></h1>
                                <h5 class="mb-4"><?= $this->session->userdata('reset_email') ?></h5>

                                <?= $this->session->flashdata('message'); ?>
                            </div>

                            <form method="post" action="<?= base_url('data/import') ?>" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-lg-6 ">
                                        <input type="file" class="form-control form-control-user" id="file" name="file" accept=".xsl, .xlsx" required>
                                        <?= form_error('file', '<small class="text-danger pl-3">', '</small>');  ?>
                                    </div>
                                    <div class="col-lg-2"><button type="submit" class="btn btn-primary ">Import</button></div>
                                    <div class="col-lg-4"><a href="<?= base_url('assets/data/import/bip.xlsx') ?>" class="btn btn-success ">Template xlsx</a></div>
                                </div>

                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>