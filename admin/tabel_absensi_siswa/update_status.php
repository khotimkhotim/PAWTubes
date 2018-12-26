<?php
require_once("config/koneksi.php"); // panggil koneksi database
$nisn = $_GET['nisn']; // ambil paramater id yang diambil dari halaman index.php tadi
$update = "UPDATE absensi_siswa SET status = 'Sudah Dikonfirmasi' where nisn=$nisn"; // update table admin , lalu diubah statusnya tadi dari N menjadi Y berdasarkan id yang dipilih
$query = mysql_query($update); // eksekusi query nya
if($query){ 
	           echo "<script>alert('Konfirmasi Absen Berhasil.');window.location ='dashboard-admin.php?page=absensi_siswa'</script>";
                            }
            else{ // jika salah maka tampilkan pesan error
                echo "Gagal : ".mysql_error();
            } 

?>