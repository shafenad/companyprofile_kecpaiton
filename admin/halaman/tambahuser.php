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
    <input name="txtnama" type="text" placeholder="Masukan Nama" class="form-control"></div>
       
    <div class="form-group"><label class=" form-control-label">Telepon</label>
        <input name="txttlp" type="text" placeholder="+628xxxxx" class="form-control"></div>
           
        <div class="form-group"><label class=" form-control-label">Alamat</label>
            <input name="txtalamat" type="text"  placeholder="Masukan Alamat" class="form-control"></div>
              
            <div class="row form-group">
                    <div class="col-8">
                        <div class="form-group"><label class=" form-control-label">Username</label>
                        <input name="txtuser" type="text" placeholder="Masukan Username" class="form-control"></div>
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
                    $pass = md5($_POST['txtpassword']);
                    mysqli_query($k,"INSERT INTO tbl_user(nama_user,telepon,alamat,username,password)VALUES('$nama','$tlp','$alamat','$user','$pass')");
                    echo "<script>alert('Data Berhasil Disimpan');location='.?hal=user'</script>";
                }
                ?>
            <form>
                       