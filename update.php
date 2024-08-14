<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE `jenis` SET `id`='05',`nama`='mois' WHERE id =04");
?>