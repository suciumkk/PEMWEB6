<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">KEMBALI</a> <!--memasukkan link-->
	<br>
	<h3>TAMBAH DATA BUKUTAMU</h3>
	<form method="post" action="input_aksi.php"> <!-- membuat form method post-->
		<table> <!--membuat form tabel-->
			<tr> <!-- membuat form tr-->
				<td>id_bukutamu</td> <!--membuat cell pd baris teks-->
				<td><input type="text" name="id_bukutamu"></td> <!-- membuat cell input text-->
			</tr>
				<tr>
					<td>Nama</td> <!-- membuat cell pd teks nama-->
				<td><input type="text" name="nama"</td> 
			</tr>
			<tr>
				<td>email</td> <!--membuat cell pd teks email-->
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="isi" value="simpan"></td> <!--membuat cell isi-->
</tr>
		</table>
	</form>
</body>
</html>