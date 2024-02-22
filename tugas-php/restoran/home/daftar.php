<h3>Regristrasi Pelanggan</h3>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="">Pelanggan</label>
            <input type="text" name="user" required placeholder="isi user" class="form-control">

        </div>
        <div class="form-group w-50">
            <label for="">Email</label>
            <input type="email" name="pelanggan" required placeholder="isi pelanggan" class="form-control">

        </div>
        <div class="form-group w-50">
            <label for="">Alamat</label>
            <input type="password" name="Alamat" required placeholder="isi alamat" class="form-control">

        </div>
        <div class="form-group w-50">
            <label for="">Tlpn</label>
            <input type="password" name="tlpn" required placeholder="is tlpn" class="form-control">

        </div>
        <div class="form-group w-50">
            <label for="">Level</label><br>
            <select name="level" id="">

                <option value="admin">admin</option>
                <option value="kosi">koki</option>
                <option value="kasir">kasirS</option>

            </select>

        </div>
        <div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

        </div>
     </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
       $pelanggan = $_POST['pelanggan'];
       $alamat = $_POST['alamat'];
       $tlpn = $_POST['tlpn'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $konfirmasi = $_POST['konfirmasi'];
    

       if ($password === $konfirmasi) {
            $sql = "INSERT INTO tbluser VALUES ('','$pelanggan','$alamat','$tlpn','$email','$password',1)";
            // echo $sql;
            $db->runSQL($sql);
            header("Location:?f=home&m=.info")
       }else {
            echo = "<h2>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h2>";
       }


    }

?>