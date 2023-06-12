<?php
include_once("../wp-includes/session.php");
include_once("admin_modal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Users</title>
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
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="../dashboard/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-header">Manage</li>
            <li class="nav-item">
              <a href="users.php" class="nav-link bg-brown active">
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
              <h1 class="m-0">Users</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">users</li>
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
              <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#add-user">
                  <i class="fa fa-plus"></i> Add New User
                </button>
              </div>
              <div class="card-body table-responsive">
                <table id="table" class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="white-space: nowrap">First Name</th>
                      <th style="white-space: nowrap">Last Name</th>
                      <th style="white-space: nowrap">Email Address</th>
                      <th style="white-space: nowrap">Avatar</th>
                      <th style="white-space: nowrap">Date Created</th>
                      <th style="white-space: nowrap">Tools</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $user_query = $conn->query("SELECT * FROM tbl_users WHERE NOT user_id = '{$user_row['user_id']}' AND user_role = 'default'");
                    $counter = 0;
                    foreach ($user_query as $tbl_row) {
                      ++$counter;
                      echo ('
                        <tr>
                          <td style="white-space: nowrap">' . $counter . '</td>
                          <td style="white-space: nowrap">' . $tbl_row['fname'] . '</td>
                          <td style="white-space: nowrap">' . $tbl_row['lname'] . '</td>
                          <td style="white-space: nowrap">' . $tbl_row['email'] . '</td>
                          <td style="white-space: nowrap"><img src="../wp-images/' . $tbl_row['avatar'] . '"alt="avatar" class="img-circle img-fluid img-responsive" style="width: 20px;"></td>
                          <td style="white-space: nowrap">
                            ' . $tbl_row['date_created'] . '
                          </td>
                          <td style="white-space: nowrap">
                          <button data-id="' . $tbl_row['user_id'] . '" class="btn btn-success mr-2 btn-edit"><i class="fas fa-edit"></i> Edit</button>
                          <button data-id="' . $tbl_row['user_id'] . '" class="btn-delete btn btn-danger"><i class="fas fa-trash"></i> Delete</button></td>
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
  <?php
  include_once("response.php");
  ?>

  <div class="modal fade" id="add-user" style="display: none" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Users</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="actions/users.php" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="avatar">Avatar</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="avatar" class="custom-file-input" />
                  <label class="custom-file-label" for="avatar">Choose file</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" class="form-control" name="fname" required />
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control" name="lname" required />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="text" class="form-control" name="email" required />
              <div class="invalid-feedback">
                Enter a valid email address e.g : Sample@gmail.com
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" required />
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button name="create-user" class="btn btn-primary" id="button-submit" type="submit">
              Save
            </button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="edit-user" style="display: none" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Users</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="actions/users.php" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <input type="text" name="_person-id" id="user-id" hidden>
            <div class="form-group">
              <label for="avatar">Avatar</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="avatar" class="custom-file-input" />
                  <label class="custom-file-label" for="avatar">Choose file</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" class="form-control first-name" name="fname" required />
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control last-name" name="lname" required />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email_addy" type="text" class="form-control email" name="email" required />
              <div class="invalid-feedback">
                Enter a valid email address e.g : Sample@gmail.com
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" />
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button name="update-user" class="btn btn-primary" id="button-submit2" type="submit">
              Save
            </button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


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
    $(function() {
      bsCustomFileInput.init();
    });

    $("#table").DataTable(),
      $("#table_search").DataTable({
        responsive: false,
        lengthChange: false,
        autoWidth: false,
      });
      
    $("#email_addy").on("keyup", function(event) {
      var regex = /[a-zA-Z0-9]+@(gmail|yahoo|outlook)+\.(com)$/;
      var key = this.value;
      if (!regex.test(key)) {
        byId("email_addy").classList.add("is-invalid");
        byId("button-submit2").type = "button";
      } else {
        byId("email_addy").classList.remove("is-invalid");
        byId("button-submit2").type = "submit";
      }
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
            window.location.href = "actions/users.php?delete-user=_token53132123&_uid=" + id;
          }, 1500);
        }
      })
    });

    $(document).on("click", ".btn-edit", function() {
      let person_id = $(this).data('id');
      let token = "_tokenG6F341ANSJ3KGFODSHS";
      $.ajax({
        url: "actions/users.php",
        method: "POST",
        data: {
          get_user: token,
          user_id: person_id
        },
        dataType: "json",
        success: function(data) {
          $("#user-id").val(data.user_id);
          $(".first-name").val(data.fname);
          $(".last-name").val(data.lname);
          $(".email").val(data.email);
          $("#edit-user").modal("show");
        }
      });
    });
  </script>
</body>

</html>