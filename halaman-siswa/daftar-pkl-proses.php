<?php
//mulai proses tambah data
	
	//inlcude atau memasukkan file koneksi ke database
    include "Connections/fungsi.php";
	include('Connections/koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
    
    // tbl data pribadi siswa
	$nisn	          = $_POST['nisn'];
	$nama_siswa		  = $_POST['nama_siswa'];
	$tmp_lahir		  = $_POST['tmp_lahir'];
	$tgl_lahir		  = $_POST['tgl_lahir'];
	$j_kelamin		  = $_POST['j_kelamin'];
	$no_hp		      = $_POST['no_hp'];
	$agama		      = $_POST['agama'];
	$alamat		      = $_POST['alamat'];
    $nama_sekolah     = $_POST['nama_sekolah'];
    $alamat_sekolah   = $_POST['alamat_sekolah'];
    $program_keahlian = $_POST['program_keahlian'];
    $email            = $_POST['email'];
    $social_media     = $_POST['social_media'];
    $awal_magang      = $_POST['awal_magang'];
    $selesai_bulan     = $_POST['selesai_bulan'];
    $sakit_dialami     = $_POST['sakit_dialami'];
    $memiliki_laptop    = $_POST['memiliki_laptop'];
	
    // tbl data pembimbing sekolah
    $nama_pembimbing        = $_POST['nama_pembimbing'];
    $no_hp_pembimbing       = $_POST['no_hp_pembimbing'];
    
    // tbl data orang tua 
    $nama_ayah          = $_POST['nama_ayah'];
    $pekerjaan_ayah     = $_POST['pekerjaan_ayah'];
    $nama_ibu           = $_POST['nama_ibu'];
    $pekerjaan_ibu      = $_POST['pekerjaan_ibu'];
    $no_hp_ortu         = $_POST['no_hp_ortu'];
    
    // tbl data tambahan
    $materi_praktek     = $_POST['materi_praktek'];
    $kemampuan_skill    = $_POST['kemampuan_skill'];
    $hobi               = $_POST['hobi'];
    $setelah_lulus      = $_POST['setelah_lulus'];
    $status             = $_POST['status_siswa'];
 
	//input ke tabel data pribadi
$pass = acakHuruf();

$ceknisn = mysql_query("SELECT * FROM data_siswa_pkl WHERE nisn = '$nisn'");
if(mysql_num_rows($ceknisn) <> 0) {
echo "<script>alert('NISN Sudah terdaftar.'); window.location = 'daftar-pkl.php'</script>";

} else {

$input1 = mysql_query("INSERT INTO data_siswa_pkl VALUES('','$nisn','$nama_siswa','$tmp_lahir','$tgl_lahir','$j_kelamin','$no_hp','$agama','$alamat','$nama_sekolah','$alamat_sekolah','$program_keahlian','$email','$social_media','$awal_magang','$selesai_bulan','$sakit_dialami','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$no_hp_ortu','$nama_pembimbing','$no_hp_pembimbing','$materi_praktek','$kemampuan_skill','$hobi','$setelah_lulus','$memiliki_laptop','$status','$nisn','$pass')");
    
	//jika query input sukses
	if($input1){
echo "<script>alert('Data berhasil diisi.'); window.location = 'bukti-registrasi-pkl.php'</script>";
} else {
echo "<script>alert('Data belum terisi benar ! Coba periksa kembali'); window.location = 'daftar-pkl.php'</script>";
}
}
?>

