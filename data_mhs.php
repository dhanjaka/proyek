 <h3>Data Mahasiswa</h3>
 <hr>
 <a href="input_mhs.php">Tambah Data</a>
 <table border="1" cellspacing="0" width="100%">
 	<tr>
 		<th>no</th>
 		<th>NPM</th>
 		<th>Nama Mahasiswa</th>
 		<th>L/P</th>
 		<th>Alamat</th>
 		<th>Aksi</th>
 	</tr>

 	<?php 
 	include "koneksi.php";
 	$no=1;
 	$sqlMhs = mysqli_query($konek, "SELECT * FROM mahasiswa ORDER BY npm ASC");

 	while($d = mysqli_fetch_array($sqlMhs)){
 		echo "<tr>
 			<td><center>$no</center></td>
 			<td>$d[npm]</td>
 			<td>$d[nama]</td>
 			<td><center>$d[jk]</center></td>
 			<td>$d[alamat]</td>
 			<td><center>
 				<a href='edit_mhs.php?npm=$d[npm]'>Edit</a> | <a href='hapus_mhs.php?npm=$d[npm]'>Hapus</a>
 			</center></td>
 		</tr>";
 		$no++;
 	}
 	?>


 </table>