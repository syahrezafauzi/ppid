<?php 

require_once('connect.php');
include('session_petugas.php');
$id_table = $_GET['id'];
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
                                    <h6 class="m-0 font-weight-bold text-primary">Form Penolakan</h6>
                                </div>
                                <div class="card-body">
                                <form class="user" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?id=" . $_GET['id'];?>">
                                    <div class="form-group">
                                        <label>Nomor Permohonan</label>
                                        <input type="text" class="form-control form-control-user" id="nomor_permohonan" name="nomor_permohonan" value="<?php echo $id_table; ?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Tanggapan</label>
                                        <input type="date" class="form-control form-control-user" id="tgl_tanggapan" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>"  required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alasan Penolakan</label><br/>
                                        <input type="text" class="form-control form-control-user" id="alasan_penolakan" name="alasan_penolakan" required>
                                    </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                                
                            </form>
                            <?php 
                            if(isset($_POST['submit']))
                                {    
                                     $tgl_tanggapan = $_POST['tgl_tanggapan'];
                                     $tanggapan = $_POST['alasan_penolakan'];
                                     $status = "Ditolak";
                                     $id_permohonan = $_GET['id'];
                                     $sql_update = "UPDATE transaksi_permohonan SET tgl_tanggapan='$tgl_tanggapan', tanggapan='$tanggapan', status='$status' WHERE id_permohonan='$id_permohonan'";
                                     if (mysqli_query($conn, $sql_update)) {
                                        echo '<script>window.location.href="home_petugas.php"</script>';
                                     } else {
                                        echo "Error: " . $sql_update . ":-" . mysqli_error($conn);
                                     }
                                }
            
                            
                            ?>
                 
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