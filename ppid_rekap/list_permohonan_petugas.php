<?php 
error_reporting(0);
require_once('connect.php');
include('session_petugas.php');
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
                                     <h6 class="m-0 font-weight-bold text-primary">Daftar Permohonan Informasi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nomor Permohonan</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Tanggal Permohonan</th>
                                                    <th>Tipe Pemohon</th>
                                                    <th>Rincian Informasi</th>
                                                    <th>Tujuan Informasi</th>
                                                    <th>Cara Memperoleh Informasi</th>
                                                    <th>Cara Mendapatkan Informasi</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nomor Permohonan</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Tanggal Permohonan</th>
                                                    <th>Tipe Pemohon</th>
                                                    <th>Rincian Informasi</th>
                                                    <th>Tujuan Informasi</th>
                                                    <th>Cara Memperoleh Informasi</th>
                                                    <th>Cara Mendapatkan Informasi</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                   $select_query = "SELECT id_permohonan, nama, tgl_permohonan, tipe_pemohon, rincian_informasi, 
                                                   tujuan, cara_memperoleh_info, cara_mendapatkan_info, status FROM transaksi_permohonan ORDER BY tgl_permohonan DESC";
                                                   $result =  mysqli_query($conn, $select_query);
                                                   if(mysqli_num_rows($result) > 0){
                                                       
                                                   }else{
                                                       $msg = "Tidak ada data";
                                                   }
                                                
                                                    echo $msg;
                                    
                                                    $no=1;
                                                    while($row=mysqli_fetch_assoc($result)){ 
                                                    ?>
                                                <tr>
                                                    <td><?php echo $no++;?></td>
                                                    <td><?php echo $row['id_permohonan'];?></td>
                                                    <td><?php echo $row['nama'];?></td>
                                                    <td><?php echo $row['tgl_permohonan'];?></td>
                                                    <td><?php echo $row['tipe_pemohon'];?></td>
                                                    <td><?php echo $row['rincian_informasi'];?></td>
                                                    <td><?php echo $row['tujuan'];?></td>
                                                    <td><?php echo $row['cara_memperoleh_info'];?></td>
                                                    <td><?php echo $row['cara_mendapatkan_info'];?></td>
                                                    <td>
                                                    <?php if($row['status'] == 'Proses validasi') { ?>
                                                    <font color="#ec942c"><b><?php echo $row['status']; ?></b></font>
                                                    <?php } else if($row['status'] == 'Ditolak') { ?>
                                                    <font color="#69222b"><b><?php echo $row['status']; ?></b></font>
                                                    <?php } else if($row['status'] == 'Telah ditanggapi') { ?>
                                                    <font color="#1a5b1c"><b><?php echo $row['status']; ?></b></font>
                                                    <?php } else { ?>
                                                    <font color="#2f3d69"><b><?php echo $row['status']; ?></b></font>
                                                    <?php } ?>
                                                    </td>
                                                    <td><a href="detail_permohonan_petugas.php?id=<?php echo $row['id_permohonan'];?>">Detail</a></td>
                                                </tr>
                                               <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
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