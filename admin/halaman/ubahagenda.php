<?php
    $id = $_GET['id'];
    $sql ="SELECT * FROM tbl_agenda WHERE id_agenda = '$id'";
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
        <h2 class="text-center">FORM AGENDA</h2>
            <hr>
 
<form method="post" action="">
    <div class="col-lg-12">
    <div class="card-body card-block"> 
    <div class="form-group"><label class=" form-control-label">Judul Agenda</label>
    <input name="txtjudul" type="text" value="<?=$r['judul_agenda']?>" placeholder="Masukan Judul Agenda" class="form-control"></div>
       
    <div class="form-group"><label class=" form-control-label">Konten</label>
        <textarea name ="txtkonten" cols="30" rows="10" class="form-control"><?=$r['content_agenda']?></textarea></div>
           
        <div class="form-group"><label class=" form-control-label">Tanggal</label>
            <input name="txttgl" type="date" value="<?=$r['tanggal']?>" class="form-control"></div>
                       
                        <div class="form-group mt-4 mb-0">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-secondary">
                    </div>
                    </div>
                </div>
                <?php
                if (@$_POST['simpan']){
                    $judul = $_POST['txtjudul'];
                    $konten = $_POST['txtkonten'];
                    $tgl = $_POST['txttgl'];
                    $iduser = "1";
                    mysqli_query($k,"UPDATE tbl_agenda SET judul_agenda = '$judul', content_agenda = '$konten', tanggal = '$tgl', id_user = '$iduser' WHERE id_agenda = '$id'");
                    echo "<script>alert('Data Berhasil Disimpan');location='.?hal=agenda'</script>";
                }
                ?>
            <form>
                       