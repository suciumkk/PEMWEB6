<?php
$servername = "Localhost"; //host database
$username 	= "root"; // username database
$password	= ""; // password database
// create connection
$conn = mysqli_connect($servername, $username, $password);
// check connection
if (!$conn) {
	die("connection failed: ". mysqli_connect_error());
}
// create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
	// menampilkan teks bahwa telah berhasil membuat database
	echo "Database create succesfully";
} else {
	// menampilkan teks error ketika membuat database 
	echo "Error creating database: " . mysqli_error($conn);
}
// mysql mengakhiri koneksi
mysqli_close($conn);
?>