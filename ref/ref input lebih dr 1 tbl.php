<?php
include "koneksi.php";//sambungkan ke mysql

//mengambil nilai dari form
$id_pasien = $_POST['id_pasien'];
$tgl_masuk = $_POST['tgl_masuk'];
$nama_pasien = ucwords($_POST['nama_pasien']);//fungsi ucwords untuk membuat huruf pertama pada tiap kata menjadi kapital
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat_pasien = ucwords($_POST['alamat_pasien']);
$usia = $_POST['usia'];
$ruangan = $_POST['ruangan'];
$jenis_ruang = $_POST['jenis_ruang'];
$nama_ruang = $_POST['nama_ruang'];
$no_ranjang = $_POST['no_ranjang'];
$penyakit = ucwords($_POST['penyakit']);
$kode_inap = $_POST['id_inap'];


$sakit=strtolower($penyakit);//fungsi strtolower untuk membuat semua huruf menjadi huruf kecil
switch($sakit){ //penyelekasian kondisi
case "paru-paru" : $id_dokter = "1";break;
case "tifus" : $id_dokter = "1";break;
case "ginjal" : $id_dokter = "1";break;
case "kanker" : $id_dokter = "1";break;
case "ispa" : $id_dokter = "1";break;
case "check up" : $id_dokter = "2";break;
default : $id_dokter = "15";
}



//mengambil kode_masuk terbesar dari tabel tgl masuk
$kode_masuk_maks = mysql_query("SELECT MAX(id_masuk) AS maks FROM tgl_masuk");
$kode_maks = mysql_fetch_array($kode_masuk_maks);//memecah hasil kedalam array
$kode_masuk = $kode_maks['maks']+1;//kode masuk maks ditambah 1 agar menjadi kode masuk baru

//query untuk memasukkan data ke dalam tabel pasien
$hasil = mysql_query("INSERT INTO tbl_pasien VALUES('$id_pasien', '$nama_pasien', '$tanggal_lahir', '$tempat_lahir', '$jenis_kelamin', '$alamat_pasien', '$usia', '$penyakit')");

//query untuk memasukkan data ke dalam tabel tgl_masuk
$hasil2 = mysql_query("INSERT INTO tgl_masuk VALUES('$id_masuk','$id_pasien','$id_dokter','$ruangan','$tgl_masuk')");

////query untuk memasukkan data ke dalam tabel ruangan
$hasil3 = mysql_query("INSERT INTO ruangan VALUES('$ruangan','$id_pasien','$nama_ruang','$jenis_ruang','$no_ranjang')");

//query untuk memasukkan data ke dalam tabel rawat_inap
$hasil4 = mysql_query("INSERT INTO rawat_inap VALUES('$id_inap','$id_pasien','$id_dokter','$ruangan')");

//jika semua query berhasil
if ($hasil && $hasil2 && $hasil3 && $hasil4){
//echo "Sukses";
?><script>document.location.href="home.php?page=index_pasien"</script><?php
}
else{
echo "gagal 1:  ".mysql_error();//tapi jika gagal maka tampilkan kesalahan query
} 
?>
