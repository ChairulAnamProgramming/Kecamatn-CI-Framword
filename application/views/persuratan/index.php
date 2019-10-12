<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>


  <div class="col-lg-7">

    <?= $this->session->userdata('message') ?>
    <a href="" class="btn btn-primary mb-3 mt-2 " data-toggle="modal" data-target="#newSuratModal">Add New Surat</a>
    <!-- <div class="col-lg-12 mb-3">
      <div class="row justify-content-end">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 col-lg" id="search" placeholder="Search Surat..." aria-label="Search">
        </form>
      </div>
    </div> -->



    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Surat</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($surat as $s) : ?>

          <tr>
            <th scope="row"><?= $i;
                            $i++ ?></th>
            <td class="tabel-surat" data-href="<?= base_url() . $s['url'] ?>"><?= $s['nama_surat']; ?></td>
            <td><a href="<?= base_url("persuratan/edite_surat/") . $s['id']; ?>"><i class="far fa-edit"></i></td>
          </tr>

        <?php endforeach; ?>
      </tbody>
    </table>
  </div>


</div>


<!-- Modal -->
<div class="modal fade" id="newSuratModal" tabindex="-1" role="dialog" aria-labelledby="newSuratModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSuratModalLabel">New Surat Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
        <div class="modal-body">

          <div class="form-group">
            <input type="text" class="form-control" id="nama_surat" name="nama_surat" placeholder="Nama Surat">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Url">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $.ajax({
      url: "<?= base_url() ?>/Data/dataSurat"
    }).done(function(data) {
      $('#dataSearch').html(data);

    })


  })
  $('#search').on('input', function() {
    const sVal1 = $('#search').val();

    $.ajax({
      url: "<?= base_url() ?>/Data/searchSurat",
      data: 'search=' + sVal1
    }).done(function(data) {
      // const json = data,
      $('#dataSearch').html(data);
    })
  })
</script>