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
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Permohonan</h6>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $today = date("Ymd");
                                    $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
                                    $unique = 'P'.$today.$rand;
                                ?>
                                <form class="user" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                                     
                                 <div class="form-group">
                                    <label>Nomor Permohonan</label>
                                    <input type="text" class="form-control form-control-user" id="nomor_permohonan"
                                         name="nomor_permohonan" value="<?php echo $unique; ?>" disabled required>
                                </div>
                                <?php   
                                $select = "SELECT * FROM pemohon WHERE email='$mail'";
                                $get = mysqli_query($conn,$select); 
                                $row = mysqli_fetch_row($get); 
                                ?>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control form-control-user" id="email" name="email" value="<?php echo $mail;?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row[3];?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Permohonan</label>
                                        <input type="date" class="form-control form-control-user" id="tgl_permohonan" name="tgl_permohonan" value="<?php echo date('Y-m-d'); ?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" id="cara_permohonan" name="cara_permohonan" value="online" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control form-control-user" id="pekerjaan" name="pekerjaan" value="<?php echo $row[4];?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                    <label>Tipe Pemohon</label><br/>
                                    <select name="tipe" id="tipe">
                                      <option value=""disabled selected>Pilih tipe pemohon</option>
                                      <option value="perorangan" <?php if($row[5]=="perorangan") echo 'selected="selected"'; ?> disabled>Perorangan</option>
                                      <option value="badan_hukum" <?php if($row[5]=="badan_hukum") echo 'selected="selected"'; ?>disabled>Badan Hukum</option>
                                      <option value="kelompok" <?php if($row[5]=="kelompok") echo 'selected="selected"'; ?> disabled>Kelompok Masyarakat</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor KTP</label>
                                        <input type="text" class="form-control form-control-user" id="no_ktp" name="no_ktp" value="<?php echo $row[6];?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>KTP</label><br/>
                                        <img src="ktp/<?php echo $row[7];?>" width="500"/><br/>
                                        <input type="hidden" name="filename" value="<?php echo $row[7];?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?php echo $row[8];?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?php echo $row[9];?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Rincian Informasi yang Dimohonkan</label>
                                        <input type="text" class="form-control form-control-user" id="rincian" name="rincian" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tujuan Penggunaan Informasi</label>
                                        <input type="text" class="form-control form-control-user" id="tujuan" name="tujuan" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Cara Memperoleh Informasi</label><br/>
                                    <select name="cara1" id="cara1">
                                     <option value="" disabled selected>Pilih cara memperoleh informasi</option>
                                      <option value="melihat/membaca/mendengarkan/mencatat">Melihat/membaca/mendengarkan/mencatat</option>
                                      <option value="mendapatkan salinan informasi">Mendapatkan salinan informasi</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Cara Mendapatkan Informasi</label><br/>
                                     <select name="cara2" id="cara2">
                                      <option value="" disabled selected>Pilih cara mendapatkan informasi</option>
                                      <option value="mengambil langsung">Mengambil langsung</option>
                                      <option value="kurir">Kurir</option>
                                      <option value="pos">Pos</option>
                                      <option value="fax">Fax</option>
                                      <option value="email">Email</option>
                                    </select>
                                    </div>
                                    <br/>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Ajukan Permohonan" name="submit" id="submit">
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

<?php 
if(isset($_POST['submit'])) {    
    $email = $mail;
    $id_permohonan = $unique;
    $nama = $row[3];
    $tgl_permohonan = date('Y-m-d');
    $cara_permohonan = $_POST['cara_permohonan'];
    $pekerjaan = $row[4];
    $tipe_pemohon = $row[5];
    $no_ktp = $row[6];
    $filename_ktp = $row[7];
    $alamat = $row[8];
    $no_hp = $row[9];
    $rincian = $_POST['rincian'];
    $tujuan = $_POST['tujuan'];
    $cara1 = $_POST['cara1'];
    $cara2 = $_POST['cara2'];
    $sql2 = "INSERT INTO transaksi_permohonan(email,pass,id_permohonan,nama,tgl_permohonan,cara_permohonan,pekerjaan,tipe_pemohon,nomor_ktp,alamat,nomor_hp,rincian_informasi,tujuan,cara_memperoleh_info,cara_mendapatkan_info,status,filename_ktp) VALUES ('$email','$password','$id_permohonan','$nama','$tgl_permohonan','$cara_permohonan','$pekerjaan','$tipe_pemohon','$no_ktp','$alamat','$no_hp','$rincian','$tujuan','$cara1','$cara2','Proses validasi','$filename_ktp') ";
        if (mysqli_query($conn, $sql2)) {
            echo '<script>window.location.href="list_permohonan.php"</script>';
        } else {
            echo "Error: " . $sql_update . ":-" . mysqli_error($conn);
        }
}
?>





