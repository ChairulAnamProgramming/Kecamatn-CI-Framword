<style>
  #dataSearch a {
    color: rgb(0, 128, 255);
    text-decoration: none;
    font-weight: bold;
  }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

  <div class="col-lg">
    <?php if ($this->session->userdata('message') == true) : ?>
      <div class="flash-data" data-flashdata="<?= $this->session->userdata('message') ?> "></div>
    <?php endif; ?>

    <div class="col-lg-6 mb-3 mt-4">
      <div class="row justify-content-end">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 col-lg" id="search" placeholder="Search Surat..." aria-label="Search">
        </form>
      </div>
    </div>

    <div class="col-lg-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Surat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="dataSearch">

        </tbody>
      </table>
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