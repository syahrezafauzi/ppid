<?php 
require_once('connect.php');
include('session_petugas.php');
$id_dip = $_GET['id'];
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('side_left_petugas.php');?>

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
                                     <h6 class="m-0 font-weight-bold text-primary">Ubah Informasi Publik</h6>
                                </div>
                                <div class="card-body">
                                    <?php   
                                            $select = "SELECT * FROM dip WHERE id_dip='$id_dip'";
                                            $get = mysqli_query($conn,$select); 
                                            $row = mysqli_fetch_row($get); 
                                         ?>
                                     <form class="user" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <div class="form-group">
                                            <input type="hidden" name="id_dip" class="form-control form-control-user" id="id_dip" value="<?php echo $id_dip; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Judul Informasi</label>
                                            <input type="text" name="judul_informasi" class="form-control form-control-user" id="judul_informasi" value="<?php echo $row[1];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Ringkasan</label>
                                            <input type="text" name="ringkasan" id="ringkasan" class="form-control form-control-user" value="<?php echo $row[2];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Pejabat Yang Menguasai</label>
                                            <input type="text" name="pejabat" id="pejabat" class="form-control form-control-user" value="<?php echo $row[3];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Penanggung Jawab</label>
                                            <input type="text" name="pj" id="pj" class="form-control form-control-user" value="<?php echo $row[4];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu dan Tempat Pembuatan/Penerbitan</label>
                                            <input type="text" name="waktu" id="waktu" class="form-control form-control-user" value="<?php echo $row[5];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Bentuk Informasi</label>
                                            <input type="text" name="bentuk" id="bentuk" class="form-control form-control-user" value="<?php echo $row[6];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jangka Waktu</label>
                                            <input type="text" name="jangka_waktu" id="jangka_waktu" class="form-control form-control-user" value="<?php echo $row[7];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Media</label>
                                            <input type="text" name="jenis_media" id="jenis_media" class="form-control form-control-user" value="<?php echo $row[8];?>">
                                        </div>
                                        
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
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


<?php
if (isset($_POST['submit'])) {
    $id_dip = $_POST['id_dip'];
    $judul_informasi = $_POST['judul_informasi'];
    $ringkasan = $_POST['ringkasan'];
    $pejabat = $_POST['pejabat'];
    $pj = $_POST['pj'];
    $waktu = $_POST['waktu'];
    $bentuk = $_POST['bentuk'];
    $jangka_waktu = $_POST['jangka_waktu'];
    $jenis_media = $_POST['jenis_media'];
    
    $sql1 = "UPDATE dip SET judul_informasi='$judul_informasi', ringkasan='$ringkasan', pejabat_menguasai='$pejabat', penanggung_jawab='$pj', waktu_tempat_pembuatan_penerbitan='$waktu', bentuk_informasi='$bentuk', jangka_waktu='$jangka_waktu', jenis_media_link='$jenis_media' WHERE id_dip='$id_dip'";
    if (mysqli_query($conn, $sql1)) {
            echo '<script>window.location.href="list_dip.php"</script>';
        } else {
            echo "<script>alert('Error: . $sql1 . <br> . mysqli_error($conn)')</script>";
        }
}

die();
?>

