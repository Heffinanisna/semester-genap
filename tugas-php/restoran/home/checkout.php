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

        kosongkanSession(){}
        header ("location:?f=home&m=checkout");
    }else {
        info();
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


    function kosongkanSession(){
        function insertOrderDetail($idorder,){
            global $db;
    
            foreach ($_SESSION as $key => $value) {
                if ($key<> 'pelanggan' && $key>='pelanggan') {
                    $id = substr($key,1);
    
                unset ($_SESSION['_'.$id.]);
                    
                }
            }
    
        }
        
    }
    function info(){

        echo "<h3>Terimakasih Sudah Berbelanja</h3>"

    }


?>