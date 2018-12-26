<?php
include "Connections/koneksi.php";

session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_siswa'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select nisn from data_siswa_pkl where username='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['nisn'];
if(!isset($login_session)){
mysql_close($connection); // Menutup koneksi
header('Location: ../login-user.php'); // Mengarahkan ke Home Page
}
?>
