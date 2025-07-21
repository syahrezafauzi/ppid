<?php 
require ('connect.php');

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

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PPID Utama</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-bars"></i>
                    <span>Rekapitulasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Kembali ke Beranda</span></a>
            </li>
        

          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Survei Kepuasan Masyarakat</strong></p>
                <a class="btn btn-success btn-sm" href="">Isi survei</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Rekapitulasi Pelayanan Informasi Publik Tahun 2024</h1>
                        <form action="">
                            <label for="form">Pilih tahun:&ensp;</label>
                            <select name="form" id="form">
                                <option value="index.php">2024</option>
                                 <option value="rekap_2023.php">2023</option>
                            </select>
                            <script type="text/javascript">
                                 var urlmenu = document.getElementById('form');
                                 urlmenu.onchange = function() {
                                      window.location = this.options[this.selectedIndex].value ;
                                 };
                                </script>
                        </form>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
 
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Permohonan Informasi</div>
                                                <?php 
                                                $select = "SELECT COUNT(id_permohonan) FROM transaksi_permohonan WHERE year(tgl_permohonan)=2024";
                                                $get = mysqli_query($conn,$select); 
                                                $row = mysqli_fetch_row($get); 
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row[0];?></div>
                                        </div> 
                                            <div class="col-auto">
                                            <i class="fas fa-bars fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pengajuan Keberatan</div>
                                                 <?php 
                                                $select2 = "SELECT COUNT(id_keberatan) FROM transaksi_keberatan WHERE year(tgl_keberatan)=2024";
                                                $get2 = mysqli_query($conn,$select2); 
                                                $row2 = mysqli_fetch_row($get2); 
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row2[0];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-angle-up fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sengketa Informasi
                                            </div>
                                            <?php 
                                                $select3 = "SELECT COUNT(id_sengketa) FROM transaksi_sengketa";
                                                $get3 = mysqli_query($conn,$select3); 
                                                $row3 = mysqli_fetch_row($get3); 
                                                ?>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $row3[0];?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Permohonan Ditolak</div>
                                                <?php 
                                                $select4 = "SELECT COUNT(id_permohonan) FROM transaksi_permohonan WHERE status='Ditolak' AND year(tgl_permohonan)=2024";
                                                $get4 = mysqli_query($conn,$select4); 
                                                $row4 = mysqli_fetch_row($get4); 
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row4[0];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pelayanan Permohonan Informasi</h6>
                                  
                                </div>
                                <!-- Card Body -->
                             <div class="card-body">
                                Rata-rata Pelayanan : <b>1 Hari 2 jam 7 menit 10 detik</b><br/>
                                
                                Pelayanan Tercepat : <b>1 menit 9 detik</b><br/>
                                
                                Pelayanan Terlama : <b>12 Hari 3 jam 4 menit 21 detik </b>

                                </div> 
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pelayanan Keberatan Informasi</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                   <font color="#81242d"><b>Belum ada keberatan informasi yang diajukan melalui aplikasi.</b></font><br/>
                                   <!-- Rata-rata Pelayanan : <b>-</b><br/>
                                
                                   Pelayanan Tercepat : <b>-</b><br/>
                                
                                   Pelayanan Terlama : <b>-</b> -->
                                </div>
                            </div>
                        </div>
                    </div>

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
                                                    <th>Tanggal Permohonan</th>
                                                    <th>Tanggal Selesai Permohonan</th>
                                                    <th>No. Permohonan</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Cara Permohonan</th>
                                                    <th>Informasi Publik</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Permohonan</th>
                                                    <th>Tanggal Selesai Permohonan</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Cara Permohonan</th>
                                                    <th>Informasi Publik</th>
                                                    <th>Status</th>
                                                </tr>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                         
                                                   $select_query = "SELECT * FROM transaksi_permohonan WHERE year(tgl_permohonan)=2024 ORDER BY tgl_permohonan DESC";
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
                                                    <td><?php echo $row['tgl_permohonan'];?></td>
                                                    <td><?php echo $row['tgl_tanggapan'];?></td>
                                                    <td><?php echo $row['nama'];?></td>
                                                    <td><?php echo $row['cara_permohonan'];?></td>
                                                    <td><?php echo $row['rincian_informasi'];?></td>
                                                    <td>
                                                    <?php if($row['status'] == 'Proses validasi') { ?>
                                                    <font color="#ec942c"><b><?php echo $row['status']; ?></b></font>
                                                    <?php } else if($row['status'] == 'Ditolak') { ?>
                                                    <font color="#69222b"><b><?php echo $row['status']; ?></b></font><br/>
                                                    <font size="small"><b>Alasan penolakan:</b><br/> <?php echo $row['tanggapan']; ?></font>
                                                    <?php } else if($row['status'] == 'Telah ditanggapi') { ?>
                                                    <font color="#1a5b1c"><b><?php echo $row['status']; ?></b></font>
                                                    <?php } else { ?>
                                                    <font color="#2f3d69"><b><?php echo $row['status']; ?></b></font>
                                                    <?php } ?>
                                                    </td>
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

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PPID Utama Kementerian Agama RI</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
    
    <script src="js/demo/chart-pie-demo.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
</body>

</html>