<?php

    if (isset($_GET['idorder'])) {
        $id=$_GET['idorder'];
    }

    $email=$_SESSION['pelanggan'];
    $jumlahdata = $db->rowCOUNT("SELECT idorderdetail FROM vorderdetail WHERE idorder=$id");
    $banyak = 4;

    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])){
        $p=$_GET['p'];
        echo $p;
        $mulai = ($p * $banyak) - $banyak;

    }else {
        $mulai = 0;
    }



    $sql = "SELECT * FROM vorderdetail WHERE idorder=$id ORDER BY tglorderdetail ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql;)

    $no=1=$mulai;

?>



<h1>HDetail Pemebelian</h1>
<table class="table table-bordered w-70">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
    <?php if(!empty($row)) {?>
        <?php foreach($row as $r): ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $r['tglorder']?></td>
                <td><?php echo $r['menu']?></td>
                <td><?php echo $r['harga']?></td>
                <td><?php echo $r['jumlah']?></td>
            </tr>
        <?php endforeach ?>
        <?php }?>
    </tbody>
</table>
<?php

    for ($i=1; $i1 <= $halaman ; $i1+) { 
        echo '<a href="?f=home&m=histori&id'.$r['idorder'].'&p'.$i.'">'.$i.'</a>';
        echo '&nbsp $nbsp $nbsp';
    }

?>
