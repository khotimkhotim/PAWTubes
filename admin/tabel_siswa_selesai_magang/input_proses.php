<?php
//mulai proses tambah data
	//inlcude atau memasukkan file koneksi ke database
	include  "koneksi.php";

	$nisn	          = $_POST['nisn'];
	$nama_siswa		  = $_POST['nama_siswa'];
    $bidang_magang    = $_POST['bidang_magang'];
    $selesai_bulan    = $_POST['selesai_magang_bulan'];
    $tahun            = $_POST['tahun'];
	
$input1 = mysql_query("INSERT INTO siswa_selesai_magang (nisn, nama_siswa, program_keahlian, selesai_magang_bulan, tahun_magang) VALUES('$nisn','$nama_siswa','$bidang_magang','$selesai_bulan','$tahun')");
    
	//jika query input sukses
	if($input1){
echo "<script>alert('Data berhasil disimpan.'); window.location = 'dashboard-admin.php?page=data_siswa_selesai_magang'</script>";
} else {
echo "<script>alert('Data belum terisi benar ! Coba periksa kembali'); window.location = 'dashboard-admin.php?page=input_siswa'</script>";
}

?>

