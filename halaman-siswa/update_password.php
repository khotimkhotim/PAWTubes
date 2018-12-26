<?php
//mulai proses tambah data
	
	//inlcude atau memasukkan file koneksi ke database   
	include('Connections/koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
    
    // tbl data pribadi siswa
	$nisn	          = $_POST['nisn'];
	$password		  = $_POST['password'];
 
$input1 = mysql_query("UPDATE data_siswa_pkl SET password='$password' WHERE nisn='$nisn'");
    
	//jika query input sukses
	if($input1){
echo "<script>alert('Password berhasil diupdate. Silahkan login kembali'); window.location = '../login-user.php'</script>";
} else {
echo "<script>alert('Password belum berhasil diupdate.'); window.location = 'dashboard-user.php?page=ubah_password'</script>";
}

?>