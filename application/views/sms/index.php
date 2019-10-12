
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
             <div class="row">
                <div class="col-lg-6">
                  <?php if ($this->session->userdata('message') == true) :?>
              <div class="flash-data" data-flashdata="<?= $this->session->userdata('message')?> "></div>
            <?php endif; ?>
                   <form action="" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ke :</label>
                      <input type="text" class="form-control" id="to" name="to" placeholder="contoh : 082217xxxxxx">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Tulis Pesan</label>
                      <textarea class="form-control" rows="6" name="pesan"></textarea>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                 </form>
                </div> 
             </div>

        </div>
        <!-- /.container-fluid -->