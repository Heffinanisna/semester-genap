<form action="" method="post">
    barang:
    <input type="text" name="namabarang" placeholder="nama barang">
    <br>
    harga:
    <input type="number" name="harga" placeholder="harga barang">
    <br>
    stok:
    <input type="number" name="stock" placeholder="stock barang">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php

$host="127.0.0.1";
$user="root";
$password="";
$db="dbtoko";

$koneksi=new mysqli($host, $user, $password, $db);

if (isset($_POST["simpan"])){
    $namabarang=$_POST["namabarang"];
    $harga=$_POST["harga"];
    $stock=$_POST["stock"];

$sql="INSERT INTO barang (namabarang,harga,stock) VALUES ('$namabarang',$harga,$stock)";
$hasil=mysqli_query($koneksi,$sql);

}


$sql="SELECT * FROM barang";

$hasil=mysqli_query($koneksi, $sql);

    echo "<table border=2px>
             <thead>
                <tr>
                     <th>
                         BARANG
                     </th>
                     <th>
                         HARGA
                     </th>
                     <th>
                         STOK
                     </th>
                </tr>
            </thead>
            <tbody>";

while ($row=mysqli_fetch_array($hasil)) {
    echo "<tr>";
        echo "<td> . $row[1] . </td>" ;
        echo "<td> . $row[2] . </td>" ;
        echo "<td> . $row[3] . </td>" ;
    echo "</tr>";
}
echo "</tbody>
    </table>";
    
?>