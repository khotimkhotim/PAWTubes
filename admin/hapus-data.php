<?php
include 'koneksi.php';
$nisn = $_GET['nisn'];
mysql_query("DELETE FROM pkl_daftar WHERE nisn='$nisn'")or die(mysql_error());
 
header("location:indexadmin.php?pesan=hapus");
?>