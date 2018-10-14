<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="si01"> D3SI01<br/>
			    <input type="radio" name="kelas" value="si02"> D3SI02<br/>
			    <input type="radio" name="kelas" value="ab01"> S1AB01<br/>
			    <input type="radio" name="kelas" value="ab01"> S1AB01<br/>
			    <input type="radio" name="kelas" value="ik"> S1IK01<br/>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="pr"> Perempuan </td>
			<td><input type="radio" name="jeniskelamin" value="lk"> Laki-Laki </td>
		</tr>
		<tr>
			<td> Hobi </td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="dc"> Dancing </td>
			<td><input type="checkbox" name="hobi" value="ck"> Cooking </td>
			<td><input type="checkbox" name="hobi" value="si"> Singing </td>
			<td><input type="checkbox" name="hobi" value="rd"> Reading </td>
			<td><input type="checkbox" name="hobi" value="lm"> Listening Music </td>
		</tr>
		<tr>
			<td>Fakultas </td>
			<td>:</td>
			<td><select name="fakultas" required>
				<option value="fit"> Fakultas Ilmu Terapan</option>
				<option value="fik"> Fakultas Industri Kreatif</option>
				<option value="fkb"> Fakultas Komunikasi dan Bisnis</option>
				<option value="feb"> Fakultas Ekonomi Bisnis</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" name="alamat"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="DAFTAR"></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		include 'prosesregris.php';
	}

?>