<?php
    $id = $_GET['id'];
    $sql ="SELECT * FROM tbl_user WHERE id_user = '$id'";
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
        <h2 class="text-center">FORM USER</h2>
            <hr>
 
<form method="post" action="">
    <div class="col-lg-12">
    <div class="card-body card-block"> 
    <div class="form-group"><label class=" form-control-label">Nama</label>
    <input name="txtnama" type="text" value="<?=$r['nama_user']?>" placeholder="Masukan Nama" class="form-control"></div>
       
    <div class="form-group"><label class=" form-control-label">Telepon</label>
        <input name="txttlp" type="text" value="<?=$r['telepon']?>" placeholder="+628xxxxx" class="form-control"></div>
           
        <div class="form-group"><label class=" form-control-label">Alamat</label>
            <input name="txtalamat" type="text" value="<?=$r['alamat']?>" placeholder="Masukan Alamat" class="form-control"></div>
              
            <div class="row form-group">
                    <div class="col-8">
                        <div class="form-group"><label class=" form-control-label">Username</label>
                        <input name="txtuser" type="text" value="<?=$r['username']?>" placeholder="Masukan Username" class="form-control"></div>
                        </div>
                       
                        <div class="col-8">
                            <div class="form-group"><label class=" form-control-label">Password</label>
                            <input name="txtpassword" type="password" placeholder="Password" class="form-control"></div>
                            </div>
                        </div>
                       
                        <div class="form-group mt-4 mb-0">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-secondary">
                    </div>
                    </div>
                </div>
                <?php
                if (@$_POST['simpan']){
                    $nama = $_POST['txtnama'];
                    $tlp = $_POST['txttlp'];
                    $alamat = $_POST['txtalamat'];
                    $user = $_POST['txtuser'];
                    $pass = $_POST['txtpassword'];
                    if(empty($pass)){
                        mysqli_query($k,"UPDATE tbl_user SET nama_user = '$nama', telepon = '$tlp', alamat = '$alamat', username = '$user' WHERE id_user = '$id'");
                    }else{
                        mysqli_query($k,"UPDATE tbl_user SET nama_user = '$nama', telepon = '$tlp', alamat = '$alamat', username = '$user', password = '$pass' WHERE id_user = '$id'");
                    }
                    
                    echo "<script>alert('Data Berhasil Disimpan');location='.?hal=user'</script>";
                }
                ?>
            <form>
                       