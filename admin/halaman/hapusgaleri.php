<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_galery WHERE id_galery = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?hal=galeri'</script>";