<?php
include ('config/koneksi.php') // panggil koneksi database
$nisn = $_GET['nisn']; // 

$status = "SELECT status FROM data_siswa_pkl WHERE nisn=$nisn";

//kondisi status siswa = "Terdaftar"
$kode = $_GET['nisn']; // 

    if ($status=="Terdaftar")
    {
    $update = "UPDATE data_siswa_pkl SET status = 'Diterima' where nisn=$kode"; 
    $query = mysql_query($update);                   
    }
//kondisi status siswa = "Diterima"
    else if ($status=="Diterima")
    {
        $update1 = "UPDATE data_siswa_pkl SET status = 'Aktif Magang' where nisn=$kode"; 
    $query1 = mysql_query($update1);
    }
//kondisi status siswa ="Aktif Magang"
    else if ($status=="Aktif Magang")
    {
        $update2 = "UPDATE data_siswa_pkl SET status = 'Selesai Magang' where nisn=$kode"; 
    $query2 = mysql_query($update2);
    }

    else{ // jika salah maka tampilkan pesan error
                echo "Gagal : ".mysql_error();
                        }
?>