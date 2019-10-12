

<?php   
              $this->db->limit(3);
  $num_mess = $this->db->get_where('table_message',['eye'=> '0'])->num_rows();
              $this->db->limit(3);
              $this->db->order_by('eye', 'DESC');
  $message = $this->db->get('table_message')->result_array();
 ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <?php if ($user['role_id'] == 1): ?>
                  <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                  
                  <?php if ($num_mess < '3'): ?>
                    <span class="badge badge-danger badge-counter"><?= $num_mess; ?></span>
                    <?php else: ?>
                    <span class="badge badge-danger badge-counter"><?= $num_mess; ?>+</span>
                  <?php endif ?>

              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Message
                </h6>
                 <?php foreach ($message as $mess): ?>
                   <?php if ($mess['eye']== 0): ?>
                     <a class="dropdown-item d-flex align-items-center notification" data-id="<?= $mess['id']; ?>" href="<?= base_url().$mess['url']; ?>" style="background:#b5c9e8;">
                      <?php else: ?>
                     <a class="dropdown-item d-flex align-items-center " href="<?= base_url().$mess['url']; ?>">
                   <?php endif ?>
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-muted"><?= $mess['date']; ?></div>
                      <div><?= $mess['user']; ?> - <span class="font-weight-bold"><?= $mess['surat']; ?></span></div>
                    </div>
                  </a>                  
                <?php endforeach ?>
                <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('Notification'); ?>">Show All message</a>
              </div>
            </li>
            <?php endif ?>



            <div class="topbar-divider d-none d-sm-block"></div>


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') ?><?= $user['image'] ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  My Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url() ?>auth/logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

        <script type="text/javascript">
          $('.notification').on('click',function(){
            // e.preventDefault();
            const id = $(this).data('id');

             $.ajax({
             url: "<?php echo base_url() ?>/Notification/eye",
             data : 'id='+id,
         }).done( function(data){

            });


          })
        </script>