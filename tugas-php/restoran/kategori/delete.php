<?php

    require_once "../function.php";

    $id=2;

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);
    
    header("location:https://localhost/belajar/restoran/kategori/select.php");

?>