<?php
include "config/koneksi.php";

$kode = $_GET['nisn'];

//query untuk menghapus data
$query_hapus = mysql_query("DELETE FROM data_siswa_pkl WHERE nisn = '$kode'");

if ($query_hapus){//jika berhasil
echo "<script>alert('Data Has been Deleted.');window.location = 'dashboard-admin.php?page=data_siswa'</script>";
}else{//jika  gagal menghapus
echo "Gagal : ".mysql_error();
}
?>
