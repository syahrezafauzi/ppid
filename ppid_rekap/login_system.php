<?php 
include 'connect.php';

session_start();
 
if (isset($_SESSION['email'])) {
    header("Location: home_petugas.php");
}
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

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <a class="small" href="../">&#8592; Kembali ke beranda</a>
                                    </div>
                                    <br/>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Log In</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" placeholder="Email" name="email" id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" placeholder="Password" name="password" id="password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                            </div>
                                        </div>
                                        <input type="submit"  class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                                        
                                    <div><br/><br/></div>
                                    <?php 
                                    if (isset($_POST['submit'])) {
                                        $email = mysqli_real_escape_string($conn, $_POST['email']); 
                                        $pass = $_POST['password'];
                                        $sql = mysqli_query($conn, "SELECT email, pass FROM system WHERE email = '$email'");

                                        list($email, $password) = mysqli_fetch_array($sql);
                                
                                        if (mysqli_num_rows($sql) > 0) {
                                
                                            if (password_verify($pass, $password)) {
                                                session_start();
                                                $_SESSION['email'] = $email;
                                                echo '<script>window.location.href="home_petugas.php"</script>';
                                                
                                            } else {
                                                    echo "<script>alert('Email atau password Anda salah. Silakan coba lagi...')</script>";
                                                }

                                            } else {
                                                echo "<script>alert('Email atau password Anda salah. Silakan coba lagi...')</script>";
                                            } 
                                        }
                                         
                                    ?>
                                    
                                    </form>
                                 
                                          
                                </div>
                                
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