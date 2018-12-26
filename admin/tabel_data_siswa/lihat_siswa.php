<?php
include "config/koneksi.php";

$kode = $_GET['nisn'];
$data1 = mysql_query("SELECT * FROM data_siswa_pkl WHERE nisn = '$kode'");
$lihat1 = mysql_fetch_array($data1);
?>
<html lang="en">
<h2><center>Biodata Siswa PKL</h2></center>

<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
		<!--/.row-->
                 <fieldset>
                                       
						<table width="75%" border="0" align="center">                            
						<tr><td width="80"><h5 align="left">*Data Pribadi</h5> </td></tr>
                            <tr>
						    <td width="80">NISN</td> <td width="9">:</td> 
                            <td width="350"><input type="text" disabled="disables"  value="<?php echo $lihat1['nisn']?>"/ ></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Nama Lengkap</td><td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['nama_siswa']?></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Tempat Lahir</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['tmp_lahir']?></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Tanggal Lahir</td> <td>:</td> 
                            <td width="350"><?php echo $lihat1['tgl_lahir']?></td>  
                            <td><br><br></td>
                        </tr>
                            
						<tr>
                            <td width="80">Jenis Kelamin</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['j_kelamin']?>
                            </td>
                            <td><br><br></td>
                            </tr>
                                        
						<tr>
						    <td width="80">No.Hp</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['no_hp']?></td>
                            <td><br><br></td>
                        </tr>
                                        
						<tr>
							<td width="80">Agama</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['agama']?></td>
                            <td><br><br></td>
                        </tr>
                                        
				        <tr>
							<td width="80">Alamat</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['alamat']?></td>
                            <td><br><br></td>
                        </tr>
                                        
                        <tr>
						    <td width="80">Nama Sekolah</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['nama_sekolah']?></td>
                            <td><br><br></td>
                        </tr>
                        
                         <tr>
							<td width="80">Alamat Sekolah</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['alamat_sekolah']?></td>
                            <td><br><br></td>
                        </tr>               
														                            
                        <tr>
						    <td width="80">Program Keahlian Peserta</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['program_keahlian']?></td>
                            <td><br><br></td>
                        </tr>
                                        
                        <tr>
						    <td width="80">Email</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['email']?></td>
                            <td><br><br></td>
                        </tr> 
                                        
                        <tr>
						    <td width="80">Social media</td> <td width="9">:</td> 
                            <td width="350"><?php echo $lihat1['social_media']?></td>
                            <td><br><br></td>
                        </tr>                 
                                        
                        <tr>
                            <td width="80">Awal PKL Bulan</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['awal_magang']?>
                                </td>
                        </tr>
                        <tr>
                            <td width="80">Sampai Bulan</td> <td width="9">:</td> 
                                <td width="70"><?php echo $lihat1['selesai_bulan']?>
                            </td>
                            <td><br><br></td>
                        </tr>      
                            
                            <tr>
                                <td><h5 align="left">*Data Pembimbing Prakerin</h5></td>
                            </tr>        
                                        
                            <tr>
                            <td width="80">Nama</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['nama_pembimbing_sekolah']?>
                            </td>
                            </tr>
                            <tr>
                            <td width="80">No.HP/Telp.</td> <td width="9">:</td> 
                            
                                <td width="70"><?php echo $lihat1['no_hp_pembimbing']?>
                            </td>
                            <td><br><br></td>
                            </tr>  
                
                
                            <tr>
                                <td><h5 align="left">*Data Orang Tua Peserta</h5></td>
                            </tr>        
                                        
                            <tr>
                            <td width="80">Nama Ayah</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['nama_ayah']?>
                            </td>
                            </tr>
                            
                            <td width="80">Pekerjaan</td> <td width="9">:</td> 
                            
                                <td width="70"><?php echo $lihat1['pekerjaan_ayah']?>
                            </td>
                            <td><br><br></td>
                            </tr>
            
                            <tr>
                            <td width="80">Nama Ibu</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['nama_ibu']?></td>
                            </tr>
                        <tr>
                            <td width="80">Pekerjaan</td> <td width="9">:</td>                         
                                <td width="70"><?php echo $lihat1['pekerjaan_ibu']?>
                            </td>
                            <td><br><br></td>
                            </tr>
                        
                        <tr>
                            <td width="80">No. HP/Telp Orang Tua</td> <td width="9">:</td>                         
                                <td width="70"><?php echo $lihat1['no_hp_ortu']?>
                            </td>
                            <td><br><br></td>
                            </tr>
                                    
                            <tr>
                                <td><h5 align="left">*Lain-lain</h5></td>
                            </tr>
                            <tr>
                            <td width="80">Sebutkan Sakit yang pernah di alami</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['sakit_dialami']?>
                            </td>
                            <td><br><br></td>
                            </tr>
                        
                            <tr>
                            <td width="80">Sudah memiliki Laptop ?</td> <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['memiliki_laptop']?>
                                </td>
                                <td><br><br></td>
                                </tr>
            
                            <tr>
                                <td><h5 align="left">*Tambahan</h5></td>
                            </tr>
            
                            <tr>
                                <td width="350"><h5>1. Materi dan praktek selama di sekolah</h5></td>
                                <td width="9">:</td> 
                            <td width="170"><?php echo $lihat1['materi_disekolah']?></td>
                            </tr>
            
                            <tr>
                                <td><h5 >2. Kemampuan/skill yang dikuasai saat ini</h5></td>
                                <td width="9">:</td> 
                            <td width="170"><?php echo $lihat1['kemampuan']?></td>
                            </tr>
            
                            <tr>
                                <td><h5 >3. Hobi yang anda sukai selama ini</h5></td>
                                <td width="9">:</td> 
                            <td width="170"><?php echo $lihat1['hobi']?></td>
                            </tr>
            
                            <tr>
                                <td><h5 >4. Setelah lulus Sekolah ingin Kuliah / Bekerja ?</h5></td>
                                <td width="9">:</td> 
                            <td width="70"><?php echo $lihat1['setelah_lulus']?>
                                </td>
                                
                            </tr>
                     
                     <tr>
                                <td><br></td>                            
                            </tr>
            
							<tr>                                
                                <td><a href="dashboard-admin.php?page=cetak_data_siswa">					
                        <button class="btn btn-primary" type="submit" name="submit">Cetak</button></a></td>
                                <td><a href="dashboard-admin.php?page=data_siswa">					
                        <button class="btn btn-danger" type="submit" name="submit">Kembali</button></a></td></tr>                                           
							</table>
						</fieldset>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
