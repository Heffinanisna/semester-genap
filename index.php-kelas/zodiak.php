<h1>zodiak</h1>
<form action="" method="get">
<input type="number" name="bulan" placeholder="masukkan bulan">
<input type="number" name="tanggal" placeholder="masukkan tanggal">
<input type="submit" value="hasil">
</form>
<?php
if (isset($_GET["tanggal"]) && isset($_GET["bulan"])) {
    $tanggal = (int)$_GET["tanggal"];
    $bulan = (int)$_GET["bulan"];

    $zodiak = "belum ditentukan";
    if ($bulan <= 0 || $bulan >= 13 || $tanggal <= 0 || $tanggal >= 32) {
        $zodiak = "tanggal atau bulan tidak valid";
    }


    if ($bulan==1){
        if ($tanggal>0 && $tanggal<20){
            $zodiak = "aquarius";
        }
        if ($tanggal>19 && $tanggal<32){
            $zodiak = "taurus";
        }
    }
    if ($bulan==2){
        if ($tanggal>0 && $tanggal<24){
            $zodiak = "sagitarius";
        }
        if ($tanggal>23 && $tanggal<32){
            $zodiak = "libra";
        }
    }
    if ($bulan==3){
        if ($tanggal>0 && $tanggal<23){
            $zodiak ="leo";
        }
        if ($tanggal>22 && $tanggal<32){
            $zodiak ="aries";
        }
    }
    if ($bulan==4){
        if ($tanggal>0 && $tanggal<25){
            $zodiak = "gemini";
        }
        if ($tanggal>24 && $tanggal<32){
            $zodiak = "canser";
        }
    }
    if ($bulan==5){
        if ($tanggal>0 && $tanggal<22){
            $zodiak = "virgo";
        }
        if ($tanggal>21 && $tanggal<32){
            $zodiak = "scorpio";
        }
    }
    if ($bulan==6){
        if ($tanggal>0 && $tanggal<21){
            $zodiak = "capricorn";
        }
        if ($tanggal>20 && $tanggal<32){
            $zodiak = "pisces";
        }
    }
    if ($bulan==7){
        if ($tanggal>0 && $tanggal<23){
            $zodiak = "januari";
        }
        if ($tanggal>22 && $tanggal<32){
            $zodiak = "februari";
        }
    }
    if ($bulan==8){	
        if ($tanggal>0 && $tanggal<22){
            $zodiak = "maret";
        }
        if ($tanggal>21 && $tanggal<32){
            $zodiak = "april";
        }
    }
    if ($bulan==9){
        if ($tanggal>0 && $tanggal<24){
            $zodiak = "mei";
        }
        if ($tanggal>23 && $tanggal<32){
            $zodiak = "juni";
        }
    }
    if ($bulan==10){
        if ($tanggal>0 && $tanggal<20){
            $zodiak = "juli";
        }
        if ($tanggal>19 && $tanggal<32){
            $zodiak = "agustus";
        }
    }
    if ($bulan==11){
        if ($tanggal>0 && $tanggal<26){
            $zodiak = "september";
        }
        if ($tanggal>25 && $tanggal<32){
            $zodiak = "oktober";
        }
    }
    if ($bulan==12){
        if ($tanggal>0 && $tanggal<25){
            $zodiak = "november";
        }
        if ($tanggal>24 && $tanggal<32){
            $zodiak = "desember";
        }
    }
} echo $zodiak;
?>