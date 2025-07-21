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

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <a class="small" href="../">&#8592; Kembali ke beranda</a>
                            </div>
                            <br/>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi Permohonan Informasi</h1>
                            </div>
                            <form class="user" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-user" id="email" name="email" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-user" id="password" name="password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Konfirmasi Password</label>
                                        <input type="password" class="form-control form-control-user" id="konfirm_password" name="konfirm_password" onkeyup="confirm()" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                            			<p id="message"></p>
                            		</div>
                                    <script>
                                    function confirm() {
                                          var x = document.getElementById("password").value;
                                          var y = document.getElementById("konfirm_password").value;
                                          if(x != y){
                                              z = 'Password tidak sesuai, mohon ketikkan ulang.';
                                          }else{
                                              z = 'Password sesuai';
                                          }
                                          document.getElementById("message").innerHTML = z;
                                        }
                            	</script>
                                <hr/>
                                <?php
                                    $today = date("Ymd");
                                    $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
                                    $unique = 'P'.$today.$rand;
                                ?>
                                 <div class="form-group">
                                    <label>Nomor Permohonan</label>
                                    <input type="text" class="form-control form-control-user" id="id_permohonan" name="id_permohonan" value="<?php echo $unique; ?>" read-only disabled required>
                                </div>

                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Permohonan</label>
                                    <input type="date" class="form-control form-control-user" id="tgl_permohonan" name="tgl_permohonan" value="<?php echo date('Y-m-d'); ?>" read-only required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="cara_permohonan" name="cara_permohonan" value="online" required>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control form-control-user" id="pekerjaan" name="pekerjaan" required>
                                </div>
                                <div class="form-group">
                                <label>Tipe Pemohon</label><br/>
                                <select name="tipe" id="tipe">
                                  <option value=""disabled selected>Pilih tipe pemohon</option>
                                  <option value="perorangan">Perorangan</option>
                                  <option value="badan_hukum">Badan Hukum</option>
                                  <option value="kelompok">Kelompok Masyarakat</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor KTP/SIM/Paspor/Akta Pendirian (khusus NGO)</label>
                                    <input type="text" class="form-control form-control-user" id="no_ktp" name="no_ktp" required>
                                </div>
                                <div class="form-group">
                                    <label>Upload KTP/SIM/Paspor/Akta Pendirian (khusus NGO)</label><br/>
                                    <input type="file" name="upload_ktp" accept="image/png, image/jpg, image/jpeg" id="upload_ktp" required>
                                    <label for="img" style="font-size:small;">format JPG/PNG/JPEG, max. 2MB</label>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label>Nomor HP</label>
                                    <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" onkeypress="return mask(this,event);" required>
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
                                  <option value="email/aplikasi">Email/Aplikasi</option>
                                </select>
                                </div>
                                <br/>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                            </form>
                            <br/>
                             <hr/>
                             <br/>
                            <div class="text-center">
                                Sudah punya akun?&nbsp;<a class="small" href="login.php">klik disini</a>
                            </div>
                        </div>
                    </div>
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

</body>

</html>

<?php 
 
require_once 'connect.php';
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_permohonan = $unique;
    $nama = $_POST['nama_lengkap'];
    $tgl_permohonan = date('Y-m-d');
    $cara_permohonan = $_POST['cara_permohonan'];
    $pekerjaan = $_POST['pekerjaan'];
    $tipe_pemohon = $_POST['tipe'];
    $no_ktp = $_POST['no_ktp'];
    $filename = $_FILES["upload_ktp"]["name"];
    $source = $_FILES["upload_ktp"]["tmp_name"];
    $temp = explode(".",$_FILES["upload_ktp"]["name"]);
    $newfilename = rand(1,99999) . '.' .$unique; 
    $destination = "ktp/$newfilename";    
    move_uploaded_file($source, $destination);
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $rincian = $_POST['rincian'];
    $tujuan = $_POST['tujuan'];
    $cara1 = $_POST['cara1']; 
    $cara2 = $_POST['cara2'];
    $options = [
        'cost' => 5
    ];
    $password = password_hash($password,PASSWORD_DEFAULT,$options);
    $sql2 = "INSERT INTO transaksi_permohonan(email,pass,id_permohonan,nama,tgl_permohonan,cara_permohonan,pekerjaan,tipe_pemohon,nomor_ktp,alamat,nomor_hp,rincian_informasi,tujuan,cara_memperoleh_info,cara_mendapatkan_info,status,filename_ktp) VALUES ('$email','$password','$id_permohonan','$nama','$tgl_permohonan','$cara_permohonan','$pekerjaan','$tipe_pemohon','$no_ktp','$alamat','$no_hp','$rincian','$tujuan','$cara1','$cara2','Proses validasi','$newfilename') ";
    $sql3 = "INSERT INTO pemohon(email,pass,nama,pekerjaan,tipe_pemohon,nomor_ktp,filename_ktp,alamat,nomor_hp) VALUES ('$email','$password','$nama','$pekerjaan','$tipe_pemohon','$no_ktp','$newfilename','$alamat','$no_hp') ";
        if ((mysqli_query($conn, $sql2)) && (mysqli_query($conn, $sql3))) {
            echo '<script>window.location.href="notif.php"</script>';
            
        } else {
            echo "<script>alert('Error: . $sql2 . <br> . mysqli_error($conn)')</script>";
        } 
}

die();
 
?>