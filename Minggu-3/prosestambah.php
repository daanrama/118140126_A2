<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data</title>
</head>
<body>
	<?php
if (isset($_POST["nrp"]) AND isset($_POST["nama"])
	AND isset($_POST["alamat"]) AND isset($_POST["jurusan"]))
{
	include "koneksi.php";
	$nrp = $_POST["nrp"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$idjurusan = $_POST["jurusan"];
	$namajurusan = "select nama from jurusan where ID_Jur = '$idjurusan'";
	$carijurusan = mysqli_query($koneksi, $namajurusan);
	$jurusan = mysqli_fetch_array($carijurusan);
	echo "NRP : $nrp <br>";
	echo "Nama : $nama <br>";
	echo "Alamat : $alamat <br>";
	echo "Jurusan : "; 
	echo $jurusan['nama'];
	echo "<br>";
	$sql="insert into mahasiswa (nrp,nama,alamat,ID_Jur) values ('$nrp','$nama','$alamat','$idjurusan')";
	$hasil=mysqli_query($koneksi, $sql) or die('Gagal Menyimpan Data');
	echo "Berhasil di Simpan!";
} else {
echo "Silahkan Masukkan Data Terlebih dahulu";
	}
	?>
</body>
</html>