<?php session_start(); ?>
<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GUNDAR PANCO</title>

    <!-- Custom fonts for this template-->
    <link href="admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="foto/logo.jpg">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center" style="margin-top:100px">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: rgba(255, 255, 255, 0.9);">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h3 class="text-gray-900 mb-4 mt-3">Selamat Datang</h3>
                                    </div>
                                    <form class="user" method="post" action="">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user" placeholder="Masukkan Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan Password" required>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="simpan">Login</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["simpan"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];


        $ambilAdmin = $koneksi->query("SELECT * FROM user WHERE email='$email' AND password='$password' AND level='Admin' LIMIT 1");
        if ($ambilAdmin->num_rows == 1) {
            $admin = $ambilAdmin->fetch_assoc();
            $_SESSION["admin"] = $admin;
            echo "<script> alert('Login berhasil');</script>";
            echo "<script> location ='admin/index.php';</script>";
        } else {
            echo "<script> alert('Login gagal, periksa akun Anda');</script>";
            echo "<script> location ='login.php';</script>";
        }
    }
    ?>


    <!-- Bootstrap core JavaScript-->
    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="admin/assets/vendor/sweet-alert/sweetalert2.all.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/assets/js/sb-admin-2.min.js"></script>
    <script src="admin/assets/js/demo/sweet-alert.js"></script>

</body>

</html>