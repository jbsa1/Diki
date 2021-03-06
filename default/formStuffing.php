<?php
session_start();
include 'koneksi.php';

$sql = mysqli_query($koneksi,"SELECT idcontainer FROM inputcont");

while ($row = $sql->fetch_assoc()) {
    $idCont[] = $row['idcontainer'];
}
$counter = mysqli_num_rows($sql);

if (isset($_GET['no'])){
    $no = $_GET['no'];
    $_SESSION['no'] = $no;
    $sql = mysqli_query($koneksi,"SELECT * FROM stuffing WHERE no='$no'");
    $data = mysqli_fetch_array($sql);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Stufing</title>
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
						 <div class="col-lg-10">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Stuffing</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Silahkan isi data Stuffing 
                                    </p>
                                    <form action="hasilstuffing.php" method="post">
                                        <div class="form-group row">
                                            <label for="no-container" class="col-4 col-form-label">Owner</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" id="owner" name="owner"
                                                <?php
                                                if (isset($_GET['no'])){
                                                    echo 'value="' . $data['owner'] . '"';
                                                }
                                                ?>
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="owner" class="col-4 col-form-label">Driver</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" id="driver" name="driver"
                                                <?php
                                                if (isset($_GET['no'])){
                                                    echo 'value="' . $data['driver'] . '"';
                                                }
                                                ?>
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="driver" class="col-4 col-form-label">Trucking</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" id="trucking" name="trucking"
                                                <?php
                                                if (isset($_GET['no'])){
                                                    echo 'value="' . $data['trucking'] . '"';
                                                }
                                                ?>
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no-container" class="col-4 col-form-label">ID container</label>
                                            <div class="col-sm-7">
                                                <select class="form-control" id="idcontainer" name="idcontainer">
                                                    <?php
                                                    if (isset($_GET['no'])){
                                                        echo '<option value="'. $data['idcontainer'] .'">'. $data['idcontainer'] .'</option>';
                                                    }else{
                                                        echo '<option value="0">Select Option</option>';
                                                    }
                                                     
                                                    for ($i = 0; $i < $counter; $i++) { 
                                                        echo '<option value="'. $idCont[$i] . '">' . $idCont[$i] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="trucking" class="col-4 col-form-label">Plat</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" id="plat" name="plat"
                                                <?php
                                                if (isset($_GET['no'])){
                                                    echo 'value="' . $data['plat'] . '"';
                                                }
                                                ?>
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jam-mulai" class="col-4 col-form-label">Tanggal</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="datetime-local" id="tanggal" name="tanggal"
                                                <?php 
                                                if (isset($_GET['no'])){
                                                   echo 'value="' . date('Y-m-d\TH:i:s', strtotime($data['tanggal'])) . '"';
                                                }
                                                ?>
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jam-selesai" class="col-4 col-form-label">Remarks </label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" id="remarks" name="remarks"
                                                <?php
                                                if (isset($_GET['no'])){
                                                    echo 'value="' . $data['remarks'] . '"';
                                                }
                                                ?>
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group text-right m-b-0 pt-2">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </form>

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