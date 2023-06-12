    <!-- Navbar -->
    <nav class="main-header bg-brown navbar navbar-expand text-white">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link d-block text-gray" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown ">
          <a class="nav-link user-panel d-flex align-items-center" data-toggle="dropdown" href="#">
            <img src="../wp-images/<?= $avatar ?>" class="img-circle mr-2" alt="User Image">
            <span class="text-gray"><?= $first_name . " " . $last_name ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <a href="#" data-toggle="modal" data-target="#user-settings" class="dropdown-item">
              <i class="fas fa-cog mr-2"></i>Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="../wp-includes/logout.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i>Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->