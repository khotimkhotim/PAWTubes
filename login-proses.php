<?php
include 'Connections/koneksi.php';

session_start(); //mulai sesion
$error=''; //menyimpan pesan error
if (isset($_POST['submit'])){
    if (empty($_POST['username']) || empty($_POST['password'])){
        $error = "Harap masukkan username dan password";
    }
    else
        
        $username       = $_POST['username'];
        $password       = $_POST['password'];
    
$login=mysql_query("select * from data_siswa_pkl where username ='$username' and password ='$password'");
$query=mysql_num_rows($login);

if($query == 1 ){
    $_SESSION['login_siswa']=$username; //Membuat session
    echo "<script>alert('Login berhasil.');window.location = 'halaman-siswa/dashboard-user.php?page=data_siswa'</script>";
    
}else{
    echo "<script>alert('Akses ditolak. Anda tidak memiliki akses mengunjungi halaman ini.');window.location = 'login-user.php'</script>";
    
}
}
?>