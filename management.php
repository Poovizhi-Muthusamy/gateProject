<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include "config.php" ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
    <!-- Table  and JS includes -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/srms.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!--<span class="logo-text">
                             dark Logo text -->
                        <!--  <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />-->

                        <!-- </span> -->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <button class="nav-link pt-2 mr-3" style="background-color: transparent; border: none;">
                                <i class="fa fa-bell font-24 "></i>
                                <span class="badge badge-pill badge-danger font-14 rounded-circle position-absolute top-0 start-100 translate-middle ">
                                    <span class="navbadgebutton">
                                        <?php
                                        $query = "SELECT * FROM approval WHERE exitApproval=0;";
                                        $result = mysqli_query($db, $query);
                                        $count = mysqli_num_rows($result);
                                        if ($count > 0) {
                                            echo $count;
                                        } else if ($count == 0) {
                                            echo $count;
                                        }
                                        ?>
                                    </span>
                                </span>
                            </button>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="fas fa-check-square"></i><span class="hide-menu badgebtn">Gate Approvals<span class="badge badge-pill ml-3 badge-danger font-14 "><?php
                                                                                                                                                                                                                                                                                                    $query = "SELECT * FROM approval WHERE exitApproval=0;";
                                                                                                                                                                                                                                                                                                    $result = mysqli_query($db, $query);
                                                                                                                                                                                                                                                                                                    $count = mysqli_num_rows($result);
                                                                                                                                                                                                                                                                                                    if ($count > 0) {
                                                                                                                                                                                                                                                                                                        echo $count;
                                                                                                                                                                                                                                                                                                    } else if ($count == 0) {
                                                                                                                                                                                                                                                                                                        echo $count;
                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                    ?></span></span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="management.php" aria-expanded="false"><i class="fas fa-building"></i><span class="hide-menu ">Management</span></li></a>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->


                <div class="container-fluid bg-white shadow">
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">GATE VISITERS LIST</h5>

                                    <div class="row ">
                                        <div class="col-12">
                                            <div class="container-fluid align-items-center">

                                                <form class="d-flex form-inline justify-content-end mb-3" id="visitor-form">
                                                    <label for="pickAdate" class="col-auto text-start col-form-label">Pick A Date</label>
                                                    <input type="date" class="form-control col-auto mb-2 mr-sm-2" id="selectedDate" name="selectedDate">
                                                    <button type="submit" class="btn btn-outline-success col-auto btn-rounded shadow font-weight-bold viewvisitorbutton" name="viewvisitor">View visitors</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="zero_config" class="table  table-striped table-bordered">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>DEPARTMENT</th>
                                                    <th>STAFF NAME</th>
                                                    <th>VISITER NAME</th>
                                                    <th>HEAD COUNT</th>
                                                    <th>MOBILE NUMBER</th>
                                                    <th>REASON</th>
                                                    <th>INTIME</th>
                                                    <th>OUTTIME</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php include("getVisitors.php"); ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- MY YEAH BUTTON SCRIPT -->

        <!-- Table ka Hukum -->
        <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
        <!-- Table load -->
        <script>
            $(document).ready(function() {
                // Function to load table content for the default/current date
                function loadDefaultTableContent() {
                    $.ajax({
                        type: "POST",
                        url: "getVisitors.php",
                        data: {
                            selectedDate: null
                        }, // Pass null for the default/current date
                        success: function(response) {
                            $("#zero_config tbody").html(response);
                            $('#zero_config').DataTable(); // Initialize DataTables if needed
                        },
                        error: function() {
                            console.log("AJAX error occurred.");
                        },
                    });
                }

                // Load the default/current date content when the page loads
                loadDefaultTableContent();

                $("#visitor-form").submit(function(event) {
                    event.preventDefault();

                    var selectedDate = $("#selectedDate").val();

                    $.ajax({
                        type: "POST",
                        url: "getVisitors.php",
                        data: {
                            selectedDate: selectedDate
                        },
                        success: function(response) {
                            $("#zero_config tbody").html(response);
                            $('#zero_config').DataTable(); // Initialize DataTables if needed
                        },
                        error: function() {
                            console.log("AJAX error occurred.");
                        },
                    });
                });
            });
        </script>

        <script>
            /****************************************
             *       Basic Table                   *
             ************************************/
            $('#zero_config').DataTable();
        </script>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
        <!-- Charts js Files -->
        <script src="assets/libs/flot/excanvas.js"></script>
        <script src="assets/libs/flot/jquery.flot.js"></script>
        <script src="assets/libs/flot/jquery.flot.pie.js"></script>
        <script src="assets/libs/flot/jquery.flot.time.js"></script>
        <script src="assets/libs/flot/jquery.flot.stack.js"></script>
        <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
        <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>
