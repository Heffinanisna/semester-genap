<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql ="DELETE * FROM tbluser WHERE iduser=$id";

        $db->runSQL($sql);

       header("Location:?f=user&m=.select");
    }

?>