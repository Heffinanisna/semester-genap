<?php

    require_once "../function.php";

    $sql = "SELECT * FROM tblkategori";

    $result = mysqli_query($koneksi, $sql);

    // var_dump($result);

    $jumlah = mysql_num_rows($result);
    // echo '<br>';
    // echo $jumlah;

    echo '
        <table border="1px">
        <tr>
            <th>No</th>
            <th>Kategori</th>
        </tr>
    
    ';

    $no=0;
    if ($jumlah > 0) {
       while ($row = mysql_fetch_assoc($result))
            echo ' <tr>';
            echo ' <td>'.$no++.'</td>';
            echo '<td>'.$row['kategori'].'</td>';
            echo '</tr>';
    }

    echo '</table>';
?>
