<?php
include_once("../wp-includes/session.php");
include_once("admin_modal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payment Records</title>
  <link rel="shortcut icon" href="../wp-plugins/dist/img/logo.png" type="image/x-icon">
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

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <section id="content">
    <div id="wrapper" class="wrapper">

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
                <a href="../dashboard/" class="nav-link">
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
                  <p>Staffs</p>
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
                <a href="yearly_payment.php" class="nav-link bg-brown active">
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
                <h1 class="m-0">Yearly Payment</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">payment records</li>
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

            <div class="row mt-2 ml-2">
              <div class="card card-outline card-primary">
                <div class="card-body table-responsive">
                  <table id="table" class="table table-bordered table-striped text-center">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th style="white-space: nowrap">Status</th>
                        <th style="white-space: nowrap">Grave Location</th>
                        <th style="white-space: nowrap">Deceased Person</th>
                        <th style="white-space: nowrap">Niche Type</th>
                        <th style="white-space: nowrap">Remaining Year/s</th>
                        <th style="white-space: nowrap">Yearly Payment</th>
                        <th style="white-space: nowrap">Contact</th>
                        <th style="white-space: nowrap">Tools</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $grave_query = $conn->query("SELECT r.record_id as record_id, r.expiration as remaining, r.grave_section AS grave_section, r.fullname AS fullname, r.billing_id AS billing_id, r.burial AS burial, p.yearly AS yearly, p.name AS niche_type FROM tbl_records r LEFT JOIN tbl_packages p ON r.pkg_id = p.package_id ORDER BY r._id;");
                      $counter = 0;
                      foreach ($grave_query as $tbl_row) {
                        $current_date = new DateTime($tbl_row['burial']);
                        $remaining = new DateTime($tbl_row['remaining']);

                        $interval = $current_date->diff($remaining);
                        if ($interval->y == "0") {
                          $year_remain = "<span class='badge badge-danger'>No Remaining Years Left </span>";
                          $status = '<span class="badge badge-danger">Pending</span>';
                        } else {
                          $year_remain = "<b>" . $interval->y  . " Years Left</b>";
                          $status = '<span class="badge badge-success">Paid</span>';
                        }

                        ++$counter;
                        echo ('
                      <tr>
                        <td style="white-space: nowrap">' . $counter . '</td>
                        <td style="white-space: nowrap">' . $status . '</td>
                        <td style="white-space: nowrap">' . $tbl_row['grave_section'] . '</td>
                        <td style="white-space: nowrap">' . $tbl_row['fullname'] . '</td>
                        <td style="white-space: nowrap">' . $tbl_row['niche_type'] . '</td>
                        <td style="white-space: nowrap">' . $year_remain . '</td>
                        <td style="white-space: nowrap">₱ ' . number_format($tbl_row['yearly']) . '</td>
                        <td style="white-space: nowrap">
                        <button class="btn btn-info text-center btn-contact" data-id="' . $tbl_row['billing_id'] . '"><i class="fa fa-eye"></i> View</button>
                        </td>
                        <td style="white-space: nowrap">
                        <button data-id="' . $tbl_row['record_id'] . '" class="btn-receipt btn btn-success text-center mr-2"><i class="fa fa-print"></i> Print</button>
                        <button data-id="' . $tbl_row['record_id'] . '" class="btn-pay btn btn-primary text-center"><i class="fas fa-credit-card"></i> Pay</button>
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
            <!-- /.row -->
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


      <div class="modal fade" id="show-contact" style="display: none" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Contact Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="d-flex justify-content-between border-bottom pt-2">
                <p>Name : </p>
                <p id="contact_name"></p>
              </div>
              <div class="d-flex justify-content-between border-bottom pt-2">
                <p>Phone Number : </p>
                <p id="contact_number"></p>
              </div>
              <div class="d-flex justify-content-between pt-2">
                <p>Email Address : </p>
                <p id="contact_email"></p>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
              <button class="btn btn-info btn-notify"><i class="fa fa-bell"></i> Notify</button>
              <button class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="yearly-print" style="display: none" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Yearly Print</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body-wrapper">
              <div id="modal-receipt-body" class="modal-body">
                <div class="text-center">
                  <h4>Sts. Peter & Paul Roman</h4>
                  <p>09478957785<br>
                    pedropoblacion@gmail.com</p>
                </div>
                <div class="border-bottom mb-0 pb-0 pt-3 d-flex justify-content-between">
                  <div class="d-flex">
                    <p class="mr-2">Issued day: </p>
                    <p class="b_name"></p>
                  </div>
                  <div class="d-flex">
                    <p class="date_now">Date : <?= date("d - M - Y") ?></p>
                  </div>
                </div>
                <div class="d-flex justify-content-between border-bottom pt-2">
                  <p>Niche : </p>
                  <p class="niche-type"></p>
                </div>
                <div class="d-flex justify-content-between border-bottom pt-2">
                  <p>Deceased Name : </p>
                  <p class="deceased_name"></p>
                </div>
                <div class="d-flex justify-content-between pt-2">
                  <b>Yearly Payment : </b>
                  <b class="yearly"></b>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button class="btn btn-danger" data-dismiss="modal">Close</button>
              <button class="btn btn-primary btn-print">Print</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="yearly-pay" style="display: none" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Yearly Pay</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form action="actions/payment.php" method="post">
              <div class="modal-body">
                <input type="text" name="record_id" id="record_id" hidden>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" class="form-control">
                    <option value="paid">Paid</option>
                    <option value="unpaid">Unpaid</option>
                  </select>
                </div>
                <div class="modal-footer justify-content-between">
                  <button class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button class="btn btn-primary" name="pay-yearly" type="submit">Save</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </div>
  </section>
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


    //Global Variable

    $(document).on("click", ".btn-notify", function() {
      let email = $("#contact_email").text();
      let name = $("#contact_name").text();
      let price = $(".yearly").text();
      price.substring(0);
      let product = $(".niche-type").text();
      let new_price = price.split(" ");
      new_price.shift();
      if (new_price == undefined || new_price == "") {
        Swal.fire({
          icon: "error",
          title: "Error!",
          html: "Click <span class='badge badge-success p-2'><i class='fa fa-print'></i> Print</span> to get the yearly price.",
          showConfirmButton: false,
          timer: 1500,
        });
      } else {
        $(this).attr("disabled", true);
        let token = "_tokenG6F341ANSJ3KGFODSHS";
        $.ajax({
          url: "actions/email.php",
          method: "POST",
          data: {
            token: token,
            send_invoice: token,
            email: email,
            name: name,
            price: price,
            product: product
          },
          dataType: "json",
          success: function(data) {
            $(".btn-notify").removeAttr('disabled');
            if (data.status == "success") {
              Swal.fire({
                icon: "success",
                title: "Success!",
                text: `${data.message}`,
                showConfirmButton: false,
                timer: 1500,
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Error!",
                text: `${data.message}`,
                showConfirmButton: false,
                timer: 1500,
              });
            }
          }
        });
        // $('.btn-notify').attr('disabled','disabled');
        // $('.btn-notify').text('Sending');
      }

    });

    $(document).on("click", ".btn-pay", function() {
      let record_id = $(this).data('id');
      $("#record_id").val(record_id);
      $("#yearly-pay").modal("show");
    });

    $(document).on("click", ".btn-contact", function() {
      let contact_id = $(this).data('id');
      let token = "_tokenG6F341ANSJ3KGFODSHS";
      $.ajax({
        url: "actions/billings.php",
        method: "POST",
        data: {
          get_contact: token,
          contact_id: contact_id
        },
        dataType: "json",
        success: function(data) {
          $("#contact_email").text(data.email_address);
          $("#contact_name").text(data.name)
          $("#contact_number").text(data.contact);
          $("#show-contact").modal("show");
        }
      });
    });

    $(document).on("click", ".btn-receipt", function() {
      let record_id = $(this).data('id');
      let token = "_tokenG6F341ANSJ3KGFODSHS";
      $.ajax({
        url: "actions/payment.php",
        method: "POST",
        data: {
          get_record: token,
          record_id: record_id
        },
        dataType: "json",
        success: function(data) {
          $(".niche-type").text(data.niche);
          $(".contact_name").text(data.b_name);
          $(".deceased_name").text(data.fullname);
          $(".yearly").text(`₱ ${data.yearly}`);
          $("#yearly-print").modal("show");
        }
      });
    });


    $(document).on("click", ".btn-print", function() {
      const section = $("#content");
      const modalBody = $("#modal-receipt-body").detach();
      const content = $("#wrapper").detach();
      const table = $("#modal-receipt").detach();
      section.append(modalBody);
      window.print();
      section.empty();
      section.append(content);
      $(".modal-body-wrapper").append(modalBody);
    });
  </script>
</body>

</html>