<?php
$koneksi = mysqli_connect('localhost','root','','latihancrud');
if (!$koneksi){
    die(mysqli_connect_error($koneksi));
}
?>