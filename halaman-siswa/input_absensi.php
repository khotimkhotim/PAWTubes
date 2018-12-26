<?php
//mulai proses tambah data
	
	//inlcude atau memasukkan file koneksi ke database
	include('Connections/koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
    
    // tbl data pribadi siswa
	$nisn	          = $_POST['nisn'];
	$nama_siswa		  = $_POST['nama_siswa'];
    $status           = $_POST['status_absensi'];
    $tanggal          = date('d-m-Y');
    $kegiatan         = $_POST['kegiatan'];

$input1 = mysql_query("INSERT INTO absensi_siswa VALUES('','$nisn','$nama_siswa','$tanggal','$kegiatan','$status')");
    
	//jika query input sukses
	if($input1){
echo "<script>alert('Data berhasil diisi.'); window.location = 'dashboard-user.php?page=data_absensi_siswa'</script>";
} else {
echo "<script>alert('Data belum terisi benar ! Coba periksa kembali'); window.location = 'daftar-pkl.php'</script>";
}
?>