<?php
session_start();
include "koneksi.php";

$result = mysqli_query($koneksi, "SELECT nama_gejala from gejala");

while ($row = $result->fetch_assoc()) {
    $gejala[] = $row['nama_gejala'];
}

$nama = $_SESSION['nama'];
$umur = $_SESSION['umur'];

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
                        <li><a href="datahasil.php"><i class="fi-clock"></i> <span>Data Hasil Deteksi</span> </a></li>

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
                        <div class="col-md-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Deteksi Dini Tifus</b></h4>
                                <p class="text-muted m-b-30 font-13">
                                    Berikut merupakan pertanyaan untuk proses analisa
                                </p>

                                <form id="default-wizard" enctype="multipart/form-data" role="form" action="submit_pertanyaan.php" method="post">
                                    <fieldset title="1">
                                        <legend>Q 1</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[0]; ?> ?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan0" id="pertanyaan1" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan0" id="pertanyaan2" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="2">
                                        <legend>Q 2</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[1]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan1" id="pertanyaan3" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan1" id="pertanyaan4" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="3">
                                        <legend>Q 3</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[2]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan2" id="pertanyaan5" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan2" id="pertanyaan6" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="4">
                                        <legend>Q 4</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[3]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan3" id="pertanyaan7" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan3" id="pertanyaan8" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="5">
                                        <legend>Q 5</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[4]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan4" id="pertanyaan9" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan4" id="pertanyaan10" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="6">
                                        <legend>Q 6</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[5]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan5" id="pertanyaan11" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan5" id="pertanyaan12" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="7">
                                        <legend>Q 7</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[6]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan6" id="pertanyaan13" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan6" id="pertanyaan14" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="8">
                                        <legend>Q 8</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[7]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan7" id="pertanyaan15" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan7" id="pertanyaan16" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="9">
                                        <legend>Q 9</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[8]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan8" id="pertanyaan17" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan8" id="pertanyaan18" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="10">
                                        <legend>Q 10</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[9]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan9" id="pertanyaan19" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan9" id="pertanyaan20" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="11">
                                        <legend>Q 11</legend>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card m-b-30">

                                                            <h4 class="card-header d-flex justify-content-center">Apakah subjek mengalami gejala <?php echo $gejala[10]; ?>?</h4>
                                                            <div class="card-body">


                                                                <div class="btn-group-toggle d-flex justify-content-center" data-toggle="buttons">

                                                                    <label class="btn btn-lg btn-outline-success m-r-10" for="success-outlined">Iya
                                                                        <input type="radio" class="mr-3" name="pertanyaan10" id="pertanyaan21" value="True"> </label>
                                                                    <label class="btn btn-lg btn-outline-danger" for="danger-outlined">Tidak
                                                                        <input type="radio" class="bg-success" name="pertanyaan10" id="pertanyaan22" value="False"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- End row -->



                </div> <!-- container -->

            </div> <!-- content -->

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">

    </footer>




    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->



    <!-- END wrapper -->



    <!-- jQuery  -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>

    <!--Form Wizard-->
    <script src="../plugins/jquery.stepy/jquery.stepy.min.js" type="text/javascript"></script>
    <!--wizard initialization-->
    <script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>