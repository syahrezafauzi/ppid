<?php 

require ('connect.php');
include('session_user.php');

$id_table = $_GET['id'];
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .hidden {
            display:none;
        } 

    .box{
        padding: 20px;
        margin-top: 10px;
    }
    .ya{ }
    </style>
<script src="./js/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Keberatan</h6>
                                </div>
                                <div class="card-body">
                                <form class="user" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]). "?id=" . $_GET['id'];?>" enctype="multipart/form-data">
                                    <?php
                                        $today = date("Ymd");
                                        $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
                                        $unique = 'K'.$today.$rand;
                                    ?>
                                    <div class="form-group">
                                        <label>Nomor Keberatan</label>
                                        <input type="text" class="form-control form-control-user" id="nomor_keberatan" name="nomor_keberatan" value="<?php echo $unique; ?>" disabled required>
                                    </div>
                                       <?php   
                                            $select = "SELECT * FROM transaksi_permohonan WHERE id_permohonan='$id_table'";
                                            $get = mysqli_query($conn,$select); 
                                            $row = mysqli_fetch_row($get); 
                                         ?>
                                    <div class="form-group">
                                        <label>Nomor Permohonan</label>
                                        <input type="text" class="form-control form-control-user" id="nomor_permohonan" name="nomor_permohonan" value="<?php echo $id_table; ?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo $mail; ?>" disabled required>
                                    </div>
                                     <div class="form-group">
                                        <label>Rincian Informasi yang Dimohonkan</label>
                                        <input type="text" class="form-control form-control-user" id="rincian" name="rincian" value="<?php echo $row[13]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tujuan Penggunaan Informasi</label>
                                        <input type="text" class="form-control form-control-user" id="tujuan" name="tujuan" value="<?php echo $row[14]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Keberatan</label>
                                        <input type="date" class="form-control form-control-user" id="tgl_keberatan" name="tgl_keberatan" value="<?php echo date('Y-m-d'); ?>"  required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alasan Keberatan</label>
                                        <input type="text" class="form-control form-control-user" id="alasan_keberatan" name="alasan_keberatan" required>
                                    </div>
                                    
                                    <label>Apakah keberatan yang diajukan menggunakan surat kuasa?</label>&emsp;
                                    <select name="jenis" id="jenis">
                                      <option value=""disabled selected>Pilih jenis keberatan</option>
                                      <option value="tidak">1. Tidak menggunakan surat kuasa</option>
                                      <option value="ya">2. Menggunakan surat kuasa</option>
                                    </select>
                                    <div class="ya box">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control form-control-user" id="nama_kuasa" name="nama_kuasa">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input type="text" class="form-control form-control-user" id="pekerjaan_kuasa" name="pekerjaan_kuasa">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="text" class="form-control form-control-user" id="no_hp_kuasa" name="no_hp_kuasa">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control form-control-user" id="email_kuasa" name="email_kuasa">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control form-control-user" id="alamat_kuasa" name="alamat_kuasa">
                                        </div>
                                        <div class="form-group">
                                            <label>File Surat Kuasa (berupa URL Cloud)</label>
                                            <input type="text" class="form-control form-control-user" id="url_file" name="url_file">
                                        </div>
                                    </div>
                                        
                                       
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Ajukan Keberatan" name="submit" id="submit">
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
    $id_keberatan = $unique;
    $id_permohonan = $_GET['id'];
    $email = $mail;
    $tgl_keberatan = date('Y-m-d');
    $alasan_keberatan = $_POST['alasan_keberatan'];
    $jenis_keberatan = $_POST['jenis'];
    $status = 'Mengajukan keberatan';
    $nama_kuasa = $_POST['nama_kuasa'];
    $pekerjaan_kuasa = $_POST['pekerjaan_kuasa'];
    $no_hp_kuasa = $_POST['no_hp_kuasa'];
    $email_kuasa = $_POST['email_kuasa'];
    $alamat_kuasa = $_POST['alamat_kuasa'];
    $url_file = $_POST['url_file'];
    $sql2 = "INSERT INTO transaksi_keberatan(id_keberatan,id_permohonan,email,tgl_keberatan,alasan_keberatan,status,jenis_keberatan) 
    VALUES ('$id_keberatan','$id_permohonan','$email','$tgl_keberatan','$alasan_keberatan','$status','$jenis_keberatan') ";
    $sql3 = "UPDATE transaksi_permohonan SET status='$status' WHERE id_permohonan='$id_permohonan'";
        if (mysqli_query($conn, $sql2)) {
             if (mysqli_query($conn, $sql3)) {
                echo '<script>window.location.href="success_kb.php"</script>';
             }
        } 
        else {
            echo "<script>alert('Error: . $sql2 . <br> . mysqli_error($conn)')</script>";
        } 
}

die();
                            
?>