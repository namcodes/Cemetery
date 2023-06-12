<?php
include_once("../wp-includes/session.php");
include_once("admin_modal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dako nga Cross</title>
  <link rel="shortcut icon" href="../wp-plugins/dist/img/logo.png" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../wp-plugins/dist/css/adminlte.min.css" />
  <link rel="stylesheet" href="../wp-plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="../wp-plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php require_once("navbar.php") ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary">
      <!-- Brand Logo -->
      <a href="index3.html" class="bg-brown brand-link">
        <span class="text-gray font-weight-medium">Sts. Peter & Paul Roman</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- SidebarSearch Form -->
        <div class="form-inline my-3">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../dashboard/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-header">Manage</li>
            <li class="nav-item">
              <a href="users.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Staffs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="niches.php" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>Niches</p>
                <i class="fas fa-angle-left right"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="grave-locations.php" class="nav-link">
                <i class="nav-icon fas fa-search-location"></i>
                <p>Grave Locations</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="payment-records.php" class="nav-link">
                <i class="nav-icon fas fa-money-bill-alt"></i>
                <p>Payment Records</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="yearly_payment.php" class="nav-link">
                <i class="nav-icon fa fa-calendar-alt"></i>
                <p>
                  Yearly Payment
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="billings.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Billing Statement</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dako-nga-cross.php" class="nav-link bg-brown active">
                <i class="nav-icon fas fa-cross"></i>
                <p>Dako nga Cross</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dako nga Cross</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dako nga Cross</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Main row -->
          <div class="row mt-3 ml-2">
            <div class="card card-outline card-primary">
              <div class="card-body table-responsive">
                <table id="table" class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="white-space: nowrap">Grave & Section</th>
                      <th style="white-space: nowrap">Full Name</th>
                      <th style="white-space: nowrap">Born</th>
                      <th style="white-space: nowrap">Died</th>
                      <th style="white-space: nowrap">Burial Date</th>
                      <th style="white-space: nowrap">Niche Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $niche_query = $conn->query("SELECT r.born as born, r.died as died, r.grave_section as grave_section, r.fullname as fullname, r.burial as burial, r.billing_id as billing, p.name as niche_type FROM tbl_records r LEFT JOIN tbl_packages p ON p.package_id = r.pkg_id LEFT JOIN tbl_billings b ON b.billing_id = r.billing_id WHERE r.status = 'cross'");
                    $counter = 0;
                    foreach ($niche_query as $tbl_row) {
                      ++$counter;
                      $born_date = date_create($tbl_row['born']);
                      $born_format = date_format($born_date, "d - M - Y");

                      $died_date = date_create($tbl_row['died']);
                      $died_format = date_format($died_date, "d - M - Y");

                      $burial_date = date_create($tbl_row['burial']);
                      $burial_format = date_format($burial_date, "d - M - Y");
                      echo ('
                        <tr>
                        <td style="white-space: nowrap">' . $counter . '</td>
                        <td style="white-space: nowrap">' . $tbl_row['grave_section'] . '</td>
                        <td style="white-space: nowrap">' . $tbl_row['fullname'] . '</td>
                        <td style="white-space: nowrap">' . $born_format . '</td>
                        <td style="white-space: nowrap">' . $died_format . '</td>
                        <td style="white-space: nowrap">' . $burial_format . '</td>
                        <td style="white-space: nowrap">' . $tbl_row['niche_type'] . '</td>
                      </tr>
                        ');
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022-2023.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../wp-plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../wp-plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../wp-plugins/dist/js/adminlte.js"></script>
  <!-- Data Tables Plugins -->
  <script src="../wp-plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../wp-plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../wp-plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../wp-plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../wp-plugins/javascript/validations.js"></script>
  <script src="../wp-plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script src="../wp-plugins/javascript/admin.js"></script>
  <script>
    $("#table").DataTable(),
      $("#table_search").DataTable({
        responsive: true,
        lengthChange: true,
        autoWidth: true,
      });
  </script>
</body>

</html>