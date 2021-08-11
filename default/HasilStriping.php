<?php
include 'koneksi.php';

$plat = $_POST['plat'];
$noContainer = $_POST['container'] ;
$owner = $_POST['owner'] ;
$driver = $_POST['driver'];
$tanggal = $_POST['tanggal'];
$remarks = $_POST['remarks'];
$today = date("d/m/Y g:i a");

$sql = "INSERT INTO striping (plat,idContainer,owner, driver ,tanggal,remarks,timestamp	)
        VALUES ('$plat', '$noContainer', '$owner', '$driver', '$tanggal','$remarks',CURRENT_TIME()) ";

if (!mysqli_query($koneksi,$sql)) {
    die('Error: ' . mysqli_error($koneksi));
}       

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Striping</title>
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
          <div class="content-page pt-1">
                <!-- Start content -->
                <div class="content pt-5">
                    <div class="container-fluid pt-1">
						<div class="d-flex justify-content-center">
						    <div class="col-lg-11">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Striping</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Silahkan isi data Striping 
                                    </p>
                                    <div class="col-sm-12 table-responsive">
                                        <?php
                                        $today = date("d/m/Y g:i a");

                                        if (isset($_POST)) {
                                            echo '<table class=table>';
                                            echo '<tr><td>' . 'Owner ' . '</td><td>' . ':' . '</td><td>' . $owner . '</td></tr>';
                                            echo '<tr><td>' . 'Driver ' . '</td><td>' . ':' . '</td><td>' . $driver . '</td></tr>';
                                            echo '<tr><td>' . 'No Container ' . '</td><td>' . ':' . '</td><td>' . $noContainer . '</td></tr>';
                                            echo '<tr><td>' . 'Plat ' . '</td><td>' . ':' . '</td><td>' . $plat . '</td></tr>';
                                            echo '<tr><td>' . 'Tanggal ' . '</td><td>' . ':' . '</td><td>' . $tanggal . '</td></tr>';
                                            echo '<tr><td>' . 'Remarks ' . '</td><td>' . ':' . '</td><td>' . $remarks . '</td></tr>';
                                            echo '<tr><td>' . 'Timestamp ' . '</td><td>' . ':' . '</td><td>' . $today . '</td></tr>';

                                            echo '</table>';
                                        } else {
                                            echo 'KOSONG!';
                                        }
                                        ?>

                                        
                                    </div>
                                    <button onClick="window.print()" class="btn btn-success waves-effect waves-light m-r-30">Print</button>
                                    <div class="visible-lg" style="height: 20px;"></div>
                                </div></div>

                            </div> <!-- end col -->
						
                        </div>
            </div>    
			</div>
			</div>
		
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
		  <!--Form Wizard-->
        <script src="../plugins/jquery.stepy/jquery.stepy.min.js" type="text/javascript"></script>
        <!--wizard initialization-->
        <script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>
        <!-- Parsley js -->
        <script type="text/javascript" src="../plugins/parsleyjs/parsley.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		    <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
    </body>
</html>