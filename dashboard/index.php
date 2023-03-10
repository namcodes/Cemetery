<?php
include_once("../wp-includes/session.php");
include_once("admin_modal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="shortcut icon" href="../wp-plugins/dist/img/logo.png" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../wp-plugins/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../wp-plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="../wp-plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
  <!-- Sweet Alert 2-->
  <script src="../wp-plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../wp-plugins/sweetalert2/sweetalert2.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
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
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../dashboard/" class="nav-link bg-brown active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">Manage</li>
            <li class="nav-item">
              <a href="users.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Staffs
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="niches.php" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>
                  Niches
                </p>
                <i class="fas fa-angle-left right"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="grave-locations.php" class="nav-link">
                <i class="nav-icon fas fa-search-location"></i>
                <p>
                  Grave Locations
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="payment-records.php" class="nav-link">
                <i class="nav-icon fas fa-money-bill-alt"></i>
                <p>
                  Payment Records
                </p>
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
                <p>
                  Billing Statement
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dako-nga-cross.php" class="nav-link">
                <i class="nav-icon fas fa-cross"></i>
                <p>
                  Dako nga Cross
                </p>
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
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-gradient-info">
                <div class="inner">
                  <?php
                  $tbl_list = $conn->query("SELECT * FROM tbl_records WHERE status = 'default'");
                  ?>
                  <h3><?= $tbl_list->num_rows ?></h3>
                  <p>Total Death</p>
                </div>
                <div class="icon">
                  <i class="fas fa-box"></i>
                </div>
                <a href="niches.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-gradient-success">
                <div class="inner">
                  <?php
                  $tbl_list = $conn->query("SELECT * FROM tbl_records WHERE status = 'cross'");
                  ?>
                  <h3><?= $tbl_list->num_rows ?></h3>

                  <p>Total Dako nga Cross</p>
                </div>
                <div class="icon">
                  <i class="fas fa-bible"></i>
                </div>
                <a href="dako-nga-cross.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-gradient-purple">
                <div class="inner">
                  <?php
                  $tbl_list = $conn->query("SELECT * FROM tbl_users");
                  ?>
                  <h3><?= $tbl_list->num_rows ?></h3>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-gradient-primary">
                <div class="inner">
                  <?php
                  $tbl_list = $conn->query("SELECT * FROM tbl_locations");
                  ?>
                  <h3><?= $tbl_list->num_rows ?></h3>
                  <p>Total Grave Locations</p>
                </div>
                <div class="icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <a href="grave-location.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <div class="col-md-6">
              <div class="card card-outline card-primary ml-2">
                <div class="card-header">
                  <h3 class="card-title">Total # per Categories</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="niches" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-outline card-primary ml-2">
                <div class="card-header">
                  <h3 class="card-title">Total # per Month</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="month" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
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

  <?php
  include_once("response.php");
  ?>

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
  <script src="../wp-plugins/javascript/admin.js"></script>
  <script src="../wp-plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- ChartJS -->
  <script src="../wp-plugins/chart.js/Chart.min.js"></script>
  <script>
    $(function() {
      <?php
      $total_niche = $conn->query("SELECT n.name as niche_name, COUNT(*) as total FROM tbl_records r LEFT JOIN tbl_packages n ON n.package_id = r.pkg_id GROUP BY n.name");

      ?>
      let totalNiches = {
        labels: [
          <?php
          foreach ($total_niche as $data) {
            echo (ucfirst("'" . $data['niche_name'] . "',"));
          }
          ?>
        ],
        datasets: [{
          label: 'Total',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [
            <?php
          foreach ($total_niche as $data) {
            echo ($data['total'] . ",");
          }
          ?>
          ]
        }, ]
      }

      let barChartCanvas = $('#niches').get(0).getContext('2d')
      let barChartData = $.extend(true, {}, totalNiches)
      let temp = barChartData.datasets[0]
      barChartData.datasets[0] = temp

      let barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
      }

      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })

      <?php
      $total_month = $conn->query('SELECT DATE_FORMAT(date_created, "%M") as month, COUNT(*) as total FROM tbl_payments  GROUP BY DATE_FORMAT(date_created, "%M") ORDER BY DATE_FORMAT(date_created, "%m")');
      ?>
      let totalMonth = {
        labels: [
          <?php
          foreach ($total_month as $data) {
            echo (ucfirst("'" . $data['month'] . "',"));
          }
          ?>
        ],
        datasets: [{
          label: 'Total',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [
            <?php
          foreach ($total_month as $data) {
            echo ($data['total'] . ",");
          }
          ?>
          ]
        }, ]
      }

      let barChartCanvas1 = $('#month').get(0).getContext('2d')
      let barChartData1 = $.extend(true, {}, totalMonth)
      let temp1 = barChartData1.datasets[0]
      barChartData1.datasets[0] = temp1

      new Chart(barChartCanvas1, {
        type: 'bar',
        data: barChartData1,
        options: barChartOptions
      })
    });
  </script>
</body>

</html>