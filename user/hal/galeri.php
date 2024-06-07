<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Galeri Radar Bromo</title>
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
            <div class="ab-info-grids pt-md-5">
                <div class="contact-info pt-md-5 pt-3 text-center">
                    <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3 inner-tittle inner-tittle">Gallery</h3>
                </div>
            </div>

            <div class="row">
                <ul class="nav nav-pills mt-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="showall-tab" data-toggle="pill" href="#showall" role="tab" aria-controls="showall" aria-selected="true">All</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
                <?php
                $sql = "SELECT * FROM tbl_galery";
                $q = mysqli_query($k,$sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
                    <div class="portfolio">
                        <a class="thumbnail" href="#" data-toggle="modal" data-target="#<?=$r['id_galery']?>" data-image="../img/<?=$r['gambar']?>" data-target="#image-gallery">
                                    <img class="categoryd-img img-fluid" src ="../img/<?=$r['gambar']?>" alt="" />
                            </a>
                    </div>
                <?php } ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <!-- //portfolio -->
<!--/model-->
<?php
            $sql2 = "SELECT * FROM tbl_galery";
            $q2 = mysqli_query($k,$sql2);
            while($r2 = mysqli_fetch_array($q2)){
            ?>
<div class="modal fade" id="<?=$r2['id_galery']?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-left">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                    <img class="img-fluid col-md-12" src ="../img/<?=$r2['gambar']?>" alt="Slog">
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!--/model-->
    <!--//portfolio-->

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
