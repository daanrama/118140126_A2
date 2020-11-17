<!DOCTYPE html>
<html>
<head>
	<title>Tugas Faktorial</title>
</head>
<body>
<h1> Tugas 1 - Faktorial </h1>
<?php
function faktorial($n){
	if($n > 2) {
		return $n * faktorial($n-1);
	} else {
		return $n;
	}
}
?>
<form method="POST" action="">
	Masukkan Angka : <input type="number" name="angka">
	<input type="submit" name="submit">
</form>

<?php
if (isset($_POST["angka"]))
{
$angka = $_POST["angka"];
$hasil = faktorial($angka);
echo "Faktorial dari $angka adalah ";
echo $hasil;
}
?>
</body>
</html>