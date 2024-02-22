<?php

    if (isset($_GET['total'])) {
        $total = $_GET['total'];
        $idorder = idorder();
        $idpelanggan = $_SESSION['idpelanggan'];
        $tgl = date('Y-m-d');

        $sql = "SELECT * FROM tblorder WHERE idorder='$idorder'";

        $count = $db->rowCOUNT( $sql );

        if ($count == 0) {
            insertOrder($order().$_SESSION[$idpelanggan], $tgl, $total);
            insertOrderDetail($idorder);
        }else {
            insertOrderDetail($idorder);
        }
        


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

    function insertOrderDetail($idorder,){
        global $db;

        foreach ($_SESSION as $key => $value) {
            if ($key<> 'pelanggan' && $key>='pelanggan') {
                $id = substr($key,1);

                $sql = "SELECT * FROM tblmenu WHERE idmenu = $id";

                $row = $db->getALL($sql);

                foreach ($row as $r) {
                    $sql="INSERT INTO tblorderdetail VALUES ('',$idorder,$r)";
                }

                echo '<pre>';
                print_r($row);
                echo '</pre>';
            }
        }

    }


?>