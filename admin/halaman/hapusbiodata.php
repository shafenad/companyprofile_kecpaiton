<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_biodata WHERE id_biodata = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?hal=biodata'</script>";