<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];


// query data  berdasarkan id
$bc = query("SELECT * FROM bootcamp WHERE id = $id");


// cek apakah tombol submit sudah ditekan atau belom
if(isset($_POST ["submit"]) ) {

	// cek apakah data berhasil diubah atau tidak
	if ( ubah($_POST) > 0 ) {
		echo "

		<script>
		alert('DATA BERHASIL DIUBAH!');
		document.location.href = 'index.php'; 
		</script>";
	} else {
		echo "<script>
		alert('DATA TIDAK BERHASIL DIUBAH!');
		document.location.href = 'index.php'; 
		</script>";
	}

	// query insert data
	$query = "INSERT INTO bootcamp VALUES ('', '$nama', '$work', '$kategori')";

	mysqli_query($con, $query);

	// cek apakah data berhasil ditambahkan atau tidak
	if (mysqli_affected_rows($con) > 0) {
		echo "BERHASIL!!";
	} else {
		echo "GAGAL!";
		echo "<br>";
		echo mysql_error($con); 
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ubah Data Pekerja</title>
 </head>
 <body>

 <h1>Ubah Data Pekerja</h1>

 <form action="" method="post">
 	<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
 	<form action="" method="post">

 			<label for="nama">Nama:</label>
 			<input type="text" name="nama" id="nama" required>
 		<br><br>
 			<label for="work">Pilih Pekerjaan:</label>
			<select name="work" required>
			<option selected disabled>--Pilih Pekerjaan--</option>
			<option value="1">Frontend Dev</option>
			<option value="2">Backend Dev</option>
			</select>
 	
 		<br><br>

 			<label for="kategori">Pilih Gaji:</label>
			<select name="kategori" required>
			<option selected disabled>--Pilih Gaji--</option>
			<option value="1">10000000</option>
			<option value="2">12000000</option>
			</select>
 	
 		<br><br>
 		
 			<button type="submit" name="submit">Ubah Data!</button>


 </form>
 </body>
 </html>