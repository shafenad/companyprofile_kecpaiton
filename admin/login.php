<?php
    session_start();
    include "koneksi.php";
    if(!empty($_SESSION['iduser'])){
        echo "<script>location='.'</script>";
    }else{
        if(@$_POST['login']){
            $user = $_POST['txtuser'];
            $pass = md5($_POST['txtpassword']);

            $sql = "SELECT * FROM tbl_user WHERE username ='$user' AND password ='$pass'";
            $q = mysqli_query($k,$sql);
            if(mysqli_num_rows($q) > 0){
                $r = mysqli_fetch_assoc($q);
                $_SESSION['iduser'] = $r['id_user'];
                $_SESSION['namauser'] = $r['nama_user'];
                echo "<script>location='.'</script>";
            }else{
                echo "<script>alert('Maaf Data Yang Anda Masukkan Salah');location='login.php'</script>"; 
            }
        }

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kecamatan Paiton</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a>
<style>
.tlogin{
    font-family: 'Franklin Gothic';
    color: white;
}
</style>
                        <div class="tlogin">
                        <h2>LOGIN</h2>
                        </div>
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="txtuser" type="text" class="form-control" placeholder="Username">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="txtpassword" type="password" class="form-control" placeholder="Password">
                        </div>
                               <input name="login" type ="submit" value="Login" class="btn btn-danger btn-block">                               
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
<?php  } ?>