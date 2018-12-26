<?php
include "Connections/koneksi.php";

$kode = $_GET['nisn'];
$data1 = mysql_query("SELECT * FROM data_siswa_pkl WHERE nisn = '$kode'");
$lihat1 = mysql_fetch_array($data1);
?>
<html lang="en">
		<h2><center>Ubah Password Akun</h2></center>

<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-6 col-lg-10 col-lg-offset-3 main">			
		<div class="row">
                    <form action="update_password.php" method="POST">
                        <input type="hidden" name="nisn" value="<?php echo $lihat1['nisn']?>"/>
				    <fieldset>
                                       
				<table width="75%" border="0" align="center">                
                            <tr>
						    <td width="80">Username</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="kode"  value="<?php echo $lihat1['nisn']?>" disabled="disabled"/ ></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Password</td><td width="9">:</td> 
                            <td width="350"><input type="password" name="password" value="<?php echo $lihat1['password']?>"</td>
                            <td><br><br></td>
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