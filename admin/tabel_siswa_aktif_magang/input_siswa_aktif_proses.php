<?php
//mulai proses tambah data
	//inlcude atau memasukkan file koneksi ke database
	include  "koneksi.php";

	$nisn	                         = $_POST['nisn'];
	$nama_siswa		                 = $_POST['nama_siswa'];
    $asal_sekolah                    = $_POST['asal_sekolah'];
    $program_keahlian                = $_POST['program_keahlian'];
    $awal_bulan_pkl                  = $_POST['awal_bulan_pkl'];
    $selesai_bulan_pkl               = $_POST['selesai_bulan_pkl'];
    $nama_pembimbing_sekolah         = $_POST['nama_pembimbing_sekolah'];
    $nama_pembimbing_perusahaan      = $_POST['nama_pembimbing_perusahaan'];
    $tahun                           = $_POST['tahun'];
	
$input1 = mysql_query("INSERT INTO siswa_aktif_magang (nisn, nama_siswa, asal_sekolah, program_keahlian, awal_bulan_pkl, selesai_bulan_pkl, nama_pembimbing_sekolah, nama_pembimbing_perusahaan, tahun) VALUES('$nisn','$nama_siswa','$asal_sekolah','$program_keahlian','$awal_bulan_pkl','$selesai_bulan_pkl','$nama_pembimbing_sekolah','$nama_pembimbing_perusahaan','$tahun')");
    
	//jika query input sukses
	if($input1){
echo "<script>alert('Data berhasil disimpan.'); window.location = 'dashboard-admin.php?page=siswa_aktif'</script>";
} else {
echo "<script>alert('Data belum berhasil disimpan.'); window.location = 'dashboard-admin.php?page=input_siswa_aktif'</script>";
}

?>

