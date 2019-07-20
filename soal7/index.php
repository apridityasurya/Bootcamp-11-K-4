<?php 
// untuk memanggil dari file lain bisa memakai include atau require
require 'functions.php';
$bc = query("SELECT nama.name, work.name, kategori.salary FROM nama INNER JOIN work ON nama.id = work.id INNER JOIN kategori.salary ON  nama.id = kategori.id");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Admin</title>
 </head>
 <body>

 <h1>Daftar Pekerja</h1>

 <br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Pekerja</th>
		<th>Gaji</th>
		<th>Aksi</th>
	</tr>

	<?php $i = 1; ?>

<?php foreach ($bc as $row ) : ?>

	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["work"]; ?></td>
		<td><?= $row["kategori"]; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');">Hapus</a> | <a href="tambah.php?id=<?= $row["id"]; ?>">Tambah</a>
		</td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>

</table>

 </body>
 </html>