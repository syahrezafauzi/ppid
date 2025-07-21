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
                                     <h6 class="m-0 font-weight-bold text-primary">Daftar Informasi Publik</h6>
                                </div>
                                <div class="card-body">
                                    <a href="form_dip.php" class="btn btn-primary btn-user">Tambah Informasi Publik</a>
                                    <br/><br/>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul Informasi</th>
                                                    <th>Ringkasan</th>
                                                    <th>Pejabat</th>
                                                    <th>Penanggung jawab</th>
                                                    <th>Waktu, tempat</th>
                                                    <th>Bentuk informasi</th>
                                                    <th>Jangka waktu</th>
                                                    <th>Jenis media</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul Informasi</th>
                                                    <th>Ringkasan</th>
                                                    <th>Pejabat</th>
                                                    <th>Penanggung jawab</th>
                                                    <th>Waktu, tempat</th>
                                                    <th>Bentuk informasi</th>
                                                    <th>Jangka waktu</th>
                                                    <th>Jenis media</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                   $select_query = "SELECT * FROM dip";
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
                                                    <td><?php echo $row['judul_informasi'];?></td>
                                                    <td><?php echo $row['ringkasan'];?></td>
                                                    <td><?php echo $row['pejabat_menguasai'];?></td>
                                                    <td><?php echo $row['penanggung_jawab'];?></td>
                                                    <td><?php echo $row['waktu_tempat_pembuatan_penerbitan'];?></td>
                                                    <td><?php echo $row['bentuk_informasi'];?></td>
                                                    <td><?php echo $row['jangka_waktu'];?></td>
                                                    <td><a href="<?php echo $row['jenis_media_link'];?>">link</a></td>
                                                    <td><a href="edit_dip.php?id=<?php echo $row['id_dip'];?>" class="btn btn-outline-warning">Edit</a></td>
                                                    <td><a href="remove_dip.php?id=<?php echo $row['id_dip'];?>" class="btn btn-outline-danger">Hapus</a></td>
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