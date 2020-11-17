<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
</head>
<body>
	<?php
		function bet($nama, $warna="#ff0000"){
			$pjgnama = strlen($nama);
			if($pjgnama >20){
				$harga = 700;
			} elseif ($pjgnama >10) {
				$harga = 500;
			} elseif ($pjgnama >0) {
				$harga = 300;
			} else {
				$harga = 0;
			}
			$totalharga = $pjgnama * $harga;
			echo '<font color="'.$warna.'">Nama : '.$nama.'</font>';
			echo "<br>";
			echo '<font color="'.$warna.'">Total Harga : Rp.'.$totalharga.'</font>';
		}
	?>
<h1>Tugas 2 - Menghitung Harga Bet</h1>
<form method="POST" action="">
	Masukkan Nama : <input type="text" name="nama"><br>
	Masukkan Kode Warna <input type="text" name="warna" placeholder="#ff0000"><br>
	<input type="submit" name="submit">
</form><br>
<?php
	if(isset($_POST['nama']) AND isset($_POST['warna']))
	{
		$nama  = $_POST['nama'];
		$warna = $_POST['warna'];
		if(empty($warna)){
			bet($nama);
		} else{
			bet($nama,$warna);
		}
	}
?>
</body>
</html>