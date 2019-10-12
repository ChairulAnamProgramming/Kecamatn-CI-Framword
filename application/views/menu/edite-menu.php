
        <!-- Begin Page Content -->
        <div class="container-fluid">
 
            <h1 class="h3 mb-0 text-gray-800 mb-4"><?= $title; ?></h1>
            
            <div class="row">
                <div class="col-lg-8">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="menu" class="col-sm-2 col-form-label ">Menu</label>
                            <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $menu['id']?>">
                            <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']?>">
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