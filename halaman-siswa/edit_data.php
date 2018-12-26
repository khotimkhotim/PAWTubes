<?php
include "Connections/koneksi.php";

$kode = $_GET['nisn'];
$data1 = mysql_query("SELECT * FROM data_siswa_pkl WHERE nisn = '$kode'");
$lihat1 = mysql_fetch_array($data1);
?>
<html lang="en">
		<h2><center>Edit Data Siswa PKL</h2></center>

<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-6 col-lg-10 col-lg-offset-3 main">			
		<div class="row">
                    <form action="update_datasiswa.php" method="POST">
                        <input type="hidden" name="nisn" value="<?php echo $lihat1['nisn']?>"/>
				    <fieldset>
                                       
						<table width="75%" border="0" align="center">                            
						<tr><td width="80"><h5 align="left">*Data Pribadi</h5> </td></tr>
                            <tr>
						    <td width="80">NISN</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="kode"  value="<?php echo $lihat1['nisn']?>" disabled="disabled"/ ></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Nama Lengkap</td><td width="9">:</td> 
                            <td width="350"><input type="text" name="nama_siswa" value="<?php echo $lihat1['nama_siswa']?>"</td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Tempat Lahir</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="tmp_lahir" value="<?php echo $lihat1['tmp_lahir']?>"</td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Tanggal Lahir</td> <td>:</td> 
                            <td width="350"><input type="text" name="tgl_lahir" value="<?php echo $lihat1['tgl_lahir']?>"</td>  
                            <td><br><br></td>
                        </tr>
                            
						<tr>
                            <td width="80">Jenis Kelamin</td> <td width="9">:</td> 
                            <td width="350">
                                <select name="j_kelamin" required> 
                                <option value="Laki-laki">Laki-laki</option> 
                                <option value="Perempuan">Perempuan </option>
                                </select>
                            </td>
                            <td><br><br></td>
                            </tr>
                                        
						<tr>
						    <td width="80">No.Hp</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="no_hp" value="<?php echo $lihat1['no_hp']?>"</td>
                            <td><br><br></td>
                        </tr>
                                        
						<tr>
							<td width="80">Agama</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="agama" value="<?php echo $lihat1['agama']?>"</td>
                            <td><br><br></td>
                        </tr>
                                        
				        <tr>
							<td width="80">Alamat</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="alamat" style="width:280px" value="<?php echo $lihat1['alamat']?>"</td>
                            <td><br><br></td>
                        </tr>
                                        
                        <tr>
						    <td width="80">Nama Sekolah</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="nama_sekolah" value="<?php echo $lihat1['nama_sekolah']?>"</td>
                            <td><br><br></td>
                        </tr>
                        
                         <tr>
							<td width="80">Alamat Sekolah</td> <td width="9">:</td> 
                            <td width="350"><input type="text" style="width:280px" name="alamat_sekolah" value="<?php echo $lihat1['alamat_sekolah']?>"</td>
                            <td><br><br></td>
                        </tr>               
														                            
                        <tr>
						    <td width="80">Program Keahlian Peserta</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="program_keahlian" value="<?php echo $lihat1['program_keahlian']?>"</td>
                            <td><br><br></td>
                        </tr>
                                        
                        <tr>
						    <td width="80">Email</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="email" value="<?php echo $lihat1['email']?>"</td>
                            <td><br><br></td>
                        </tr> 
                                        
                        <tr>
						    <td width="80">Social media</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="social_media" value="<?php echo $lihat1['social_media']?>"</td>
                            <td><br><br></td>
                        </tr>                 
                                        
                        <tr>
                            <td width="80">Awal PKL Bulan</td> <td width="9">:</td> 
                            <td width="70">
                                <select name="awal_magang" required> 
                                <option value="Januari">Januari</option> 
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>    
                                <option value="April">April</option> 
                                <option value="Mei">Mei</option> 
                                <option value="Juni">Juni</option> 
                                <option value="Juli">Juli</option> 
                                <option value="Agustus">Agustus</option> 
                                <option value="September">September</option> 
                                <option value="Oktober">Oktober</option> 
                                <option value="November">November</option> 
                                <option value="Desember">Desember</option> 
                                </select>
                                </td>
                            </tr>
                            <tr>
                            <td width="280">Sampai Bulan</td> <td width="9">:</td> 
                                <td width="70">
                                <select name="selesai_bulan" required> 
                                <option value="Januari">Januari</option> 
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>    
                                <option value="April">April</option> 
                                <option value="Mei">Mei</option> 
                                <option value="Juni">Juni</option> 
                                <option value="Juli">Juli</option> 
                                <option value="Agustus">Agustus</option> 
                                <option value="September">September</option> 
                                <option value="Oktober">Oktober</option> 
                                <option value="November">November</option> 
                                <option value="Desember">Desember</option> 
                                </select>
                            </td>
                            <td><br><br></td>
                            </tr> 
                        <tr>
                            <td width="80">Sampai Bulan</td> <td width="9">:</td> 
                                <td width="70"><input type="text" name="selesai_bulan" value="<?php echo $lihat1['selesai_bulan']?>"</td>
                            <td><br><br></td>
                        </tr>      
                            
                            <tr>
                                <td><h5 align="left">*Data Pembimbing Prakerin</h5></td>
                            </tr>        
                                        
                            <tr>
                            <td width="80">Nama</td> <td width="9">:</td> 
                            <td width="70"><input type="text" name="nama_pembimbing" value="<?php echo $lihat1['nama_pembimbing_sekolah']?>"
                            </td>
                            </tr>
                            <tr>
                            <td width="80">No.HP/Telp.</td> <td width="9">:</td> 
                            
                                <td width="70"><input type="text" name="no_hp_pembimbing" value="<?php echo $lihat1['no_hp_pembimbing']?>"
                            </td>
                            <td><br><br></td>
                            </tr>  
                
                
                            <tr>
                                <td><h5 align="left">*Data Orang Tua Peserta</h5></td>
                            </tr>        
                                        
                            <tr>
                            <td width="80">Nama Ayah</td> <td width="9">:</td> 
                            <td width="70"><input type="text" name="nama_ayah" value="<?php echo $lihat1['nama_ayah']?>"
                            </td>
                            </tr>
                            
                            <td width="80">Pekerjaan</td> <td width="9">:</td> 
                            
                                <td width="70"><input type="text" name="pekerjaan_ayah" value="<?php echo $lihat1['pekerjaan_ayah']?>"
                            </td>
                            <td><br><br></td>
                            </tr>
            
                            <tr>
                            <td width="80">Nama Ibu</td> <td width="9">:</td> 
                            <td width="70"><input type="text" name="nama_ibu" value="<?php echo $lihat1['nama_ibu']?>"</td>
                            </tr>
                        <tr>
                            <td width="80">Pekerjaan</td> <td width="9">:</td>                         
                                <td width="70"><input type="text" name="pekerjaan_ibu" value="<?php echo $lihat1['pekerjaan_ibu']?>"
                            </td>
                            <td><br><br></td>
                            </tr>
                        
                        <tr>
                            <td width="80">No. HP/Telp Orang Tua</td> <td width="9">:</td>                         
                                <td width="70"><input type="text" name="no_hp_ortu" value="<?php echo $lihat1['no_hp_ortu']?>"
                            </td>
                            <td><br><br></td>
                            </tr>
                                    
                            <tr>
                                <td><h5 align="left">*Lain-lain</h5></td>
                            </tr>
                            <tr>
                            <td width="80">Sebutkan Sakit yang pernah di alami</td> <td width="9">:</td> 
                            <td width="70"><input type="text" name="sakit_dialami" value="<?php echo $lihat1['sakit_dialami']?>"
                            </td>
                            <td><br><br></td>
                            </tr>
                        
                            <tr>
                            <td width="80">Sudah Memiliki Laptop</td> <td width="9">:</td> 
                            <td width="350">
                                <select name="memiliki_laptop" required> 
                                <option value="Ya">Sudah</option> 
                                <option value="Belum memiliki">Belum memiliki </option>
                                </select>
                            </td>
                            <td><br><br></td>
                            </tr>
            
                            <tr>
                                <td><h5 align="left">*Tambahan</h5></td>
                            </tr>
            
                            <tr>
                                <td width="350"><h5>1. Materi dan praktek selama di sekolah</h5></td>
                                <td width="9">:</td> 
                            <td width="170"><input type="text" name="materi_praktek" value="<?php echo $lihat1['materi_disekolah']?>">
                            </tr>
            
                            <tr>
                                <td><h5 >2. Kemampuan/skill yang dikuasai saat ini</h5></td>
                                <td width="9">:</td> 
                            <td width="170"><input type="text" style="width:280px" name="kemampuan" value="<?php echo $lihat1['kemampuan']?>"</td>
                            </tr>
            
                            <tr>
                                <td><h5 >3. Hobi yang anda sukai selama ini</h5></td>
                                <td width="9">:</td> 
                            <td width="170"><input type="text" name="hobi" value="<?php echo $lihat1['hobi']?>"</td>                
                            </tr>
            
                            <tr>
                                <td><h5 >4. Setelah lulus Sekolah ingin Kuliah / Bekerja ?</h5></td>
                                <td width="9">:</td> 
                            <td width="70"><input type="text" name="setelah_lulus" value="<?php echo $lihat1['setelah_lulus']?>"
                                </td>
                                
                            </tr>
                     
                     <tr>
                                <td><br></td>                            
                            </tr>
            
							<tr><td>					
                            <button class="btn btn-success" type="submit" name="submit">Update</button></td>
                                <td></td>
                                <td></td>
                                <td></td></tr>                                                
							</table>
						</fieldset>
					</form>
				</div>
			</div>
			</div>
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third" align="center">
        <address>
        <br>
          
        <i class="fa fa-envelope-o pright-10"></i>Pro Intermedia Yogyakarta <br>
         <i class="fa fa-envelope-o pright-10"></i> Tempat Prakerin Yogyakarta<br>
          <i class="fa fa-envelope-o pright-10"></i>TERIMA KASIH</address>
    </div>
      
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script><span class="col-md-6"></span>
		<TR>
		  <script>
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			});
    </script>
</body>
</html>