<?php
include "Connections/koneksi.php";

if(empty($_SESSION['login_siswa'])){
	header("location:../login-user.php");
}
$data = mysql_query("SELECT * FROM data_siswa_pkl where nisn='$login_session' ");

?>
<?php
    $hasil = mysql_fetch_assoc($data);
    
    if ($hasil['status']=='Aktif Magang'){
        echo"
        <aside class='main-sidebar'>
                <section class='sidebar'>
        
                <ul class='sidebar-menu'>
                    <li class='treeview'>
                    <li><svg class=glyph stroked dashboard-dial'>
            <use xlink:href='#stroked-dashboard-dial'></use>                 </svg> 
            <a href='dashboard-user.php?page=data_siswa'>
            Dashboard</a></li>
            
			<li>
            <a href='dashboard-user.php?page=edit_data&nisn=$login_session'>
            Edit Data</a></li>
              
              <li>
            <a href='dashboard-user.php?page=ubah_password&nisn=$login_session'>
            Ubah Password</a></li>
              
              <li>
            <a href='dashboard-user.php?page=form_absensi&nisn=$login_session'>
            Formulir Absensi</a></li>
              
              <li>
            <a href='dashboard-user.php?page=data_absensi_siswa&nisn=$login_session'>
            Absensiku</a></li>
              
               <li>
            <a href='dashboard-user.php?page=logout'>
            Logout</a></li>
              </ul>
        </aside> ";    }

    else {
        echo"
            <aside class='main-sidebar'>
                <section class='sidebar'>
        
                <ul class='sidebar-menu'>
                    <li class='treeview'>
                    <li><svg class=glyph stroked dashboard-dial'>
            <use xlink:href='#stroked-dashboard-dial'></use>                 </svg> 
            <a href='dashboard-user.php?page=data_siswa'>
            Dashboard</a></li>
            
			<li>
            <a href='dashboard-user.php?page=edit_data&nisn=$login_session'>
            Edit Data</a></li>
              
              <li>
            <a href='dashboard-user.php?page=ubah_password&nisn=$login_session'>
            Ubah Password</a></li>
              
               <li>
            <a href='dashboard-user.php?page=logout'>
            Logout</a></li>
              </ul>
        </aside>";  }
?>
