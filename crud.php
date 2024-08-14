<?php
include "koneksi.php";
//perintah
$query= mysqli_query($koneksi,"select * from jenis");
// //ambil data
// $data= mysqli_fetch_array($query);
while($data= mysqli_fetch_array($query)){
    echo $data["id"];
    echo $data["nama"];
    echo "<hr/>";

}

?>