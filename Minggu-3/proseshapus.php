<!DOCTYPE html>
<html>
<head>
	<title>Hapus Data</title>
</head>
<body>
<?php
if (isset($_POST["nrp"]))
{
	include "koneksi.php";
	$nrp = $_POST["nrp"];
	$carinrp = mysqli_query($koneksi, "select * from mahasiswa where nrp = '$nrp'");
	$data = mysqli_fetch_array($carinrp) or die ("Data Tidak Ditemukan!");
	$idjurusan = $data['ID_Jur'];
	$namajurusan = "select nama from jurusan where ID_Jur = '$idjurusan'";
	$carijurusan = mysqli_query($koneksi, $namajurusan);
	$jurusan = mysqli_fetch_array($carijurusan);
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
	echo "<br>";
	$hapusdata = mysqli_query($koneksi, "delete from mahasiswa where nrp = '$nrp'");
	echo "Data Berhasil Dihapus!";
} else {
echo "Silahkan Masukkan Data Terlebih dahulu";
	}
	?>
</body>
</html>