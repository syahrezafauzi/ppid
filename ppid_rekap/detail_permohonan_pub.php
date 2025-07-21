<?php 

require ('connect.php');

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
                                    <h6 class="m-0 font-weight-bold text-primary">Detail Permohonan</h6>
                                </div>
                                <div class="card-body">
                                     <?php   
                                            $select = "SELECT * FROM transaksi_permohonan WHERE id_permohonan='$id_table'";
                                            $get = mysqli_query($conn,$select); 
                                            $row = mysqli_fetch_row($get); 
                                         ?>
                                         <table border="0" width="auto" cellpadding="0" cellspacing="0" height="auto">
                                            <tr>
                                                <td>Nomor Permohonan</td>
                                                <td><b><?php echo $id_table; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td><b><?php echo $row[2]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><b><?php echo $row[3]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Permohonan</td>
                                                <td><b><?php echo $row[5]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Cara Permohonan</td>
                                                <td><b><?php echo $row[6]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan</td>
                                                <td><b><?php echo $row[7]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Tipe Pemohon</td>
                                                <td><b><?php echo $row[8]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor KTP</td>
                                                <td><b><?php echo $row[9]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td><br/></td>
                                                <td><br/></td>
                                            </tr>
                                            <tr>
                                                <td>KTP</td>
                                                <td><img src="ktp/<?php echo $row[10];?>" width="500"/></td>
                                            </tr>
                                            <tr>
                                                <td><br/></td>
                                                <td><br/></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td><b><?php echo $row[11]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor HP</td>
                                                <td><b><?php echo $row[12]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Rincian Informasi</td>
                                                <td><b><?php echo $row[13]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Tujuan</td>
                                                <td><b><?php echo $row[14]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Cara Memperoleh Informasi&emsp;</td>
                                                <td><b><?php echo $row[15]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Cara Mendapatkan Informasi&emsp;</td>
                                                <td><b><?php echo $row[16]; ?></b></td>
                                            </tr>
                                            <?php if($row[20] != NULL) { ?>
                                            <tr>
                                                <td>Tanggal Tanggapan</td>
                                                <td><b><?php echo $row[17]; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggapan</td>
                                                <td><b><?php echo $row[20]; ?></b></td>
                                            </tr>
                                            <?php if($row[18] != NULL){ ?>
                                             <tr>
                                                <td>File Tanggapan</td>
                                                <td><b><a href="<?php echo $row[18]; ?>"><?php echo $row[18]; ?></a></b></td>
                                            </tr>
                                            <?php }
                                            
                                            } ?>
                                            <tr>
                                                <td>Status</td>
                                                <td><?php if($row[19] == 'Proses validasi') { ?>
                                                <font color="#ec942c"><b><?php echo $row[19]; ?></b></font>
                                                    <?php } else if($row[19] == 'Ditolak') { ?>
                                                    <font color="#69222b"><b><?php echo $row[19]; ?></b></font>
                                                    <?php } else if($row[19] == 'Telah ditanggapi') { ?>
                                                    <font color="#1a5b1c"><b><?php echo $row[19]; ?></b></font>
                                                    <?php } else { ?>
                                                    <font color="#2f3d69"><b><?php echo $row[19]; ?></b></font>
                                                    <?php } ?>
                                                    </td>
                                            </tr>
                                         </table>
                                        <br/>
                                        <a href="javascript:window.print()" class="btn btn-primary btn-user"><i class="fas fa-fw fa-print"></i>&ensp;Print&ensp;</a>
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