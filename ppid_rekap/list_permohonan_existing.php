<?php 
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
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Permohonan Informasi yang ingin diajukan keberatan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        Silakan <a href="#" class="btn btn-primary btn-user">Pilih</a> permohonan yang ingin diajukan keberatan.<br/><br/>
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
                                                    <th></th>
                                                </tr>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                   $select_query = "SELECT tp.id_permohonan, p.nama, tp.tgl_permohonan, p.tipe_pemohon, tp.rincian_informasi, tp.tujuan, tp.cara_memperoleh_info, 
                                                   tp.cara_mendapatkan_info, tp.status FROM transaksi_permohonan AS tp,pemohon AS p WHERE p.email=tp.email AND p.email='$mail' AND tp.status='Telah ditanggapi'";
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
                                                    <td><font color="#1a5b1c"><b><?php echo $row['status'];?></b></font></td>
                                                    <td><a href="detail_permohonan.php?id=<?php echo $row['id_permohonan'];?>">Detail</a></td>
                                                    <td><a href="form_keberatan.php?id=<?php echo $row['id_permohonan'];?>" class="btn btn-primary btn-user">Pilih</a></td>
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