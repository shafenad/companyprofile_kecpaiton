<style>
    .rb-admin{
        font-family: 'Franklin Gothic';
        margin-top: 15px;
    }
    </style>
        <div class="rb-admin">
        <h2 class="text-center">FORM BERITA</h2>
            <hr>
 
<form method="post" action="" enctype="multipart/form-data">
    <div class="col-lg-12">
    <div class="card-body card-block"> 
    <div class="form-group"><label class=" form-control-label">Judul Berita</label>
    <input name="txtjudul" type="text" placeholder="Masukan Judul Berita" class="form-control"></div>
       
    <div class="form-group"><label class=" form-control-label">Konten Berita</label>
    <textarea name ="txtkonten" cols="30" rows="10" class="form-control"></textarea></div>

             <div class="form-group"><label class=" form-control-label">Gambar</label>
            <input name="txtgambar" type="file" placeholder="Masukan Gambar" class="form-control"></div>

            <div class="form-group"><label class=" form-control-label">Tanggal</label>
            <input name="txttgl" type="date"  class="form-control"></div>
                       
                        <div class="form-group mt-4 mb-0">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-secondary">
                    </div>
                    </div>
                </div>
                <?php
                if (@$_POST['simpan']){
                    $judul = $_POST['txtjudul'];
                    $konten = $_POST['txtkonten'];
                    $gambar = $_FILES['txtgambar']['name'];
                    $tmp = $_FILES['txtgambar']['tmp_name'];
                    $tgl = $_POST['txttgl'];
                    $iduser = "1";
                    mysqli_query($k,"INSERT INTO tbl_berita(judul_berita,content_berita,gambar,tanggal,id_user)VALUES('$judul','$konten','$gambar','$tgl','$iduser')");
                    copy($tmp,"../img/$gambar");
                    echo "<script>alert('Data Berhasil Disimpan');location='.?hal=news'</script>";
                }
                ?>
            <form>
                       