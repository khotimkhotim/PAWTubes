<?php
include "Connections/koneksi.php";
	
$hasil=mysql_query("select * from data_siswa_pkl order by id_registrasi desc limit 1");
$lihat1 = mysql_fetch_array($hasil);    
?>
<html>
<head>

</head>
<body>
<TR>
<TR>
 
 <br>
	<div class="row">
		<div class="col-md-9 col-md-offset-1">
			<div class="panel">
				<div class="panel-heading"><h2><center>Registrasi Program Kerja Lapangan</center></h2></div>
						<fieldset>                             
						<table width="55%" align="center" class="table teble-bordered table-striped">              
                            <tr>
                            <td width="390"><b>*Data Pribadi Siswa</b></td>
                                <td></td>
                                <td></td>
                                <td></td>                        
                            </tr>
                        <tr>
                        <td></td>
						  <td width="80">NISN</td> <td width="9">:</td> 
                          <td width="350"><input type="text" disabled="disables"  value="<?php echo $lihat1['nisn']?>"/ ></td>
                        </tr>                       
                        <tr>
                            <td></td>
						    <td width="80">Nama Lengkap</td><td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['nama_siswa']?></td>
                            
                        </tr>
                            
						<tr>
                            <td></td>
						    <td width="80">Tempat Lahir</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['tmp_lahir']?></td>
                            
                        </tr>
                            
						<tr>
                            <td></td>
						    <td width="80">Tanggal Lahir</td> <td>:</td> 
                            <td width="350"><?php echo $lihat1['tgl_lahir']?></td>  
                            
                        </tr>
                            
						<tr>
                            <td></td>
                            <td width="80">Jenis Kelamin</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['j_kelamin']?>
                            </td>
                            
                            </tr>
                                        
						<tr>
                            <td></td>
						    <td width="80">No.Hp</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['no_hp']?></td>
                            
                        </tr>
                                        
						<tr>
                            <td></td>
							<td width="80">Agama</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['agama']?></td>
                            
                        </tr>
                                        
				        <tr>
                            <td></td>
							<td width="80">Alamat</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['alamat']?></td>
                            
                        </tr>
                                        
                        <tr>
                            <td></td>
						    <td width="80">Nama Sekolah</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['nama_sekolah']?></td>
                            
                        </tr>
                        
                         <tr>
                             <td></td>
							<td width="80">Alamat Sekolah</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['alamat_sekolah']?></td>
                            
                        </tr>               
														                            
                        <tr>
                            <td></td>
						    <td width="80">Program Keahlian Peserta</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['program_keahlian']?></td>
                            
                        </tr>
                                        
                        <tr>
                            <td></td>
						    <td width="80">Email</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['email']?></td>
                            
                        </tr>
                            
                        <tr>
                            <td></td>
                            <td width="80">Awal PKL Bulan</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['awal_magang']?>
                                </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td width="80">Sampai Bulan</td> <td width="9">:</td> 
                                <td width="70"><?php echo $lihat1['selesai_bulan']?>
                            </td>
                            
                        </tr>
                           <td width="390"><b>*Data Pembimbing Sekolah</b></td>
                                <td></td>
                                <td></td>
                                <td></td>                        
                            </tr>
                        <tr>                            
                            <td></td>
                            <td width="80">Nama</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['nama_pembimbing_sekolah']?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td width="80">No.HP/Telp.</td> <td width="9">:</td>
                                <td width="70"><?php echo $lihat1['no_hp_pembimbing']?>
                            </td>
                            
                        </tr>   
                            
                            <td width="390"><b>*Data Orangtua Siswa</b></td>
                                <td></td>
                                <td></td>
                                <td></td>                        
                            </tr>
                            <tr>                                
                            <td></td>    
                            <td width="80">Nama Ayah</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['nama_ayah']?>
                            </td>
                            </tr>
                            <tr>
                            <td></td>
                            <td width="80">Pekerjaan</td> <td width="9">:</td> 
                            
                                <td width="70"><?php echo $lihat1['pekerjaan_ayah']?>
                            </td>
                            
                            </tr>
            
                            <tr>
                                <td></td>
                            <td width="80">Nama Ibu</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['nama_ibu']?></td>
                            </tr>
                        <tr>
                            <td></td>
                            <td width="80">Pekerjaan</td> <td width="9">:</td>                         
                                <td width="70"><?php echo $lihat1['pekerjaan_ibu']?>
                            </td>
                            
                            </tr>
                        
                        <tr>
                            <td></td>
                            <td width="80">No. HP/Telp Orang Tua</td> <td width="9">:</td>                         
                                <td width="70"><?php echo $lihat1['no_hp_ortu']?>
                            </td>
                            
                            </tr>
                            <tr>
                            <td width="390"><b>*Data Tambahan</b></td>
                                <td></td>
                                <td></td>
                                <td></td>                        
                            </tr>
                            <tr>
                                <td></td>
                                <td>1. Materi dan praktek selama di sekolah</h5></td>
                                <td width="9">:</td> 
                            <td width="170"><?php echo $lihat1['materi_disekolah']?></td>
                            </tr>
            
                            <tr>
                                <td></td>
                                <td width="580">2. Kemampuan/skill yang dikuasai saat ini</td>
                                <td width="9">:</td> 
                            <td width="170"><?php echo $lihat1['kemampuan']?></td>
                            </tr>
            
                            <tr>
                                <td></td>
                                <td>3. Hobi yang anda sukai selama ini</td>
                                <td width="9">:</td> 
                            <td width="170"><?php echo $lihat1['hobi']?></td>
                            </tr>
                            
                <td width="390"><b>*Akses Login</b></td>
                                <td></td>
                                <td></td>
                                <td></td>                        
                            </tr>
                            <tr>
                                <td width="390"></td>
                                <td>Username</h5></td>
                                <td width="9">:</td> 
                            <td width="170"><?php echo $lihat1['username']?></td>
                            </tr>
            
                            <tr>
                                <td></td>
                                <td width="580">Password</td>
                                <td width="9">:</td> 
                            <td width="170"><?php echo $lihat1['password']?></td>
                            </tr>
                
                            <tr>
                                <td></td>
                                <td></td>
                                <td>					
                                    <a href="../login-user.php"><button class="btn btn-success" >Login</button></a>
                                </td>
                                <td>      
                                    <a href="cetak.php"><button class="btn btn-success" >Cetak</button>
                                </td>
                                </tr> 
                            </table>
                            <br>

						</fieldset>
      <p align="center">
        <i class="fa fa-envelope-o pright-10"></i>Pro Intermedia Yogyakarta <br>
         <i class="fa fa-envelope-o pright-10"></i> Tempat Prakerin Yogyakarta<br>
          <i class="fa fa-envelope-o pright-10"></i>TERIMA KASIH
        </p>
          </body>
</html>