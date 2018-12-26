<?php
include "koneksi.php";

session_start(); //mulai sesion

        //variabel bebas        //variabel yang diambil dari script layout
        $username               = $_POST['user'];
        $password               = $_POST['pass'];
    
$login=mysql_query("select * from userlogin where username ='$username' and password ='$password'");
    
$query=mysql_num_rows($login);

if($query == 1 ){
    echo "<script>alert('Login berhasil.');window.location = 'halaman-siswa/dashboard-user.php?page=data_siswa'</script>";
    
}else{
    echo "<script>alert('Akses ditolak. Anda tidak memiliki akses mengunjungi halaman ini.');window.location = 'login-user.php'</script>";
    
}
?>