  <h3>Form Input Data Mahasiswa</h3>
  <hr>
  <form method="post" action="">
  	<table>
  		<tr>
  			<td>NPM</td>
  			<td><input type="text" name="txtNpm"></td>
  		</tr>
  		<tr>
  			<td>Nama Mahasiswa</td>
  			<td><input type="text" name="txtNama" size="40"></td>
  		</tr>
  		<tr>
  			<td>Jenis Kelamin</td>
  			<td>
  				<select name="txtKelamin">
  					<option value="">- Pilih -</option>
  					<option value="L">L</option>
  					<option value="P">P</option>
  				</select>
  			</td>
  		</tr>
  		<tr>
  			<td>Alamat</td>
  			<td><input type="text" name="txtAlamat" size="60"></td>
  		</tr>
  		<tr>
  			<td></td>
  			<td><input type="submit" value="simpan"></td>
  		</tr>
  	</table>
  	</form>

  	<?php 
  	include "koneksi.php";
  	if ($_SERVER['REQUEST_METHOD']=='POST'){
  			$simpan = mysqli_query($konek, "INSERT INTO mahasiswa (npm,nama,jk,alamat)
  				values('$_POST[txtNpm]','$_POST[txtNama]','$_POST[txtKelamin]','$_POST[txtAlamat]')");

  			if($simpan){
  				header('location:data_mhs.php');
  			}
  			else{
  				echo "Gagal menyimpan data...";
  			}
  	}
  	?>
