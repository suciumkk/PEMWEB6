<?php
$host = "locahost";// nama localhost
$username = "root"; // username
$password = ""; // passw
$database = "db_bukutamu"; // nama bukutamu
$conn = mysqli_connect($host, $username, $password, $database); // membuka koneks server di sql
// check koneksi
if (mysqli_connect()) { // jika mysql connect eror maka tampilan teks field jg eror
	echo "failed to connect to mysql". mysqli_connect_error();
};
// menangkap data yg dikirim di form
$id_bukutamu = $_POST['id_bukutamu'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];
// input data ke db
mysqli_query($conn, "insert into tb_bukutamu values('$id_bukutamu,'nama','email','isi')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>