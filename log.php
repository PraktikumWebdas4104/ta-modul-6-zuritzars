<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login" value="Login"></td>
			<td><a href="regritrasi.php">Registrasi</a></td>
		</tr>
	</table>
</form>

<?php
	if (isset($_POST['login'])) {
		session_start();

		$koneksi = new mysqli("localhost", "root", "", "mahasiswa");

		$nim = $_POST['nim'];
		$password = md5($_POST['password']);

		$sql = "SELECT nim, password FROM daftar WHERE nim='$nim'";
		$qry = mysqli_query($koneksi,$sql);
		$row = mysqli_fetch_row($qry);

		if ($nim == $row[0]) {
			if ($password == $row[1]) {
				$_SESSION["berhasil_login"]=1;
        		$_SESSION["nim"]=$row[0];
        		$_SESSION["password"]=$row[1];
        		header("location:index.php");
			}
			else{
				echo "Password anda salah";
			}
		}
		else{
			echo "Nim anda salah";
		}
	}
?>