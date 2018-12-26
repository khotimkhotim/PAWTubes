<?php
session_start();
include "config/koneksi.php";
        $email          = $_POST['email'];
        $password       = $_POST['password'];

$query=mysql_query("select * from admin where email ='$email' and password ='$password'");

$query=mysql_num_rows($query);

if($query == TRUE ){
	$_SESSION['email']=$email;
    echo "<script>alert('Login berhasil.');window.location = 'dashboard-admin.php'</script>";
}else{
    echo "<script>alert('Akses ditolak. Anda tidak memiliki akses mengunjungi halaman ini.');window.location = 'index.php'</script>";
}
   
?>