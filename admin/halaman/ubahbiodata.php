<?php
    $id = $_GET['id'];
    $sql ="SELECT * FROM tbl_biodata WHERE id_biodata = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
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
    <input name="txtnamaperu" type="text" value="<?=$r['nama_perusahaan']?>" class="form-control"></div>
       
    <div class="form-group"><label class=" form-control-label">Telepon</label>
        <input name="txttlp" type="text" value="<?=$r['telepon']?>" class="form-control"></div>
           
        <div class="form-group"><label class=" form-control-label">Alamat</label>
            <input name="txtalamat" type="text"  value="<?=$r['alamat']?>" class="form-control"></div>
              
            <div class="row form-group">
                    <div class="col-8">
                        <div class="form-group"><label class=" form-control-label">Nama Pimpinan</label>
                        <input name="txtpmp" type="text" value="<?=$r['nama_pimpinan']?>" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class=" form-control-label">Logo Perusahaan</label>
                        <input name="txtlogo" type="file" value="<?=$r['logo_perusahaan']?>" class="form-control"></div>
                        </div>
                       
                        <div class="form-group"><label class=" form-control-label">Visi</label>
                     <textarea name ="txtvisi" cols="30" rows="10"  class="form-control"><?=$r['visi']?></textarea></div>

                     <div class="form-group"><label class=" form-control-label">Misi</label>
                     <textarea name ="txtmisi" cols="30" rows="10" class="form-control"><?=$r['misi']?></textarea></div>
                       
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

                    if(empty($logo)){
                        mysqli_query($k,"UPDATE tbl_biodata SET nama_perusahaan = '$namaperu', telepon = '$tlp', alamat = '$alamat', nama_pimpinan = '$namapim', visi = '$visi', misi = '$misi' WHERE id_biodata = '$id'");

                    }else{
                        mysqli_query($k,"UPDATE tbl_biodata SET nama_perusahaan = '$namaperu', telepon = '$tlp', alamat = '$alamat', nama_pimpinan = '$namapim', logo_perusahaan = '$logo', visi = '$visi', misi = '$misi' WHERE id_biodata = '$id'");
                        copy($tmp,"../img/$logo");

                    }
                    echo "<script>alert('Data Berhasil Disimpan');location='.?hal=biodata'</script>";
                }
                ?>
            <form>
                       