<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<!-- Header-->
<header id="header" class="header">

<div class="header-menu">

    <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        <style>
    .rb-admin{
        font-family: 'Franklin Gothic'
    }
    </style>
        <div class="rb-admin">
            <h2 class="text-right">DATA PROFILE</h2> 
            <hr>  
</div>
</div>
</div>
<a href=".?hal=tambahbiodata"><button type="button" class="btn btn-secondary ml-3">Tambah Data</button></a>

<div class="animated fadeIn">
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Nama Pimpinan</th>
                        <th>Logo Perusahaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
               <tbody>
                   <?php
                   $sql = "SELECT * FROM tbl_biodata";
                   $q = mysqli_query($k,$sql);
                   while($r = mysqli_fetch_assoc($q)){
                   ?>
                   <tr>
                       <td><?=$r['nama_perusahaan']?></td>
                       <td><?=$r['telepon']?></td>
                       <td><?=$r['alamat']?></td>
                       <td><?=$r['nama_pimpinan']?></td>
                       <td>
                       <img src ="../img/<?=$r['logo_perusahaan']?>" alt ="" width="50" height="50">
                       </td>

                     <td>
                       <a href=".?hal=ubahbiodata&id=<?=$r['id_biodata']?>">Ubah</a>
                       -
                       <a onclick="return confirm('Yakin Akan Menghapus ?')" href=".?hal=hapusbiodata&id=<?=$r['id_biodata']?>">Hapus</a>
                       </td>
                   </tr>
                   <?php } ?>
               </tbody>
            </table>
        </div>
        </div>              

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

  



