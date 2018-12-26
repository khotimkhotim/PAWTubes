<?php
include "config/koneksi.php";

$kode = $_GET['nisn'];

//query untuk menghapus data
$query_hapus = mysql_query("DELETE FROM siswa_aktif_magang WHERE nisn = '$kode'");

if ($query_hapus){//jika berhasil
echo "<script>alert('Data berhasil dihapus.');window.location = 'dashboard-admin.php?page=siswa_aktif'</script>";
}else{//jika  gagal menghapus
echo "Gagal : ".mysql_error();
}
?>
