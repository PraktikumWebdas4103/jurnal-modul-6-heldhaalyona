
<form action="login.php" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>: <input type="text" name="nama" maxlength="35"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>: <input type="number" name="nim" maxlength="10"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>: <input type="radio" name="kelas" value="MI41-01"> MI41-01
				<input type="radio" name="kelas" value="MI41-02"> MI41-02
				<input type="radio" name="kelas" value="MI41-03"> MI41-03
				<input type="radio" name="kelas" value="MI41-04"> MI41-04
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: 	<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>: <input type="checkbox" name="hobi" value="Basket">Basket
				<input type="checkbox" name="hobi" value="Menari">Menari
				<input type="checkbox" name="hobi" value="Menggambar">Menggambar
				<input type="checkbox" name="hobi" value="Menyanyi">Menyanyi
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><select name="fakultas">
				<option value="Ilmu Terapan">Ilmu Terapan</option>
				<option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
				<option value="Komunikasi dan Bisnis">Komunikasi dan Bisnis</option>
				<option value="Teknik Elektro">Teknik Elektro</option>
				<option value="Informatika">Informatika</option>
				<option value="Rekayasa Industri">Rekayasa Industri</option>
				<option value="Industri Kreatif">Industri Kreatif</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td><input type="submit" name="input" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php
	$connect = mysqli_connect("localhost", "root", "", "datamahasiswa");

 	if(isset($_POST['input'])){
	$nim 		= $_POST['nim'];
	$nama 		= $_POST['nama'];
	$kelas		= $_POST['kelas'];
	$jk			= $_POST['jk'];
	$hobi		= $_POST['hobi'];
	$fakultas	= $_POST['fakultas'];
	$alamat		= $_POST['alamat'];

	$sql = "INSERT INTO user (nim,nama,kelas,jk,hobi,fakultas,alamat) values ('$nim','$nama','$kelas','$jk','$hobi','$fakultas','$alamat')";
	if (mysqli_query($connect, $sql)){
		echo "Database sudah masuk";
	}else{
		echo "ERROR";
	}
	}
	
?>