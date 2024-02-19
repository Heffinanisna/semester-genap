<?php

    // array dimensi

    // $nama = array ("joni", "tejo", "fio", "budi", 100, 2.5);

    // var_dump($nama); 

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i <6; $i++) {
    //     echo $i;
    //     echo $nama[$i]."<br>";
    // }

    // foreach ($nama as $key) {
    //    echo $key."<br>";
    // }

    // array asosiatif

    // $nama = array(
    //     "joni" => "sidoarjo",
    //     "tejo" => "surabaya",
    //     "fio" => "malang",
    //     "budi" => "jakarta"
    // );

    $nama ["joni"]="sidoarjo";
    $nama ["tejo"]="surabaya";
    $nama ["fio"]="malang";
    $nama ["budi"]="jakarta";
    $nama ["ade"]="semarang";

    var_dump($nama);

    echo "<br>";

    // echo $nama['joni'];

    foreach ($nama as $key => $value) {
        echo $key."=>".$value;

        echo "<br>";
    }

?>