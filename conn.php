<html>
<head>
	<!-- menggunakan judul database MySQL -->
	<title>KONEKSI DATABASE MySQL</title>
</head>
<body>
	<!-- melakukan demo koneksi pada database MySQL -->
	<h1>DEMO KONEKSI DATABASE MySQL</h1>
	<!-- menggunakan text php-->
	<?php
	// memanggil koneksi database mysqli di localhost 
	$con = mysqli_connect("localhost","root","","mydb");
		// check connection
	// jika mysql tidak memanaggil koneksi
	if (mysqli_connect_errno()) {
	// maka akan muncul teks gagal menghubungkan koneksi pada MySQL 
		echo "Failed to connect to MySQL : " .mysqli_connect_error();
		// menunjukkan perintah keluar
		exit();
	}
	?>
</body>
</html>