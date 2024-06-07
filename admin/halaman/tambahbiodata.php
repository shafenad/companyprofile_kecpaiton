<style>
    .rb-admin{
        font-family: 'Franklin Gothic';
        margin-top: 15px;
    }
    </style>
        <div class="rb-admin">
        <h2 class="text-center">FORM PROFILE</h2>
            <hr>
 
<form method="post" action=""  enctype="multipart/form-data">
    <div class="col-lg-12">
    <div class="card-body card-block"> 
    <div class="form-group"><label class=" form-control-label">Nama Perusahaan</label>
    <input name="txtnamaperu" type="text" placeholder="Masukan Nama Perusahaan" class="form-control"></div>
       
    <div class="form-group"><label class=" form-control-label">Telepon</label>
        <input name="txttlp" type="text" placeholder="+628xxxxx" class="form-control"></div>
           
        <div class="form-group"><label class=" form-control-label">Alamat</label>
            <input name="txtalamat" type="text"  placeholder="Masukan Alamat" class="form-control"></div>
              
            <div class="row form-group">
                    <div class="col-8">
                        <div class="form-group"><label class=" form-control-label">Nama Pimpinan</label>
                        <input name="txtpmp" type="text" placeholder="Masukan Username" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class=" form-control-label">Logo Perusahaan</label>
                        <input name="txtlogo" type="file" class="form-control"></div>
                        </div>
                       
                        <div class="form-group"><label class=" form-control-label">Visi</label>
                     <textarea name ="txtvisi" cols="30" rows="10" class="form-control"></textarea></div>

                     <div class="form-group"><label class=" form-control-label">Misi</label>
                     <textarea name ="txtmisi" cols="30" rows="10" class="form-control"></textarea></div>
                       
                        <div class="form-group mt-4 mb-0">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-secondary">
                    </div>
                    </div>
                </div>
                <?php
                if (@$_POST['simpan']){
                    $namaperu = $_POST['txtnamaperu'];
                    $tlp = $_POST['txttlp'];
                    $alamat = $_POST['txtalamat'];
                    $namapim = $_POST['txtpmp'];
                    $logo = $_FILES['txtlogo']['name'];
                    $tmp = $_FILES['txtlogo']['tmp_name'];
                    $visi = $_POST['txtvisi'];
                    $misi = $_POST['txtmisi'];
                    mysqli_query($k,"INSERT INTO tbl_biodata(nama_perusahaan,telepon,alamat,nama_pimpinan,logo_perusahaan,visi,misi)VALUES('$namaperu','$tlp','$alamat','$namapim','$logo','$visi','$misi')")or die (mysqli_error($k));
                    copy($tmp,"../img/$logo");
                    echo "<script>alert('Data Berhasil Disimpan');location='.?hal=biodata'</script>";
                }
                ?>
            <form>
                       