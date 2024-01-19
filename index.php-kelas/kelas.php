<h1>Belajar PHP</h1>
<form action="" method="get">
    nama:
    <input type="text" name="nama" placeholder="masukkan nama">
    <input type="submit" name="tombol" value="kirim">
</form>
<?php
    if(isset($_GET['nama'])) {
        $sisi = $_GET['nama'];
        echo "<h2>$sisi</h2>";
    }

    //atau
    // echo '<h2>'.$isi.'</h2>';

    function persegi($s){
        $luas = $s*$s;
        return $luas;
    }
    function lingkaran ($r){
        $luas = 3.14*$r**2;
        return $luas;
    }
    function tabung($r, $t){
        $luas = 3.14*$r**2*$t;
        return $luas;
    }
    function bola($r){
        $volume = pi()*$r*3*3/4;
        return $volume;
    }
?>

<p>menghitung luas dan volume</p>
<ol>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
  </ol>