<!DOCTYPE html>
<html>
<head>
	<title>Tugas 3</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
<b>===================================</b>
<h2>Tambah Data</h2>
<form method="POST" action="prosestambah.php">
	NRP : <input type="number" name="nrp"><br>
	Nama : <input type="text" name="nama"><br>
	Alamat : <input type="text" name="alamat"><br>
	Jurusan : <select name="jurusan">
				<option value="IF">Teknik Informatika</option>
				<option value="EL">Teknik Elektro</option>
				<option value="ME">Teknik Mesin</option>
			</select><br>
	<input type="submit" name="submit" value="Tambah">
</form><br>
<b>===================================</b>
<h2>Cari Data</h2>
<form method="POST" action="prosescari.php">
	Nama : <input type="text" name="nama">
	<input type="submit" name="submit" value="Cari Data">
</form><br>
<b>===================================</b>
<h2>Hapus Data</h2>
<form method="POST" action="proseshapus.php">
	NRP : <input type="text" name="nrp">
	<input type="submit" name="submit" value="Hapus Data">
</form><br>
<b>===================================</b>
</body>
</html>