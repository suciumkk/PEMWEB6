<?php
$servername = "Localhost";
$username 	= "root";
$password	= "";
$dbname		= "mydb";
// create database
$conn = mysqli_connect($servername, $username, $password, $dbname) ;
// check connection
if (!$conn) {
	// koneksi gagal
	die("connection failed: " . mysqli_connect_error());
} // menambahkan liga dan tujuan pada mysql
$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Spa','Spanyol','3')";
// check koneksi pada query mysql
	if (mysqli_query($conn, $sql)) {
		// menampilkan teks menambahkan record telah berhasil
		echo "New record created succsesfully";
} else {
	// menampilkan teks eror ketika memanggil koneksi
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
// mysql ditutup
mysqli_close($conn);
?>
