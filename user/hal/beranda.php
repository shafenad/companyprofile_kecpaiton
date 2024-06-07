<!-- banner-w3layouts -->
<section class="banner-w3layouts">
<div class="container">
    <div class="row banner-w3layouts-grids">
        <div class="col-lg-6 banner-w3layouts-info">
            <h3 class="mb-3" data-aos="fade-up">Info Update Seputar Paiton</h3>
        </div>
        <div class="col-lg-6 banner-w3layouts-image">
            <div class="effect-w3">
                <img src="images/kecamatan.jpg" alt="" class="img-fluid image1">
                <img src="images/kecamatan.jpg" alt="" class="img-fluid image2">
                <img src="images/kecamatan.jpg" alt="" class="img-fluid image3">
                <img src="images/kecamatan.jpg" alt="" class="img-fluid image4">
            </div>

        </div>
    </div>
</div>
</section>
<!-- //banner-w3layouts -->
<!-- banner-w3layouts -->
<?php
$sql3 ="SELECT * FROM tbl_biodata";
$q3 = mysqli_query($k,$sql3);
$r3 = mysqli_fetch_assoc($q3);
?>
<section class="ab-info-main py-md-5 py-5">
<div class="container py-md-5 py-5">
<div class="ab-info-grids pt-md-5 pt-3">
<div class="ab-info pt-md-5 pt-3 text-center">
    <h4 class="mb-3" data-aos="fade-up">Tentang Kami</h4>
    <div class="row my-md-5 justify-content-center">
        <h4 class="mb-3" data-aos="fade-up">Visi</h4>
        <p class="mb-4 col-md-6" data-aos="fade-up"><?=$r3['visi']?></p>
        <div class="row my-md-5 justify-content-center">
        <h4 class="mb-3" data-aos="fade-up">Misi</h4>
        <p class="mb-4 col-md-6" data-aos="fade-up"><?=$r3['misi']?></p>
</div>
</div>
</div>
</section>
<!--/counter-->
<section class="stats py-lg-5 py-4">
<div class="container">
<div class="row text-center">
    <div class="col">
        <div class="counter">
            <h3 class="timer count-title count-number" data-to="1" data-speed="1500"></h3>
            <p class="count-text ">Total Artikel</p>
        </div>
    </div>
    <div class="col">
        <div class="counter">
            <h3 class="timer count-title count-number" data-to="0" data-speed="1500"></h3>
            <p class="count-text ">Total Pembaca</p>
        </div>
    </div>
    <div class="col">
        <div class="counter">
            <h3 class="timer count-title count-number" data-to="0" data-speed="1500"></h3>
            <p class="count-text ">Total Kunjungan</p>
        </div>
    </div>
</div>
</div>
</section>
<!--//counter-->
<!--/ab -->
<section class="about py-lg-5 py-md-5 py-3">
<div class="container">
<div class="inner-sec-wthree py-lg-5 py-3">
    <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3">Agenda</h3>
    <div class="feature-grids row mb-lg-5 mb-3">
    <?php
        $sql1 = "SELECT * FROM tbl_agenda order by id_agenda desc limit 3";
        $q1 = mysqli_query($k,$sql1);
        while($r1 = mysqli_fetch_assoc($q1)){
        ?>
        <div class="col-lg-4 p-0" data-aos="fade-up">
            <div class="bottom-gd p-5">

                <h3 class="my-3"><?=$r1['judul_agenda']?></h3>
                <p><?=$r1['content_agenda']?></p>
            </div>
        </div>
    <?php } ?>
    </div>
    <!-- services -->
    
    <!-- //services -->
</div>
</div>
</section>
<!-- //ab -->

<!--//team -->

<!--//team -->
<!-- middle section -->

<!--//middle section -->
<!-- portfolio -->
<section class="portfolio-flyer pt-5 pb-5" id="gallery">
<div class="container py-lg-5">
<h3 class="tittle text-uppercase text-center my-lg-5 my-3">Gallery</h3>
<div class="row mt-lg-4 mt-3 ">
    <ul class="nav nav-pills mt-3" id="pills-tab" role="tablist">
    </ul>
</div>
<div class="container ">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
        <?php
        $sql2 = "SELECT * FROM tbl_galery order by id_galery desc limit 2";
        $q2 = mysqli_query($k,$sql2);
        while($r2 = mysqli_fetch_assoc($q2)){
        ?>
            <div class="portfolio" data-aos="zoom-in">
                <a class="thumbnail" href="#" data-toggle="modal" data-target="#<?=$r2['id_galery']?>" data-image="../img/<?=$r2['gambar']?>" data-target="#image-gallery">
                        <img class="categoryd-img img-fluid" src ="../img/<?=$r2['gambar']?>" alt ="" />
                </a>
            </div>
        <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
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
                    <img class="img-fluid col-md-12" src="../img/<?=$r2['gambar']?>" alt="Slog">
                </div>
            </div>

        </div>
    </div>
</div>

<?php } ?>
<!--/model-->
<!--//portfolio-->

<!-- /hand-crafted -->

<div class="mb-5">
<h3 class="tittle text-uppercase text-center mb-lg-5 mb-3">Berita terbaru</h3>
</div>
<section class="hand-crafted py-4">
<div class="container py-xl-5 py-lg-3">
<div class="row banner-w3layouts-grids">
    <div class="col-lg-6 banner-w3layouts-image">
        <div class="effect-w3">
            <img src="../img/berita1.jpg" alt="" class="img-fluid image1">
            <img src="../img/berita1.jpg" alt="" class="img-fluid image2">
            <img src="../img/berita1.jpg" alt="" class="img-fluid image3">
            <img src="../img/berita1.jpg" alt="" class="img-fluid image4">
        </div>

    </div>
    
    <div class="col-lg-6 banner-w3layouts-info pl-md-5">
        
        <h3 class="mb-3" data-aos="fade-up">KEGIATAN VAKSINASI PETUGAS KECAMATAN SERENTAK.</h3>
        <p class="mb-4" data-aos="fade-up">Sebanyak 18.500 orang petugas pelayan publik di Kabupaten Probolinggo mulai dilakukan suntik vaksinasi Covid-19 serentak. Kecamatan Paiton adalah salah satu kantor pelayanan publik yang melakukan kegiatan vaksinasi. Para petugas serentak melakukan kegiatan vaksinasi yang dilakukan di puskesmas terdekat.
</p>
        <a href=".?hal=berita" class="btn">Baca Selengkapnya</a>
    </div>
</div>
</div>
</section>

<!-- //hand-crafted -->