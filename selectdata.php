<html>
<head>
	<title>Select Data</title>
</head>
<body>
	<?php // menggunakan teks php
// membuat servename,usernmae, passw, dbname
$servername = "Localhost";
$username 	= "root";
$password	= "";
$dbname		= "mydb";
// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
	// koneksi gagal
	die ("connection failed: " . mysqli_connect_error());
}
// menambahkan kode, negara champion dari liga
	$sql = "SELECT kode, negara, champion FROM Liga";
// menggunakan query sql untuk memanggil koneksi
	$result = mysqli_query($conn, $sql);
// jika result lebih dari 0
		if (mysqli_num_rows($result)>0) {
			// output data of each row
			while ($row = mysqli_fetch_assoc($result)) {
				// akan menampilklan teks kode,negara,champiom
				echo "kode: ".$row["kode"]." negara :" . $row["negara"]." ".$row['champion']. "<br>";
				
	}
} else {
	// jika result 0
	echo "0 result";
}
// mysql ditutup / selesai
mysqli_close($conn);
?>
</body>
</html>