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
    <input name="txtjudul" type="text" placeholder="Masukan Judul Agenda" class="form-control"></div>
       
    <div class="form-group"><label class=" form-control-label">Konten</label>
        <textarea name ="txtkonten" cols="30" rows="10" class="form-control"></textarea></div>
           
        <div class="form-group"><label class=" form-control-label">Tanggal</label>
            <input name="txttgl" type="date" class="form-control"></div>
                       
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
                    mysqli_query($k,"INSERT INTO tbl_agenda(judul_agenda,content_agenda,tanggal,id_user)VALUES('$judul','$konten','$tgl','$iduser')");
                    echo "<script>alert('Data Berhasil Disimpan');location='.?hal=agenda'</script>";
                }
                ?>
            <form>
                       