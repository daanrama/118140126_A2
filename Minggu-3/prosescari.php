<!DOCTYPE html>
<html>
<head>
	<title>Cari Data</title>
</head>
<body>
	<?php
if (isset($_POST["nama"]))
{
	include "koneksi.php";
	$nama = $_POST["nama"];
	$carinama = mysqli_query($koneksi, "select * from mahasiswa where nama = '$nama'");
	$data = mysqli_fetch_array($carinama) or die ("Data Tidak Ditemukan!");
	$idjurusan = $data['ID_Jur'];
	$namajurusan = "select nama from jurusan where ID_Jur = '$idjurusan'";
	$carijurusan = mysqli_query($koneksi, $namajurusan);
	$jurusan = mysqli_fetch_array($carijurusan);
	echo "Data ditemukan!";
	echo "<br>";
	echo "NRP : ";
	echo $data['nrp'];
	echo "<br>";
	echo "Nama : ";
	echo $data['nama'];
	echo "<br>";
	echo "Alamat : ";
	echo $data['alamat'];
	echo "<br>";
	echo "Jurusan : "; 
	echo $jurusan['nama'];
} else {
echo "Silahkan Masukkan Data Terlebih dahulu";
	}
	?>
</body>
</html>