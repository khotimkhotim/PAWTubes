<?php
//mulai proses tambah data
	
	//inlcude atau memasukkan file koneksi ke database   
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
    $kemampuan_skill    = $_POST['kemampuan'];
    $hobi               = $_POST['hobi'];
    $setelah_lulus      = $_POST['setelah_lulus'];
 
$input1 = mysql_query("UPDATE data_siswa_pkl SET nama_siswa='$nama_siswa', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', j_kelamin='$j_kelamin', no_hp='$no_hp', agama='$agama', alamat='$alamat', nama_sekolah='$nama_sekolah', alamat_sekolah='$alamat_sekolah', program_keahlian='$program_keahlian', email='$email', social_media='$social_media', awal_magang='$awal_magang', selesai_bulan='$selesai_bulan', sakit_dialami='$sakit_dialami', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu', no_hp_ortu='$no_hp_ortu', nama_pembimbing_sekolah='$nama_pembimbing', no_hp_pembimbing='$no_hp_pembimbing', materi_disekolah='$materi_praktek', kemampuan='$kemampuan_skill', hobi='$hobi', setelah_lulus='$setelah_lulus', memiliki_laptop='$memiliki_laptop' WHERE nisn='$nisn'");
    
	//jika query input sukses
	if($input1){
echo "<script>alert('Data berhasil diperbarui.'); window.location = 'dashboard-user.php?page=data_siswa'</script>";
} else {
echo "<script>alert('Data belum berhasil diperbarui.'); window.location = 'dashboard-user.php?page=data_siswa'</script>";
}

?>