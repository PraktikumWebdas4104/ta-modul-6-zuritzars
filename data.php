<?php
session_start();
	$server="localhost";
	$username="root"
	$password="";
	$koneksi="mahasiswa";

	$koneksi = new mysqli("localhost", "root", "", "mahasiswa");
	$nim=$_SESSION['nim'];
	echo $row['nim'];
	echo $row['nama'];
	echo $row['kelas'];
	echo $row['jeniskelamin'];
	echo $row['hobi'];
	echo $row['fakultas'];
	echo $row['alamat'];	
?>