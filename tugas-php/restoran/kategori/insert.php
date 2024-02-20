<form action="" method="post">
    kategori :
    <input type="text" name="kategori">
    <input type="sumbit" name="simpan" value="simpan">

</form>


<?php

    require_once "../function.php";

    if (isset($_POST['simpan'])) {

        $kategori = $_POST['simpan'];
        
        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";

        $result = mysqli_query($konekasi, $sql);

        echo "data sudah disimpan";

        header("location:https://localhost/belajar/restoran/kategori/select.php")

    }

    
?>