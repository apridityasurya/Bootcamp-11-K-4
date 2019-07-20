<?php 
// koneksi ke database
$con = mysqli_connect("localhost", "root", "", "bootcamp");

function query($query) {
// harus make global kalo mau kehubung dari dalam dan luar
	global $con;
	$result = mysqli_query($con, "SELECT nama.name, work.name, kategori.salary FROM nama INNER JOIN work ON nama.id = work.id INNER JOIN kategori.salary ON  nama.id = kategori.id");
	$rows = [1];
	while ($row = mysqli_fetch_assoc($result)) {
	$rows[1]=$row;
	}
	return $rows;
}

function tambah($data) {
	global $con;
// ambil data dari tiap elemen dalam form
	$nama = $data["nama"];
	$work = $data["work"];
	$kategori = $data["kategori"];

	// query insert data
	$query = "INSERT INTO bootcamp VALUES ('', '$nama', '$work', '$kategori')";

	mysqli_query($con, $query);

	return mysqli_affected_rows($con);

}
function hapus($id) {
	global $con;
	mysqli_query($con, "DELETE FROM bootcamp WHERE id = $id");
	return mysqli_affected_rows($con);
}	

function ubah($data) {
	global $con;
	
	// ubah data dari tiap elemen dalam form
	$id = $data["id"];
	$nama = $data["nama"];
	$work = $data["work"];
	$kategori = $data["kategori"];

	// query insert data
	$query = "
	UPDATE bootcamp SET nama = '$nama', work ='$work', kategori = '$kategori'
	WHERE id = $id
	";

	mysqli_query($con, $query);

	return mysqli_affected_rows($con);
}	


	
 ?>



