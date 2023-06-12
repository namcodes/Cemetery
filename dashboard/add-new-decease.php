<?php
include_once("../wp-includes/session.php");
include_once("admin_modal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add New Record</title>
  <link rel="shortcut icon" href="../wp-plugins/dist/img/logo.png" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../wp-plugins/dist/css/adminlte.min.css" />
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
              <a href="index.html" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-header">Manage</li>
            <li class="nav-item">
              <a href="users.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Staff</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="niches.php" class="nav-link bg-brown active">
                <i class="nav-icon fas fa-box"></i>
                <p>Niches</p>
                <i class="fas fa-angle-left right"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="niches.php?d=bone-chamber" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bone Chamber</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="niches.php?d=old-tri-level" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Old Tri-Level</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="niches.php?d=old-tri-level-w-bones" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Old Tri-Level with Bones</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="niches.php?d=new-tri-level-w-bones" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Tri-Level</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="niches.php?d=patong-solo-niche" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Patong Solo-Niche</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="niches.php?d=solo-niche" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Solo Niche</p>
                  </a>
                </li>
              </ul>
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
              <h1 class="m-0">Add New Record</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">niches</li>
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
            <div class="col-lg-10">
              <form action="actions/records.php" method="post">
                <div class="card card-outline card-primary">
                  <div class="card-body">
                    <div class="row">
                      <section class="col-lg-6">
                        <div class="card-header mb-4">
                          <h2 class="card-title text-bold">
                            Deceased Details
                          </h2>
                        </div>
                        <div class="form-group">
                          <label for="fname">Full Name</label>
                          <input id="fullname" type="text" name="fname" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                          <label for="born">Born</label>
                          <input type="date" name="born" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="died">Died</label>
                          <input type="date" name="died" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="burial">Burial</label>
                          <input type="date" name="burial" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="package">Packages</label>
                          <select name="package" class="form-control btn-packages" required>
                            <option value="">Select Packages</option>
                            <?php
                            $package_query = $conn->query("SELECT * FROM tbl_packages");
                            foreach ($package_query as $tbl_row) {
                              echo ('
                            <option data-id="' . $tbl_row['package_id'] . '" value="' . $tbl_row['package_id'] . '">' . $tbl_row['name'] . '</option>
                          ');
                            }
                            ?>
                          </select>
                        </div>
                      </section>
                      <section class="col-lg-6">
                        <div class="card-header mb-4">
                          <h2 class="card-title text-bold">
                            Contact Person
                          </h2>
                        </div>
                        <div class="form-group">
                          <label for="bname">Contact Name</label>
                          <input type="text" id="contact_name" name="bname" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                          <label for="contact">Phone Number</label>
                          <input id="contact" type="text" name="contact" class="form-control" placeholder="Phone Number" maxlength="11">
                          <div class="invalid-feedback">
                            Enter a valid contact number e.g : 09xxxxxxxxx
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="email">Email Address</label>
                          <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                          <div class="invalid-feedback">
                            Enter a valid email address e.g : Sample@gmail.com
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="unitprice">Niche Price</label>
                          <input id="unitprice" type="text" name="unitprice" class="form-control" placeholder="Select Package..." readonly>
                        </div>
                        <div class="form-group">
                          <label for="grave_section">Grave no. & Section</label>
                          <select name="grave_section" class="form-control" required>
                            <option value="">Select Grave & Section</option>
                            <?php
                            $package_query = $conn->query("SELECT * FROM tbl_locations");
                            foreach ($package_query as $tbl_row) {
                              echo ('
                            <option value="' . $tbl_row['section'] . ' - ' . $tbl_row['grave_number'] . '">' . $tbl_row['section'] . ' - ' . $tbl_row['grave_number'] . '</option>
                          ');
                            }
                            ?>
                          </select>
                        </div>

                      </section>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button id="btn-submit" type="submit" name="add-records" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
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
  <script src="../wp-plugins/javascript/admin.js"></script>

  <script>
    $(document).on("change", ".btn-packages", function() {
      let package_id = $(this).find(':selected').data('id');
      let token = "_tokenG6F341ANSJ3KGFODSHS";
      $.ajax({
        url: "actions/packages.php",
        method: "POST",
        data: {
          get_package: token,
          package_id: package_id
        },
        dataType: "json",
        success: function(data) {
          $("#unitprice").val(data.unitprice);
          $("#yearly").val(data.yearly);
        }
      });
    });

    let byId = function(id) {
      return document.getElementById(id);
    };

    $("#email").on("keyup", function(event) {
      var regex = /[a-zA-Z0-9]+@(gmail|yahoo|outlook)+\.(com)$/;
      var key = this.value;
      if (!regex.test(key)) {
        byId("email").classList.add("is-invalid");
        byId("btn-submit").type = "button";
      } else {
        byId("email").classList.remove("is-invalid");
        byId("email").classList.add("is-valid");
        byId("btn-submit").type = "submit";
      }
    });

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

      $('#contact').on('keyup', function(event) {
        var regex_length = /^[0-9]{11}$/;
        var input = byId("contact").value

        if (!regex_length.test(input)) {
          byId("contact").classList.add("is-invalid");
          byId("btn-submit").type = "button";
        } else {
          byId("contact").classList.remove("is-invalid");
          byId("contact").classList.add("is-valid");
          byId("btn-submit").type = "submit";
        }

      });

      $('#fullname').on('keyup', function(event) {
        var regex = /^[a-zA-Z ]+$/;
        var key = byId("fullname").value
        if (!regex.test(key)) {
          byId("fullname").classList.add("is-invalid");
          byId("btn-submit").type = "button";
        } else {
          byId("fullname").classList.remove("is-invalid");
          byId("fullname").classList.add("is-valid");
          byId("btn-submit").type = "submit";
        }
      });


      $('#contact_name').on('keyup', function(event) {
        var regex = /^[a-zA-Z ]+$/;
        var key = byId("contact_name").value
        if (!regex.test(key)) {
          byId("contact_name").classList.add("is-invalid");
          byId("btn-submit").type = "button";
        } else {
          byId("contact_name").classList.remove("is-invalid");
          byId("contact").classList.add("is-valid");
          byId("btn-submit").type = "submit";
        }
      });

    } else {

      $('#contact').on('keypress', function(event) {
        var regex = /[0-9]/;
        var regex_length = /^(09)+[0-9]{9}$/;
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        var input = byId("contact").value
        if (!regex.test(key)) {
          byId("contact").classList.add("is-invalid");
          byId("btn-submit").type = "button";
          return false;
        } else {
          byId("contact").classList.remove("is-invalid");
          byId("contact").classList.add("is-valid");
          byId("btn-submit").type = "submit";

          if (!regex_length.test(input)) {
            byId("contact").classList.add("is-invalid");
            byId("btn-submit").type = "button";
          } else {
            byId("contact").classList.remove("is-invalid");
            byId("contact").classList.add("is-valid");
            byId("btn-submit").type = "submit";
          }

        }
      });

      $('#contact').on('keyup', function(event) {
        var regex_length = /^(09)+[0-9]{9}$/;
        var input = byId("contact").value

        if (!regex_length.test(input)) {
          byId("contact").classList.add("is-invalid");
          byId("btn-submit").type = "button";
        } else {
          byId("contact_name").classList.remove("is-invalid");
          byId("contact").classList.add("is-valid");
          byId("btn-submit").type = "submit";
        }
      });

      $('#fullname').on('keypress', function(event) {
        var regex = /[a-zA-Z ]/gi
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          return false;
        } else {}
      });

      $('#contact_name').on('keypress', function(event) {
        var regex = /[a-zA-Z ]/gi
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          return false;
        } else {}
      });
    }
  </script>
</body>

</html>