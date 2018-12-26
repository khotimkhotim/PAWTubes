<?php
require_once("config/koneksi.php"); // panggil koneksi database
$nisn = $_GET['nisn']; // ambil paramater id yang diambil dari halaman index.php tadi
$ambil =$mysql_query->query("UPDATE data_siswa_pkl SET status = 'Diterima' where nisn=$nisn"); 
// update table admin , lalu diubah statusnya tadi dari N menjadi Y berdasarkan id yang dipilih
$yangcocok= $ambil-> num_rows; // eksekusi query nya
if($yangcocok){ 
	           echo "<script>alert('Aktivasi Siswa Berhasil.');window.location ='dashboard-admin.php?page=data_siswa'</script>";
                            }
            else{ // jika salah maka tampilkan pesan error
                echo "Gagal : ".mysql_error();
            } 

?>
