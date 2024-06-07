<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    include "../admin/koneksi.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Kecamatan Paiton</title>
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

    <?php
    $hal = @$_GET['hal'];
    $dashboard ="hal/beranda.php";
    $p ="hal/$hal.php";
    if(!empty($hal)&& file_exists($p)){
    include "$p";
    }else{
    include "$dashboard";
    }
    ?>


    <!-- testimonials -->
  
    <!-- //testimonials -->
    <!--/newsletter -->
    
    <!--//newsletter-->
    <!--footer -->
    <footer>
        <section class="footer footer_1its py-5">
            <div class="container py-md-4">

                <div class="row footer-top mb-md-5 mb-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 footer-grid_section_1its" data-aos="fade-right">
                        <div class="footer-title-w3ls">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-text">
                            <p>Alamat : Jl. Raya Paiton No.147, <br>
                            Sukodadi, Paiton, Probolinggo,<br>
                            Jawa Timur 67291, Indonesia. </p>
                            <p>Telepon : (0335) 771047</p>
                            <p>Email : <a href="mailto:radarbromo@gmail.com">kecamatanpaiton@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="row">
                            <ul class="col-6 links">
                                <li><a href=".?hal=profile">Profile </a></li>
                                <li><a href=".?hal=agenda">Agenda</a></li>
                                <li><a href=".?hal=galeri">Gallery</a></li>
                                <li><a href=".?hal=berita">Berita</a></li>
                                <li><a href=".?hal=kritik">Kritik dan Saran </a></li>
                            </ul>
                            <ul class="col-6 links">
                            
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-grid_section text-center">
                    <div class="footer-title-w3ls mb-3" data-aos="fade-up">
                        <a href="." class="text-uppercase"> Kecamatan Paiton</a>
                    </div>
                    <div class="footer-text">
                        <p data-aos="fade-up">Pelayanan Yang Santun Dan Satu Hati.</p>
                    </div>
                    <ul class="social_section_1info" data-aos="fade-up">
                        <li class="mb-2 facebook"><a href="#"><i class="fa fa-facebook mr-1"></i>facebook</a></li>
                        <li class="mb-2 twitter"><a href="#"><i class="fa fa-twitter mr-1"></i>twitter</a></li>
                        <li class="google"><a href="#"><i class="fa fa-google-plus mr-1"></i>google</a></li>
                    </ul>
                </div>

            </div>
        </section>
    </footer>
    <!-- //footer -->

    <!-- copy-w3layoutsright -->
    <div class="cpy-right text-center py-3">
        <p class="copy-w3layouts">© 2020 Kecamatan Paiton. All rights reserved | Design by
            <a href=""> Shavirafn.</a>
        </p>
    </div>
    <!-- //copy-w3layoutsright -->

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
    <!--/counter-->
    <script src="js/counternew.js"></script>
    <!--//counter-->
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
