
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
          <div class="row mt-4">

          	<div class="col">
          		    <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Surat</th>
                      <th>Tanggal</th>
                      <th>Read</th>
                    </tr>
                  </thead>
                  	<tbody>
                  		<?php $i=1; ?>
	                  <?php foreach ($notif as $ntf): ?>
	                    <tr>
	                      <td><?= $i;$i++; ?></td>
	                      <td><?= $ntf['surat']; ?></td>
	                      <td><?= $ntf['date']; ?></td>
	                      <td>
	                      	<?php if ($ntf['eye']=='0'): ?>
	                      		<a href="<?= $ntf['url']; ?>" data-eye="<?= $ntf['id']; ?>" class="notif"><i class="fas fa-check notif"></i></a>
	                      		<?php else: ?>
                      			<i class="fas fa-check-double text-success"></i>
	                      	<?php endif ?>
	                      </td> 
	                    </tr>
	                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          	</div>
            
          
           </div>
        <!-- /.container-fluid -->

        <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

        <script type="text/javascript">
          $('.notif').on('click',function(){
            const id = $(this).data('eye');

             $.ajax({
             url: "<?php echo base_url() ?>/Notification/eye",
             data : 'id='+id,
         }).done( function(data){

            });


          })
        </script>