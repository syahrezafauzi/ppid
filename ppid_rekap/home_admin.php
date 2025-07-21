<?php 
require_once('connect.php');
session_start();
 
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

$user=$_SESSION['email'];
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
                                $select = "SELECT * FROM pemohon WHERE email='$user'";
                                $get = mysqli_query($conn,$select); 
                                $row = mysqli_fetch_row($get); 
                                ?>
                                <form class="user">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo $user;?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row[3];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control form-control-user" id="pekerjaan" name="pekerjaan" value="<?php echo $row[4];?>" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Tipe Pemohon</label><br/>
                                    <select name="tipe" id="tipe">
                                      <option value="" disabled selected>Pilih tipe pemohon</option>
                                      <option value="perorangan" <?php if($row[5]=="perorangan") echo 'selected="selected"'; ?>>Perorangan</option>
                                      <option value="badan_hukum" <?php if($row[5]=="badan_hukum") echo 'selected="selected"'; ?>>Badan Hukum</option>
                                      <option value="kelompok" <?php if($row[5]=="kelompok") echo 'selected="selected"'; ?>>Kelompok Masyarakat</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor KTP</label>
                                        <input type="text" class="form-control form-control-user" id="no_ktp" name="no_ktp" value="<?php echo $row[6];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>KTP</label><br/>
                                        <img src="ktp/<?php echo $row[7];?>" width="500"/><br/>
                                        <input type="file" id="img" name="file_ktp" accept="image/png, image/jpg, image/jpeg" required>
                                        <label for="img" style="font-size:small;">format JPG/PNG/JPEG, max. 2MB</label>
                                        <input type="submit" class="btn btn-primary" value="Upload" name="upload_ktp" id="upload_ktp">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?php echo $row[8];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?php echo $row[9];?>" required>
                                    </div>
                                    <br/>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Ubah Data Pemohon">
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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