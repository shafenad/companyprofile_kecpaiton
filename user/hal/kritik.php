<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Kritik dan Saran Radar Bromo</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Slog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <div class="main-content" id="home">
<!-- header -->
<header class="py-1">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1>
                <a class="navbar-brand" href=".">Kecamatan Paiton</a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-4 m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href=".?hal=profile">Profile <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href=".?hal=agenda">Agenda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href=".?hal=galeri">Gallery <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href=".?hal=berita">Berita <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href=".?hal=kritik">Kritik dan Saran <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- //header -->
    </div>
    <!--/ab -->


    <!-- banner-w3layouts -->
    <section class="ab-info-main py-md-5 py-5">
        <div class="container py-md-5 py-5">
            <div class="ab-info-grids pt-md-5 pt-3">
                <div class="contact-info pt-md-5 pt-0 text-center">
                    <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3 inner-tittle">Kritik dan Saran</h3>
                    <div class="contact-form mt-md-5">
                        <div class="contact-form-inner mx-auto text-left">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group" data-aos="fade-up">
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="Masukan Email" name="xmail">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" data-aos="fade-up">
                                    <label>Pesan</label>
                                    <textarea name="xpesan" class="form-control" placeholder="Masukan Pesan anda"></textarea>
                                </div>
                                <input type="submit" name="kirim" value="Kirim" class="btn btn-secondary">
                                <?php
                                    if (@$_POST['kirim']){
                                        $email = $_POST['xmail'];
                                        $pesan = $_POST['xpesan'];
                                        $tgl = date("Y-m-d");
                                        mysqli_query($k,"INSERT INTO tbl_pesan(email,pesan,tanggal)VALUES('$email','$pesan','$tgl')");
                                        echo "<script>alert('Data Berhasil Disimpan');location='.?hal=kritik'</script>";
                                    }
                                    ?>
                            </form>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- //banner-w3layouts -->

    <script src="js/jquery-2.2.3.min.js"></script>
    <!--/aos -->
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

    </script>
    <!--//aos -->
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!--// end-smoth-scrolling -->

    <!-- //js -->

    <script src="js/bootstrap.js"></script>

</body>

</html>
