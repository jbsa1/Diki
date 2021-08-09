<?php
session_start();
include "koneksi.php";

$_SESSION["nama"];
$_SESSION["umur"];
$_SESSION["jawaban"];

$gejala_result = mysqli_query($koneksi, "SELECT nama_gejala from gejala");

while ($row = $gejala_result->fetch_assoc()) {
    $gejala[] = $row['nama_gejala'];
}

$info_penyakit_result = mysqli_query($koneksi, "SELECT solusi from informasi_penyakit");

while ($row = $info_penyakit_result->fetch_assoc()) {
    $info[] = $row['solusi'];
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tifus Expert System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


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
                        <li class="menu-title">Navigation</li>

                        <li><a href="abc.html"><i class="fi-clock"></i> <span>Home</span> </a></li>
                        <li><a href="test.html"><i class="fi-clock"></i> <span>Deteksi Tifus</span> </a></li>
                        <li><a href="data.hasil.php"><i class="fi-clock"></i> <span>Data Hasil Deteksi</span> </a></li>

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
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title float-left">HASIL</h4>


                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <img src="assets/images/logo_eis.png" alt="" height="70">
                                    </div>
                                    <div class="pull-right">
                                        <h3 class="m-0 hidden-print">Hasil Sistem Pakar</h3>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <div class="pull-left m-t-30">
                                            <p><b>Halo, <?php echo $_SESSION["nama"]; ?></b></p>
                                            <p class="text-muted">Terimakasih telah menggunakan aplikasi sitem pakar deteksi penyakit tifus kami, kami berharap agar Anda sehat selalu </p>
                                        </div>

                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table m-t-30">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Pertanyaan</th>

                                                        <th class="text-right">Jawaban</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for ($i = 0; $i < 11; $i++) {  ?>
                                                        <tr>
                                                            <td><?php echo $i + 1 ?></td>
                                                            <td>
                                                                <?php echo "Apakah subjek mengalami gejala $gejala[$i]"; ?> <br />

                                                            </td>

                                                            <td class="text-right">
                                                                <?php
                                                                if ($_SESSION["jawaban"][$i] == 100) {
                                                                    echo "Ya";
                                                                } else {
                                                                    echo "Tidak";
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="clearfix p-t-50">
                                            <h5 class="text-muted">Notes:</h5>

                                            <small>
                                                <?php
                                                if ($_SESSION["hasil_analisis"] == "Positif") {
                                                    echo $info[0];
                                                } else {
                                                    echo $info[1];
                                                }
                                                ?>
                                            </small>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="float-right">
                                            <!-- IF ELSE -->
                                            <h2 class="text-success"><?php echo $_SESSION["hasil_analisis"] ?></h2>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="hidden-print m-t-30 m-b-30">
                                    <div class="text-right">
                                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Print</a>
                                        <a href="reset.php" class="btn btn-info waves-effect waves-light">Selesai</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- end row -->


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">

            </footer>




            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



            <!-- END wrapper -->



            <!-- jQuery  -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/metisMenu.min.js"></script>
            <script src="assets/js/waves.js"></script>
            <script src="assets/js/jquery.slimscroll.js"></script>

            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>

</body>

</html>