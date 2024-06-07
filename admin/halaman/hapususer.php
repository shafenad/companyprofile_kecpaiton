<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_user WHERE id_user = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?hal=user'</script>";