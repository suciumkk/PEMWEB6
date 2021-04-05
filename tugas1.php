<html>
<head>
	<title>Buku Tamu</title>
	<style type="text/css">
		h1 {font-family: Times New Roman; text-align: center; background-color: #FFE4C4;}
		body {background-color: #FFE4C4; background-repeat: no-repeat; background-size: cover;}
	</style>
</head>
<body>
	<h1>BUKU TAMU</h1>
<?php
// menambahkan tugas2.php
include 'tugas2.php';
// menambahkan tugas 3.php
include 'tugas3.php';
// menambahkan nama,email,isi
$sql = "SELECT nama, email, isi FROM bulan_awan";
$result = mysqli_query($conn, $sql);
$no = 1;
if (mysqli_num_rows($result)>0) {
	// mengurutkan isi database
	while ($row = mysqli_fetch_assoc($result)) {
		echo $no++.". Nama : ".$row["nama"]." || Email : ".$row["email"]." || Isi : ".$row["isi"]."<br>";
	}
} else {
	// menampilkan 0 result
	echo "0 result";
}
// koneksi ditutup
mysqli_close($conn);
?>
</body>
</html>