<?php

    if (isset($_GET['total'])) {
        $total = $_GET['total'];
        echo $total;

        echo "<br>";

        echo idorder();

        echo '<br>';

        insertOrder($order().$_SESSION['idpelanggan'], '2019-12-23, $total');

    }

    function idorder($id) {
        global $db;
        $sql = "SELECT idorder FROM tblorder ORDER BY idorder DESC"
        $jumlah = $db->$rowCOUNT($sql);
        if ($jumlah == 0) {
            $id = 1;
        }else {
            $item = $db->getITEM($sql);
            $id = $item['idorder']++;
        }

        return $id;
    }

    function insertOrder($idorder, $idpelanggan, $tgl, $total){
        global $db;

        $sql = "INSERT INTO tblorder VALUES ($idorder,$pelanggan,'$tgl',$total,0,0,0)"

        $db->runSQL($sql);
    }


?>