<?php
session_start();
include "config/koneksi.php";
        $email          = $_POST['email'];
        $password       = $_POST['password'];

$ambil = $mysql_query->query("SELECT * from admin where email ='$email' and password ='$password'");
 $yangcocok = $ambil -> num_rows;

if($yangcocok == 1 ){
	$_SESSION['email']=$ambil->fetch_assoc();
    echo "<script>alert('Login berhasil.');window.location = 'dashboard-admin.php?page=home'</script>";
}else{
    echo "<script>alert('Akses ditolak. Anda tidak memiliki akses mengunjungi halaman ini.');window.location = 'index.php'</script>";
}
   
?>