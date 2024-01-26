<form>
    pelanggan:
    <input type="text" name="namapelanggan" placeholder="nama pelanggan">
    <br>
    alamat:
    <input type="text" name="alamat" placeholder="nama alamat">
    <br>
    telpon:
    <input type="number" name="telpon" placeholder="no telpon">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php


$host="127.0.0.1";
$user="root";
$password="";
$db="dbtoko";

$koneksi=new mysqli($host, $user, $password, $db);


$namapelanggan="zahra";
$alamat="jln.mawar blok ca";
$telpon=8661324567;

$sql="INSERT INTO pelanggan (namapelanggan,alamat,telpon) VALUES ('$namapelanggan','$alamat',$telpon)";
$hasil=mysqli_query($koneksi,$sql);
$sql="SELECT * FROM pelanggan";

$hasil=mysqli_query($koneksi, $sql);


    echo "<table border=2px>
            <thead>
                <tr>
                    <td>
                        PELANGGAN
                    </td>
                    <td>
                        ALAMAT
                    </td>
                    <td>
                        TELEPON
                    </td>
                </tr>
            </thead>
            <tbody>";
        
while ($row = mysqli_fetch_array($hasil)) {
    echo "<tr>";
        echo "<td> . $row[1] . </td>";
        echo "<td> . $row[2] . </td>";
        echo "<td> . $row[3] . </td>";
    echo "</tr>";
}
echo  "</tbody>
     </table>";
?>