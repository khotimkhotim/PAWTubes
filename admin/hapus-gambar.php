<?php
include 'koneksi.php';
$id_gambar = $_GET['id_gambar'];
mysql_query("DELETE FROM galery WHERE id_gambar='$id_gambar'")or die(mysql_error());
 
header("location:galery.php?pesan=hapus");
?>