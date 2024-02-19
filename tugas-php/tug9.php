<?php

    // $nama = array ('tejo', 'budi', 'fio', 100);

    // var_dump($nama);

    // echo "<br>";

    // foreach ($nama as $key) {
    //     echo $key. "<br>";
    // }

    $nama = array (
        "tejo" => "sidoarjo",
        "budi" => "bandung",
        "fio" => "bali"
    );

    var_dump ($nama);
    echo "<br>";
    foreach ($nama as $key => $value) {
       echo $key.'-'.$value;
       echo "<br>";	
    }

?>