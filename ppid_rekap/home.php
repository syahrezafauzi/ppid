<?php 
error_reporting(0);
require_once('connect.php');
include('session_user.php');
$mail=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPID Kementerian Agama</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('side_left.php');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Profil Pemohon</h6>
                                </div>
                                <div class="card-body">
                                  <?php   
                                $select = "SELECT * FROM pemohon WHERE email='$mail'";
                                $get = mysqli_query($conn,$select); 
                                $row = mysqli_fetch_row($get); 
                                ?>
                                <form class="user" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo $row[1];?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row[3];?>" read-only>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control form-control-user" id="pekerjaan" name="pekerjaan" value="<?php echo $row[4];?>" read-only>
                                    </div>
                                    <div class="form-group">
                                    <label>Tipe Pemohon</label><br/>
                                    <select name="tipe" id="tipe">
                                      <option value=""disabled selected>Pilih tipe pemohon</option>
                                      <option value="perorangan" <?php if($row[5]=="perorangan") echo 'selected="selected"'; ?> disabled>Perorangan</option>
                                      <option value="badan_hukum" <?php if($row[5]=="badan_hukum") echo 'selected="selected"'; ?> disabled>Badan Hukum</option>
                                      <option value="kelompok" <?php if($row[5]=="kelompok") echo 'selected="selected"'; ?> disabled>Kelompok Masyarakat</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor KTP</label>
                                        <input type="text" class="form-control form-control-user" id="no_ktp" name="no_ktp" value="<?php echo $row[6];?>" read-only>
                                    </div>
                                    <div class="form-group">
                                        <label>KTP</label><br/>
                                        <img src="ktp/<?php echo $row[7];?>" width="500"/><br/>
                                        <!-- <input type="file" id="img" name="file_ktp" accept="image/png, image/jpg, image/jpeg">
                                        <label for="img" style="font-size:small;">format JPG/PNG/JPEG, max. 2MB</label>
                                        <input type="submit" class="btn btn-primary" value="Upload" name="upload_ktp" id="upload_ktp"> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?php echo $row[8];?>" read-only>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?php echo $row[9];?>" read-only>
                                    </div>
                                    <br/>
                            </form>
                   
                                </div>
                            </div>
                      
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <?php include('footer.php');?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
</body>

</html>




