<?php
$koneksi = new mysqli("localhost", "root", "", "mahasiswa");
if (isset($_POST['login'])) {
    echo "<table>
    <tr>
    <td> NIM </td>
    <td> : ".$row['nim']."</td>
    </tr>";
    echo "  <tr>
    <td> Nama </td>
    td> : ".$row['nama']."</td>
    </tr>";
    echo "  <tr>
    <td> Password </td>
    <td> : ".$row['password']."</td>
    </tr>";
    echo "  <tr>
    <td> kelas </td>
    <td> : ".$row['kelas']."</td>
    </tr>";
    echo "  <tr>
    <td> jenis kelamin </td
    <td> : ".$row['jeniskelamin']."</td>
    </tr>";
    echo "  <tr>
    <td> hobi </td>
    <td> : ".$row['hobi']."</td>
    </tr>";
    echo "  <tr>
    <td> Fakultas </td>
    <td> : ".$row['fakultas']."</td>
    </tr>";
    echo "  <tr>
    <td> Alamat </td>
    <td> : ".$row['alamat']."</td>
    </tr>";
    echo "  <tr>
    <td> <a href ='edit.php'> EDIT </a> </td>
    <td> <a href ='hapus.php'> HAPUS </a> </td>
    </tr>";
    echo "  <tr>
    <td> <a href ='logout.php'> Logout </a> </td>
    </tr>
    </table";

}else{
    echo "<a href='log.php'>login kembali!</a>";
}

                        

?>