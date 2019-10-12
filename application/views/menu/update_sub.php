
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
            
            <div class="row">
                <div class="col-lg-8">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $subMenu['id']?>">
                            <input type="text" class="form-control" id="title" name="title" value="<?= $subMenu['title']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="menu_id" class="col-sm-2 col-form-label">Menu</label>
                            <div class="col-sm-10">
                                <select name="menu_id" id="menu_id"class="form-control">
                                <option value="">..::Select menu::..</option>
                                <?php foreach($menu as $m): ?>
                                <option value="<?= $m['id']?>"<?php if ($m['id']== $subMenu['menu_id']): ?>  selected <?php else: ?><?php endif ?>><?= $m['menu']?></option>
                                <?php endforeach;?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">Url</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-check">
                                <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" <?php if ($subMenu['is_active'] == "1"): ?>checked <?php else: ?> <?php endif ?>>
                                <label class="form-check-label" for="is_active">
                                Active?
                            </label>
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