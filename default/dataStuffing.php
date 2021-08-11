<?php

include "koneksi.php";

$sql = mysqli_query($koneksi, "SELECT * FROM stuffing");

while ($row = $sql->fetch_assoc()) {
    $no[] = $row['no'];
    $Owner[] = $row['owner'];
    $driver[] = $row['driver'];
    $trucking[] = $row['trucking'];
    $idCont[] = $row['idContainer'];
    $plat[] = $row['plat'];
    $tanggal[] = $row['tanggal'];
    $remarks[] = $row['remarks'];
    $timestamp[] = $row['timestamp'];
}

$counter = mysqli_num_rows($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Data Stuffing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span>
                        <img src="assets/images/logo_eis.png" alt="" height="50">
                    </span>
                    <i>
                        <img src="assets/images/logo_eis.png" alt="" height="28">
                    </i>
                </a>
            </div>
            <nav class="navbar-custom">
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
 
							<li class="menu-title">Form</li>
                            <li><a href="formInputCon.php"><i class="fi-clock"></i> <span>Input Container</span> </a></li>
                            <li><a href="formPlugging.php"><i class="fi-clock"></i> <span>Plugging</span> </a></li>
                            <li><a href="formStuffingCon.php"><i class="fi-clock"></i> <span>Stuffing Container</span> </a></li>
                            <li><a href="formStuffing.php"><i class="fi-clock"></i> <span>Stuffing</span> </a></li>
                            <li><a href="formStriping.php"><i class="fi-clock"></i> <span>Striping</span> </a></li>
                            <li class="menu-title">Data</li>
                            <li><a href="dataInputCon.php"><i class="fi-clock"></i> <span>Input Container</span> </a></li>
                            <li><a href="dataPlugging.php"><i class="fi-clock"></i> <span>Plugging</span> </a></li>
                            <li><a href="dataStuffingCon.php"><i class="fi-clock"></i> <span>Stuffing Container</span> </a></li>
                            <li><a href="dataStuffing.php"><i class="fi-clock"></i> <span>Stuffing</span> </a></li>
                            <li><a href="dataStriping.php"><i class="fi-clock"></i> <span>Striping</span> </a></li>
                        </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title float-left">Datatable</h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b> Data Stuffing</b></h4>
                                <p class="text-muted font-13 m-b-30">
                                    Record Sistem
                                </p>

                                <table id="container" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Owner</th>
                                            <th>Driver</th>
                                            <th>Trucking</th>
                                            <th>ID Container</th>
                                            <th>Plat</th>                                             
                                            <th>Tanggal</th>                                                                                       
                                            <th>Remarks</th>
                                            <th>Timestamp</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                        
                                        for ($i = 0; $i < $counter; $i++) { 
                                            echo '<tr>';
                                            echo '<td>' . $no[$i] . '</td>';
                                            echo '<td>' . $Owner[$i] . '</td>';
                                            echo '<td>' . $driver[$i] . '</td>';
                                            echo '<td>' . $trucking[$i] . '</td>';
                                            echo '<td>' . $idCont[$i] . '</td>';
                                            echo '<td>' . $plat[$i] . '</td>';
                                            echo '<td>' . $tanggal[$i] . '</td>';
                                            echo '<td>' . $remarks[$i] . '</td>';
                                            echo '<td>' . $timestamp[$i] . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <button onClick="window.print()" class="btn btn-success waves-effect waves-light m-r-30">Print</button>
                        </div>
                    </div> <!-- end row -->



                    <!-- end row -->


                </div> <!-- container -->

            </div> <!-- content -->

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>

    <!-- Required datatable js -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- App js -->
    <!-- <script src="assets/js/jquery.core.js"></script> -->
    <!-- <script src="assets/js/jquery.app.js"></script> -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#container').DataTable();

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

    </script>

</body>

</html>