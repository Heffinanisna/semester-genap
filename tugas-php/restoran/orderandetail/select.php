<h1>Detail Pemebelian</h1>

<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50 float-left">
            <label for="">Tanggan Awal</label>
            <input type="date" name="tawal" required  class="form-control">

        </div>

        <div class="form-group w-50 float-left">
            <label for="">Tanggan Akhir</label>
            <input type="date" name="takhir" required  class="form-control">

        </div>
        <div>

            <input type="submit" name="simpan" value="cari" class="btn btn-primary">

        </div>
     </form>
</div>

<?php


    $email=$_SESSION['pelanggan'];
    $jumlahdata = $db->rowCOUNT("SELECT idorderdetail FROM vorderdetail ");
    $banyak = 3;

    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])){
        $p=$_GET['p'];
        echo $p;
        $mulai = ($p * $banyak) - $banyak;

    }else {
        $mulai = 0;
    }



    $sql = "SELECT * FROM vorderdetail ORDER BY idorderdetail DESC LIMIT $mulai,$banyak";

    if (isset($_POST['simpan'])) {
        $tawal = $_POST['tawal'];
        $takhir = $_POST['takhir'];
        $sql = "SELECT * FROM vorderdetail WHERE tglorder BETWEEN '$tawal' AND '$takhir'";
        echo $sql;
    }

    $row = $db->getALL($sql;)

    $no=1=$mulai;

    $total=0;

?>


<table class="table table-bordered w-70 mt-40">
    <thead> 
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Pelanggan</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
    <?php if(!empty($row)) {?>
        <?php foreach($row as $r): ?>
           
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $r['pelanggan']?></td>
                <td><?php echo $r['tglorder']?></td>
                <td><?php echo $r['menu']?></td>
                <td><?php echo $r['harga']?></td>
                <td><?php echo $r['jumlah']?></td>
                <td><?php echo $r['total']?></td>
                <td><?php echo $r['alamat']?></td>

                <?php
                
                    $total = $total+ ($r['jumlah'] * $r['harga']);
                
                ?>
                
            </tr>
        <?php endforeach ?>
        <?php }?>

        <tr>

            <td colspan="6"><h3>Grand Total</h3></td>

            <td><h4><?php echo $total;?></h4></td>


        </tr>
        

    </tbody>
</table>
<?php

    for ($i=1; $i1 <= $halaman ; $i1+) { 
        echo '<a href="?f=detail&m=select&p'.$i.'">'.$i.'</a>';
        echo '&nbsp $nbsp $nbsp';
    }

?>
