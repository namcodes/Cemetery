<?php
include_once("../wp-includes/session.php");
include_once("admin_modal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Grave Locations</title>
  <link rel="shortcut icon" href="../wp-plugins/dist/img/logo.png" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../wp-plugins/dist/css/adminlte.min.css" />
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
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
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
              <a href="grave-locations.php" class="nav-link bg-brown active">
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
              <a href="dako-nga-cross.php" class="nav-link">
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
              <h1 class="m-0">Grave Locations</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Grave-locations</li>
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
          <div class="row mt-2 ml-2">
            <div class="card card-outline card-primary">
              <div class="card-header">
              <button class="btn btn-primary" data-toggle="modal" data-target="#add-section-grave"><i class="fa fa-plus"></i> Add Section & Grave</button>
              </div>
              <div class="card-body table-responsive">
                <table id="table" class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="white-space: nowrap">Niche Type</th>
                      <th style="white-space: nowrap">Section</th>
                      <th style="white-space: nowrap">Grave Number</th>
                      <th style="white-space: nowrap">Tools</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $grave_query = $conn->query("SELECT * FROM tbl_locations");
                    $counter = 0;
                    foreach ($grave_query as $tbl_row) {
                      ++$counter;
                      echo ('
                        <tr>
                          <td style="white-space: nowrap">' . $counter . '</td>
                          <td style="white-space: nowrap">' . $tbl_row['name'] . '</td>
                          <td style="white-space: nowrap">' . $tbl_row['section'] . '</td>
                          <td style="white-space: nowrap">' . $tbl_row['grave_number'] . '</td>
                          <td style="white-space: nowrap">
                          <button data-id="'.$tbl_row['_id'].'" class="btn-edit btn btn-success mr-1 text-center"><i class="fas fa-edit"></i> Edit</button>
                          <button data-id="'.$tbl_row['_id'].'" class="btn-delete btn btn-danger text-center"><i class="fas fa-trash"></i> Delete</button>
                          </td>
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
  <div class="modal fade" id="add-section-grave" style="display: none" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Section & Grave</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="actions/grave.php" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="packages">Niche Type</label>
              <select name="packages" class="form-control">
                <?php
                $niche_query = $conn->query("SELECT * FROM tbl_packages");
                foreach ($niche_query as $tbl_row) {
                  echo ("<option value='" . $tbl_row['name'] . "'>" . $tbl_row['name'] . "</option>");
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="section">Section</label>
              <input type="text" name="section" class="form-control">
            </div>
            <div class="form-group">
              <label for="grave">Grave Number</label>
              <input type="text" name="grave" class="form-control">
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-between">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" name="add-grave-location" type="submit">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="edit-section-grave" style="display: none" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Section & Grave</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="actions/grave.php" method="post">
          <input type="text" name="grave_id" class="_grave-id" hidden>
          <div class="modal-body">
            <div class="form-group">
              <label for="packages">Niche Type</label>
              <select name="packages" class="form-control">
                <?php
                $niche_query = $conn->query("SELECT * FROM tbl_packages");
                foreach ($niche_query as $tbl_row) {
                  echo ("<option value='" . $tbl_row['name'] . "'>" . $tbl_row['name'] . "</option>");
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="section">Section</label>
              <input type="text" name="section" class="form-control section">
            </div>
            <div class="form-group">
              <label for="grave">Grave Number</label>
              <input type="text" name="grave" class="form-control grave-number">
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-between">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" name="edit-grave-location" type="submit">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <?php
  include_once("response.php");
  ?>

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

    $(document).on('click', '.btn-delete', function(e) {
      e.preventDefault();
      let id = $(this).data("id");
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel',
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Success!',
            text: "Successfully Deleted!",
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
          })
          setTimeout(function() {
            window.location.href = "actions/grave.php?delete-grave-location=_token94812&grave_id=" + id;
          }, 1500);
        }
      })
    });

    $(document).on("click", ".btn-edit", function() {
      let grave_id = $(this).data('id');
      let token = "_tokenG6F341ANSJ3KGFODSHS";
      $.ajax({
        url: "actions/grave.php",
        method: "POST",
        data: {
          get_data: token,
          grave_id: grave_id
        },
        dataType: "json",
        success: function(data) {
           $("._grave-id").val(data._id);
           $(".section").val(data.section);
           $(".grave-number").val(data.grave_number);
           $("#edit-section-grave").modal("show");
        }
      });
    });
  </script>
</body>

</html>