<?php
$sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES ('Suci','Sucie.alimaa@gmail.com','Bulan Awan')";

if (mysqli_query($conn, $sql)) {
	echo "<br>";
} else {
	echo "Error : ". $sql . "<br>" . mysqli_error($conn);
}
?>