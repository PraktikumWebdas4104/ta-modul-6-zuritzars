<?php
$koneksi = new mysqli("localhost", "root", "", "mahasiswa");
	if (isset($_POST['submit'])) {
		$koneksi = new mysqli("localhost", "root", "", "mahasiswa");
		if ($koneksi) {
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$password = $_POST['password'];
			$kelas =$_POST['kelas'];
			$jeniskelamin = $_POST['jeniskelamin'];
			$hobi = $_POST['hobi'];
			$fakultas = $_POST['fakultas'];
			$alamat = $_POST['alamat'];
			$row =mysqli_fetch_array(mysqli_query($koneksi,"SELECT*FROM daftar WHERE nim =$nim"));

				if(strlen($nim)==10 && is_numeric($nim)==TRUE){
					if((strlen($nama)<=25)==TRUE){  
						$sql = $koneksi->query("
						INSERT INTO `daftar` (`nim`, `nama`,`password`,`kelas`,`jeniskelamin`,`hobi`,`fakultas`,`alamat`)
						VALUES ('$nim', '$nama','$password','$kelas','$jeniskelamin','$hobi','$fakultas','$alamat')
										   ");
						echo "Pendaftaran Berhasil<br>";
						echo "NIM :".$row['nim'];
						echo "nama :".$row['nama'];
						echo "kelas :".$row['kelas'];
						echo "jeniskelamin :".$row['jeniskelamin'];
						echo "hobi :".$row['hobi'];
						echo "Fakultas :".$row['fakultas'];
						echo "Alamat :".$row['alamat'];
						echo "Silahkan <a href ='log.php'> Login </a>";
						
						}else{
							echo "NIM sudah digunakan mahasiswa lain!";
							}
					}else{
						echo "Nama yang dimasukkan maksimal 25 karakter! Dan hanya huruf saja!";
					}
		}else{
			echo "NIM harus 10 karakter dan hanya angka!";
			}
	}else{
		echo "Pendaftaran GAGAL!";
		}
 ?>